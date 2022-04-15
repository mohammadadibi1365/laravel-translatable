<?php

namespace Adibi\Translatable\Exception;

class LocalesNotDefinedException extends \Exception
{
    public static function make(): self
    {
        return new static('Please make sure you have run `php artisan vendor:publish --provider="Adibi\Translatable\TranslatableServiceProvider"` and that the locales configuration is defined.');
    }
}
