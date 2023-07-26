<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot()
    {
        $apiExterne = env('API_EXTERNE_HOST').''.'api/';
        $url_fichier_expertise=env('API_EXTERNE_HOST').'assets/img/expertises/';

        $response = Http::get($apiExterne.'expertise');

       // dd($response);
        $accueil_data = $response->json();
        $currentLocale = App::getLocale();


        view()->composer('navbar', function ($view) use ($accueil_data) {
            $view->with('accueil_data', $accueil_data);
        });


    }
}
