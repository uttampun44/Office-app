<?php 


// app/Helpers/helpers.php

use Illuminate\Support\Facades\Auth;

if (!function_exists('checkPermission')) {
    function checkPermission($permission = null)
    {
        $user = Auth::user();

        if (!$user) {
            return false;
        }

        $userRoles = $user->role->pluck('roles_name')->toArray();

      
        if (in_array('Super Admin', $userRoles)) {
            return true;
        }

        if (!$permission) {
            return false;
        }

        $userPermissions = $user->permissions()->pluck('permission_name')->toArray();

        return in_array($permission, $userPermissions);
    }
}
