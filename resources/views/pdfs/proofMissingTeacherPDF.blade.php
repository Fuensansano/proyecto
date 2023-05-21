<x-header></x-header>

<h2>JUSTIFICANTE DE FALTA DEL PROFESORADO</h2>

<table>
    <tbody>
        <tr>
            <span>D./Dña.: <b>{{ $data['name'] }}</b></span>
        </tr>
        <tr>
            <span>Profesor/a del departamento: <b>{{ $data['department'] }}</b>, con destino en este Centro Educativo </span>
        </tr>
        <tr>
            <span>
                <b>JUSTIFICA</b> 
                que no pudo asistir al Centro de trabajo el día 
                <b>{{ $data['missingDay1'] }}</b> 
                @if($data['journey_option1'] == 'full_journey_option1')
                    faltando la jornada completa.
                @else
                    faltando desde las {{ $data['midJourneyFrom1']}}
                    hasta las {{ $data['midJourneyTo1'] }}.
                @endif
            </span>
        </tr>
    </tbody>
</table>

@component('components.data')
    @slot('fecha')
        Murcia, a <b>{{ $data['day'] }}</b> de <b>{{ $data['month'] }}</b> de <b>{{ $data['year']}}</b>
    @endslot

    @slot('texto')
        Firma del padre/madre/tutor del alumno
    @endslot

    @slot('dni')
        {{ $data['dni'] }}
    @endslot
@endcomponent

<x-footer></x-footer>

<style>
    h2 {
        text-align: center;
        width: 100%;
        color: dodgerblue;
    }

    .fecha-actual {}

    .texto-firma {}

    .firma {}
</style>