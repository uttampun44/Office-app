<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $permission): Response
    {
    //    $user = Auth::user();

    //     if (!$user || !$user->hasPermission($permission)) {
    //         return response()->json([
    //             'message' => 'You are not authorized to view this page'
    //         ], 403);
    //     }

        return $next($request);
    }
}
