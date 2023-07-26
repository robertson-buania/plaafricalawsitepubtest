<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Donnees;
use Illuminate\Support\Facades\Http;

class BuaniaController extends Controller
{





    function contact(Request $request)  {
        $apiExterne = env('API_EXTERNE_HOST').''.'api/';
        $contact=[
            "name"=>$request->name,
            "objet"=>$request->objet,
            "message"=>$request->message,
            "email"=>$request->email
        ];

        $responseContact = Http::post($apiExterne.'contact',$contact);

        $url_fichier=env('API_EXTERNE_HOST').'assets/img/avocats/';
        $url_fichier_pub=env('API_EXTERNE_HOST').'assets/img/publications/';



        $response = Http::get($apiExterne.'home');

       // dd($response);
        $accueil_data = $response->json();
        $currentLocale = App::getLocale();

       // dd($accueil_data);
        return view('index', [
            "currentLocale"=>$currentLocale,
            "accueil_data"=>$accueil_data,

            "url_fichier_pub"=>$url_fichier_pub,
            "messagecontact"=>$responseContact['message'],
            "url_fichier"=>$url_fichier]);
    }
    function index()  {

        $apiExterne = env('API_EXTERNE_HOST').''.'api/';
        $url_fichier=env('API_EXTERNE_HOST').'assets/img/avocats/';
        $url_fichier_pub=env('API_EXTERNE_HOST').'assets/img/publications/';



        $response = Http::get($apiExterne.'home');

       // dd($response);
        $accueil_data = $response->json();
        $currentLocale = App::getLocale();

       // dd($accueil_data);
        return view('index', [
            "currentLocale"=>$currentLocale,
            "accueil_data"=>$accueil_data,

            "url_fichier_pub"=>$url_fichier_pub,
            "messagecontact"=>"ok",
            "url_fichier"=>$url_fichier]);
    }


    function about()  {
        $currentLocale = App::getLocale();
        return view("about",["currentLocale"=>$currentLocale]);
    }

    function expertise()  {
        $apiExterne = env('API_EXTERNE_HOST').''.'api/';
        $url_fichier_expertise=env('API_EXTERNE_HOST').'assets/img/expertises/';

        $response = Http::get($apiExterne.'expertise');

       // dd($response);
        $accueil_data = $response->json();
        $currentLocale = App::getLocale();

       // dd($accueil_data);
        return view('expertise', [
            "currentLocale"=>$currentLocale,
            "expertisesDomainecompetence"=>$accueil_data["expertisesDomainecompetence"],
            "expertisesSecteuractivite"=>$accueil_data["expertisesSecteuractivite"],
            "url_fichier_expertise"=>$url_fichier_expertise,
            ]
        );

    }

    function expertise_detail($id)  {
        $apiExterne = env('API_EXTERNE_HOST').''.'api/';
        $url_fichier_expertise=env('API_EXTERNE_HOST').'assets/img/expertises/';

        $response = Http::get($apiExterne.'expertise/detail/'.$id);


       // dd($response);
        $accueil_data = $response->json();
        $currentLocale = App::getLocale();


       // dd($accueil_data);
        return view('expertise-detail', [
            "currentLocale"=>$currentLocale,
            "expertise"=>$accueil_data['expertise'],
            "expertises"=>$accueil_data['expertises'],
            "url_fichier_expertise"=>$url_fichier_expertise,
            ]
        );
    }
    function team()  {

        $apiExterne = env('API_EXTERNE_HOST').''.'api/';
        $url_fichier_team=env('API_EXTERNE_HOST').'assets/img/avocats/';

        $response = Http::get($apiExterne.'equipes');


       // dd($response);
        $accueil_data = $response->json();
        $currentLocale = App::getLocale();


       // dd($accueil_data);
        return view('team', [
            "currentLocale"=>$currentLocale,
            "teams"=>$accueil_data['avocats'],
            "url_fichier_team"=>$url_fichier_team,
            ]
        );

    }

    function team_detail($id)  {
        $apiExterne = env('API_EXTERNE_HOST').''.'api/';
        $url_fichier_team=env('API_EXTERNE_HOST').'assets/img/avocats/';
        $url_fichier_pub=env('API_EXTERNE_HOST').'assets/img/publications/';
        $response = Http::get($apiExterne.'equipes/detail/'.$id);


       // dd($response);
        $accueil_data = $response->json();
        $currentLocale = App::getLocale();


       //dd($accueil_data);
        return view('team-detail', [
            "currentLocale"=>$currentLocale,
            "avocat"=>$accueil_data['avocat'],
            "avocats"=>$accueil_data['avocats'],
            "url_fichier_pub"=>$url_fichier_pub,
            "url_fichier_team"=>$url_fichier_team,
            ]
        );


    }

    function presence()  {
        $apiExterne = env('API_EXTERNE_HOST').''.'api/';
        $url_fichier_bureau=env('API_EXTERNE_HOST').'assets/img/bureaux/';

        $response = Http::get($apiExterne.'presence');

       // dd($response);
        $accueil_data = $response->json();
        $currentLocale = App::getLocale();

       // dd($accueil_data);
        return view('presence', [
            "currentLocale"=>$currentLocale,
            "bureaux"=>$accueil_data["bureaux"],
            "url_fichier_bureau"=>$url_fichier_bureau,
            ]
        );
    }

    function presence_detail($id)  {
        $apiExterne = env('API_EXTERNE_HOST');
        $url_fichier_bureau=env('API_EXTERNE_HOST').'assets/img/bureaux/';

        $response = Http::get($apiExterne.'api/presence/detail/'.$id);
        $bureau = $response->json();
        $currentLocale = App::getLocale();
       // dd($bureau['bureau']);
        return view("presence-detail",
            [
                "currentLocale"=>$currentLocale,
                "url_fichier_bureau"=>$url_fichier_bureau,
                "bureau"=>$bureau['bureau'],
                "bureaux"=>$bureau["bureaux"]
            ]);
    }

    function publication()  {

        $apiExterne = env('API_EXTERNE_HOST').''.'api/';
        $url_fichier_pub=env('API_EXTERNE_HOST').'assets/img/publications/';
        $url_fichier=env('API_EXTERNE_HOST').'assets/img/avocats/';

        $response = Http::get($apiExterne.'publication');

       // dd($response);
        $accueil_data = $response->json();
        $currentLocale = App::getLocale();

       // dd($accueil_data);
        return view('publication', [
            "currentLocale"=>$currentLocale,
            "publications"=>$accueil_data["publications"],
            "url_fichier_pub"=>$url_fichier_pub,
            "url_fichier"=>$url_fichier,
            ]
        );

    }

    function publication_detail($id)  {
        $apiExterne = env('API_EXTERNE_HOST');
        $url_fichier_publication=env('API_EXTERNE_HOST').'assets/img/publications/';
        $url_fichier_avocats=env('API_EXTERNE_HOST').'assets/img/avocats/';

        $response = Http::get($apiExterne.'api/publication/detail/'.$id);
        $publication = $response->json();
        $currentLocale = App::getLocale();
       // dd($publication['publication']);
        return view("publication-detail",
            [
                "currentLocale"=>$currentLocale,
                "url_fichier_publication"=>$url_fichier_publication,
                "publication"=>$publication['publication'],
                "url_fichier_avocats"=>$url_fichier_avocats,
                "publications"=>$publication["publications"]
            ]);
    }
}
