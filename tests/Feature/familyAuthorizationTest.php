<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AutorizacionFamiliarTest extends TestCase
{
    /** @test */
    function the_activity_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('ACTIVIDAD PROGRAMADA');
    }

    /** @test */
    function the_organizer_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('ORGANIZADOR/A');
    }

    /** @test */
    function the_execution_date_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('FECHA REALIZACIÓN');
    }

    /** @test */
    function the_departure_time_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('HORA SALIDA');
    }

    /** @test */
    function the_goals_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('OBJETIVOS Y CONTENIDOS');
    }

    /** @test */
    function the_deadline_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('FECHA ENTREGA');
    }

    /** @test */
    function the_parents_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('PADRE/MADRE/TUTOR');
    }

    /** @test */
    function the_student_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('ALUMNO');
    }

    /** @test */
    function the_course_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('CURSO DEL ALUMNO');
    }

    /** @test */
    function the_authorization_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('Tiene mi autorización para participar en la actividad programada y autorizo a la toma y difusión de imágenes de este día en la página web y/o RRSS del centro.')
            ->assertSee('No va a participar en la actividad programada.');
    }

    /** @test */
    function the_activity_is_required() {
        /* $this->withExceptionHandling(); */

        $this->from(route('authFamForm'))
            ->post(route('generarPDF'), [
                'activity' => null,
            ])
            ->assertSessionHasErrors('activity')
            ->assertRedirect(route('authFamForm'));
    }

    /** @test */
    function the_organizer_is_required() {
        /* $this->withExceptionHandling(); */

        $this->from(route('authFamForm'))
            ->post(route('generarPDF'), [
                'organizer' => null,
            ])
            ->assertSessionHasErrors('organizer')
            ->assertRedirect(route('authFamForm'));
    }

    /** @test */
    function the_execution_date_is_required() {
        /* $this->withExceptionHandling(); */

        $this->from(route('authFamForm'))
            ->post(route('generarPDF'), [
                'execution_date' => null,
            ])
            ->assertSessionHasErrors('execution_date')
            ->assertRedirect(route('authFamForm'));
    }

    /** @test */
    function the_departure_time_is_required() {
        /* $this->withExceptionHandling(); */

        $this->from(route('authFamForm'))
            ->post(route('generarPDF'), [
                'departure_time' => null,
            ])
            ->assertSessionHasErrors('departure_time')
            ->assertRedirect(route('authFamForm'));
    }

    /** @test */
    function the_goals_is_required() {
        /* $this->withExceptionHandling(); */

        $this->from(route('authFamForm'))
            ->post(route('generarPDF'), [
                'goals' => null,
            ])
            ->assertSessionHasErrors('goals')
            ->assertRedirect(route('authFamForm'));
    }

    /** @test */
    function the_deadline_is_required() {
        /* $this->withExceptionHandling(); */

        $this->from(route('authFamForm'))
            ->post(route('generarPDF'), [
                'deadline' => null,
            ])
            ->assertSessionHasErrors('deadline')
            ->assertRedirect(route('authFamForm'));
    }

    /** @test */
    function the_parents_is_required() {
        /* $this->withExceptionHandling(); */

        $this->from(route('authFamForm'))
            ->post(route('generarPDF'), [
                'parents' => null,
            ])
            ->assertSessionHasErrors('parents')
            ->assertRedirect(route('authFamForm'));
    }

    /** @test */
    function the_student_is_required() {
        /* $this->withExceptionHandling(); */

        $this->from(route('authFamForm'))
            ->post(route('generarPDF'), [
                'student' => null,
            ])
            ->assertSessionHasErrors('student')
            ->assertRedirect(route('authFamForm'));
    }

    /** @test */
    function the_course_is_required() {
        /* $this->withExceptionHandling(); */

        $this->from(route('authFamForm'))
            ->post(route('generarPDF'), [
                'course' => null,
            ])
            ->assertSessionHasErrors('course')
            ->assertRedirect(route('authFamForm'));
    }

    /** @test */
    function the_authorization_is_required() {
        /* $this->withExceptionHandling(); */

        $this->from(route('authFamForm'))
            ->post(route('generarPDF'), [
                'authorization' => null,
            ])
            ->assertSessionHasErrors('authorization')
            ->assertRedirect(route('authFamForm'));
    }

    /** @test */
    function the_dni_is_required() {
        /* $this->withExceptionHandling(); */

        $this->from(route('authFamForm'))
            ->post(route('generarPDF'), [
                'dni' => null,
            ])
            ->assertSessionHasErrors('dni')
            ->assertRedirect(route('authFamForm'));
    }
}