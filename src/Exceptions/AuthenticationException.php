<?php

namespace RanaTuhin\HostawayPhpSdk\Exceptions;

use Exception;

class AuthenticationException extends HostawayException
{
     /**
      * Create a new AuthenticationException instance.
      *
      * @param  string|null  $message
      * @param  int  $code
      * @param  \Throwable|null  $previous
      */
     public function __construct(?string $message = 'Authentication failed: Invalid credentials or token.', int $code = 401, ?\Throwable $previous = null)
     {
          parent::__construct($message, $code, $previous);
     }

     /**
      * Static helper to throw standardized exception.
      *
      * @param  string|null  $message
      * @return static
      */
     public static function forInvalidCredentials(?string $message = null): self
     {
          return new static($message ?? 'Invalid Hostaway API credentials.');
     }

     /**
      * Static helper for expired or invalid token errors.
      *
      * @return static
      */
     public static function forInvalidToken(): self
     {
          return new static('Access token is invalid or has expired.');
     }
}
