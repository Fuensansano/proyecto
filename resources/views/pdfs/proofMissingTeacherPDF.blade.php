<x-header></x-header>

<h2>JUSTIFICANTE DE FALTA DEL PROFESORADO</h2>

<table class="table-form">
    <tbody>
        <tr>
            <td class="labels td-form">Nombre</td>
            <td class="td-form">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td class="labels td-form">Departamento</td>
            <td class="td-form">{{ $data['department'] }}</td>
        </tr>
    </tbody>
</table>

<div>
    <p class="text">
        @if($data['missingDay1'] && !$data['missingDay2'] && !$data['missingDay3']) 
            <b>JUSTIFICA</b> que no pudo asistir al centro de trabajo el dia:
        @else
            <b>JUSTIFICA</b> que no pudo asistir al centro de trabajo los días:
        @endif
    </p>
</div>

<table class="table-form">
    <tbody>
        @if($data['missingDay1'] && !$data['missingDay2'] && !$data['missingDay3'])
            <tr>    
                <td class="td-form">{{ $data['missingDay1'] }}</td>
                
                @if($data['journeyType1'] == 'fullJourneyOption1')
                    <td class="td-form">
                        Faltando la <b>jornada completa</b>
                    </td>
                @else
                    <td class="td-form">
                        De <b>{{ $data['journeyStartTime1'] }} @if($data['journeyStartTime1'] < 12) am</b> @else pm</b> @endif
                        a <b>{{ $data['journeyEndTime1'] }} @if($data['journeyEndTime1'] < 12) am</b> @else pm</b> @endif
                    </td>
                @endif

            </tr>
        @elseif($data['missingDay1'] && $data['missingDay2'] && !$data['missingDay3'])
            <tr>    
                <td class="td-form">{{ $data['missingDay1'] }}</td>
                
                @if($data['journeyType1'] == 'fullJourneyOption1')
                    <td class="td-form">
                        Faltando la <b>jornada completa</b>
                    </td>
                @else
                    <td class="td-form">
                        De <b>{{ $data['journeyStartTime1'] }} @if($data['journeyStartTime1'] < 12) am</b> @else pm</b> @endif
                        a <b>{{ $data['journeyEndTime1'] }} @if($data['journeyEndTime1'] < 12) am</b> @else pm</b> @endif
                    </td>
                @endif
            </tr>

            <tr>
                <td class="td-form">{{ $data['missingDay2'] }}</td>
                
                @if($data['journeyType2'] == 'fullJourneyOption2')
                    <td class="td-form">
                        Faltando la <b>jornada completa</b>
                    </td>
                @else
                    <td class="td-form">
                        De <b>{{ $data['journeyStartTime2'] }} @if($data['journeyStartTime2'] < 12) am</b> @else pm</b> @endif
                        a <b>{{ $data['journeyEndTime2'] }} @if($data['journeyEndTime2'] < 12) am</b> @else pm</b> @endif
                    </td>
                @endif
            </tr>
        @elseif($data['missingDay1'] && !$data['missingDay2'] && $data['missingDay3'])
            <tr>
                <td class="td-form">{{ $data['missingDay1'] }}</td>

                @if($data['journeyType1'] == 'fullJourneyOption1')
                    <td class="td-form">
                        Faltando la <b>jornada completa</b>
                    </td>
                @else
                    <td class="td-form">
                        De <b>{{ $data['journeyStartTime1'] }} @if($data['journeyStartTime1'] < 12) am</b> @else pm</b> @endif
                        a <b>{{ $data['journeyEndTime1'] }} @if($data['journeyEndTime1'] < 12) am</b> @else pm</b> @endif
                    </td>
                @endif
            </tr>

            <tr>
                <td class="td-form">{{ $data['missingDay3'] }}</td>

                @if($data['journeyType3'] == 'fullJourneyOption3')
                    <td class="td-form">
                        Faltando la <b>jornada completa</b>
                    </td>
                @else
                    <td class="td-form">
                        De <b>{{ $data['journeyStartTime3'] }} @if($data['journeyStartTime3'] < 12) am</b> @else pm</b> @endif
                        a <b>{{ $data['journeyEndTime3'] }} @if($data['journeyEndTime3'] < 12) am</b> @else pm</b> @endif
                    </td>
                @endif
            </tr>
        @elseif($data['missingDay1'] && $data['missingDay2'] && $data['missingDay3'])
            <tr>
                <td class="td-form">
                    <b>{{ $data['missingDay1'] }}</b>
                </td>

                @if($data['journeyType1'] == 'fullJourneyOption1')
                    <td class="td-form">
                        La <b>jornada completa</b>
                    </td>
                @else
                    <td class="td-form">
                        De <b>{{ $data['journeyStartTime1'] }} @if($data['journeyStartTime1'] < 12) am</b> @else pm</b> @endif
                        a <b>{{ $data['journeyEndTime1'] }} @if($data['journeyEndTime1'] < 12) am</b> @else pm</b> @endif
                    </td>
                @endif
            </tr>

            <tr>
                <td class="td-form">
                    <b>{{ $data['missingDay2'] }}</b>
                </td>

                @if($data['journeyType2'] == 'fullJourneyOption2')
                    <td class="td-form">
                        La <b>jornada completa</b>
                    </td>
                @else
                    <td class="td-form">
                        De <b>{{ $data['journeyStartTime2'] }} @if($data['journeyStartTime2'] < 12) am</b> @else pm</b> @endif
                        a <b>{{ $data['journeyEndTime2'] }} @if($data['journeyEndTime2'] < 12) am</b> @else pm</b> @endif
                    </td>
                @endif
            </tr>

            <tr>
                <td class="td-form">
                    <b>{{ $data['missingDay3'] }}</b>
                </td>

                @if($data['journeyType3'] == 'fullJourneyOption3')
                    <td class="td-form">
                        La <b>jornada completa</b>
                    </td>
                @else
                    <td class="td-form">
                        De <b>{{ $data['journeyStartTime2'] }} @if($data['journeyStartTime2'] < 12) am</b> @else pm</b> @endif
                        a <b>{{ $data['journeyEndTime2'] }} @if($data['journeyEndTime2'] < 12) am</b> @else pm</b> @endif
                    </td>
                @endif
            </tr>
        @endif
    </tbody>
</table>

<div>
    <p class="text">
        Por el siguiente motivo: <b>{{ $data['permissionsSelect'] }}</b>
        @if($data['reason'])
            debido a que {{ $data['reason'] }}
        @endif
    </p>
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
    h2 {
        text-align: center;
        font-size: 30px;
        margin-top: 30px;
        width: 100%;
        color: dodgerblue;
        font-size: 28px;
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

    .table-form {
        border-collapse: collapse;
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
        table-layout: fixed;
    }

    .text {
        margin-top: 25px;
        font-size: 18px;
        text-align: justify;
    }

    .actual-date {
        margin-top: 80px;
        text-align: right;
    }

    .sign {
        margin-top: 150px;
        margin-bottom: 290px;
        text-align: center;
    }
</style>
