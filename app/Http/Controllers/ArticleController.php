<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function searchArticle(Request $request)
    {
        $searchFor = ['s' => $request->articleName];
        $url = "https://www.uplexis.com.br/blog/?" . http_build_query($searchFor);

        $result = file_get_contents($url);

        return response()->json($result);
    }
}