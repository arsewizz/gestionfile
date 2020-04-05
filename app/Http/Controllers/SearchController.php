<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
        public function search(Request $request)
    {
        $search_query = $request->input('search_query');
        return $search_query;
    }
}
