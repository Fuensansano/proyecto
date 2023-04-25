<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExtraescolarActivityTest extends TestCase
{
    /** @test */
    function the_name_activity_field_is_in_the_extraescolar_activity_form_page()
    {
        $this->get('/extraescolaractivity')
            ->assertStatus(200)
            ->assertSee('Denominación de la actividad');
    }

}
