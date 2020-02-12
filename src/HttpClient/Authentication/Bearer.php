<?php declare(strict_types=1);

namespace Starweb\HttpClient\Authentication;

use Http\Message\Authentication;
use Psr\Http\Message\RequestInterface;
use Starweb\Api\Authentication\TokenManager;

final class Bearer implements Authentication
{
    /**
     * @var TokenManager
     */
    private $tokenManager;

    /**
     * @param string $token
     */
    public function __construct(TokenManager $tokenManager)
    {
        $this->tokenManager = $tokenManager;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(RequestInterface $request)
    {
        if ($request->hasHeader('Authorization')) {
            return $request;
        }

        $token = $this->tokenManager->getToken()->__toString();
        $header = sprintf('Bearer %s', $token);

        return $request->withHeader('Authorization', $header);
    }
}
