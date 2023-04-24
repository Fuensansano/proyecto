<x-main>
    @livewire('navbar')
    <div class="container">
        <form action="save" method="post">
        @csrf
            <div class="card mt-5">
                <h1 class="card-header text-primary">INFORMACIÓN SOBRE ACTIVIDAD EXTRAESCOLAR</h1>
                <div class="card-body">
                    {{-- primera fila --}}
                    <div class="row row-cols-2">
                        <div class="col">
                            <label for="activity_name">Denominación de la actividad</label>
                        </div>
                        <div class="col">
                            <label for="activity_place">Lugar de la actividad</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control mb-4" id="activity_name" name="activity_name"/>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control mb-4" id="activity_place" name="activity_place"/>
                        </div>
                    </div>
                    {{-- segunda fila --}}
                    <div class="row row-cols-2">
                        <div class="col">
                            <label for="activity_module">Asignatura/modulo</label>
                        </div>
                        <div class="col">
                            <label for="activity_departament">Departamento</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control mb-4" id="activity_module" name="activity_module"/>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control mb-4" id="activity_departament" name="activity_departament" />
                        </div>
                    </div>
                    {{-- tercera fila --}}
                    <div class="row row-cols-2">
                        <div class="col">
                            <label for="teachers">Profesores acompañantes</label>
                        </div>
                        <div class="col">
                            <label for="student_groups">Grupos de alumnos que realizarán la actividad</label>
                        </div>
                        <div class="col">
                            <textarea type="text" class="form-control mb-4" id="teachers" name="teachers"></textarea>
                        </div>
                        <div class="col">
                            <textarea type="text" class="form-control mb-4" id="student_groups" name="student_groups"></textarea>
                        </div>
                    </div>

                    {{-- cuarta fila --}}
                    <div class="row row-cols-2">
                        <div class="col">
                            <label for="date">Fecha</label>
                        </div>
                        <div class="col">
                            <label for="departure_time">Hora de salida</label>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control mb-4" id="date" name="date"></input>
                        </div>
                        <div class="col">
                            <input type="time" class="form-control mb-4" id="departure_time" name="departure_time"></input>
                        </div>

                    </div>

                    {{-- quinta fila --}}
                    <div class="row row-cols-2">
                        <div class="col">
                            <label for="arrive_time">Hora prevista de llegada</label>
                        </div>
                        <div class="col">
                            <label for="activity_price">Precio de la actividad</label>
                        </div>
                        <div class="col">
                            <input type="time" class="form-control mb-4" id="departure_time" name="departure_time"></input>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control mb-4" id="activity_price" name="activity_price"></input>
                        </div>
                    </div>

                    {{-- sexta fila --}}
                    <div class="row row-cols-2">
                        <div class="col">
                            <label for="transport">Medio de transporte</label>
                        </div>
                        <div class="col">
                            <label for="activity_responsible_teacher">Profesor responsable</label>
                        </div>

                        <div class="col">
                            <input type="text" class="form-control mb-4" id="transport" name="transport"></input>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control mb-4" id="activity_responsible_teacher" name="activity_responsible_teacher" />
                        </div>
                    </div>

                    {{-- séptima fila --}}
                    <div class="row row-cols-1">
                        <div class="col">
                            <label for="observations">Observaciones</label>
                        </div>
                        <div class="col">
                            <textarea type="time" class="form-control mb-4" id="observations" name="observations"></textarea>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="button">Enviar</button>
                    </div>
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
    }

    h1 {
        align-self: center;
        font-size: 30px;
        margin-top: 10px;
    }

</style>
