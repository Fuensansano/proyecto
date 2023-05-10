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
    function the_full_journey_radiobuttons_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proofMissingTeacher')
            ->assertStatus(200)
            ->assertSee('He faltado la jornada completa')
            ->assertSee('No he faltado la jornada completa');
    }

    /** @test */
    function the_mid_journey_field_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proofMissingTeacher')
            ->assertStatus(200)
            ->assertSee('Desde las')
            ->assertSee('a las')
            ->assertSee('horas');
    }
}
