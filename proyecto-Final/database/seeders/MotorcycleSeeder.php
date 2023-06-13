<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class MotorcycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motorcycle = [
            [
                'name' => 'crypton 115',
                'marca' => 'yamaha',
                'description' => 'una motocicleta versátil y que se adapta al día a día de un usuario urbano y lleno de vitalidad. Una motocicleta de 115cc, que ofrece una excelente sensación de potencia y torque..',
                'id' => 1,
                'image' => 'crypton.jpg'
            ],
            [
                'name' => 'rx 115',
                'marca' => 'yamaha',
                'description' => 'motos dos tiempos descontinuada muy querida por los pilotos.',
                'id' => 1,
                'image' => 'rx115.jpg'
            ],
            [
                'name' => 'viva r 115',
                'marca' => 'suzuki',
                'description' => 'Es una motocicleta cómoda y económica que ofrece una variedad de detalles de alta calidad como freno de disco delantero, suspensión suave, encendido electrónico y mecánico. Es confortable al momento de conducir al tiempo que ofrece suavidad entre cambios de marcha y un bajo consumo de combustible...',
                'id' => 1,
                'image' => 'vivar115.jpg'
            ],
            [
                'name' => 'ax 115',
                'marca' => 'suzukig',
                'description' => 'moto descontinuada y muy querida por los usuarios',
                'id' => 1,
                'image' => 'ax115.jpg'
            ],
            [
                'name' => 'Nkd 125',
                'marca' => 'akt motos. Colombia',
                'description' => 'ahora con un nuevo Velocímetro digital y todas las características que hacen especial a la NKD: Freno de disco delantero, Arranque eléctrico, farola led, caja de 5 velocidades y sus característicos 10.34 HP a 8000RPM.',
                'id' => 2,
                'image' => 'Nkd125.jpg'
            ],
            [
                'name' => 'xtz 125',
                'marca' => 'yamaha',
                'description' => 'moto cuatro tiempos todo terrero con buena fuerza y rápida para cualquier parte',
                'id' => 2,
                'image' => 'xtz125.jpg'
            ],
            [
                'name' => 'boxer 125',
                'marca' => 'aktmotos col',
                'description' => 'Esta versión mejorada es la hermana mayor de la icónica BOXER CT100, trae freno de disco, indicador de cambios, chasis más resistente, gran torque y más estilo por sus nuevas calcas y tank pad. Además, sigue conservando lo mejor de la Boxer CT de siempre..',
                'id' => 2,
                'image' => 'boxer125.jpg'
            ],
           
            [
                'name' => 'cb125f',
                'marca' => 'honda',
                'description' => 'Una motocicleta desarrollada para destacarse por su diseño superior, que ha demostrado su éxito con cerca de 40.000 unidades vendidas desde su lanzamiento en Diciembre de 2018..',
                'id' => 8,
                'image' => 'cb125f.jpg'
            ],
            [
                'name' => 'xtz150',
                'marca' => 'yamaha',
                'description' => 'El modelo llega con un carácter utilitario-deportivo, cómodo y agresivo. El asiento biplaza está diseñado para garantizar una buena sensación para el piloto y una mayor comodidad para el pasajero.',
                'id' => 3,
                'image' => 'xtz150.jpg'
            ],
            [
                'name' => 'fz150',
                'marca' => 'yamaha',
                'description' => 'buen desempeño y reacción al acelerar. Moto mara ciudad y pistas largas.',
                'id' => 3,
                'image' => 'fz150.jpg'
            ],
            [
                'name' => 'tt150',
                'marca' => 'aktmotos col',
                'description' => 'moto sport y carretera buena fuerza y rápida.',
                'id' => 3,
                'image' => 'tt150.jpg'
            ],
            [
                'name' => 'Xr150',
                'marca' => 'honda',
                'description' => 'guerrera luchadora rápida. Económica y resistente a la hora de la montaña.',
                'id' => 3,
                'image' => 'xr150.jpg'
            ],
            [
                'name' => 'fz 250',
                'marca' => 'yamaha',
                'description' => 'Cómoda para viajar buena velocidad y segura muy económica.',
                'id' => 4,
                'image' => 'fz250.jpg'
            ],
            [
                'name' => 'xtz250',
                'marca' => 'yamaha',
                'description' => 'moto de trocha lista para cualquier aventura',
                'id' => 4,
                'image' => 'xtz250.jpg'
            ],
            [
                'name' => 'gixxer',
                'marca' => 'suzuki',
                'description' => 'moto rápido especial para llegar rápido en la ciudad.',
                'id' => 4,
                'image' => 'gixxer250.jpg'
            ],
            [
                'name' => 'tt250',
                'marca' => 'aktmotos col',
                'description' => 'moto lista para la aventura y rodadas largas.',
                'id' => 4,
                'image' => 'tt250.jpg'
            ]
        ];

        DB::table('motorcycles')->insert($motorcycles);
    }
}
