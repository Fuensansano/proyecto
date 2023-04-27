<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AutorizacionFamiliarTest extends TestCase
{
    /** @test */
    function the_activity_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/autorizacionFamiliar')
            ->assertStatus(200)
            ->assertSee('ACTIVIDAD PROGRAMADA');
    }

    /** @test */
    function the_activity_is_required() {
        /* $this->withExceptionHandling(); */

        $this->from('/autorizacionFamiliar')
            ->post(route('generarPDF'), [
                'activity' => null,
            ])
            ->assertSessionHasErrors('activity')
            ->assertRedirect(route('authFamForm'));
    }
}