<?php

namespace App\Http\Controllers;
use App\Constants\GlobalConstants;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function index() {
        $users = User::getUsers('', GlobalConstants::ALL, GlobalConstants::USER_TYPE_FRONTEND, GlobalConstants::ALL);
        return view('home')->with('users', $users);
    }

    public function getMoreUsers(Request $request) {
        $query = $request->search_query;
        $country = $request->country;
        $sort_by = $request->sort_by;
        $range = $request->range;
        if($request->ajax()) {
            $users = User::getUsers($query, $country, $sort_by, $range);
                return view('pages.user_data', compact('users'))->render();
        }
    }
}
