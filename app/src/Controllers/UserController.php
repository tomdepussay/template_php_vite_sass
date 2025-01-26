<?php

namespace App\Controllers;

use App\Core\View;
use App\Models\UserModel;

class UserController {
    public function index(): void
    {
        $users = new UserModel();
        $users = $users->all();
        View::render('users/index', ['users' => $users]);
    }
}