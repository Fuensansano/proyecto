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
            ->assertSee('Desde')
            ->assertSee('Hasta');
    }

    /** @test */
    /* function the_name_is_required() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'name' => null,
            ])
            ->assertSessionHasErrors(['name' => 'El nombre del profesor es obligatorio']);
    } */

    /** @test */
    /* function the_department_is_required() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'department' => null,
            ])
            ->assertSessionHasErrors(['department' => 'El departamento es obligatorio']);
    } */

    /** @test */
    /* function the_dni_is_required() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'dni' => null,
            ])
            ->assertSessionHasErrors(['dni' => 'El DNI es obligatorio']);
    } */

    /** @test */
    /* function the_dni_must_have_a_valid_format() {
    $this->from('/proof-missing-teacher')
        ->post('/proof-missing-teacher', [
            'dni' => 'invalid-format',
        ])
        ->assertSessionHasErrors(['dni' => 'El DNI tiene que tener un formato: XXXXXXXXA']);
    } */

    /** @test */
    /* function the_first_missing_day_is_required() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'missingDay1' => null,
            ])
            ->assertSessionHasErrors(['missingDay1' => 'El día de falta es obligatorio']);
    } */

    /** @test */
    /* function the_first_missing_day_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'missingDay1' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['missingDay1' => 'El día de falta debe tener un formato válido']);
    } */

    /** @test */
    /* function the_first_radio_type_of_journey_is_required() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'journeyType1' => null,
            ])
            ->assertSessionHasErrors(['journeyType1' => 'Es obligatorio elegir una opción de las dos']);
    } */

    /** @test */
    /* function the_first_journey_start_time_is_required_if_the_first_radio_type_of_journey_is_midJourneyOption1() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'journeyType1' => 'midJourneyOption1',
                'journeyStartTime1' => null,
            ])
            ->assertSessionHasErrors(['journeyStartTime1' => 'Ambas horas son obligatorias si se ha marcado la segunda opción']);
    } */

    /** @test */
    /* function the_first_journey_start_time_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'journeyType1' => 'midJourneyOption1',
                'journeyStartTime1' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['journeyStartTime1' => 'Ambas horas deben tener un formato válido']);
    } */

    /** @test */
    /* function the_first_journey_end_time_is_required_if_the_first_radio_type_of_journey_is_midJourneyOption1() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'journeyType1' => 'midJourneyOption1',
                'journeyEndTime1' => null,
            ])
            ->assertSessionHasErrors(['journeyEndTime1' => 'Ambas horas son obligatorias si se ha marcado la segunda opción']);
    } */

    /** @test */
    /* function the_first_journey_end_time_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'journeyType1' => 'midJourneyOption1',
                'journeyEndTime1' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['journeyEndTime1' => 'Ambas horas deben tener un formato válido']);
    } */

    
    /** @test */
    /* function the_first_journey_start_time_and_the_first_journey_end_time_are_not_required_if_the_first_radio_type_of_journey_is_fullJourneyOption1() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'name' => 'Tomas',
                'department' => 'Informatica',
                'dni' => '12345678A',
                'missingDay1' => '2020-01-01',
                'journeyType1' => 'fullJourneyOption1',
                'journeyStartTime1' => null,
                'journeyEndTime1' => null,
            ])
            ->assertSessionHasNoErrors();
    }

    /** @test */
    /* function the_second_missing_day_is_nullable() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'name' => 'Tomas',
                'department' => 'Informatica',
                'dni' => '12345678A',
                'missingDay1' => '2020-01-01',
                'journeyType1' => 'fullJourneyOption1',
                'missingDay2' => null,
            ])
            ->assertSessionHasNoErrors();
    } */

    /** @test */
    /* function the_second_missing_day_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'missingDay2' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['missingDay2' => 'El día de falta debe tener un formato válido']);
    } */

    /** @test */
    /* function the_second_radio_type_of_journey_is_nullable() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'name' => 'Tomas',
                'department' => 'Informatica',
                'dni' => '12345678A',
                'missingDay1' => '2020-01-01',
                'journeyType1' => 'fullJourneyOption1',
                'missingDay2' => '2000-01-01',
                'journeyType2' => null,
            ])
            ->assertSessionHasNoErrors();
    } */

    /** @test */
    /* function the_second_journey_start_time_is_nullable() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'name' => 'Tomas',
                'department' => 'Informatica',
                'dni' => '12345678A',
                'missingDay1' => '2020-01-01',
                'journeyType1' => 'fullJourneyOption1',
                'journeyType2' => 'midJourneyOption2',
                'journeyStartTime2' => null,
            ])
            ->assertSessionHasNoErrors();
    } */

    /** @test */
    /* function the_second_journey_start_time_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'journeyType2' => 'midJourneyOption2',
                'journeyStartTime2' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['journeyStartTime2' => 'Ambas horas deben tener un formato válido']);
    } */

    /** @test */
    /* function the_second_journey_end_time_is_nullable() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'name' => 'Tomas',
                'department' => 'Informatica',
                'dni' => '12345678A',
                'missingDay1' => '2020-01-01',
                'journeyType1' => 'fullJourneyOption1',
                'journeyType2' => 'midJourneyOption2',
                'journeyEndTime2' => null,
            ])
            ->assertSessionHasNoErrors();
    } */

    /** @test */
    /* function the_second_journey_end_time_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'journeyType2' => 'midJourneyOption2',
                'journeyEndTime2' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['journeyEndTime2' => 'Ambas horas deben tener un formato válido']);
    } */

    /** @test */
    /* function the_third_missing_day_is_nullable() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'name' => 'Tomas',
                'department' => 'Informatica',
                'dni' => '12345678A',
                'missingDay1' => '2020-01-01',
                'journeyType1' => 'fullJourneyOption1',
                'missingDay3' => null,
            ])
            ->assertSessionHasNoErrors();
    } */

    /** @test */
    /* function the_third_missing_day_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'missingDay3' => 'formato-no-valido',
            ])
            ->assertSessionHasErrors(['missingDay3' => 'El día de falta debe tener un formato válido']);
    } */

    /** @test */
    /* function the_third_radio_type_of_journey_is_nullable() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'name' => 'Tomas',
                'department' => 'Informatica',
                'dni' => '12345678A',
                'missingDay1' => '2020-01-01',
                'journeyType1' => 'fullJourneyOption1',
                'journeyType3' => null,
            ])
            ->assertSessionHasNoErrors();
    } */

    /** @test */
    /* function the_third_journey_start_time_is_nullable() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'name' => 'Tomas',
                'department' => 'Informatica',
                'dni' => '12345678A',
                'missingDay1' => '2020-01-01',
                'journeyType1' => 'fullJourneyOption1',
                'journeyStartTime3' => null,
            ])
            ->assertSessionHasNoErrors();
    } */

    /** @test */
    /* function the_journeyStartTime3_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'journeyType3' => 'midJourneyOption3',
                'journeyStartTime3' => 'formato-no-valido',
            ])
            ->assertSessionHasErrors(['journeyStartTime3' => 'Ambas horas deben tener un formato válido']);
    } */

    /** @test */
    /* function the_third_journey_end_time_is_nullable() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'name' => 'Tomas',
                'department' => 'Informatica',
                'dni' => '12345678A',
                'missingDay1' => '2020-01-01',
                'journeyType1' => 'fullJourneyOption1',
                'journeyEndTime3' => null,
            ])
            ->assertSessionHasNoErrors();
    } */

    /** @test */
    /* function the_third_journey_end_time_must_have_a_valid_format() {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', [
                'journeyType3' => 'midJourneyOption3',
                'journeyEndTime3' => 'invalid-format',
            ])
            ->assertSessionHasErrors(['journeyEndTime3' => 'Ambas horas deben tener un formato válido']);
    } */
}
