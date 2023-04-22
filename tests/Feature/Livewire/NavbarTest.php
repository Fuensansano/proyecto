<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Navbar;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class NavbarTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Navbar::class);

        $component->assertStatus(200);
    }

    /** @test */
    public function there_is_a_dropdown_calls_alumnado()
    {
        $this->get('/')->assertSee('Alumnado');
    }

    /** @test */
    public function there_is_a_dropdown_calls_profesorado()
    {
        $this->get('/')->assertSee('Profesorado');
    }

    /** @test */
/*
    public function when_click_on_ies_logo_it_redirects_to_ies_web()
    {
        $this->get('/')
                ->click('ies-ingeniero-de-la-cierva-logo.webp')
                ->assertRedirect('https://iescierva.net');
    }
*/
}
