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
            ->assertSee('D.Dña.');
    }

    /** @test */
    function the_department_field_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proofMissingTeacher')
            ->assertStatus(200)
            ->assertSee('Departamento');
    }

    /** @test */
    function the_missing_day_field_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proofMissingTeacher')
            ->assertStatus(200)
            ->assertSee('Día de falta');
    }

    /** @test */
    function the_full_day_field_exists_in_the_proof_missing_teacher_form_page() {
        $this->get('/proofMissingTeacher')
            ->assertStatus(200)
            ->assertSee('He faltado la jornada completa')
            ->assertSee('No he faltado la jornada completa');
    }
}
