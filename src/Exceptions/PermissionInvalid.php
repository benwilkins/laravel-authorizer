<?php


namespace Benwilkins\Authorizer\Exceptions;


class PermissionInvalid extends \Exception
{
    public static function create(...$params)
    {
        $paramString = implode(', ', $params);

        return new static("Invalid Permission ({$paramString})");
    }
}