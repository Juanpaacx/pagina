<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/rutaPre',[PaginaController::Class,'pre']);/*es la vista de preguntas frecuentes */
Route::get('/rutaV',[PaginaController::Class,'presentacion']);/*la vista principal */
Route::get('/rutaVV',[PaginaController::Class,'presentacionn']);/*vista de productos o V1pomocion*/

Route::get('/rutaHome',[PaginaController::Class,'hom1']);/*vista de home  donde esta la imagenes*/
Route::get('/rutaAbout',[PaginaController::Class,'about1']);/*vista de acerca de nosotros  VAbout */
Route::get('/rutaL',[PaginaController::Class,'loginn']);/*vista login o Vlogn */
Route::get('/rutaR',[PaginaController::Class,'regi']);/*ruta de la vista de registro de usuario o vista  registrar */
/*
Route::get('/rutaA',[PaginaController::Class,'AgregarInter']);
*/
Route::get('/rutaCon',[PaginaController::Class,'VCon']);/*vista de contactanoso v1formulario*/
Route::get('/rutaproductosP',[PaginaController::Class,'Vproductos']);/*vista de produtos o v1promocion*/

Route::get('/admin',[PaginaController::Class,'loginAdmin']);/*va al vista Vlogin del form admin  */
Route::get('/fuera',[PaginaController::Class,'salir']);/*sale de la seccion de admin*/
/*
Route::get('/rutaFormulario',[PaginaController::class,'AgregarInter']);
*/
Route::post('/rutaA',[PaginaController::class,'AgregarInfo'])->name('AgregarBD');/*vista agregar agrega productos */
Route::post('/',[PaginaController::class,'AgregarU'])->name('AgregarUsuarios');/*vista resgistrar y registra usuarios */

Route::get('/rutaMostrar',[PaginaController::class,'MostrarDB']);/*ruta de la vistaMostrar y es la tabla de productos */

Route::get('rutaCarrito',[PaginaController::class,'Carrito']);/* ruta de la vista carrito y es donde agregas los productos a comprar */
Route::get('rutaDetalle/{id}',[PaginaController::class,'detalle']);/*ruta de detalles */

Route::get('AgregarCarrito/{id}',[PaginaController::class,'AgregarCarrito']); /* ruta de la vista carrito y es donde agregas los productos a comprar */



Route::get('/rutaG',[PaginaController::Class,'Galeria']);
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
Route::get('/rutaRegistroP',[PaginaController::Class,'RegistrosP']);/*sale de la seccion de admin*/
Route::get('/', function () {
    return view('welcome');
});
