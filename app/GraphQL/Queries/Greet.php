<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

final class Greet
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return "Hello, {$args['name']}!";
    }
}
