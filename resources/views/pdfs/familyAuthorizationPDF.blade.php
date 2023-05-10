<x-header />

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
    <p class="texto">
        <b>
            Para tener constancia de que ustedes han recibido esta información, 
            les ruego la devuelvan firmada al Centro, para que sus hijos la entreguen al profesor 
            encargado antes del
        </b>{{ $data['deadline'] }}.
    </p>
</div>

<div>
    <p class="texto">
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

<div class="fecha-actual">
    Murcia, a <b>{{ $data['day'] }}</b> de <b>{{ $data['month'] }}</b> de <b>{{ $data['year']}}</b>
</div>

<div class="texto-firma">
    Firma del padre, madre o tutor
</div>

<div class="firma">
    Firmado por:_____________________________________________con DNI: <b>{{ $data['dni'] }}</b>
</div>

<x-footer />

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

    .fecha-actual {
        margin-top: 40px;
        text-align: right
    }

    .texto-firma {
        text-align: center;
        margin-top: 40px;
    }

    .firma {
        margin-top: 120px;
        margin-bottom: 190px;
    }

    .margin-checkbox {
        margin-top: 10px
    }

    .margin-checkbox input {
        margin-bottom: -5px
    }

    .texto {
        font-size: 16px;
        text-align: justify;
    }

    .border-bottom {
        border-bottom: 1px solid #ddd;
    }
</style>