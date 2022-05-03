<?php

namespace App\Http\Controllers;

use App\Models\Contents;
use App\Models\ExtraProjects;
use App\Models\Navigation;
use App\Models\Projects;
use App\Models\Test;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $images = Test::all();
        $navigations = Navigation::pluck('nav_item');
        $footer_column3 = Navigation::pluck('footer_column_3');
        $contents = Contents::all();
        $projects = Projects::all();
        $extra_projects = ExtraProjects::all();
        return view('home', compact('images', 'navigations', 'contents', 'projects', 'extra_projects', 'footer_column3'));
    }
}
