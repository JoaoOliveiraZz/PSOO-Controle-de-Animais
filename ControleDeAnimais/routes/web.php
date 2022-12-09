<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Filo;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Filo', function(){
    return view('filoForm');
});
Route::post('/FiloCadastro', function(Request $dados){
    Filo::create([
        'Nome' => $dados -> Nome
    ]);
    echo 'Certo';
});

Route::get('/mostrarFilo/{id_filo}', function( $id_filo ){
    $filo = Filo::findOrFail($id_filo);
    echo $filo -> Nome;
});