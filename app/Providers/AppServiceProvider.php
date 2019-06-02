<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

//Deps perso
use Illuminate\Support\Facades\DB;
use App\Models\Rucher;
use App\Models\Ruche;
use App\Models\User;
use Auth;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //from RucheController.php


        view()->composer('layouts.menu', function($view) {

            $this->ruchers = DB::table('ruchers')
                ->where('idApiculteur', '=', Auth::user()->id)
                ->get();

            $this->ruches = DB::table('ruches')
                ->select('ruches.*')
                ->join('ruchers', 'ruches.idRucher', '=', 'ruchers.id')
                ->join('users', 'ruchers.idApiculteur', '=', 'users.id')
                ->where('users.id', '=', Auth::user()->id)
                ->get();

            $view->with('ruchers', $this->ruchers)->with('ruches', $this->ruches);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
