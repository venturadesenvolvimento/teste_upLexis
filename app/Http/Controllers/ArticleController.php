<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function searchArticle(Request $request)
    {
        $searchFor = $request->articleName;
        //https://www.uplexis.com.br/blog/?s=machine+learning

        $result = new \stdClass;
        $result->id_usuario = 1;
        $result->titulo = "Como fritar ovo sem se queimar";
        $result->link = "https://link.com.br";
        $result->searchedFor = $searchFor;

        return response()->json($result);
    }
}