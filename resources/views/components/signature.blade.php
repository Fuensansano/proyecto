<div>
    <div class="actual-date">
        Murcia, a <b>{{ $day }}</b> de <b>{{ $month }}</b> de <b>{{ $year }}</b>
    </div>

    <div class="sign">
        Firmado por:_____________________________________________ con DNI: <b>{{ $dni }}</b>
    </div>
</div>

<style>
    .actual-date {
        text-align: right
    }

    .sign {
        margin-top: 250px;
        text-align: center;
    }
</style>