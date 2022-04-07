<?php

namespace Database\Seeders;
use App\Models\Moto;
use App\Models\Repuesto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    private  $arrayRepuestos = array(
		array(
			'nombre' => 'Bateria',
			'modelo' => '2023',
			'marca' => 'Yuasa',
			'poster' => 'http://automociontotal.hiperarticulos.com/wp-content/uploads/2016/12/bater%C3%ADas-para-moto-1.jpg',
			'separada' => false,
            'precio' => '280000',
			'descripcion' => 'Batería Yuasa YTZ10S.Se trata de una batería que crea un ajuste perfecto, por lo que debe ser fácil de instalar y reemplazar'
		),array(
			'nombre' => 'Chasis',
			'modelo' => '2022',
			'marca' => 'Rizoma',
			'poster' => 'https://publimotos.com/images/2018/Noviembre/chasis/chasis-cabecera.jpg',
			'separada' => false,
            'precio' => '450000',
			'descripcion' => 'Chasis simple de cuna cerrado.El chasis simple de cuna cerrado por lo general se encuentra compuesto por tubos de acero con diámetros variables, tiene forma de trapecio.'
		),array(
			'nombre' => 'Asiento',
			'modelo' => '2022',
			'marca' => 'Universal',
			'poster' => 'https://tienda-fisioterapia.com/Media/tiendafisioterapia/_Profiles/c44d3c72/bcfb455c/asiento%20moto%20deportiva.jpg?v=637528105143799127',
			'separada' => false,
            'precio' => '90000',
			'descripcion' => 'Asiento moto deportiva, Disfrutá del camino, del resto.. nos encargamos nosotros.Las medidas son 60 cm de largo X 26 de ancho Esperamos tu oferta. Es generico para adaptar'
		) ,array(
			'nombre' => 'Embrague',
			'modelo' => '2023',
			'marca' => 'Honda',
			'poster' => 'https://media.istockphoto.com/photos/motorcycle-clutch-with-gears-picture-id521976870',
			'separada' => false,
            'precio' => '99000',
			'descripcion' => 'centro de embrague y plato presion de embrague original aplica para xr 125l brio (motor de cadenilla) mejora el rendimiento de tu motocicleta'
        ),array(
			'nombre' => 'Farola',
			'modelo' => '2023',
			'marca' => 'Yamaha',
			'poster' => 'https://tienda-yamaha.com.co/2172/farola-completa-yamaha-ybr-125-e.jpg',
			'separada' => false,
            'precio' => ' 258200',
			'descripcion' => 'Farola Completa Yamaha YBR 125 E Te ofrece diseño, calidad y excelentes precio'
		),array(
			'nombre' => 'llantas',
			'modelo' => '2022',
			'marca' => 'Pirelli',
			'poster' => 'https://flamingo.vteximg.com.br/arquivos/ids/352816-770-770/image-7bbb2be026414221aa9e6d4e5b008081.jpg?v=637624913561200000',
			'separada' => false,
            'precio' => '166000',
			'descripcion' => 'Llanta para moto Angel Scooter 90/90/10Alto confort gracias a la acción combinada de la carcasa rígida y el diseño de la banda de rodamiento. Nuevo compuesto con un alto porcentaje de sílice para unas altas prestaciones en húmedo.'
		)

    );

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
			'poster' => 'https://auteco.vteximg.com.br/arquivos/ids/213251-1000-1000/0_Kawasaki_Z900RS_azul_MY22.png?v=637812766863370000',
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
        self::seedRepuesto();


        $this->command->info('Tabla Motos inicializada con datos');
        $this->command->info('Tabla Repuestos inicializada con datos');

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
    private function seedRepuesto()
    {

        DB::table('repuestos')->delete();

        foreach ( $this->arrayRepuestos as $repuestos) {
            # code..
            $repuesto = new Repuesto;
            $repuesto->nombre = $repuestos['nombre'];
            $repuesto->modelo = $repuestos['modelo'];
            $repuesto->marca = $repuestos['marca'];
            $repuesto->poster = $repuestos['poster'];
            $repuesto->precio = $repuestos['precio'];
            $repuesto->descripcion = $repuestos['descripcion'];

            $repuesto->save();

        }

    }
}
