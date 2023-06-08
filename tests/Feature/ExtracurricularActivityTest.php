<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\TestHelpers;

class ExtracurricularActivityTest extends TestCase
{
    use TestHelpers;

    protected array $defaultData = [
        'activity_name' => 'a random activity name',
        'activity_place' => 'a random activity place',
        'activity_module' => 'a random activity module',
        'activity_departament' => 'a random activity departament',
        'teachers' => 'a random teachers',
        'student_groups' => 'a random student groups',
        'date' => '2000-01-01',
        'departure_time' => '12:45',
        'arrive_time' => '12:45',
        'activity_price' => '12.50',
        'transport' => 'a random transport',
        'activity_responsible_teacher' => 'a random activity responsible teacher',
    ];

    /** @test */
    function the_name_activity_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Denominación de la actividad');
    }

    /** @test */
    function the_place_activity_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Lugar de la actividad');
    }

    /** @test */
    function the_activity_module_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Asignatura/modulo');
    }

    /** @test */
    function the_activity_departament_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Departamento');
    }

    /** @test */
    function the_teachers_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Profesores acompañantes');
    }

    /** @test */
    function the_student_groups_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Grupos de alumnos que realizarán la actividad');
    }

    /** @test */
    function the_date_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Fecha');
    }

    /** @test */
    function given_the_date_field_when_do_not_a_date_format_then_show_its_error()
    {
         $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity', $this->getValidData([
                'date' => 'aszdfgyhujiklñ'
            ]))
            ->assertSessionHasErrors(['date' => 'El campo fecha de la actividad debe ser en formato día/mes/año']);
    }

    /** @test */
    function the_departure_time_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Hora de salida');
    }

    /** @test */
    function the_time_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Hora prevista de llegada');
    }

    /** @test */
    function the_activity_price_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Precio de la actividad');
    }

    /** @test */
    function the_transport_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Medio de transporte');
    }

    /** @test */
    function the_activity_responsible_teacher_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Profesor responsable');
    }

    /** @test */
    function the_observations_teacher_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extracurricular-activity')
            ->assertStatus(200)
            ->assertSee('Observaciones');
    }

    /** @test */
    public function given_the_name_activity_field_is_empty_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'activity_name' => ''
            ]))
            ->assertSessionHasErrors(['activity_name' => 'El nombre de la actividad es obligatorio']);
    }

    /** @test */
    public function given_the_activity_place_field_is_empty_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'activity_place' => ''
            ]))
            ->assertSessionHasErrors(['activity_place' => 'El lugar de la actividad debe ser obligatorio']);
    }

    /** @test */
    public function given_the_activity_module_field_is_empty_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'activity_module' => ''
            ]))
            ->assertSessionHasErrors(['activity_module' => 'El modulo al que pertenece la actividad debe ser obligatorio']);
    }

    /** @test */
    public function given_the_activity_departament_field_is_empty_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'activity_departament' => ''
            ]))
            ->assertSessionHasErrors(['activity_departament' => 'El departamento al que pertenece la actividad debe ser obligatorio']);
    }
    
    /** @test */
    public function given_the_activity_departament_field_cannot_be_longer_than_100_characters()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'activity_departament' => 'Typing a 100-character long text to test the another reason field and its validation to ensure pdf view'
            ]))
            ->assertSessionHasErrors(['activity_departament' => 'El departamento no puede tener más de 100 carácteres']);
    }
    /** @test */
    public function given_the_teachers_field_is_empty_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'teachers' => ''
            ]))
            ->assertSessionHasErrors(['teachers' => 'El campo profesores que van a asistir a la actividad debe ser obligatorio']);
    }

    /** @test */
    public function given_student_groups_field_is_empty_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'student_groups' => ''
            ]))
            ->assertSessionHasErrors(['student_groups' => 'El campo grupo de estudiantes debe ser obligatorio']);
    }

    /** @test */
    public function given_date_field_is_empty_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'date' => ''
            ]))
            ->assertSessionHasErrors(['date' => 'El campo fecha de la actividad debe ser obligatorio']);
    }

    /** @test */
    public function given_departure_time_field_is_empty_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'departure_time' => ''
            ]))
            ->assertSessionHasErrors(['departure_time' => 'El campo hora de salida debe ser obligatorio']);
    }

    /** @test */
    public function given_departure_time_field_when_do_not_have_a_date_format_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'departure_time' => 'asdfghjkl'
            ]))
            ->assertSessionHasErrors(['departure_time' => 'El campo hora de salida debe de ser en formato hh:mm']);
    }

    /** @test */
    public function given_arrive_time_field_is_empty_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'arrive_time' => ''
            ]))
            ->assertSessionHasErrors(['arrive_time' => 'El campo hora de llegada debe ser obligatorio']);
    }

    /** @test */
    public function given_arrive_time_field_when_do_not_have_a_date_format_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'arrive_time' => 'asdfghjkl'
            ]))
            ->assertSessionHasErrors(['arrive_time' => 'El campo hora de llegada debe de ser en formato hh:mm']);
    }

    /** @test */
    public function given_activity_price_field_is_empty_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'activity_price' => ''
            ]))
            ->assertSessionHasErrors(['activity_price' => 'El campo precio de la actividad debe ser obligatorio']);
    }

    /** @test */
    public function given_activity_price_field_when_it_is_different_than_numberic_value_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'activity_price' => 'fcghvjbklm'
            ]))
            ->assertSessionHasErrors(['activity_price' => 'El campo precio debe de ser numérico y positivo']);
    }

    /** @test */
    public function given_transport_field_is_empty_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'transport' => ''
            ]))
            ->assertSessionHasErrors(['transport' => 'El campo transporte debe ser obligatorio']);
    }

    /** @test */
    public function given_activity_responsible_teacher_field_is_empty_then_show_its_error()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'activity_responsible_teacher' => ''
            ]))
            ->assertSessionHasErrors(['activity_responsible_teacher' => 'El campo responsable de la actividad debe ser obligatorio']);
    }

    /** @test */
    public function given_activity_responsible_teacher_field_cannot_be_longer_than_50_characters()
    {
        $this->from('/extracurricular-activity')
            ->post('/extracurricular-activity',  $this->getValidData([
                'activity_responsible_teacher' => 'Jhonny Depp Ruppert Emma Daniel Angeline Christian Marshall'
            ]))
            ->assertSessionHasErrors(['activity_responsible_teacher' => 'El nombre del profesor no puede tener más de 50 carácteres']);
    }
}
