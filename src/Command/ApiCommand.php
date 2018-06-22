<?php

namespace Starweb\Command;

use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Starweb\Api\Authentication\ApiAuthentication;
use Starweb\Api\Authentication\ClientCredentials;
use Starweb\Api\Authentication\TokenCacheInterface;
use Starweb\Api\Authentication\TokenFilesystemCache;
use Starweb\Api\Authentication\TokenInterface;
use Starweb\Exception\StarwebApiException;
use Starweb\Starweb;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Style\SymfonyStyle;

class ApiCommand extends Command
{
    /**
     * @var HttpClient
     */
    private $client;

    /**
     * @var Starweb
     */
    private $starweb;

    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var
     */
    private $credentials;

    /**
     * @var TokenCacheInterface
     */
    private $tokenCache;

    protected function configure()
    {
        $this->setName('api');
        $this->setDescription('Interact with the Starweb API from the terminal');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $this->initializeClient($io);
    }

    private function initializeClient(SymfonyStyle $io)
    {
        $io->section('Set up');
        $this->baseUri      = $this->askBaseUri($io);
        $this->credentials  = $this->askCredentials($io);
        $this->starweb      = new Starweb($this->credentials, $this->baseUri, [], null, $this->tokenCache);

        if (!$this->tokenCache->hasToken()) {
            $io->warning('Token nicht vorhanden');
        }

        $this->queryApi($io);
    }

    private function queryApi(SymfonyStyle $io)
    {
        $io->section('Querying the Starweb API');
        while (true) {
            $operations = $this->starweb->get('Shop')->getOperations();
            $question   = new ChoiceQuestion(
                'Select a filter to add (press <return> to stop adding filters)',
                $operations
            );
            $question->setValidator(
                function ($answer) {
                    return $answer;
                }
            );

            $filterName = $io->askQuestion($question);

            if (!$filterName) {
                break;
            }

            /** @var FilterInterface $selectedFilter */
            $selectedFilter = $availableFilters[array_search(
                $filterName,
                $availableFilters
            )];

        }
    }

    private function askBaseUri(SymfonyStyle $io): string
    {
        $question = new Question('Please enter the api uri;');
        $question->setValidator(function($value) {
            $file_headers = @get_headers($value);
            if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
                throw new StarwebApiException(sprintf('"%s" is not a valid api uri', $value));
            }

            return $value;
        });

        return $this->baseUri = $io->askQuestion($question);
    }

    private function askCredentials(SymfonyStyle $io): ClientCredentials
    {
        $question = new Question('Please enter your client id:');
        $clientId = $io->askQuestion($question);

        $secretQuestion = new Question('Please enter your client secret');
        $secretQuestion->setHidden(true);
        $secretQuestion->setValidator(function ($secret) use ($clientId) {

            if (!$secret) {
                throw new \RuntimeException('secret can not be empty');
            }

            $token = $this->getAccessToken(new ClientCredentials($clientId, $secret));
            return $token;
        });
        $clientSecret = $io->askQuestion($secretQuestion);

        $io->success('Authentication successfull');

        return new ClientCredentials($clientId, $clientSecret);
    }

    private function getHttpClient(): HttpClient
    {
        return $this->client = $this->client ?? HttpClientDiscovery::find();
    }

    private function getAccessToken(ClientCredentials $credentials): TokenInterface
    {
        $this->tokenCache = new TokenFilesystemCache();
        $authenticator = new ApiAuthentication(
            $this->getHttpClient(),
            $credentials,
            $this->baseUri,
            $this->tokenCache
        );

        return $authenticator->getAccessToken();
    }

}
