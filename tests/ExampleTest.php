<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Faker\Factory as Faker;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    use WithoutMiddleware;
    protected $baseUrl = 'http://localhost:8000';

    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';
        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
        return $app;
    }


    public function testIndex(){
        $response = $this->call('GET', 'egresados');
        $this->assertEquals(200, $response->status());
    }

    public function testNuevaEncuesta(){
        $faker = Faker::create(); //Objeto para nombres aleatorios
        $response = $this->visit('egresados')
            ->type($faker->date($format = 'Y-m-d', $max = 'now'), 'fechaderespuesta')
            ->type($faker->name, 'nombre')
            ->select('hombre', 'genero')
            ->type($faker->date($format = 'Y-m-d', $max = 'now'), 'fnac')
            ->type($faker->city , 'nacionalidad')
            ->type($faker->city, 'lorigen')
            ->type($faker->city , 'ltrabajo')
            ->type($faker->phoneNumber, 'tcontacto')
            ->type($faker->email , 'correoelectronico')
            ->press('enviar')
            ->seePageIs('egresados');
        // var_dump($response);
        
    }
}


// $this->assertEquals(200, $response->getStatusCode());
// var_dump($response);


//$this->visit('egresados')
    // ->type('fechaderespuesta', $faker->date($format = 'Y-m-d', $max = 'now'))
    // ->type('nombre', $faker->name)
    // ->type('genero', $faker->email)
    // ->type('fnac', $faker->date($format = 'Y-m-d', $max = 'now'))
    // ->type('nacionalidad', $faker->city )
    // ->type('lorigen', $faker->city)
    // ->type('ltrabajo', $faker->city )
    // ->type('tcontacto', $faker->phoneNumber)
    // ->type('correoelectronico', $faker->email )
    // ->Pulse('enviar')
    // ->seePageIs('egresados');
    // $this->visit('/encuestas/egresados')
    //     ->type('2016-07-07', 'fechaderespuesta')
    //     ->type('alan cruz', 'nombre')
    //     ->select('hombre', 'genero')
    //     ->type('2016-07-08', 'fnac')
    //     ->type('mexico', 'nacionalidad')
    //     ->type('oaxaca', 'lorigen')
    //     ->type('mexico', 'ltrabajo')
    //     ->type('9512288922', 'tcontacto')
    //     ->type('cruzmendezalan@gmail.com', 'correoelectronico')
    //     ->type('computacion', 'carrera')
    //     ->select('cenaval', 'ftitulacion')
    //     ->type('2016-07-08', 'finiestudios')
    //     ->type('2016-07-09', 'lorigen')
    //     ->type('computacion', 'maestria')
    //     ->select('no', 'maestriatitulo')
    //     ->type('asdasd', 'doctorado')
    //     ->select('no', 'doctoradotitulo')
    //     ->type('gbnetworks', 'nempresa')
    //     ->select('propia', 'tempresa')
    //     ->type('2016-07-22', 'fingreso')
    //     ->type('ingeniero', 'pactual')
    //     ->type('desarrollador', 'pinicial')
    //     ->select('medio', 'thorario')
    //     ->type('9512288922', 'tempresa')
    //     ->type('2016-07-07', 'tcontrato')
    //     ->select('medio', 'imensual')
    //     ->select('medio', 'ftitulacion')
    //     ->press('enviar');
    

    // ->type('carrera', )
    // ->type('ftitulacion', )
    // ->type('finiestudios', )
    // ->type('maestria', )
    // ->type('maestriatitulo', )
    // ->type('doctoradotitulo', )
    // ->type('nempresa', )
    // ->type('tempresa', )
    // ->type('fingreso', )
    // ->type('pactual', )
    // ->type('pinicial', )
    // ->type('thorario', )
    // ->type('tcontacto', )
    // ->type('tempresa', )
    // ->type('imensual', )
    // ->type('alaborales', )