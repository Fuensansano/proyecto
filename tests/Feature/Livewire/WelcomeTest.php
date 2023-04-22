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
}
