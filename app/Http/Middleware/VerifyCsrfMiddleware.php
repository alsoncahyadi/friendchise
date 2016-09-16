<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfTokenMiddleware extends BaseVerifier
{
	public function handle($request, Closure $next) {
		if (
            $this->isReading($request) ||
            $this -> excludedRoutes($request) ||
            $this->runningUnitTests() ||
            $this->shouldPassThrough($request) ||
            $this->tokensMatch($request)
        ) {
            return $this->addCookieToResponse($request, $next($request));
        }

        throw new TokenMismatchException;
	}
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    protected function excludedRoutes {
    	
    }
}
