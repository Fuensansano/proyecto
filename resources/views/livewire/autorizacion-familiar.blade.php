<x-main>
    @livewire('navbar')
    <div class="container center">
        <form action="save" method="POST">
            @csrf
            <div class="card mt-5">
                <h1 class="text-primary">AUTORIZACIÓN FAMILIAR</h1>
                <div class="card-body" style="display: flex; flex-direction: column">
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="activity" placeholder="Actividad Programada">
                                <label for="activity">ACTIVIDAD PROGRAMADA</label>
                            </div>                              
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="organizer" placeholder="Organizada Por">
                                <label for="organizer">ORGANIZADOR/A</label>
                            </div>                              
                        </div>
                    </div>

                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="execution_date" placeholder="Fecha Realización">
                                <label for="execution_date">FECHA REALIZACIÓN</label>
                            </div>                              
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" id="departure_time" placeholder="Hora Salida">
                                <label for="departure_time">HORA SALIDA</label>
                            </div>                              
                        </div>
                    </div>

                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Obejtivos y Contenidos" id="goals"></textarea>
                                <label for="goals">OBJETIVOS Y CONTENIDOS</label>
                            </div>                           
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="deadline" placeholder="Fecha de Entrega">
                                <label for="deadline">FECHA ENTREGA</label>
                            </div>                              
                        </div>
                    </div>

                    <div class="row row-cols-2" style="margin-top: 5px;">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="parents" placeholder="Padre/Madre/Tutor">
                                <label for="parents">PADRE/MADRE/TUTOR</label>
                            </div>                              
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="student" placeholder="Alumno">
                                <label for="student">ALUMNO</label>
                            </div>                              
                        </div>
                    </div>

                    <div class="row row-cols-1">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="course" placeholder="Curso alumno">
                                <label for="course">CURSO DEL ALUMNO</label>
                            </div>                              
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="authorization" id="auth">
                                <label class="form-check-label" for="auth">
                                    Tiene mi autorización para participar en la actividad programada y autorizo a la toma y difusión de imágenes de este día en la página web y/o RRSS del centro.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="authorization" id="notAuth">
                                <label class="form-check-label" for="notAuth">
                                    No va a participar en la actividad programada.
                                </label>
                            </div>                                         
                        </div>
                    </div>
                </div>

                <hr>

                <div class="buttons-container">
                    <button type="submit" class="button-arounder">ENVIAR</button>
                    <button type="submit" class="button-arounder-cancelar">CANCELAR</button>
                </div>
            </div>
        </form>
    </div>
</x-main>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,600&display=swap');

    .container {
        max-width: 50%;
    }

    h1 {
        align-self: center;
        font-size: 40px;
        margin-top: 10px;
        font-family: 'Raleway', sans-serif;
    }

    .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .buttons-container {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    button {
        background: white;
        padding: 10px;
        margin-bottom: 10px;
        margin-left: 15px;
    }

    .button-arounder {
        font-size: 17px;
        background: hsl(152, 64%, 48%);
        color: hsl(190deg, 10%, 95%);
        
        box-shadow: 0 0px 0px hsla(190deg, 15%, 5%, .2);
        transfrom: translateY(0);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        
        --dur: .1s;
        --delay: .1s;
        --radius: 25px;
    
        transition:
            border-top-left-radius var(--dur) var(--delay) ease-out,
            border-top-right-radius var(--dur) calc(var(--delay) * 2) ease-out,
            border-bottom-right-radius var(--dur) calc(var(--delay) * 3) ease-out,
            border-bottom-left-radius var(--dur) calc(var(--delay) * 4) ease-out,
            box-shadow calc(var(--dur) * 4) ease-out,
            transform calc(var(--dur) * 4) ease-out,
            background calc(var(--dur) * 4) steps(4, jump-end);
    }

    .button-arounder:hover,
    .button-arounder:focus {
        box-shadow: 0 4px 8px hsla(190deg, 15%, 5%, .2);
        transform: translateY(-4px);
        background: hsl(152, 68%, 31%);
        border-top-left-radius: var(--radius);
        border-top-right-radius: var(--radius);
        border-bottom-left-radius: var(--radius);
        border-bottom-right-radius: var(--radius);
    }

    .button-arounder-cancelar {
        font-size: 17px;
        background: hsl(354, 65%, 64%);
        color: hsl(190deg, 10%, 95%);
        
        box-shadow: 0 0px 0px hsla(190deg, 15%, 5%, .2);
        transfrom: translateY(0);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        
        --dur: .1s;
        --delay: .1s;
        --radius: 25px;
    
        transition:
            border-top-left-radius var(--dur) var(--delay) ease-out,
            border-top-right-radius var(--dur) calc(var(--delay) * 2) ease-out,
            border-bottom-right-radius var(--dur) calc(var(--delay) * 3) ease-out,
            border-bottom-left-radius var(--dur) calc(var(--delay) * 4) ease-out,
            box-shadow calc(var(--dur) * 4) ease-out,
            transform calc(var(--dur) * 4) ease-out,
            background calc(var(--dur) * 4) steps(4, jump-end);
    }

    .button-arounder-cancelar:hover,
    .button-arounder-cancelar:focus {
        box-shadow: 0 4px 8px hsla(190deg, 15%, 5%, .2);
        transform: translateY(-4px);
        background: hsl(354, 70%, 53%);
        border-top-left-radius: var(--radius);
        border-top-right-radius: var(--radius);
        border-bottom-left-radius: var(--radius);
        border-bottom-right-radius: var(--radius);
    }
</style>