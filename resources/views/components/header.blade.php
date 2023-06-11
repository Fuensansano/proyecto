<div>
    @if (isset($data) && $data['header'])
        <img src="{{ $data['header'] }}" alt="cabecera.png">
        {{ $data['header'] }}
    @else
        <img src="{{ storage_path('app/public/images/cabecerav6.png') }}" alt="cabecera.png">
    @endif
</div>
