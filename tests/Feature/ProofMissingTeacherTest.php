<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProofMissingTeacherTest extends TestCase
{
    /** @test */
    function the_name_field_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proof-missing-teacher')
            ->assertStatus(200)
            ->assertSee('Nombre');
    }

    /** @test */
    function the_department_field_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proof-missing-teacher')
            ->assertStatus(200)
            ->assertSee('Departamento');
    }

    /** @test */
    function the_dni_field_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proof-missing-teacher')
            ->assertStatus(200)
            ->assertSee('DNI');
    }

    /** @test */
    function the_journey_radiobuttons_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proof-missing-teacher')
            ->assertStatus(200)
            ->assertSee('He faltado la jornada completa')
            ->assertSee('No he faltado la jornada completa');
    }

    /** @test */
    function the_from_and_to_fields_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proof-missing-teacher')
            ->assertStatus(200)
            ->assertSee('Desde las')
            ->assertSee('a las');
    }

    /** @test */
    function the_name_is_required() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'name' => null,
            ])
            ->assertSessionHasErrors(['name' => 'El nombre del profesor es obligatorio']);
    }

    /** @test */
    function the_department_is_required() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'department' => null,
            ])
            ->assertSessionHasErrors(['department' => 'El departamento es obligatorio']);
    }

    /** @test */
    function the_dni_is_required() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'dni' => null,
            ])
            ->assertSessionHasErrors(['dni' => 'El DNI es obligatorio']);
    }

    /** @test */
    function the_dni_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'dni' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['dni' => 'El DNI tiene que tener un formato: XXXXXXXXA']);
    }

    /** @test */
    function the_missingDay1_is_required() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'missingDay1' => null,
            ])
            ->assertSessionHasErrors(['missingDay1' => 'El día de falta es obligatorio']);
    }

    /** @test */
    function the_missingDay1_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'missingDay1' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['missingDay1' => 'El día de falta debe tener un formato válido']);
    }

    /** @test */
    function the_journey_option1_is_required() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option1' => null,
            ])
            ->assertSessionHasErrors(['journey_option1' => 'Es obligatorio elegir una opción de las dos']);
    }

    /** @test */
    function the_midJourneyFrom1_is_required_if_journey_option1_is_mid_journey_option1() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option1' => 'mid_journey_option1',
                'midJourneyFrom1' => null,
            ])
            ->assertSessionHasErrors(['midJourneyFrom1' => 'Ambas horas son obligatorias si se ha marcado la segunda opción']);
    }

    /** @test */
    function the_midJourneyFrom1_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option1' => 'mid_journey_option1',
                'midJourneyFrom1' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['midJourneyFrom1' => 'Ambas horas deben tener un formato válido']);
    }

    /** @test */
    function the_midJourneyTo1_is_required_if_journey_option1_is_mid_journey_option1() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option1' => 'mid_journey_option1',
                'midJourneyTo1' => null,
            ])
            ->assertSessionHasErrors(['midJourneyTo1' => 'Ambas horas son obligatorias si se ha marcado la segunda opción']);
    }

    /** @test */
    function the_midJourneyTo1_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option1' => 'mid_journey_option1',
                'midJourneyTo1' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['midJourneyTo1' => 'Ambas horas deben tener un formato válido']);
    }

    // TODO
    /** @test */
    /* function the_midJourneyFrom1_and_midJourneyTo1_are_not_required_if_journey_option1_is_full_journey_option1() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option1' => 'full_journey_option1',
                'midJourneyFrom1' => null,
                'midJourneyTo1' => null,
            ])
            ->assertSee('hola');
    } */

    // TODO
    /** @test */
    /* function the_missingDay2_is_required() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'missingDay2' => null,
            ])
            ->assertSessionHasErrors(['missingDay2' => 'El día de falta es obligatorio si se rellena']);
    } */

    /** @test */
    function the_missingDay2_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'missingDay2' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['missingDay2' => 'El día de falta debe tener un formato válido']);
    }

    /** @test */
    function the_journey_option2_is_required_if_missingDay2_is_not_null() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'missingDay2' => '01/01/2000',
                'journey_option2' => null,
            ])
            ->assertSessionHasErrors(['journey_option2' => 'Es obligatorio elegir una opción de las dos si se rellena el campo de día faltado']);
    }

    /** @test */
    function the_midJourneyFrom2_is_required_if_journey_option2_is_mid_journey_option2() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option2' => 'mid_journey_option2',
                'midJourneyFrom2' => null,
            ])
            ->assertSessionHasErrors(['midJourneyFrom2' => 'Ambas horas son obligatorias si se ha marcado la segunda opción']);
    }

    /** @test */
    function the_midJourneyFrom2_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option2' => 'mid_journey_option2',
                'midJourneyFrom2' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['midJourneyFrom2' => 'Ambas horas deben tener un formato válido']);
    }

    /** @test */
    function the_midJourneyTo2_is_required_if_journey_option2_is_mid_journey_option2() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option2' => 'mid_journey_option2',
                'midJourneyTo2' => null,
            ])
            ->assertSessionHasErrors(['midJourneyTo2' => 'Ambas horas son obligatorias si se ha marcado la segunda opción']);
    }

    /** @test */
    function the_midJourneyTo2_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option2' => 'mid_journey_option2',
                'midJourneyTo2' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['midJourneyTo2' => 'Ambas horas deben tener un formato válido']);
    }

    // TODO
    /** @test */
    /* function the_midJourneyFrom2_and_midJourneyTo2_are_not_required_if_journey_option2_is_full_journey_option2() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option2' => 'full_journey_option2',
                'midJourneyFrom2' => null,
                'midJourneyTo2' => null,
            ])
            ->assertSee('hola');
    } */

    // TODO
    /** @test */
    /* function the_missingDay3_is_required() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'missingDay3' => null,
            ])
            ->assertSessionHasErrors(['missingDay3' => 'El día de falta es obligatorio si se rellena']);
    } */

    /** @test */
    function the_missingDay3_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'missingDay3' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['missingDay3' => 'El día de falta debe tener un formato válido']);
    }

    /** @test */
    function the_journey_option3_is_required_if_missingDay3_is_not_null() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'missingDay3' => '01/01/2000',
                'journey_option3' => null,
            ])
            ->assertSessionHasErrors(['journey_option3' => 'Es obligatorio elegir una opción de las dos si se rellena el campo de día faltado']);
    }

    /** @test */
    function the_midJourneyFrom3_is_required_if_journey_option3_is_mid_journey_option3() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option3' => 'mid_journey_option3',
                'midJourneyFrom3' => null,
            ])
            ->assertSessionHasErrors(['midJourneyFrom3' => 'Ambas horas son obligatorias si se ha marcado la segunda opción']);
    }

    /** @test */
    function the_midJourneyFrom3_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option3' => 'mid_journey_option3',
                'midJourneyFrom3' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['midJourneyFrom3' => 'Ambas horas deben tener un formato válido']);
    }

    /** @test */
    function the_midJourneyTo3_is_required_if_journey_option3_is_mid_journey_option3() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option3' => 'mid_journey_option3',
                'midJourneyTo3' => null,
            ])
            ->assertSessionHasErrors(['midJourneyTo3' => 'Ambas horas son obligatorias si se ha marcado la segunda opción']);
    }

    /** @test */
    function the_midJourneyTo3_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post(route('generatePDF2'), [
                'journey_option3' => 'mid_journey_option3',
                'midJourneyTo3' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['midJourneyTo3' => 'Ambas horas deben tener un formato válido']);
    }
}
