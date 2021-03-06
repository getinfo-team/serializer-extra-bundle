<?php

declare(strict_types=1);

namespace GetInfoTeam\SerializerExtraBundle\Exception\Converter;

use GetInfoTeam\SerializerExtraBundle\Exception\RuntimeException;
use Throwable;

class ConverterNotExistsException extends RuntimeException
{
    const MESSAGE = 'Converter with name "%s" not exists.';

    public function __construct(string $converter, $code = 0, Throwable $previous = null)
    {
        parent::__construct(sprintf(static::MESSAGE, $converter), $code, $previous);
    }
}