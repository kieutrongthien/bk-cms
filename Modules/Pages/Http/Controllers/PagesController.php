<?php

namespace Modules\Pages\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Pages\Entities\Pages;

class PagesController extends Controller
{
    public function index()
    {
        $page = Pages::where('id', appearance('default.page'))->first();

        if(!$page) {
            abort(404);
        }

        return view('themes::'.appearance('default.theme', 'nikki').'.layouts.default', compact('page'));
    }

    public function show($slug)
    {
        if($slug) {
            $page = Pages::where('slug', $slug)->first();
        }

        if(!$page) {
            abort(404);
        }

        return view('themes::'.appearance('default.theme', 'nikki').'.layouts.default', compact('page'));
    }
}
