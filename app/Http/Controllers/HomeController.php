<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      date_default_timezone_set('UTC');
        $chart1 = \Chart::title([
              'text' => 'Température Méliruche',
            ])
            ->chart([
              'type'     => 'spline', // pie , columnt ect
              'renderTo' => 'hchart', // render the chart into your div with id
              'width' => '800'
            ])
            ->subtitle([
              'text' => 'Température intérieure', //sous-titre du tableau
            ])
            ->colors([
              '#0c2959'
            ])
            ->xaxis([
              'type' => 'datetime',
              'dateTimeLabelFormats' => [
                'hour' => '%H : %M.'
              ],
              'title' => [
                'text' => 'Date'
              ]
          ])
          ->yaxis([
            'text' => 'Temp.',
          ])
          ->legend([
            'layout'        => 'vertical',
            'align'         => 'right',
            'verticalAlign' => 'bottom',
          ])
          ->series(
             [
               [
                 'name'  => 'Température',
                 'data'  => [
                              [gmmktime(15, 01, 01, 1, 15, 2019) * 1000, 30], //Temps * 1000
                              [gmmktime(15, 11, 01, 1, 15, 2019)* 1000, 35],  //Highcharts fonctionne en ns
                              [gmmktime(16, 01, 01, 1, 15, 2019)* 1000, 45],
                              [gmmktime(17, 00, 00, 1, 15, 2019)* 1000, 50],
                              [gmmktime(18, 00, 00, 1, 15, 2019)* 1000, 55],
                              [gmmktime(19, 00, 00, 1, 15, 2019)* 1000, 25],
                              [gmmktime(20, 00, 00, 1, 15, 2019)* 1000, 10],
                              [gmmktime(21, 00, 00, 1, 15, 2019)* 1000, 10],
                              [gmmktime(22, 00, 00, 1, 15, 2019)* 1000, 10],
                              [gmmktime(23, 00, 00, 1, 15, 2019)* 1000, 10]
                            ],
                 // 'color' => '#0c2959',
               ],
             ])
          ->display();


        return view('home', ['chart1' => $chart1]
                   );
    }
}
