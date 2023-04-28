<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AutorizacionFamiliarTest extends TestCase
{
    /** @test */
    function the_activity_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/autorizacionFamiliar')
            ->assertStatus(200)
            ->assertSee('ACTIVIDAD PROGRAMADA');
    }

    /** @test */
    function the_organizer_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/autorizacionFamiliar')
            ->assertStatus(200)
            ->assertSee('ORGANIZADOR/A');
    }

    /** @test */
    function the_execution_date_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/autorizacionFamiliar')
            ->assertStatus(200)
            ->assertSee('FECHA REALIZACIÓN');
    }

    /** @test */
    function the_departure_time_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/autorizacionFamiliar')
            ->assertStatus(200)
            ->assertSee('HORA SALIDA');
    }

    /** @test */
    function the_goals_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/autorizacionFamiliar')
            ->assertStatus(200)
            ->assertSee('OBJETIVOS Y CONTENIDOS');
    }

    /** @test */
    function the_deadline_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/autorizacionFamiliar')
            ->assertStatus(200)
            ->assertSee('FECHA ENTREGA');
    }

    /** @test */
    function the_parents_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/autorizacionFamiliar')
            ->assertStatus(200)
            ->assertSee('PADRE/MADRE/TUTOR');
    }

    /** @test */
    function the_student_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/autorizacionFamiliar')
            ->assertStatus(200)
            ->assertSee('ALUMNO');
    }

    /** @test */
    function the_course_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/autorizacionFamiliar')
            ->assertStatus(200)
            ->assertSee('CURSO DEL ALUMNO');
    }

    /** @test */
    function the_authorization_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/autorizacionFamiliar')
            ->assertStatus(200)
            ->assertSee('Tiene mi autorización para participar en la actividad programada y autorizo a la toma y difusión de imágenes de este día en la página web y/o RRSS del centro.')
            ->assertSee('No va a participar en la actividad programada.');
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