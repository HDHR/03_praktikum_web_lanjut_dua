<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function blogdetail()
    {
        return view('blog-detail');
    }
}
