<?php

if(!function_exists('hasPermission')){
    function hasPermission(array $permissions) : bool
    {
        if(auth('admin')->user()->hasRole('Super Admin')) return true;
        return auth('admin')->user()->hasAnyPermission($permissions);
    }
}
