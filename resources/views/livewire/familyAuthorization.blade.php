<x-main>
    @livewire('navbar')
    <div class="container">
        <form action="{{ '/family-authorization' }}" method="post">
            @csrf
            <div class="card mt-5">
                <h1 class="text-primary text-center">AUTORIZACIÓN FAMILIAR</h1>

                <div class="card-body">
                    <div class="row row-cols-2 mb-4">
                        <div class="col">
							<label for="activity">
								Actividad programada<span class="text-danger"> *</span>
							</label>
						</div>
						<div class="col">
							<label for="organizer">
								Organizador/a<span class="text-danger"> *</span>
							</label>
						</div>

                        <div class="col">
                            <input
                                type="text"
                                class="form-control
                                @error('activity') is-invalid @enderror"
                                id="activity"
                                name="activity"
                                value="{{ old('activity') }}"
                            >

                            @if($errors->get('activity'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('activity')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input
                                type="text"
                                class="form-control
                                @error('organizer') is-invalid @enderror"
                                id="organizer"
                                name="organizer"
                                maxlength="100"
                                value="{{ old('organizer') }}">

                            @if($errors->get('organizer'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('organizer')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row row-cols-2 mb-4">
                        <div class="col">
							<label for="execution_date">
								Fecha realización<span class="text-danger"> *</span>
							</label>
						</div>
						<div class="col">
							<label for="departure_time">
								Hora salida<span class="text-danger"> *</span>
							</label>
						</div>

                        <div class="col">
                            <input
                                type="date"
                                class="form-control
                                @error('execution_date') is-invalid @enderror"
                                id="execution_date"
                                name="execution_date"
                                value="{{ old('execution_date') }}"
                            >

                            @if($errors->get('execution_date'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('execution_date')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input
                                type="time"
                                class="form-control
                                @error('departure_time') is-invalid @enderror"
                                id="departure_time"
                                name="departure_time"
                                value="{{ old('departure_time') }}">

                            @if($errors->get('departure_time'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('departure_time')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="course">
                                Curso del alumno<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <label for="deadline">
                                Fecha entrega<span class="text-danger"> *</span>
                            </label>
                        </div>

                        <div class="col">
                            <input
                                type="text"
                                class="form-control
                                @error('course') is-invalid @enderror"
                                id="course"
                                name="course"
                                value="{{ old('course') }}">

                            @if($errors->get('course'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('course')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input
                                type="date"
                                class="form-control
                                @error('deadline') is-invalid @enderror"
                                id="deadline"
                                name="deadline"
                                value="{{ old('deadline') }}">

                            @if($errors->get('deadline'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('deadline')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row row-cols-2 mb-4">
                        <div class="col">
                            <label for="parents">
                                Nombre y apellidos del Padre/Madre/Tutor<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <label for="">
                                Nombre y apellidos del alumno<span class="text-danger"> *</span>
                            </label>
                        </div>

                        <div class="col">
                            <input
                                type="text"
                                class="form-control
                                @error('parents') is-invalid @enderror"
                                id="parents"
                                name="parents"
                                maxlength="50"
                                value="{{ old('parents') }}"
                            >

                            @if($errors->get('parents'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('parents')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <input
                                type="text"
                                class="form-control
                                @error('student') is-invalid @enderror"
                                id="student"
                                name="student"
                                maxlength="50"
                                value="{{ old('student') }}"
                            >

                            @if($errors->get('student'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('student')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row row-cols-2">
                        <div class="col">
                            <label for="">
                                DNI Padre/Madre/Tutor<span class="text-danger"> *</span>
                            </label>
                        </div>
                        <div class="col">
                            <label for="">
                                Objetivos y Contenidos<span class="text-danger"> *</span>
                            </label>
                        </div>

                        <div class="col">
                            <input
                                type="text"
                                class="form-control
                                @error('dni') is-invalid @enderror"
                                id="dni"
                                name="dni"
                                value="{{ old('dni') }}">

                            @if($errors->get('dni'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('dni')[0] }}
                                </div>
                            @endif
                        </div>
                        <div class="col">
                            <textarea
                                class="form-control
                                @error('goals') is-invalid @enderror"
                                id="goals"
                                name="goals"
                                maxlength="250"> {{ old('goals') }}
                            </textarea>

                            @if($errors->get('goals'))
                                <div class="text-danger mb-3 mt-0">
                                    {{ $errors->get('goals')[0] }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row row-cols-1">
                        <div class="col">
                            <div class="form-check">
                                <input
                                    class="form-check-input
                                    @error('auth') is-invalid @enderror"
                                    type="radio"
                                    name="authorization"
                                    id="auth"
                                    value="auth"
                                    {{ old('authorization') == 'auth' ? 'checked' : '' }}  
                                >

                                <label class="form-check-label" for="auth">
                                    Tiene mi autorización para participar en la actividad programada y autorizo a la toma y difusión de imágenes de este día en la página web y/o RRSS del centro.<span class="text-danger"> *</span>
                                </label>

                                @if($errors->get('auth'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('auth')[0] }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-check">
                                <input
                                    class="form-check-input
                                    @error('notAuth') is-invalid @enderror"
                                    type="radio"
                                    name="authorization"
                                    id="notAuth"
                                    value="notAuth"
                                    {{ old('authorization') == 'notAuth' ? 'checked' : '' }}
                                >
                                    

                                <label class="form-check-label" for="notAuth">
                                    No va a participar en la actividad programada.<span class="text-danger"> *</span>
                                </label>

                                @if($errors->get('notAuth'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('notAuth')[0] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <x-form-buttons></x-form-buttons>
            </div>
        </form>
    </div>
</x-main>
