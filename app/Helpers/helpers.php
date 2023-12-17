<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

if( ! function_exists('authenticatedUser')) {
    /**
     * @throws UnauthorizedHttpException
     */
    function authenticatedUser(string $exceptionMsg = "No unauthenticated access is allowed"): User
    {
        $user = app()->make(Authenticatable::class);

        if( ! $user instanceof User) {
            throw new UnauthorizedHttpException($exceptionMsg);
        }

        return $user;
    }
}
