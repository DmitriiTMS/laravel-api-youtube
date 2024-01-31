<?php

namespace App\Http\Controllers;

use App\Models\Chanel;
use Illuminate\Http\Request;

class ChanelController extends Controller
{
    public function index()
    {
        return Chanel::query()->with('video')->get();
    }

    public function show($chanelId)
    {
        return Chanel::query()->findOrFail($chanelId)->load('video');
    }


}
