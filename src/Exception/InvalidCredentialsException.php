<?php declare(strict_types=1);

namespace Starweb\Exception;

use Http\Client\Common\Exception\ClientErrorException;

class InvalidCredentialsException extends ClientErrorException
{
}
