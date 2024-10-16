<?php

namespace App\Http\Controllers;

use App\Models\producto;
use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginaController extends Controller
{
   public function Presentacion()
   {
      return view('principal');
   }/*la vista principal */

   public function Galeria()
   {
      return view('galeria');
   }/*la vista principal */

   public function RegistrosP()
   {
      return view('agregar');
   }/*la vista principal */
   public function pre()
   {
      return view('PFrecuentes');
   }/*es la vista de preguntas frecuentes */

   public function Presentacionn()
   {
      return view('V1promocion');
   }/*vista de productos o V1pomocion*/
 
   public function VCon()
   {
      return view('Vcontactanos');
   }/*vista de contactanoso v1formulario*/
   public function Vproductos()
   {
      return view('v1promocion');
   }/*vista de produtos o v1promocion*/
   public function hom1()
   {
      return view('VHome');
   }/*vista de home  donde esta la imagenes*/
   public function loginn()
   {
      return view('Vlogin');
   }/*vista login o Vlogn */

   public function about1()
   {
      return view('VAbout');
   }/*vista de acerca de nosotros  VAbout */
   public function regi()
   {
      return view('registrar');/*vista registrar usuarios */
   }

/* ruta de la vista carrito */
   public function Carrito()
   {
      return view('carrito');
   }


/*ruta de detalles */
   public function detalle($id)
   {
      $producto = producto::find($id);
      return view('detalles', ['producto' => $producto]);

   }

   /* ruta de la vista carrito y es donde agregas los productos a comprar */
   public function AgregarCarrito($id)
   {
      $producto = producto::find($id);
      $carrito = session()->get('carrito');
      if (!$carrito) {
         $carrito = [];
         $carri =[
            "id" => $id,
               "nombre" => $producto->nombre,
               "cantidad" => 1,
               "precio" => $producto->precio
            ];
         array_push($carrito,$carri);
         session()->put('carrito',$carrito);
         return redirect()->back()->with('succes', 'producto agregado al carrito');

      }
      if(isset($carrito['carri'])) {
        if($carrito['carri']['id']==$id){
         $carrito['carri']['cantidad']+=1;
         session()->put('carrito', $carrito);
         return redirect()->back()->with('succes', 'producto agregado al carrito');
        }
      }else{
      $carri=[
         "id" => $id,
         "nombre" => $producto->nombre,
         "cantidad" => 1,
         "precio" => $producto->precio
      ];
      array_push($carrito,$carri);
   }
      session()->put('carrito', $carrito);
      return redirect()->back()->with('succes', 'producto agregado al carrito');
   }


   /*ruta de la vistaMostrar y es la tabla de productos */
   public function MostrarDB()
   {
      $productos = DB::table('productos')->get();
      return view('Mostrar', ['productos' => $productos]);
   }



   /*vista resgistrar y registra usuarios */
   public function AgregarU(Request $request)
   {
      $registroo = new usuarios;
     
  
      $registroo->nombre = $request->nombre;
      $registroo->apellido = $request->apellido;
      $registroo->user = $request->user;
      $registroo->contraseña = $request->contraseña;
     
    
      $registroo->save();

      return view('registrar');

   }



   /*vista agregar agrega productos */
   public function AgregarInfo(Request $request)
   {
      $registro = new producto;
      $fotoo = $request->file('foto');
      $nom = time() . '.' . $fotoo->getClientOriginalExtension();
      $destino = public_path('imagenes');
      $request->foto->move($destino, $nom);
      $registro->codigo = $request->codigo;
      $registro->nombre = $request->nombre;
      $registro->precio = $request->precio;
      $registro->cantidad = $request->cantidad;
      $registro->descripcion = $request->descripcion;
      $registro->foto = $nom;
      $registro->save();

      return view('agregar');

   }

   /*sale de la seccion de admin*/
   public function salir () {
      session()->forget('admin');
      return view('Vlogin');
   }



/*va al vista Vlogin del form admin  */
   public function loginAdmin(Request $request){
      if($request->Usuario =='Admin' && $request->Contraseña =='123')
 {
   $admin = session()->get('admin');
   if(!$admin){$admin=[
      "Usuario"=>$request->Usuario,
      "Contraseña"=>$request->Contraseña,
   ];
  session()->put('admin', $admin);
  return view('Vlogin');
}
   return view('Vlogin');
 }  
   }


}