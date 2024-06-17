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
        $user = Auth::user();

        if (!$user) {
            return response()->json(['message' => 'User is not authenticated'], 401);
        }

        $superRoles = ['Super Admin', 'Admin'];
        $userRoles = $user->role->roles_name;

        if (!in_array($userRoles, $superRoles)) {
            $permissions = explode('|', $permission);

            if (!$user->permissions()->whereIn('permission_name', $permissions)->exists()) {
                return response()->json(['message' => 'Sorry! You have no permission to perform this action'], 403);
            }
        }

        return $next($request);
    }
}
