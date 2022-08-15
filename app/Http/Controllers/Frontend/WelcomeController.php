<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $specials = Category::where('name', 'specials')->first();

        return view('welcome', compact('specials'));
    }

    public function thanks(Request $request, $id)
    {
        // $ty = Reservation::where('id', $id)->get();
        $thanks = Reservation::find($id);
        return view('thanks', ['thanks' => $thanks]);
    }
}
