<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() {
        return view ('menu', [
            'title' => 'Menu',
            'menus' => menu::all()
        ]);
    }
}
