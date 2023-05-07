<x-main>
    @livewire('navbar')

    <div class="container">
        <form action="proofMissingTeacher" method="post">
            @csrf
            
            <div class="card mt-5">
                <h1 class="card-header text-primary bg-white">JUSTIFICANTE FALTA PROFESORADO</h1>

                <div class="card-body">
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="name">D.Dña.</label>
                        </div>
                        <div class="col">
                            <label for="department">Departamento</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name" name="name"/>
                            @if($errors->get('name'))
                               <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('name')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('department') is-invalid @enderror" id="activity_place" name="activity_place"/>
                            @if($errors->get('department'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('department')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="missingDay">Día de falta</label>
                        </div>
                        <div class="col">
                            <label for=""></label>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control @error('missingDay') is-invalid @enderror"
                                   id="missingDay" name="missingDay"/>
                            @if($errors->get('missingDay'))
                               <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('missingDay')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input type="radio" class="form-check-input @error('fullDay') is-invalid @enderror" id="fullDay" name="fullDay" value="fullDay"/>
                                <label for="fullDay">He faltado la jornada completa</label>
                                
                                @if($errors->get('fullDay'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('fullDay')[0] }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input @error('fullDay') is-invalid @enderror" id="notFullDay" name="fullDay" value="notFullDay"/>
                                <label for="notFullDay">No he faltado la jornada completa</label>

                                @if($errors->get('notFullDay'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('fullDay')[0] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="splitDay">Desde</label>
                            <input type="time" class="form-control @error('splitDayFromt')  is-invalid @enderror" id="splitDay" name="splitDay"/>
                            @if($errors->get('splitDay'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('splitDay')[0] }}
                                </div>
                            @endif
                        </div>
                        
                        <div class="col">
                            <label for="splitDay" class="">Hasta</label>
                            <input type="time" class="form-control @error('splitDayT')  is-invalid @enderror" id="splitDay" name="splitDay"/>
                            @if($errors->get('splitDay'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('splitDay')[0] }}
                                </div>
                            @endif
                        </div>
                    </div> --}}
                </div>

                <hr>

                <div class="buttons-container">
                    <x-button-form-send></x-button-form-send>
                    <x-button-form-cancel></x-button-form-cancel>
                </div>
            </div>
        </form>
    </div>
</x-main>

<style>
    .card-header {
        height: 80px;
        border-style: none;
    }

    .container {
        max-width: 90%;
        margin-bottom: 20px;
    }

    h1 {
        align-self: center;
        font-size: 30px;
        margin-top: 10px;
    }

    label {
        font-size: 18px;
    }

    .buttons-container {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>