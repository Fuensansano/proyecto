<x-main>
    @livewire('navbar')
    <div class="container">
        <form action="extraescolar-activity" method="post">
        @csrf
            <div class="card mt-5">
                <h1 class="card-header text-primary bg-white">INFORMACIÓN SOBRE ACTIVIDAD EXTRAESCOLAR</h1>
                <div class="card-body">
                    {{-- primera fila --}}
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="activity_name">Denominación de la actividad</label>
                        </div>
                        <div class="col">
                            <label for="activity_place">Lugar de la actividad</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('activity_name')  is-invalid @enderror"
                                   id="activity_name" name="activity_name"/>
                            @if($errors->get('activity_name'))
                               <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity_name')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('activity_place')  is-invalid @enderror" id="activity_place" name="activity_place"/>
                            @if($errors->get('activity_place'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity_place')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>
                    {{-- segunda fila --}}
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="activity_module">Asignatura/modulo</label>
                        </div>
                        <div class="col">
                            <label for="activity_departament">Departamento</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('activity_module')  is-invalid @enderror" id="activity_module" name="activity_module"/>
                            @if($errors->get('activity_module'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity_module')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('activity_departament')  is-invalid @enderror" id="activity_departament" name="activity_departament" />
                            @if($errors->get('activity_departament'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity_departament')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>
                    {{-- tercera fila --}}
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="teachers">Profesores acompañantes</label>
                        </div>
                        <div class="col">
                            <label for="student_groups">Grupos de alumnos que realizarán la actividad</label>
                        </div>
                        <div class="col">
                            <textarea type="text" class="form-control @error('teachers') is-invalid @enderror" id="teachers" name="teachers"></textarea>
                            @if($errors->get('teachers'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('teachers')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <textarea type="text" class="form-control @error('student_groups') is-invalid @enderror" id="student_groups" name="student_groups"></textarea>
                            @if($errors->get('student_groups'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('student_groups')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- cuarta fila --}}
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="date">Fecha</label>
                        </div>
                        <div class="col">
                            <label for="departure_time">Hora de salida</label>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"></input>
                            @if($errors->get('teachers'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('date')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input type="time" class="form-control @error('departure_time') is-invalid @enderror" id="departure_time" name="departure_time"></input>
                            @if($errors->get('departure_time'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('departure_time')[0] }}
                                </div>
                            @endif
                        </div>

                    </div>

                    {{-- quinta fila --}}
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="arrive_time">Hora prevista de llegada</label>
                        </div>
                        <div class="col">
                            <label for="activity_price">Precio de la actividad</label>
                        </div>
                        <div class="col">
                            <input type="time" class="form-control @error('arrive_time') is-invalid @enderror" id="arrive_time" name="arrive_time"></input>
                            @if($errors->get('arrive_time'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('arrive_time')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('activity_price') is-invalid @enderror" id="activity_price" name="activity_price"></input>
                            @if($errors->get('activity_price'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity_price')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- sexta fila --}}
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="transport">Medio de transporte</label>
                        </div>
                        <div class="col">
                            <label for="activity_responsible_teacher">Profesor responsable</label>
                        </div>

                        <div class="col">
                            <input type="text" class="form-control @error('transport') is-invalid @enderror" id="transport" name="transport"></input>
                            @if($errors->get('transport'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('transport')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('activity_responsible_teacher') is-invalid @enderror" id="activity_responsible_teacher" name="activity_responsible_teacher" />
                            @if($errors->get('activity_responsible_teacher'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity_responsible_teacher')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- séptima fila --}}
                    <div class="row row-cols-1 mb-4">
                        <div class="col">
                            <label for="observations">Observaciones</label>
                        </div>
                        <div class="col">
                            <textarea type="time" class="form-control mb-4" id="observations" name="observations"></textarea>
                        </div>
                    </div>

                    <x-form-buttons></x-form-buttons>
                </div>
            </div>
        </form>
    </div>
</x-main>