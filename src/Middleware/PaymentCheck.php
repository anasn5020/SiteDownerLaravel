<?php

namespace YourPackage\Middleware;

use Closure;

class PaymentCheck
{
    public function handle($request, Closure $next)
    {
        if (config('paymentchecker.active')) {
            return response()->view('paymentchecker::overlay', [
                'message' => config('paymentchecker.message', 'Please contact the developer to clear payments.')
            ]);
        }

        return $next($request);
    }
}
