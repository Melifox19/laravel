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
        $chart1 = \Chart::title([
              'text' => 'Température Méliruche',
            ])
            ->chart([
              'type'     => 'spline', // pie , columnt ect
              'renderTo' => 'hchart', // render the chart into your div with id
            ])
            ->subtitle([
              'text' => 'Sous-titre', //sous-titre du tableau
            ])
            ->colors([
              '#0c2959'
            ])
            ->xaxis([
              'type' => 'datetime',
              'dateTimeLabelFormats' => [
                'month' => '%e %b.'
              ],
              'title' => [
                'text' => 'Date'
              ]
          ])
          ->yaxis([
            'text' => 'This Y Axis',
          ])
          ->legend([
            'layout'        => 'vertical',
            'align'         => 'middle',
            'verticalAlign' => 'bottom',
          ])
          ->series(
             [
               [
                 'name'  => 'Voting',
                 'data'  => [43934, 52503, 57177, 69658],
                 // 'color' => '#0c2959',
               ],
             ])
          ->display();


        return view('home', ['chart1' => $chart1]
                   );
    }
}
