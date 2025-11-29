<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckKycStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth('web')->user();
        if($user->kyc->status == 'pending' ||  $user->kyc->status == 'rejected' || $user->kyc?->status == null){
            return redirect()->route('vendor.dashboard');
        }elseif($user->kyc->status == 'approved'){
            return $next($request);
        }

        return abort(403);

    }
}
