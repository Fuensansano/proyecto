<x-header></x-header>

<h2>INFORMACIÓN SOBRE ACTIVIDAD EXTRAESCOLAR</h2>

<table class="table-form">
    <tbody>
    <tr>
        <td class="labels td-form">Denominación de la actividad </td>
        <td class="td-form">{{ $data['activity_name'] }}</td>
    </tr>
    <tr>
        <td class="labels td-form">Lugar de la actividad</td>
        <td class="td-form">{{ $data['activity_place'] }}</td>
    </tr>
    <tr>
        <td class="labels td-form">Asignatura/modulo</td>
        <td class="td-form">{{ $data['activity_module'] }}</td>
    </tr>
    <tr>
        <td class="labels td-form">Departamento</td>
        <td class="td-form">{{ $data['activity_departament'] }}</td>
    </tr>
    <tr>
        <td class="labels td-form">Profesores acompañantes</td>
        <td class="td-form">{{ $data['teachers'] }}</td>
    </tr>
    <tr>
        <td class="labels td-form">Grupos de alumnos que realizarán la actividad</td>
        <td class="td-form">{{ $data['student_groups'] }}</td>
    </tr>
    <tr>
        <td class="labels td-form">Fecha</td>
        <td class="td-form">{{ $data['date'] }}</td>
    </tr>
    <tr>
        <td class="labels td-form">Hora de salida</td>
        <td class="td-form">{{ $data['departure_time'] }}</td>
    </tr>
    <tr>
        <td class="labels td-form">Hora prevista de llegada</td>
        <td class="td-form">{{ $data['arrive_time'] }}</td>
    </tr>
    <tr>
        <td class="labels td-form">Precio de la actividad</td>
        <td class="td-form">{{ $data['activity_price'] }}</td>
    </tr>
    <tr>
        <td class="labels td-form">Medio de transporte</td>
        <td class="td-form">{{ $data['transport'] }}</td>
    </tr>
    <tr>
        <td class="labels td-form">Profesor responsable</td>
        <td class="td-form">{{ $data['activity_responsible_teacher'] }}</td>
    </tr>
    <tr>
        <td class="labels td-form">Observaciones</td>
        <td class="td-form">{{ $data['observations'] }}</td>
    </tr>
    </tbody>
</table>

<x-footer/>

<style>
    h2 {
        text-align: center;
        font-size: 30px;
        margin-top: 30px;
        width: 100%;
        color: dodgerblue;
        font-size: 28px;
    }

    .table-form {
        border-collapse: collapse;
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
        table-layout: fixed;
    }

    .td-form {
        text-align: left;
        padding: 8px;
        width: 40%;
        height: 20px;
        border-bottom: 1px solid #ddd;
        font-size: 20px;
        overflow-wrap: break-word;
    }

    .labels {
        font-weight: bold;
    }
</style>