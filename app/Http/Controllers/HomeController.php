<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Producto;


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
        $query = Producto::get()->toArray();
        return view("home")->with('query',$query);
    }


        public function facturas($miItem,$num)
        {
            DB::table('facturas')->insert([
                'created_at' => now(),
                'updated_at' => now()
            ]);


            foreach($miItem as $f){
                 DB::updateOrCreate([
                    'id_producto' => $miItem->id_producto,
                    'cantidad' => $num,
                    'precio' => $miItem->precio,
                    'created_at' => now(),
                    'updated_at' => now(),

                ]);
            }



            return redirect()->route('home');
        }


    }







