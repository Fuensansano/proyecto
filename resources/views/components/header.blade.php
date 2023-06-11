<div>
    @if (isset($data['header']))
        <img src="{{ $data['header'] }}" alt="cabecera.png">
        {{ 'DATA: ' . $data['header'] }}
    @else
        <img src="{{ storage_path('app/public/images/cabecerav6.png') }}" alt="cabecera.png">
        {{ 'LOCAL: ' . storage_path('app/public/images/cabecerav6.png') }}
    @endif
</div>
