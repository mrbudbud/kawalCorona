<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Charts\CovidChart;

class CovidController extends Controller
{
    public function charts()
    {
        $susspect = collect(Http::get('https://api.kawalcorona.com/indonesia')->json());
        $susspectData = $susspect->flatten(1);

        $labels = $susspectData->pluck('Provinsi');
        $data = $susspectData->pluck('Kasus_Posi');
        $colors = $labels->map(function($item){
            return '#' . substr(md5(mt_rand()), 0, 6);
        });

        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Data Kasus Covid-19', 'pie', $data)->backgroundColor($colors);

        return view ('covid', [
            'chart' => $chart,
        ]);
    }
}
