<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        $products = Product::all();
        return view('admin-panel.index', compact('groups', 'products'));
    }
}
