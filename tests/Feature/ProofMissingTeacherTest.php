<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProofMissingTeacherTest extends TestCase
{
    /** @test */
    function the_name_field_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proofMissingTeacher')
            ->assertStatus(200)
            ->assertSee('Nombre');
    }

    /** @test */
    function the_department_field_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proofMissingTeacher')
            ->assertStatus(200)
            ->assertSee('Departamento');
    }

    /** @test */
    function the_dni_field_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proofMissingTeacher')
            ->assertStatus(200)
            ->assertSee('DNI');
    }

    /** @test */
    function the_journey_radiobuttons_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proofMissingTeacher')
            ->assertStatus(200)
            ->assertSee('He faltado la jornada completa')
            ->assertSee('No he faltado la jornada completa');
    }

    /** @test */
    function the_from_and_to_fields_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proofMissingTeacher')
            ->assertStatus(200)
            ->assertSee('Desde las')
            ->assertSee('a las');
    }

    /** @test */
    function the_name_is_required() {
        $this->from('/proofMissingTeacher')
            ->post(route('generatePDF2'), [
                'name' => null,
            ])
            ->assertSessionHasErrors(['name' => 'El nombre del profesor es obligatorio']);
    }

    /** @test */
    function the_department_is_required() {
        $this->from('/proofMissingTeacher')
            ->post(route('generatePDF2'), [
                'department' => null,
            ])
            ->assertSessionHasErrors(['department' => 'El departamento es obligatorio']);
    }

    /** @test */
    function the_dni_is_required() {
        $this->from('/proofMissingTeacher')
            ->post(route('generatePDF2'), [
                'dni' => null,
            ])
            ->assertSessionHasErrors(['dni' => 'El DNI es obligatorio']);
    }

    /** @test */
    function the_dni_must_have_a_valid_format() {
        $this->from('/proofMissingTeacher')
            ->post(route('generatePDF2'), [
                'dni' => 'formato-no-valido',
            ])
            ->assertSessionHasErrors(['dni' => 'El DNI tiene que tener un formato: XXXXXXXXA']);
    }

    /** @test */
    function the_missingDay1_is_required() {
        $this->from('/proofMissingTeacher')
            ->post(route('generatePDF2'), [
                'missingDay1' => null,
            ])
            ->assertSessionHasErrors(['missingDay1' => 'El día de falta es obligatorio']);
    }

    /** @test */
    function the_missingDay1_must_have_a_valid_format() {
        $this->from('/proofMissingTeacher')
            ->post(route('generatePDF2'), [
                'missingDay1' => 'formato-no-valido',
            ])
            ->assertSessionHasErrors(['missingDay1' => 'El día de falta debe tener un formato válido']);
    }

    /** @test */
    function the_option1_is_required() {
        $this->from('/proofMissingTeacher')
            ->post(route('generatePDF2'), [
                'option1' => null,
            ])
            ->assertSessionHasErrors(['option1' => 'Es obligatorio elegir una opción de las dos']);
    }

    /** @test */
    function the_midJourneyFrom1_is_required_if_option1_is_no1() {
        $this->from('/proofMissingTeacher')
            ->post(route('generatePDF2'), [
                'option1' => 'no1',
                'midJourneyFrom1' => null,
            ])
            ->assertSessionHasErrors(['midJourneyFrom1' => 'Ambas horas son obligatorias si se ha marcado la segunda opción']);
    }

    /** @test */
    function the_midJourneyFrom1_must_have_a_valid_format() {
        $this->from('/proofMissingTeacher')
            ->post(route('generatePDF2'), [
                'option1' => 'no1',
                'midJourneyFrom1' => 'formato-no-valido',
            ])
            ->assertSessionHasErrors(['midJourneyFrom1' => 'Ambas horas deben tener un formato válido']);
    }

    /** @test */
    function the_midJourneyTo1_is_required_if_option1_is_no1() {
        $this->from('/proofMissingTeacher')
            ->post(route('generatePDF2'), [
                'option1' => 'no1',
                'midJourneyTo1' => null,
            ])
            ->assertSessionHasErrors(['midJourneyTo1' => 'Ambas horas son obligatorias si se ha marcado la segunda opción']);
    }

    /** @test */
    function the_midJourneyTo1_must_have_a_valid_format() {
        $this->from('/proofMissingTeacher')
            ->post(route('generatePDF2'), [
                'option1' => 'no1',
                'midJourneyTo1' => 'formato-no-valido',
            ])
            ->assertSessionHasErrors(['midJourneyTo1' => 'Ambas horas deben tener un formato válido']);
    }

    // TODO
    /** @test */
    /* function the_midJourneyFrom1_and_midJourneyTo1_are_not_required_if_option1_is_yes1() {
        $this->withoutExceptionHandling();
        
        $this->from('/proofMissingTeacher')
            ->post(route('generatePDF2'), [
                'option1' => 'yes1',
                'midJourneyFrom1' => null,
                'midJourneyTo1' => null,
            ])
            ->assertSee('hola');
    } */

}
