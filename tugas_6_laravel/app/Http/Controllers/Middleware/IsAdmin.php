<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->header('X-Admin') === 'true') {
            return $next($request);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Access denied. Admins only.'
        ], 403);
    }
}
