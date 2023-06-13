<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [ 
            [
                'name' => 'Cilindraje 110',
                'description' => 'esta moto es capaz de alcanzar una velocidad máxima de alrededor de 90 km/h, lo que la hace adecuada para viajes cortos y largos en carreteras y autopistas.',
                'priority' => 1
            ],
            [
                'name' => 'cilindraje 125',
                'description' => 'Con su motor de 125cc, esta moto alcanza una velocidad máxima de aproximadamente 100 km/h, brindándote una experiencia emocionante en cada viaje.',
                'priority' => 2
            ],
            [
                'name' => 'cilindraje 150',
                'description' => 'esta moto es capaz de alcanzar velocidades impresionantes, superando los 120 km/h. Su motor de alto rendimiento proporciona una aceleración suave y una respuesta rápida',
                'priority' => 3
            ],
            [
                'name' => 'cilindraje 250',
                'description' => 'esta moto es capaz de alcanzar velocidades asombrosas, superando los 150 km/h. Su potencia y torque te permiten acelerar rápidamente',
                'priority' => 1
            ]
            
        ];

        DB::table('categories')->insert($categories);//
    }
}
