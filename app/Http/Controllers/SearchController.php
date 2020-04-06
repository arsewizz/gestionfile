<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archive;

class SearchController extends Controller
{
    //
        public function search(Request $request)
    {
        $search_query = $request->input('search_query');
        $archives = Archive::find($search_query);
        return $archives;
    }
}
