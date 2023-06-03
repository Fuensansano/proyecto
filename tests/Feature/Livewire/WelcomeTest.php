<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Navbar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class WelcomeTest extends TestCase
{

    /** @test */
    public function there_is_a_navbar_livewire_component()
    {
        $this->get('/')->assertSeeLivewire('navbar');
    }

    /** @test */
    public function there_is_a_search_livewire_component()
    {
        $this->get('/')->assertSeeLivewire('search');
    }

    /** @test */
    public function select_options_are_correctly_configured()
    {
        $selectOptions = config('typeOfForms');

        $expectedOptions = [
            '/' => 'Seleccione una opción',
            '/extracurricular-activity' => 'Actividad extraescolar',
            './family-authorization' => 'Autorización familiar',
            './proof-missing-teacher' => 'Justificante de falta del profesorado'
        ];

        $this->assertEquals($expectedOptions, $selectOptions);
    }
    
}
