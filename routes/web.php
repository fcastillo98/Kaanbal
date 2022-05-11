<?php

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
use App\Image;

Route::get('/', function () {
	/*//Prueba ORM
	$images = Image::all();
	foreach ($images as $image) {
		echo $image->image_path."<br/>";
		echo $image->meaning."<br/>";

		echo "<h4>Comentarios</h4>";
		foreach ($image->comments as $comment) {
			echo $comment->user->name.''.$comment->user->surname.': '; 
			echo $comment->content.'<br/>';
		}
		echo 'LIKES: '.count($image->likes);
		echo "<hr/>";
	}

	die();*/

    return view('welcome');
});

/*
Route::get('pagina-generica', function(){
	return view('pagina');
});
*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/configuracion', 'UserController@config')->name('config');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::get('/subir-imagen', 'ImageController@create')->name('image.create');
/////////////////////Aprender números//////////////////////
Route::get('/aprender-num', function() 
{
	return view('juegos/aprender-num/aprender-num');
});
Route::get('/intro-num', function() 
{
	return view('juegos/aprender-num/intro-num');
});
Route::get('/num-p-nivel', function() 
{
	return view('juegos/aprender-num/p-nivel');
});
Route::get('/num-s-nivel', function() 
{
	return view('juegos/aprender-num/s-nivel');
});
Route::get('/num-t-nivel', function() 
{
	return view('juegos/aprender-num/t-nivel');
});
Route::get('/num-c-nivel', function() 
{
	return view('juegos/aprender-num/c-nivel');
});
Route::get('/num-q-nivel', function() 
{
	return view('juegos/aprender-num/q-nivel');
});
///////operaciones/////////
Route::get('/operaciones', function() 
{
	return view('juegos/operaciones/operaciones');
});
Route::get('/intro-operaciones', function() 
{
	return view('juegos/operaciones/intro-operaciones');
});
Route::get('/op-p-nivel', function() 
{
	return view('juegos/operaciones/p-nivel');
});
Route::get('/op-s-nivel', function() 
{
	return view('juegos/operaciones/s-nivel');
});
Route::get('/op-t-nivel', function() 
{
	return view('juegos/operaciones/t-nivel');
});
Route::get('/op-c-nivel', function() 
{
	return view('juegos/operaciones/c-nivel');
});
Route::get('/op-q-nivel', function() 
{
	return view('juegos/operaciones/q-nivel');
});
///////////////////Geometria//////////////////
Route::get('/geometria', function() 
{
	return view('juegos/geometria/geometria');
});
Route::get('/intro-geometria', function() 
{
	return view('juegos/geometria/intro-geometria');
});
Route::get('/geo-p-nivel', function() 
{
	return view('juegos/geometria/p-nivel');
});
Route::get('/geo-s-nivel', function() 
{
	return view('juegos/geometria/s-nivel');
});
Route::get('/geo-t-nivel', function() 
{
	return view('juegos/geometria/t-nivel');
});
Route::get('/geo-c-nivel', function() 
{
	return view('juegos/geometria/c-nivel');
});
Route::get('/geo-q-nivel', function() 
{
	return view('juegos/geometria/q-nivel');
});
////////////////cuerpo///////////////
Route::get('/partes-cuerpo', function() 
{
	return view('juegos/partes-cuerpo/partes-cuerpo');
});
Route::get('/intro-partes-cuerpo', function() 
{
	return view('juegos/partes-cuerpo/intro-partes-cuerpo');
});
Route::get('/partes-p-nivel', function() 
{
	return view('juegos/partes-cuerpo/p-nivel');
});
Route::get('/partes-s-nivel', function() 
{
	return view('juegos/partes-cuerpo/s-nivel');
});
Route::get('/partes-t-nivel', function() 
{
	return view('juegos/partes-cuerpo/t-nivel');
});
Route::get('/partes-c-nivel', function() 
{
	return view('juegos/partes-cuerpo/c-nivel');
});
Route::get('/partes-q-nivel', function() 
{
	return view('juegos/partes-cuerpo/q-nivel');
});
///////////estaciones//////////////////
Route::get('/estaciones', function() 
{
	return view('juegos/estaciones/estaciones');
});
Route::get('/intro-estaciones', function() 
{
	return view('juegos/estaciones/intro-estaciones');
});
Route::get('/estaciones-p-nivel', function() 
{
	return view('juegos/estaciones/p-nivel');
});
Route::get('/estaciones-s-nivel', function() 
{
	return view('juegos/estaciones/s-nivel');
});
Route::get('/estaciones-t-nivel', function() 
{
	return view('juegos/estaciones/t-nivel');
});
Route::get('/estaciones-c-nivel', function() 
{
	return view('juegos/estaciones/c-nivel');
});
////////////////animales////////////////////
Route::get('/animales', function() 
{
	return view('juegos/animales/animales');
});
Route::get('/intro-animales', function() 
{
	return view('juegos/animales/intro-animales');
});
Route::get('/animales-p-nivel', function() 
{
	return view('juegos/animales/p-nivel');
});
Route::get('/animales-s-nivel', function() 
{
	return view('juegos/animales/s-nivel');
});
Route::get('/animales-t-nivel', function() 
{
	return view('juegos/animales/t-nivel');
});
Route::get('/animales-c-nivel', function() 
{
	return view('juegos/animales/c-nivel');
});
Route::get('/animales-q-nivel', function() 
{
	return view('juegos/animales/q-nivel');
});
////////////////////familia/////////////////
Route::get('/familia', function() 
{
	return view('juegos/familia/familia');
});
Route::get('/intro-familia', function() 
{
	return view('juegos/familia/intro-familia');
});
Route::get('/familia-p-nivel', function() 
{
	return view('juegos/familia/p-nivel');
});
Route::get('/familia-s-nivel', function() 
{
	return view('juegos/familia/s-nivel');
});
Route::get('/familia-t-nivel', function() 
{
	return view('juegos/familia/t-nivel');
});
Route::get('/familia-c-nivel', function() 
{
	return view('juegos/familia/c-nivel');
});
Route::get('/familia-q-nivel', function() 
{
	return view('juegos/familia/q-nivel');
});
/////////////////////frutas////////////////
Route::get('/frutas', function() 
{
	return view('juegos/frutas/frutas');
});
Route::get('/intro-frutas', function() 
{
	return view('juegos/frutas/intro-frutas');
});
Route::get('/frutas-p-nivel', function() 
{
	return view('juegos/frutas/p-nivel');
});
Route::get('/frutas-s-nivel', function() 
{
	return view('juegos/frutas/s-nivel');
});
Route::get('/frutas-t-nivel', function() 
{
	return view('juegos/frutas/t-nivel');
});
Route::get('/frutas-c-nivel', function() 
{
	return view('juegos/frutas/c-nivel');
});
Route::get('/frutas-q-nivel', function() 
{
	return view('juegos/frutas/q-nivel');
});