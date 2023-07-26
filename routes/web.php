<?php

use Illuminate\Support\Facades\Route;

Route::get('/cv/{pdfUrl}', function ($pdfUrl) {
    // Récupérez le contenu du fichier PDF à partir de l'URL

    $pdfContent = file_get_contents("http://localhost:8100/assets/img/avocats/".$pdfUrl);

    // Créez une réponse de téléchargement
    $response = Response::make($pdfContent, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="plaafricalaw_cv.pdf"',
    ]);

    return $response;
})->name('avocat.cv');

Route::get('/publication/{pdfUrl}', function ($pdfUrl) {
    // Récupérez le contenu du fichier PDF à partir de l'URL

    $pdfContent = file_get_contents("http://localhost:8100/assets/img/publications/".$pdfUrl);

    // Créez une réponse de téléchargement
    $response = Response::make($pdfContent, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="plaafricalaw_publication.pdf"',
    ]);

    return $response;
})->name('publication.pdf');
Route::get('/locale/{langue}', [\App\Http\Controllers\BuaniaLangController::class,'setLang'])->name("buania.lang");

Route::get('/', [\App\Http\Controllers\BuaniaController::class,'index'])->name("buania.home");

Route::get('/home', [\App\Http\Controllers\BuaniaController::class,'index'])->name("buania.home");

Route::post('/contact', [\App\Http\Controllers\BuaniaController::class,'contact'])->name("buania.contact");
//Route::get('/navbar', [\App\Http\Controllers\BuaniaController::class,'expertise'])->name("buania.navbar");

Route::get('/about', [\App\Http\Controllers\BuaniaController::class,'about'])->name("buania.about");

Route::get('/expertise', [\App\Http\Controllers\BuaniaController::class,'expertise'])->name("buania.expertise");
Route::get('/expertise-detail/{id}', [\App\Http\Controllers\BuaniaController::class,'expertise_detail'])->name("expertise.detail");

Route::get('/team', [\App\Http\Controllers\BuaniaController::class,'team'])->name("buania.team");
Route::get('/team-detail/{id}', [\App\Http\Controllers\BuaniaController::class,'team_detail'])->name("team.detail");

Route::get('/presence', [\App\Http\Controllers\BuaniaController::class,'presence'])->name("buania.presence");
Route::get('/presence-detail/{id}', [\App\Http\Controllers\BuaniaController::class,'presence_detail'])->name("presence.detail");

Route::get('/publication', [\App\Http\Controllers\BuaniaController::class,'publication'])->name("buania.publication");
Route::get('/publication-detail/{id}', [\App\Http\Controllers\BuaniaController::class,'publication_detail'])->name("publication.detail");

