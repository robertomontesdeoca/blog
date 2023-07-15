<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\CursoContoller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

//En el siguiente codigo se utiliza el controlador en las rutas 
Route::get('/',HomeContoller::class);

Route::get('cursos',[CursoContoller::class,'index'])->name('cursos.index');

Route::get('cursos/create', [CursoContoller::class,'create'])->name('cursos.create');

Route::get('cursos/{id}',[CursoContoller::class,'show'])->name('cursos.show');

/*
Route::controller(CursoContoller::class)->group(function(){
    Route::get('cursos','index');
    Route::get('cursos/create','create');
    Route::get('cursos/{curso}','show'); 
});
 Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
   
   //El siguiente codigo deberia desarrollarse en un contralador
    if($categoria){
    return "Bienvenido al curso: $curso de la categoria $categoria";
   }else{
    return "Bienvenido al curso: $curso";
   }   
});

 */
