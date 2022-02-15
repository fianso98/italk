<?php

namespace App\Repositories;

use Models\Role;

class RoleRepository{
    public static function create($role){
        $role->title = touupe($role->title);
        Role::create([
            "name" => 'subscribed',
            'title' =>  $role->title,
            'body' => 'gref',
        ]);
    }
}