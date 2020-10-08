<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'img' => 'img/semita-alta.jpg',
            'nombre' => 'Semita Alta',
            'Precio' => 10.00,
            'stock' => 10
        ]);

        DB::table('productos')->insert([
            'img' => 'img/muffin.jpeg',
            'nombre' => 'Muffin',
            'Precio' => 10.00,
            'stock' => 10
        ]);

        DB::table('productos')->insert([
            'img' => 'img/semita-alta.jpg',
            'nombre' => 'Semita Alta',
            'Precio' => 10.00,
            'stock' => 10
        ]);

        DB::table('productos')->insert([
            'img' => 'img/muffin.jpeg',
            'nombre' => 'Muffin',
            'Precio' => 10.00,
            'stock' => 10
        ]);

        DB::table('productos')->insert([
            'img' => 'img/semita-alta.jpg',
            'nombre' => 'Semita Alta',
            'Precio' => 10.00,
            'stock' => 10
        ]);

        DB::table('productos')->insert([
            'img' => 'img/muffin.jpeg',
            'nombre' => 'Muffin',
            'Precio' => 10.00,
            'stock' => 10
        ]);

        DB::table('productos')->insert([
            'img' => 'img/semita-alta.jpg',
            'nombre' => 'Semita Alta',
            'Precio' => 10.00,
            'stock' => 10
        ]);

        DB::table('productos')->insert([
            'img' => 'img/muffin.jpeg',
            'nombre' => 'Muffin',
            'Precio' => 10.00,
            'stock' => 10
        ]);

        DB::table('productos')->insert([
            'img' => 'img/semita-alta.jpg',
            'nombre' => 'Semita Alta',
            'Precio' => 10.00,
            'stock' => 10
        ]);

        DB::table('productos')->insert([
            'img' => 'img/muffin.jpeg',
            'nombre' => 'Muffin',
            'Precio' => 10.00,
            'stock' => 10
        ]);


    }
}
