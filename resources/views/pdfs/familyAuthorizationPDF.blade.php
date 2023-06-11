<x-header :data="$data"/>

<table>
    <tbody>
    <tr>
        <h1>AUTORIZACIÓN FAMILIAR</h1>
    </tr>
    <tr>
        <td class="border-bottom">
            <b>ACTIVIDAD PROGRAMADA: </b>
            <span>{{ $data['activity'] }}</span>
        </td>
    </tr>
    <tr>
        <td class="border-bottom">
            <b>ORGANIZADA POR: </b>
            <span>{{ $data['organizer'] }}</span>
        </td>
    </tr>
    <tr>
        <td class="border-bottom">
            <b>FECHA DE REALIZACIÓN: </b>
            <span>{{ $data['execution_date'] }}</span>
        </td>
    </tr>
    <tr>
        <td class="border-bottom">
            <b>HORA DE SALIDA: </b>
            <span>{{ $data['departure_time'] }}</span>
        </td>
    </tr>
    <tr>
        <td class="border-bottom">
            <b>OBJETIVOS Y CONTENIDOS: </b>
            <span>{{ $data['goals'] }}</span>
        </td>
    </tr>
    </tbody>
</table>

<div>
    <p class="text">
        <b>
            Para tener constancia de que ustedes han recibido esta información,
            les ruego la devuelvan firmada al Centro, para que sus hijos la entreguen al profesor
            encargado antes del
        </b>{{ $data['deadline'] }}.
    </p>
</div>

<div>
    <p class="text">
        D./Dª <b>{{ $data['parents'] }}</b> como padre,
        madre o tutor del alumno/a <b>{{ $data['student'] }}</b>
        del curso <b>{{ $data['course'] }}</b>, me considero informado/a de la actividad programada
        y comunico que mi hijo/a:
    </p>
</div>

<div>
    <div class="margin-checkbox">
        <input type="checkbox" id="auth" {{ $data['authorization'] == 'auth' ? 'checked' : ''}}>
        <label for="auth">
            Tiene mi autorización para participar en la actividad programada
            y autorizo a la toma y difusión de imágenes de este día en la página web
            y/o RRSS del centro.
        </label>
    </div>

    <div class="margin-checkbox">
        <input type="checkbox" id="notAuth" {{ $data['authorization'] == 'notAuth' ? 'checked' : ''}}>
        <label for="notAuth">
            No va a participar en la actividad programada.
        </label>
    </div>
</div>

@component('components.signature')
    @slot('day')
        {{ $data['day'] }}
    @endslot

    @slot('month')
        {{ $data['month'] }}
    @endslot

    @slot('year')
        {{ $data['year'] }}
    @endslot

    @slot('dni')
        {{ $data['dni'] }}
    @endslot
@endcomponent

<x-footer/>

<style>
    h1 {
        text-align: center;
        width: 100%;
        color: dodgerblue;
    }

    table {
        width: 100%
    }

    td {
        padding: 8px;
    }

    td span {
        overflow-wrap: break-word;
    }

    .actual-date {
        margin-top: 100px;
        text-align: right
    }

    .sign-text {
        text-align: center;
        margin-top: 30px;
    }

    .sign {
        margin-top: 150px;
        margin-bottom: 150px;
    }

    .margin-checkbox {
        margin-top: 10px
    }

    .margin-checkbox input {
        margin-bottom: -5px
    }

    .text {
        font-size: 16px;
        text-align: justify;
    }

    .border-bottom {
        border-bottom: 1px solid #ddd;
    }

    .footer {
        position: fixed;
        border-top: 1px solid black;
        width: 100%;
    }

    .footer-li {
        color: blue;
        font-size: 12px;
    }

    .footer-ul {
        text-align: center;
    }

    .footer-ul li {
        display: inline;
    }

    .footer-circles {
        display: inline-block;
        height: 6px;
        width: 6px;
        background: blue;
        border-radius: 50%;
    }
</style>
