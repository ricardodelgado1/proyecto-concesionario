<?php

namespace Database\Seeders;
use App\Models\Moto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    private $arrayMotos = array(
		array(
			'nombre' => 'VICTORY ADVANCE R 110',
			'modelo' => '2023',
			'marca' => 'Auteco',
			'poster' => 'https://auteco.vteximg.com.br/arquivos/ids/209785-300-300/moto_victory_advancer110_negro_azul_2022_foto1.png?v=637684649355000000',
			'separada' => false,
            'cilindraje' => '109 cc',
            'precio' => '5199000',
			'descripcion' => 'Descubre la moped tecnológicamente más avanzada de Auteco Mobility. Conoce el futuro y conduce en las calles con estilo.'
		),array(
			'nombre' => 'KAWASAKI Z900 RS',
			'modelo' => '2022',
			'marca' => 'Auteco',
			'poster' => 'https://auteco.vteximg.com.br/arquivos/ids/211464-300-300/Z900RS-MY22_Fotos-eCommerce360_1.jpg?v=637734400970700000',
			'separada' => false,
            'cilindraje' => '948 cc',
            'precio' => '64990000',
			'descripcion' => 'Su gran atractivo se ve acentuado por un conjunto de funciones avanzadas completamente nuevas.'
		),array(
			'nombre' => 'BENELLI TNT 135',
			'modelo' => '2022',
			'marca' => 'Auteco',
			'poster' => 'https://auteco.vteximg.com.br/arquivos/ids/211008-300-300/benelli-tnt-135-blanca-foto1.jpg?v=637717370598370000',
			'separada' => false,
            'cilindraje' => '135 cc',
            'precio' => '8999000',
			'descripcion' => 'Una moto italiana deportiva, pequeña, fácil de manejar y con grandes atributos.'
		) ,array(
			'nombre' => 'VICTORY MRX 150 CAMO',
			'modelo' => '2023',
			'marca' => 'Auteco',
			'poster' => 'https://auteco.vteximg.com.br/arquivos/ids/206754-300-300/moto_victory_mrx150_camo_2020_foto1.png?v=637601631008370000',
			'separada' => false,
            'cilindraje' => '149 cc',
            'precio' => '7999000',
			'descripcion' => 'Conoce la nueva todoterreno camuflada que viene armada para protegerte'
        ),array(
			'nombre' => 'VICTORY VENOM 400',
			'modelo' => '2023',
			'marca' => 'Auteco',
			'poster' => 'https://auteco.vteximg.com.br/arquivos/ids/206289-300-300/moto_victory_switch_blanco_verde_2021_foto1.png?v=637583294695130000',
			'separada' => false,
            'cilindraje' => '378 cc',
            'precio' => '18990000',
			'descripcion' => 'Venom 400 hace parte de BlackLine, línea que vino a enseñarnos que alta gama es mucho más que un alto cilindraje. Alta gama es la excelencia en los detalles, la selección de mejores componentes y la aplicación de avanzadas tecnologías.'
		),array(
			'nombre' => 'BENELLI TRK 251 X',
			'modelo' => '2022',
			'marca' => 'Auteco',
			'poster' => 'https://auteco.vteximg.com.br/arquivos/ids/213099-300-300/benelli-180s-pro-2022-foto1.png?v=637801951185600000',
			'separada' => false,
            'cilindraje' => '249 cc',
            'precio' => '18590000',
			'descripcion' => 'NUEVA EDICIÓN LIMITADA DE LA MEJOR MOTO PARA INICIARSE EN EL MUNDO TOURING QUE VIENE PREPARADA CON TODA LA ARTILLERÍA.'
		)

    );




    public function run()
    {
        // \App\Models\User::factory(10)->create();
        self::seedMoto();

        $this->command->info('Tabla Motos inicializada con datos');
    }

    private function seedMoto()
    {

        DB::table('motos')->delete();

        foreach ( $this->arrayMotos as $motos) {
            # code..

            $moto = new Moto;
            $moto->nombre = $motos['nombre'];
            $moto->modelo = $motos['modelo'];
            $moto->marca = $motos['marca'];
            $moto->poster = $motos['poster'];
            $moto->cilindraje = $motos['cilindraje'];
            $moto->precio = $motos['precio'];
            $moto->descripcion = $motos['descripcion'];

            $moto->save();

        }

    }
}
