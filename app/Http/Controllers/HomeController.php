<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Marcas;
use App\Models\Departamentos;
use App\Models\Alternos;

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
        return view('home');
    }

    public function tiendaVensuca()
    {
        return view('tiendaVensuca');
    }

  public function insertar()
  {

//alternos()
//departamentos()
//marcas()

$producto = productos();


####################################################################################

//array('ID' => '1','Codigo' => '0111.010013.01','Nombre' => 'TORN HEX G2 3/16" X 1/2" NC 24H PAV','Departamento' => '0111','Marca' => '','Unidad' => '01','Decimales' => 'F','Costo' => '0.015')
    

    foreach ($producto as $produc) {
      $productos = new Productos();
      $fraccion=substr($produc['Codigo'],0,strpos($produc['Codigo'], "."));
      $productos->ID = $produc['ID'];
      $productos->codigo = $produc['Codigo'];
      $productos->nombre = $produc['Nombre'];
      $productos->departamento = $produc['Departamento'];
      $productos->marca = $produc['Marca'];
      $productos->costo = $produc['Costo'];
      $productos->fraccion = $fraccion;
      $productos -> save();
    }
        return "insertado";
    }
}
