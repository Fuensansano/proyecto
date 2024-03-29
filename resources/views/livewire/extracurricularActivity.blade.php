<x-main>
    @livewire('navbar')
    <div class="container">
        <form action="extracurricular-activity" method="post">
        @csrf
            <div class="card mt-5">
                <h1 class="card-header text-primary text-center bg-white">INFORMACIÓN SOBRE ACTIVIDAD EXTRAESCOLAR</h1>
                <div class="card-body">
                    <div class="row row-cols-2 mb-4">
                        {{-- first row --}}
                        <div class="col">
                            <label for="activity_name">
                                Denominación de la actividad<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <label for="activity_place">
                                Lugar de la actividad<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('activity_name')  is-invalid @enderror"
                                   id="activity_name" name="activity_name" value="{{ old('activity_name') }}" />
                            @if($errors->get('activity_name'))
                               <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity_name')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('activity_place') is-invalid @enderror" value="{{ old('activity_place') }}" id="activity_place" name="activity_place"/>
                            @if($errors->get('activity_place'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity_place')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>
                    {{-- second row --}}
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="activity_module">
                                Asignatura/modulo<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <label for="activity_departament">
                                Departamento<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('activity_module') is-invalid @enderror" value="{{ old('activity_module') }}" id="activity_module" name="activity_module"/>
                            @if($errors->get('activity_module'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity_module')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('activity_departament') is-invalid @enderror" value="{{ old('activity_departament') }}" id="activity_departament" name="activity_departament" max="100"/>
                            @if($errors->get('activity_departament'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity_departament')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>
                    {{-- third row --}}
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="teachers">
                                Profesores acompañantes<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <label for="student_groups">
                                Grupos de alumnos que realizarán la actividad<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <textarea type="text" class="form-control @error('teachers') is-invalid @enderror" id="teachers" name="teachers">{{ old('teachers') }}</textarea>
                            @if($errors->get('teachers'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('teachers')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <textarea type="text" class="form-control @error('student_groups') is-invalid @enderror" id="student_groups" name="student_groups"> {{ old('student_groups') }}</textarea>
                            @if($errors->get('student_groups'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('student_groups')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- fourth row --}}
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="date">
                                Fecha<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <label for="departure_time">
                                Hora de salida<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}" id="date" name="date"></input>
                            @if($errors->get('date'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('date')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input type="time" class="form-control @error('departure_time') is-invalid @enderror" value="{{ old('departure_time') }}" id="departure_time" name="departure_time"></input>
                            @if($errors->get('departure_time'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('departure_time')[0] }}
                                </div>
                            @endif
                        </div>

                    </div>

                    {{-- fifth row --}}
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="arrive_time">
                                Hora prevista de llegada<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <label for="activity_price">
                                Precio de la actividad<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <input type="time" class="form-control @error('arrive_time') is-invalid @enderror" value="{{ old('arrive_time') }}" id="arrive_time" name="arrive_time"></input>
                            @if($errors->get('arrive_time'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('arrive_time')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('activity_price') is-invalid @enderror" value="{{ old('activity_price') }}" id="activity_price" name="activity_price"></input>
                            @if($errors->get('activity_price'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity_price')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- sixth row --}}
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="transport">
                                Medio de transporte<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <label for="activity_responsible_teacher">
                                Profesor responsable<span class="text-danger"> *</span>
                            </label>
                        </div>

                        <div class="col">
                            <input type="text" class="form-control @error('transport') is-invalid @enderror" value="{{ old('transport') }}" id="transport" name="transport"></input>
                            @if($errors->get('transport'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('transport')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('activity_responsible_teacher') is-invalid @enderror" value="{{ old('activity_responsible_teacher') }}" id="activity_responsible_teacher" name="activity_responsible_teacher" maxlength="50"/>
                            @if($errors->get('activity_responsible_teacher'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity_responsible_teacher')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>

                    {{-- seventh row --}}
                    <div class="row row-cols-1 mb-4">
                        <div class="col">
                            <label for="observations">
                                Observaciones
                            </label>
                        </div>
                        <div class="col">
                            <textarea type="time" class="form-control mb-4" id="observations" name="observations"> {{ old('observations') }} </textarea>
                        </div>
                    </div>

                    <x-form-buttons></x-form-buttons>
                </div>
            </div>
        </form>
    </div>
</x-main>
