<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        'login',
        
        'franchisee',
    	'franchisee/new',
        'franchisee/login',
        'franchisee/{franchisee}/update',
        'franchisee/{franchisee}/edit',
        
        'schedule',
        'schedule/new',
        'schedule/login',
        'schedule/{schedule}/update',
        'schedule/{schedule}/edit',

        'vendor/add',
        'vendor/vendor'
    ];
}
