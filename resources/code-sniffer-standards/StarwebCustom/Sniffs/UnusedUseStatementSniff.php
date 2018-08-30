<?php

namespace StarwebCustom\Sniffs;

use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Util\Tokens;

/**
 * Generic_Sniffs_Classes_UnusedUseStatementSniff
 * Checks for "use" statements that are not needed in a file.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Klaus Purer <klaus.purer@gmail.com>
 * @author    Alex Pott <alexpott@157725.no-reply.drupal.org>
 * @copyright 2015-2016 Klaus Purer
 * @copyright 2015-2016 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class UnusedUseStatementSniff implements Sniff
{
    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return [T_USE];
    }


    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param \PHP_CodeSniffer_File $phpcsFile The file being scanned.
     * @param int                  $stackPtr  The position of the current token in
     *                                        the stack passed in $tokens.
     * @return void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        // Only check use statements in the global scope.
        if (empty($tokens[$stackPtr]['conditions']) === false) {
            return;
        }

        // Seek to the end of the statement and get the string before the semi colon.
        $semiColon = $phpcsFile->findEndOfStatement($stackPtr);
        if ($tokens[$semiColon]['code'] !== T_SEMICOLON) {
            return;
        }

        $classPtr = $phpcsFile->findPrevious(
            Tokens::$emptyTokens,
            ($semiColon - 1),
            null,
            true
        );

        if (!in_array($tokens[$classPtr]['code'], [T_STRING, T_RETURN_TYPE], true)) {
            return;
        }

        // Search where the class name is used. PHP treats class names case
        // insensitive, that's why we cannot search for the exact class name string
        // and need to iterate over all T_STRING tokens in the file.
        $classUsed = $phpcsFile->findNext([T_STRING, T_DOC_COMMENT_STRING, T_RETURN_TYPE], ($classPtr + 1));
        $className = $tokens[$classPtr]['content'];
        $lowerClassName = strtolower($className);


        // Check if the referenced class is in the same namespace as the current
        // file. If it is then the use statement is not necessary.
        $namespacePtr = $phpcsFile->findPrevious([T_NAMESPACE], $stackPtr);
        if ($namespacePtr !== false) {
            $nsEnd = $phpcsFile->findNext(
                [
                    T_NS_SEPARATOR,
                    T_STRING,
                    T_DOC_COMMENT_STRING,
                    T_RETURN_TYPE,
                    T_WHITESPACE,
                ],
                ($namespacePtr + 1),
                null,
                true
            );
            $namespace = trim($phpcsFile->getTokensAsString(($namespacePtr + 1), ($nsEnd - $namespacePtr - 1)));

            $useNamespacePtr = $phpcsFile->findNext([T_STRING, T_RETURN_TYPE], ($stackPtr + 1));
            $useNamespaceEnd = $phpcsFile->findNext(
                [
                    T_NS_SEPARATOR,
                    T_STRING,
                    T_RETURN_TYPE,
                ],
                ($useNamespacePtr + 1),
                null,
                true
            );
            $use_namespace = rtrim(
                $phpcsFile->getTokensAsString($useNamespacePtr, ($useNamespaceEnd - $useNamespacePtr - 1)),
                '\\'
            );

            if (strcasecmp($namespace, $use_namespace) === 0) {
                // This breaks things - I don't know why it exists in the Drupal version
                // $classUsed = false;
            }
        }//end if

        $emptyTokens = Tokens::$emptyTokens;
        unset($emptyTokens[T_DOC_COMMENT_TAG]);


        while ($classUsed !== false) {
            if ((in_array($tokens[$classUsed]['code'], [T_STRING, T_RETURN_TYPE]) && strtolower(
                $tokens[$classUsed]['content']
            ) === $lowerClassName) ||
                ($tokens[$classUsed]['code'] == T_DOC_COMMENT_STRING && preg_match(
                    '/(\s|\||^)' . preg_quote($lowerClassName) . '(\s|\||$|\[\])/i',
                    $tokens[$classUsed]['content']
                ))
            ) {
                $beforeUsage = $phpcsFile->findPrevious(
                    $emptyTokens,
                    ($classUsed - 1),
                    null,
                    true
                );


                if (in_array($tokens[$classUsed]['code'], [T_STRING, T_RETURN_TYPE])) {
                    // If a backslash is used before the class name then this is some other
                    // use statement.
                    if ($tokens[$beforeUsage]['code'] !== T_USE && $tokens[$beforeUsage]['code'] !== T_NS_SEPARATOR) {
                        return;
                    }

                    // Trait use statement within a class.
                    if ($tokens[$beforeUsage]['code'] === T_USE
                        && empty($tokens[$beforeUsage]['conditions']) === false
                    ) {
                        return;
                    }
                } else {
                    if ($tokens[$beforeUsage]['code'] === T_DOC_COMMENT_TAG &&
                        in_array($tokens[$beforeUsage]['content'], ['@var', '@param', '@return', '@throws', '@method'])
                    ) {
                        return;
                    }
                }
            }

            $classUsed = $phpcsFile->findNext([T_STRING, T_DOC_COMMENT_STRING, T_RETURN_TYPE], ($classUsed + 1));
        }//end while

        $warning = 'Unused use statement: ' . $className;
        $fix = $phpcsFile->addFixableWarning($warning, $stackPtr, 'UnusedUse');
        if ($fix === true) {
            // Remove the whole use statement line.
            $phpcsFile->fixer->beginChangeset();
            for ($i = $stackPtr; $i <= $semiColon; $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }

            // Also remove whitespace after the semicolon (new lines).
            while (isset($tokens[$i]) === true && $tokens[$i]['code'] === T_WHITESPACE) {
                $phpcsFile->fixer->replaceToken($i, '');
                if (strpos($tokens[$i]['content'], $phpcsFile->eolChar) !== false) {
                    break;
                }

                $i++;
            }

            $phpcsFile->fixer->endChangeset();
        }
    }
}
