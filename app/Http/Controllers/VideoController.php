<?php

namespace App\Http\Controllers;


use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return Video::query()->with('chanel')->get();
    }

    public function show($videoId)
    {
        return Video::query()->findOrFail($videoId)->load('chanel');
    }
}
