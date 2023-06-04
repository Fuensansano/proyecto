<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\TestHelpers;

class ProofMissingTeacherTest extends TestCase
{
    use TestHelpers;

    protected array $defaultData = [
        'name' => 'a random name',
        'department' => 'a random department',
        'dni' => '12345678A',
        'missingDay1' => '2020-01-01',
        'missingDay2' => null,
        'missingDay3' => null,
        'journeyType1' => 'fullJourneyOption1',
        'journeyStartTime1' => null,
        'journeyEndTime1' => null,
        'permissionsSelect' => null,
        'journeyType3' => null,
        'journeyStartTime3' => null,
        'journeyEndTime3' => null,
    ];

    /** @test */
    function the_name_field_exists_in_the_proof_missing_teacher_form_page()
    {
        $this->get('/proof-missing-teacher')
            ->assertStatus(200)
            ->assertSee('Nombre');
    }

    /** @test */
    function the_department_field_exists_in_the_proof_missing_teacher_form_page()
    {
        $this->get('/proof-missing-teacher')
            ->assertStatus(200)
            ->assertSee('Departamento');
    }

    /** @test */
    function the_dni_field_exists_in_the_proof_missing_teacher_form_page()
    {
        $this->get('/proof-missing-teacher')
            ->assertStatus(200)
            ->assertSee('DNI');
    }

    /** @test */
    function the_journey_radiobuttons_exists_in_the_proof_missing_teacher_form_page()
    {
        $this->get('/proof-missing-teacher')
            ->assertStatus(200)
            ->assertSee('He faltado la jornada completa')
            ->assertSee('No he faltado la jornada completa');
    }

    /** @test */
    function the_from_and_to_fields_exists_in_the_proof_missing_teacher_form_page()
    {
        $this->get('/proof-missing-teacher')
            ->assertStatus(200)
            ->assertSee('Desde')
            ->assertSee('Hasta');
    }

    /** @test */
    function the_name_is_required()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'name' => null,
            ]))
            ->assertSessionHasErrors(['name' => 'El nombre del profesor es obligatorio']);
    }

    /** @test */
    function the_name_cannot_be_longer_than_50_characters()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'name' => 'Jhonny Depp Ruppert Emma Daniel Angeline Christian Marshall',
            ]))
            ->assertSessionHasErrors(['name' => 'El nombre no puede tener más de 50 carácteres']);
    }

    /** @test */
    function the_department_is_required()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'department' => null,
            ]))
            ->assertSessionHasErrors(['department' => 'El departamento es obligatorio']);
    }

    /** @test */
    function the_department_cannot_be_longer_than_100_characters()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'department' => 'Typing a 100-character long text to test the another reason field and its validation to ensure pdf view',
            ]))
            ->assertSessionHasErrors(['department' => 'El departamento no puede tener más de 100 carácteres']);
    }

    /** @test */
    function the_dni_is_required()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'dni' => null,
            ]))
            ->assertSessionHasErrors(['dni' => 'El DNI es obligatorio']);
    }

    /** @test */
    function the_dni_must_have_a_valid_format()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'dni' => 'invalid-format',
            ]))
            ->assertSessionHasErrors(['dni' => 'Tiene que tener ser un NIF o NIE válido']);
    }

    /** @test */
    function the_first_missing_day_is_required()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'missingDay1' => null,
            ]))
            ->assertSessionHasErrors(['missingDay1' => 'El día de falta es obligatorio']);
    }

    /** @test */
    function the_first_missing_day_must_have_a_valid_format()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'missingDay1' => 'invalid-format',
            ]))
            ->assertSessionHasErrors(['missingDay1' => 'El día de falta debe tener un formato válido']);
    }

    /** @test */
    function the_first_radio_type_of_journey_is_required()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'journeyType1' => null,
            ]))
            ->assertSessionHasErrors(['journeyType1' => 'Es obligatorio elegir una opción de las dos']);
    }

    /** @test */
    function the_first_journey_start_time_is_required_if_the_first_radio_type_of_journey_is_midJourneyOption1()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'journeyType1' => 'midJourneyOption1',
                'journeyStartTime1' => null,
            ]))
            ->assertSessionHasErrors(['journeyStartTime1' => 'Ambas horas son obligatorias si se ha marcado la segunda opción']);
    }

    /** @test */
    function the_first_journey_start_time_must_have_a_valid_format()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'journeyType1' => 'midJourneyOption1',
                'journeyStartTime1' => 'invalid-format',
            ]))
            ->assertSessionHasErrors(['journeyStartTime1' => 'Ambas horas deben tener un formato válido']);
    }

    /** @test */
    function the_first_journey_end_time_is_required_if_the_first_radio_type_of_journey_is_midJourneyOption1()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'journeyType1' => 'midJourneyOption1',
                'journeyEndTime1' => null,
            ]))
            ->assertSessionHasErrors(['journeyEndTime1' => 'Ambas horas son obligatorias si se ha marcado la segunda opción']);
    }

    /** @test */
    function the_first_journey_end_time_must_have_a_valid_format()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'journeyType1' => 'midJourneyOption1',
                'journeyEndTime1' => 'invalid-format',
            ]))
            ->assertSessionHasErrors(['journeyEndTime1' => 'Ambas horas deben tener un formato válido']);
    }


    /** @test */
    function the_reason_mast_to_be_required()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'permissionsSelect' => null
            ]))
            ->assertSessionHasErrors(['permissionsSelect' => 'Debe seleccionar un motivo']);
    }

    /** @test */
    public function select_options_are_correctly_configured()
    {
        $selectOptions = config('proofMissingTeacherSelectOptions');

        $this->get('/proof-missing-teacher')
            ->assertStatus(200)
            ->assertSee($selectOptions);
    }

    /** @test */
    function the_second_missing_day_must_have_a_valid_format()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher',  $this->getValidData([
                'missingDay2' => 'invalid-format',
            ]))
            ->assertSessionHasErrors(['missingDay2' => 'El día de falta debe tener un formato válido']);
    }

    /** @test */
    function the_second_journey_start_time_must_have_a_valid_format()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher',  $this->getValidData([
                'journeyType2' => 'midJourneyOption2',
                'journeyStartTime2' => 'invalid-format',
            ]))
            ->assertSessionHasErrors(['journeyStartTime2' => 'Ambas horas deben tener un formato válido']);
    }


    /** @test */
    function the_second_journey_end_time_must_have_a_valid_format()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher',  $this->getValidData([
                'journeyType2' => 'midJourneyOption2',
                'journeyEndTime2' => 'invalid-format',
            ]))
            ->assertSessionHasErrors(['journeyEndTime2' => 'Ambas horas deben tener un formato válido']);
    }

    /** @test */
    function the_third_missing_day_must_have_a_valid_format()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'missingDay3' => 'invalid-format',
            ]))
            ->assertSessionHasErrors(['missingDay3' => 'El día de falta debe tener un formato válido']);
    }

    /** @test */
    function the_journeyStartTime3_must_have_a_valid_format()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'journeyType3' => 'midJourneyOption3',
                'journeyStartTime3' => 'invalid-format',
            ]))
            ->assertSessionHasErrors(['journeyStartTime3' => 'Ambas horas deben tener un formato válido']);
    }

    /** @test */
    function the_third_journey_end_time_must_have_a_valid_format()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'journeyType3' => 'midJourneyOption3',
                'journeyEndTime3' => 'invalid-format',
            ]))
            ->assertSessionHasErrors(['journeyEndTime3' => 'Ambas horas deben tener un formato válido']);
    }

    /** @test */
    function the_another_reason_field_cannot_be_longer_than_100_characters()
    {
        $this->from('/proof-missing-teacher')
            ->post('/proof-missing-teacher', $this->getValidData([
                'anotherReason' => 'Typing a 100-character long text to test the another reason field and its validation to ensure pdf view',
            ]))
            ->assertSessionHasErrors(['anotherReason' => 'El motivo no puede tener más de 100 carácteres']);
    }
}
