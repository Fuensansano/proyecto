<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\TestHelpers;

class FamilyAuthorizationTest extends TestCase
{
    use TestHelpers;

    protected array $defaultData = [
        'activity' => 'a random activity',
        'organizer' => 'a random organizer',
        'execution_date' => 'a random execution date',
        'departure_time' => '12:50',
        'goals' => 'a random goals',
        'deadline' => '12:50',
        'parents' => 'a random parents',
        'student' => 'a random student',
        'course' => 'a random course',
        'authorization' => 'a random authorization',
        'dni' => '12345678A',
    ];

    /** @test */
    function the_activity_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/family-authorization')
            ->assertStatus(200)
            ->assertSee('Actividad programada');
    }

    /** @test */
    function the_organizer_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/family-authorization')
            ->assertStatus(200)
            ->assertSee('Organizador/a');
    }

    /** @test */
    function the_execution_date_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/family-authorization')
            ->assertStatus(200)
            ->assertSee('Fecha realización');
    }

    /** @test */
    function the_departure_time_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/family-authorization')
            ->assertStatus(200)
            ->assertSee('Hora salida');
    }

    /** @test */
    function the_goals_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/family-authorization')
            ->assertStatus(200)
            ->assertSee('Objetivos y Contenidos');
    }

    /** @test */
    function the_deadline_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/family-authorization')
            ->assertStatus(200)
            ->assertSee('Fecha entrega');
    }

    /** @test */
    function the_parents_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/family-authorization')
            ->assertStatus(200)
            ->assertSee('Nombre y apellidos del Padre/Madre/Tutor');
    }

    /** @test */
    function the_student_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/family-authorization')
            ->assertStatus(200)
            ->assertSee('Nombre y apellidos del alumno');
    }

    /** @test */
    function the_course_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/family-authorization')
            ->assertStatus(200)
            ->assertSee('Curso del alumno');
    }

    /** @test */
    function the_authorization_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/family-authorization')
            ->assertStatus(200)
            ->assertSee('Tiene mi autorización para participar en la actividad programada y autorizo a la toma y difusión de imágenes de este día en la página web y/o RRSS del centro.')
            ->assertSee('No va a participar en la actividad programada.');
    }

    /** @test */
    function the_dni_field_exists_in_the_autorizacion_familiar_form_page() {
        $this->get('/family-authorization')
            ->assertStatus(200)
            ->assertSee('DNI Padre/Madre/Tutor');
    }

    /** @test */
    function the_activity_is_required() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'activity' => null,
            ]))
            ->assertSessionHasErrors(['activity' => 'La actividad es obligatoria']);
    }

    /** @test */
    function the_organizer_is_required() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'organizer' => null,
            ]))
            ->assertSessionHasErrors(['organizer' => 'El nombre del organizador es obligatorio']);
    }

    /** @test */
    function the_organizer_name_cannot_be_longer_than_100_characters() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'organizer' => 'Jhonny Depp Ruppert Emma Daniel Angeline Christian Marshall Robert Redford Harrison Ford Lucke Saray Emily',
            ]))
            ->assertSessionHasErrors(['organizer' => 'El nombre del organizador no puede tener más de 100 carácteres']);
    }

    /** @test */
    function the_execution_date_is_required() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'execution_date' => null,
            ]))
            ->assertSessionHasErrors(['execution_date' => 'La fecha de la actividad es obligatoria']);
    }

    /** @test */
    function the_execution_date_must_have_a_valid_format() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'execution_date' => 'invalid-date',
            ]))
            ->assertSessionHasErrors(['execution_date' => 'La fecha de la actividad debe tener un formato válido']);
    }

    /** @test */
    function the_departure_time_is_required() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'departure_time' => null,
            ]))
            ->assertSessionHasErrors(['departure_time' => 'La hora de salida es obligatoria']);
    }

    /** @test */
    function the_departure_time_must_have_a_valid_format() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'departure_time' => 'invalid-time',
            ]))
            ->assertSessionHasErrors(['departure_time' => 'La hora debe tener un formato válido']);
    }

    /** @test */
    function the_goals_is_required() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'goals' => null,
            ]))
            ->assertSessionHasErrors(['goals' => 'Los objetivos son obligatorios']);
    }

    /** @test */
    function the_goals_cannot_be_longer_than_250_characters() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'goals' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. It is a long established fact that ...',
            ]))
            ->assertSessionHasErrors(['goals' => 'Los objetivos y contenidos no pueden tener más de 250 carácteres']);
    }

    /** @test */
    function the_deadline_is_required() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'deadline' => null,
            ]))
            ->assertSessionHasErrors(['deadline' => 'La fecha de entrega de la hoja es obligatoria']);
    }

    /** @test */
    function the_deadline_must_have_a_valid_format() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'deadline' => 'fecha-invalida',
            ]))
            ->assertSessionHasErrors(['deadline' => 'La fecha de entrega de la hoja debe tener un formato válido']);
    }

    /** @test */
    function the_parents_is_required() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'parents' => null,
            ]))
            ->assertSessionHasErrors(['parents' => 'El nombre del padre/madre/tutor es obligatorio']);
    }

    /** @test */
    function the_parents_name_cannot_be_longer_than_50_characters() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'parents' => 'Jhonny Depp Ruppert Emma Daniel Angeline Christian Marshall',
            ]))
            ->assertSessionHasErrors(['parents' => 'El nombre del padre/madre/tutor no puede tener más de 50 carácteres']);
    }

    /** @test */
    function the_student_is_required() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'student' => null,
            ]))
            ->assertSessionHasErrors(['student' => 'El nombre del alumno es obligatorio']);
    }

    /** @test */
    function the_student_name_cannot_be_longer_than_50_characters() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'student' => 'Jhonny Depp Ruppert Emma Daniel Angeline Christian Marshall',
            ]))
            ->assertSessionHasErrors(['student' => 'El nombre del alumno no puede tener más de 50 carácteres']);
    }

    /** @test */
    function the_course_is_required() {
        $this->from('/family-authorization')
            ->post('/family-authorization', [
                'course' => null,
            ])
            ->assertSessionHasErrors(['course' => 'El curso del alumno es obligatorio']);
    }

    /** @test */
    function the_authorization_is_required() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'authorization' => null,
            ]))
            ->assertSessionHasErrors(['authorization' => 'La autorización es obligatoria']);
    }

    /** @test */
    function the_dni_is_required() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'dni' => null,
            ]))
            ->assertSessionHasErrors(['dni' => 'El DNI del padre/madre/tutor es obligatorio']);
    }

    /** @test */
    function the_dni_must_have_a_valid_format() {
        $this->from('/family-authorization')
            ->post('/family-authorization', $this->getValidData([
                'dni' => '111A',
            ]))
            ->assertSessionHasErrors(['dni' => 'El DNI debe tener un formato válido']);
    }
}
