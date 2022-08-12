<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
    public function index() {
        $listUser = User::orderBy('id', 'asc')->paginate(3);
    }
}
