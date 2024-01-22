<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateBeatController extends Controller
{
    public function index()
    {
        $banner = DB::table('banner')->where('banner.page', 'events')->get();

        // Выбор последней записи для $news_1
        // $news_1 = DB::table('events_news')->orderBy('created_at', 'desc')->select('id', 'heading', 'descr', 'image', 'data', 'created_at', 'updated_at')->first();


        // Выбор двух последних записей для $news_2, исключая ту, которая уже в $news_1
        $latest_news_2_ids = DB::table('events_news')->orderBy('created_at', 'desc')->take(2)->pluck('id')->toArray();
        $news_2 = DB::table('events_news')->select('id', 'heading', 'descr', 'image', 'data', 'created_at', 'updated_at')->whereIn('id', $latest_news_2_ids)->get();


        $person = DB::table('events_person')->get();

        return view('create-beat', [
            'banner' => $banner,
            // 'news_1' => $news_1,
            'news_2' => $news_2,
            'person' => $person
        ]);
    }



}
