<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FamilyAuthorizationTest extends TestCase
{
    /** @test */
    function the_activity_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('Actividad programada');
    }

    /** @test */
    function the_organizer_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('Organizador/a');
    }

    /** @test */
    function the_execution_date_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('Fecha realización');
    }

    /** @test */
    function the_departure_time_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('Hora salida');
    }

    /** @test */
    function the_goals_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('Objetivos y Contenidos');
    }

    /** @test */
    function the_deadline_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('Fecha entrega');
    }

    /** @test */
    function the_parents_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('Padre/Madre/Tutor');
    }

    /** @test */
    function the_student_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('Alumno');
    }

    /** @test */
    function the_course_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('Curso del alumno');
    }

    /** @test */
    function the_authorization_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('Tiene mi autorización para participar en la actividad programada y autorizo a la toma y difusión de imágenes de este día en la página web y/o RRSS del centro.')
            ->assertSee('No va a participar en la actividad programada.');
    }

    /** @test */
    function the_dni_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get(route('authFamForm'))
            ->assertStatus(200)
            ->assertSee('DNI Padre/Madre/Tutor');
    }

    /** @test */
    function the_activity_is_required() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'activity' => null,
            ])
            ->assertSessionHasErrors(['activity' => 'La actividad es obligatoria']);
    }

    /** @test */
    function the_organizer_is_required() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'organizer' => null,
            ])
            ->assertSessionHasErrors(['organizer' => 'El nombre del organizador es obligatorio']);
    }

    /** @test */
    function the_execution_date_is_required() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'execution_date' => null,
            ])
            ->assertSessionHasErrors(['execution_date' => 'La fecha de la actividad es obligatoria']);
    }

    /** @test */
    function the_execution_date_must_have_a_valid_format() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'execution_date' => 'fecha-inválida',
            ])
            ->assertSessionHasErrors(['execution_date' => 'La fecha de la actividad debe tener un formato válido']);
    }

    /** @test */
    function the_departure_time_is_required() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'departure_time' => null,
            ])
            ->assertSessionHasErrors(['departure_time' => 'La hora de salida es obligatoria']);
    }

    /** @test */
    function the_departure_time_must_have_a_valid_format() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'departure_time' => 'hora-inválida',
            ])
            ->assertSessionHasErrors(['departure_time' => 'La hora debe tener un formato válido']);
    }

    /** @test */
    function the_goals_is_required() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'goals' => null,
            ])
            ->assertSessionHasErrors(['goals' => 'Los objetivos son obligatorios']);
    }

    /** @test */
    function the_deadline_is_required() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'deadline' => null,
            ])
            ->assertSessionHasErrors(['deadline' => 'La fecha de entrega de la hoja es obligatoria']);
    }

    /** @test */
    function the_deadline_must_have_a_valid_format() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'deadline' => 'fecha-invalida',
            ])
            ->assertSessionHasErrors(['deadline' => 'La fecha de entrega de la hoja debe tener un formato válido']);
    }

    /** @test */
    function the_parents_is_required() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'parents' => null,
            ])
            ->assertSessionHasErrors(['parents' => 'El nombre del padre/madre/tutor es obligatorio']);
    }

    /** @test */
    function the_student_is_required() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'student' => null,
            ])
            ->assertSessionHasErrors(['student' => 'El nombre del alumno es obligatorio']);
    }

    /** @test */
    function the_course_is_required() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'course' => null,
            ])
            ->assertSessionHasErrors(['course' => 'El curso del alumno es obligatorio']);
    }

    /** @test */
    function the_authorization_is_required() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'authorization' => null,
            ])
            ->assertSessionHasErrors(['authorization' => 'La autorización es obligatoria']);
    }

    /** @test */
    function the_dni_is_required() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'dni' => null,
            ])
            ->assertSessionHasErrors(['dni' => 'El DNI del padre/madre/tutor es obligatorio']);
    }

    /** @test */
    function the_dni_must_have_a_valid_format() {
        $this->from(route('authFamForm'))
            ->post(route('generatePDF'), [
                'dni' => '111A',
            ])
            ->assertSessionHasErrors(['dni' => 'El DNI debe tener un formato válido']);
    }
}