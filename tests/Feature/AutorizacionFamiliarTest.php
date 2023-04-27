<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AutorizacionFamiliarTest extends TestCase
{
    /** @test */
    function the_activity_field_exists_in_the_autorizacion_familiar_form_page()
    {
        $this->get('/autorizacionFamiliar')
            ->assertStatus(200)
            ->assertSee('ACTIVIDAD PROGRAMADA');
    }
}
