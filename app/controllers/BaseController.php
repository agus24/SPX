<?php

namespace App\Controllers;

use App\Model\User;
use Core\Controller;

class BaseController extends Controller
{
    public function index()
    {
        $user = User::instance()->all();
    }
}
