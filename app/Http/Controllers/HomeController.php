<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        return $this->middleware(['auth', 'role:Customer']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->user_role->name === "Manager") {
            return redirect()->route("manager.home");

            if (Auth::user()->user_role->name === "Cashier") {
                return redirect()->route("cashier.home");
            }

            $categories = Category::with('products')->get();

            return view('customer.home', compact('categories'));
        }
    }
}
