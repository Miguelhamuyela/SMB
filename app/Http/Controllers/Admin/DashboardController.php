<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Video;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        /* Counts */
        $response['count_news'] = News::count();
        $response['count_gallery'] = Gallery::count();
        $response['count_video'] = Video::count();
        $response['count_user'] = User::count();
        /* lasted */
        $response['reports'] = null;

        return view('admin.home.index', $response);
    }
}
