<x-main>
    @livewire('navbar')
    <div class="container">
        <form action="{{ route('generatePDF') }}" method="post">
            @csrf
            <div class="card mt-5">
                <h1 class="text-primary text-center">AUTORIZACIÓN FAMILIAR</h1>
                
                <div class="card-body" class="flex-column">
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input
                                    type="text"
                                    class="form-control
                                    @error('activity') is-invalid @enderror"
                                    id="activity"
                                    placeholder="Actividad Programada"
                                    name="activity">

                                <label for="activity">ACTIVIDAD PROGRAMADA</label>

                                @if($errors->get('activity'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('activity')[0] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input
                                    type="text"
                                    class="form-control
                                    @error('organizer') is-invalid @enderror"
                                    id="organizer"
                                    placeholder="Organizada Por"
                                    name="organizer">

                                <label for="organizer">ORGANIZADOR/A</label>

                                @if($errors->get('organizer'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('organizer')[0] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input
                                    type="date"
                                    class="form-control
                                    @error('execution_date') is-invalid @enderror"
                                    id="execution_date"
                                    placeholder="Fecha Realización"
                                    name="execution_date">

                                <label for="execution_date">FECHA REALIZACIÓN</label>

                                @if($errors->get('execution_date'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('execution_date')[0] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input
                                    type="time"
                                    class="form-control
                                    @error('departure_time') is-invalid @enderror"
                                    id="departure_time"
                                    placeholder="Hora Salida"
                                    name="departure_time">

                                <label for="departure_time">HORA SALIDA</label>

                                @if($errors->get('departure_time'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('departure_time')[0] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input
                                    type="text"
                                    class="form-control
                                    @error('course') is-invalid @enderror"
                                    id="course"
                                    placeholder="Curso alumno"
                                    name="course">

                                <label for="course">CURSO DEL ALUMNO</label>

                                @if($errors->get('course'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('course')[0] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input
                                    type="date"
                                    class="form-control
                                    @error('deadline')
                                    is-invalid @enderror"
                                    id="deadline"
                                    placeholder="Fecha de Entrega"
                                    name="deadline">

                                <label for="deadline">FECHA ENTREGA</label>

                                @if($errors->get('deadline'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('deadline')[0] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input
                                    type="text"
                                    class="form-control
                                    @error('parents') is-invalid @enderror"
                                    id="parents"
                                    placeholder="Padre/Madre/Tutor"
                                    name="parents">

                                <label for="parents">PADRE/MADRE/TUTOR</label>

                                @if($errors->get('parents'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('parents')[0] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input
                                    type="text"
                                    class="form-control
                                    @error('student') is-invalid @enderror"
                                    id="student"
                                    placeholder="Alumno"
                                    name="student">

                                <label for="student">ALUMNO</label>

                                @if($errors->get('student'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('student')[0] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input
                                    type="text"
                                    class="form-control
                                    @error('dni') is-invalid @enderror"
                                    id="dni"
                                    placeholder="DNI"
                                    name="dni">

                                <label for="dni">DNI PADRE/MADRE/TUTOR</label>

                                @if($errors->get('dni'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('dni')[0] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <textarea
                                    class="form-control
                                    @error('goals') is-invalid @enderror"
                                    placeholder="Obejtivos y Contenidos"
                                    id="goals"
                                    name="goals">
                                </textarea>

                                <label for="goals">OBJETIVOS Y CONTENIDOS</label>

                                @if($errors->get('goals'))
                                    <div class="text-danger mb-3 mt-0">
                                        {{ $errors->get('goals')[0] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-1">
                        <div class="col mt-5">
                            <div class="form-check">
                                <input
                                    class="form-check-input
                                    @error('auth') is-invalid @enderror"
                                    type="radio"
                                    name="authorization"
                                    id="auth"
                                    value="auth">

                                <label class="form-check-label" for="auth">
                                    Tiene mi autorización para participar en la actividad programada y autorizo a la toma y difusión de imágenes de este día en la página web y/o RRSS del centro.
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
                                    value="notAuth">

                                <label class="form-check-label" for="notAuth">
                                    No va a participar en la actividad programada.
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
