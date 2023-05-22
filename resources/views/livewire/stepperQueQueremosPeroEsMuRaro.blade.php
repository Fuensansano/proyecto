<x-main>
	@livewire('navbar')

    <div class="container">
        <form action="proofMissingTeacher" class="form" method="post">
            @csrf

            <h1 class="text-center text-primary">JUSTIFICANTE FALTA PROFESORADO</h1>

            <!-- Progress bar -->
            <div class="progressbar">
                <div class="progress" id="progress"></div>

                <div class="progress-step progress-step-active"></div>
                <div class="progress-step"></div>
                <div class="progress-step"></div>
                <div class="progress-step"></div>
            </div>

            <!-- Steps -->
            <div class="form-step form-step-active">
                <div class="input-group">
                    <label for="name" class="label">Nombre
						<span class="text-danger">*</span>
					</label>
                    <input type="text" name="name" id="name" class="input @error('name') is-invalid @enderror"/>
                    @if($errors->get('name'))
                        <div class="text-danger mb-3 mt-0">
                            {{ $errors->get('name')[0] }}
                        </div>
                    @endif
                </div>

                <div class="input-group">
                    <label for="department" class="label">Departamento
						<span class="text-danger">*</span>
					</label>
                    <input type="text" name="department" id="department" class="input @error('department') is-invalid @enderror"/>
                    @if($errors->get('department'))
                        <div class="text-danger mb-3 mt-0">
                            {{ $errors->get('department')[0] }}
                        </div>
                    @endif
                </div>

                <div class="input-group">
                    <label for="dni" class="label">DNI
						<span class="text-danger">*</span>
					</label>
                    <input type="text" name="dni" id="dni" class="input @error('dni') is-invalid @enderror"/>
                    @if($errors->get('dni'))
                        <div class="text-danger mb-3 mt-0">
                            {{ $errors->get('dni')[0] }}
                        </div>
                    @endif
                </div>

                <div class="">
                    <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
                </div>
            </div>

            <div class="form-step">
				<div class="row">
					<div class="col">
						<label for="missingDay1" class="label">Día faltado
							<span class="text-danger">*</span>
						</label>
						<input type="date" name="missingDay1" id="missingDay1" class="input @error('missingDay1') is-invalid @enderror"/>
						@if($errors->get('missingDay1'))
							<div class="text-danger mb-3 mt-0">
								{{ $errors->get('missingDay1')[0] }}
							</div>
						@endif
					</div>

					<div class="col margin-radios">
						<div>
							<input type="radio" name="journey_option1" value="full_journey_option1" id="full_journey_option1" class="@error('journey_option1') is-invalid @enderror"/>
							<label for="full_journey_option1" class="radio-label">He faltado la jornada completa
								<span class="text-danger">*</span>
							</label>
							@if($errors->get('journey_option1'))
								<div class="text-danger mb-3 mt-0">
									{{ $errors->get('journey_option1')[0] }}
								</div>
							@endif
						</div>
						<div>
							<input type="radio" name="journey_option1" value="mid_journey_option1" id="mid_journey_option1" class="@error('journey_option1') is-invalid @enderror"/>
							<label for="mid_journey_option1" class="radio-label">No he faltado la jornada completa
								<span class="text-danger">*</span>
							</label>
							@if($errors->get('journey_option1'))
								<div class="text-danger mb-3 mt-0">
									{{ $errors->get('journey_option1')[0] }}
								</div>
							@endif
						</div>
					</div>

					<div class="col">
						<div class="row row-cols-2 mb-4">
							<div class="col">
								<label for="midJourneyFrom1" class="label @error('midJourneyFrom1') is-invalid @enderror">Desde las
									<span class="text-danger">*</span>
								</label>
								<input
									type="time"
									name="midJourneyFrom1"
									id="midJourneyFrom1"
									class="input"
								/>
								@if($errors->get('midJourneyFrom1'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('midJourneyFrom1')[0] }}
									</div>
								@endif
							</div>

							<div class="col">
								<label for="midJourneyTo1" class="label @error('midJourneyTo1') is-invalid @enderror">a las
									<span class="text-danger">*</span>
								</label>
								<input
									type="time"
									name="midJourneyTo1"
									id="midJourneyTo1"
									class="input"
								/>
								@if($errors->get('midJourneyTo1'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('midJourneyTo1')[0] }}
									</div>
								@endif
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<label for="missingDay2" class="label">Día faltado</label>
						<input type="date" name="missingDay2" id="missingDay2" class="input @error('missingDay2') is-invalid @enderror"/>
						@if($errors->get('missingDay2'))
							<div class="text-danger mb-3 mt-0">
								{{ $errors->get('missingDay2')[0] }}
							</div>
						@endif
					</div>

					<div class="col margin-radios">
						<div>
							<input type="radio" name="journey_option2" value="full_journey_option2" id="full_journey_option2" class="@error('journey_option2') is-invalid @enderror"/>
							<label for="full_journey_option2" class="radio-label">He faltado la jornada completa</label>
							@if($errors->get('journey_option2'))
								<div class="text-danger mb-3 mt-0">
									{{ $errors->get('journey_option2')[0] }}
								</div>
							@endif
						</div>
						<div>
							<input type="radio" name="journey_option2" value="mid_journey_option2" id="mid_journey_option2" class="@error('journey_option2') is-invalid @enderror"/>
							<label for="mid_journey_option2" class="radio-label">No he faltado la jornada completa</label>
							@if($errors->get('journey_option2'))
								<div class="text-danger mb-3 mt-0">
									{{ $errors->get('journey_option2')[0] }}
								</div>
							@endif
						</div>
					</div>

					<div class="col">
						<div class="row row-cols-2 mb-4">
							<div class="col">
								<label for="midJourneyFrom2" class="label @error('midJourneyFrom2') is-invalid @enderror">Desde las </label>
								<input
									type="time"
									name="midJourneyFrom2"
									id="midJourneyFrom2"
									class="input"
								/>
								@if($errors->get('midJourneyFrom2'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('midJourneyFrom2')[0] }}
									</div>
								@endif
							</div>

							<div class="col">
								<label for="midJourneyTo2" class="label @error('midJourneyTo2') is-invalid @enderror">a las </label>
								<input
									type="time"
									name="midJourneyTo2"
									id="midJourneyTo2"
									class="input"
								/>
								@if($errors->get('midJourneyTo2'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('midJourneyTo2')[0] }}
									</div>
								@endif
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<label for="missingDay3" class="label">Día faltado</label>
						<input type="date" name="missingDay3" id="missingDay3" class="input @error('missingDay3') is-invalid @enderror"/>
						@if($errors->get('missingDay3'))
							<div class="text-danger mb-3 mt-0">
								{{ $errors->get('missingDay3')[0] }}
							</div>
						@endif
					</div>

					<div class="col margin-radios">
						<div>
							<input type="radio" name="journey_option3" value="full_journey_option3" id="full_journey_option3" class="@error('journey_option3') is-invalid @enderror"/>
							<label for="full_journey_option3" class="radio-label">He faltado la jornada completa</label>
							@if($errors->get('journey_option3'))
								<div class="text-danger mb-3 mt-0">
									{{ $errors->get('journey_option3')[0] }}
								</div>
							@endif
						</div>
						<div>
							<input type="radio" name="journey_option3" value="mid_journey_option3" id="mid_journey_option3" class="@error('journey_option3') is-invalid @enderror"/>
							<label for="mid_journey_option3" class="radio-label">No he faltado la jornada completa</label>
							@if($errors->get('journey_option3'))
								<div class="text-danger mb-3 mt-0">
									{{ $errors->get('journey_option3')[0] }}
								</div>
							@endif
						</div>
					</div>

					<div class="col">
						<div class="row row-cols-2 mb-4">
							<div class="col">
								<label for="midJourneyFrom3" class="label @error('midJourneyFrom3') is-invalid @enderror">Desde las </label>
								<input
									type="time"
									name="midJourneyFrom3"
									id="midJourneyFrom3"
									class="input"
								/>
								@if($errors->get('midJourneyFrom3'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('midJourneyFrom3')[0] }}
									</div>
								@endif
							</div>

							<div class="col">
								<label for="midJourneyTo3" class="label @error('midJourneyTo3') is-invalid @enderror">a las </label>
								<input
									type="time"
									name="midJourneyTo3"
									id="midJourneyTo3"
									class="input"
								/>
								@if($errors->get('midJourneyTo3'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('midJourneyTo3')[0] }}
									</div>
								@endif
							</div>
						</div>
					</div>
				</div>

                <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-width">Previous</a>
                    <a href="#" class="btn btn-next btn-width">Next</a>
                </div>
            </div>

            <div class="form-step">
                <div class="input-group">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                            id="permissionsSelect" onchange="showHiddenFields()">
                        <option value="L1">L1: Licencia por asuntos propios para funcionarios en servicio activo. (2)</option>
                        <option value="L2" id="L2">L2: Ausencia por enfermedad no superior a tres días. (10)</option>
                        <option value="L3">L3: Licencia por enfermedad de más de tres días de duración. (1)</option>
                        <option value="P1">P1: Permiso por traslado de domicilio. (3)</option>
                        <option value="P2">P2: Permiso por exámenes finales y demás pruebas definitivas de aptitud. (4)</option>
                        <option value="P3">P3: Permiso para el cumplimiento de deberes inexcusables de carácter público o personal. (6)</option>
                        <option value="P4">P4: Permiso por adopción o acogimiento de menores de seis años y mayores de seis años discapacitados o minusválidos. (2)</option>
                        <option value="P5">P5: Permiso por lactancia. (2)</option>
                        <option value="P6">P6: Permiso por reducción de jornada por guarda legal o atención por discapacidad.</option>
                        <option value="P7">P7: Permiso retribuido para las funcionarias en estado de gestación.</option>
                        <option value="P8">P8: Permiso por parto.</option>
                        <option value="P9">P9: Permiso por paternidad, por el nacimiento, adopción o acogimiento de un hijo. (2)</option>
                        <option value="P10">P10: Permiso por fallecimiento, enfermedad, accidente grave u operación de un familiar. (2)</option>
                        <option value="P11">P11: Permiso por exámenes prenatales. (7)</option>
                        <option value="P12">P12: Permiso sustitutivo de lactancia. (2)</option>
                        <option value="P13">P13: Permiso de ausencia por nacimiento de hijos prematuros u hospitalizados tras el parto. (5)</option>
                        <option value="P14" id="P14">P14: Permiso de ausencia del trabajo para la conciliación de la vida familiar y profesional. (8)</option>
                        <option value="P15">P15: Permiso por reducción horaria por cuidado de familiares. (2)</option>
                        <option value="P16">P16: Flexibilización horaria para conciliación de la vida familiar. (9)</option>
                        <option value="P17">P17: Permiso por estudios sobre materias relacionadas con el puesto de trabajo. (2)</option>
                        <option value="P18">P18: Permiso por razón de violencia de género.</option>
                        <option value="P19">P19: Permiso por riesgos en el embarazo o lactancia natural vinculado al puesto de trabajo. (1)</option>
                        <option value="P20">P20: Permiso por matrimonio. (2)</option>
                    </select>
                </div>

                <div class="col mb-4" id="medicalProof" style="display: none;">
                    <div>
                        <input type="radio" name="reason" value="reason1"/>
                        <label for="reason" class="radio-label">El médico no tiene consulta en otro horario</label>
                    </div>
                    <div>
                        <input type="radio" name="reason" value="reason2"/>
                        <label for="reason" class="radio-label">La necesidad de asistencia ha impedido hacerlo en otro horario o en otra fecha</label>
                    </div>
                    <div>
                        <label class="radio-label">Otro motivo</label>
                        <input type="text" name="reason" class="input" placeholder="otro motivo"/>
                    </div>
                </div>

                <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-width">Previous</a>
                    <a href="#" class="btn btn-next btn-width">Next</a>
                </div>
            </div>

            <div class="form-step">
                <div class="input-group">
                    <label for="password" class="label">Password</label>
                    <input type="password" name="password" id="password" class="input"/>
                </div>
                <div class="input-group">
                    <label for="confirmPassword" class="label">Confirm Password</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" class="input"/>
                </div>
                <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-width">Previous</a>
                    <input type="submit" value="Submit" class="btn btn-submit-width"/>
                </div>
            </div>
        </form>
    </div>
</x-main>

<script>
    function showHiddenFields() {
        const permissionsSelect = document.querySelector('#permissionsSelect');
        const selectedOption = permissionsSelect.options[permissionsSelect.selectedIndex].value;
        const medicalProof = document.querySelector('#medicalProof');

        if (selectedOption === 'L2' || selectedOption === 'P14') {
            medicalProof.style.display = "block";
        } else {
            medicalProof.style.display = "none";
        }
    }
</script>
 
<style>
@import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;0,700;1,600&display=swap');

:root {
    --primary-color: rgb(13, 110, 253);
}

body {
	font-family: Montserrat, "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
	margin: 0;
	place-items: center;
}

/* Global Stylings */
h1 {
	font-family: 'Raleway', sans-serif;
}

.label {
	display: block;
	margin-bottom: 0.5rem;
	font-size: 18px;
}

.input {
	display: block;
	width: 100%;
	padding: 0.75rem;
	border: 1px solid #ccc;
	border-radius: 0.25rem;
}

.radio-label {
	font-size: 18px;
}

.container {
    max-width: 90%;
    margin-top: 40px;
}

.width-50 {
  	width: 50%;
}

.ml-auto {
  	margin-left: auto;
}

.text-center {
  	text-align: center;
}

.margin-radios {
	margin-top: 33px;
	margin-left: 100px;
}

/* Progressbar */
.progressbar {
  	position: relative;
  	display: flex;
  	justify-content: space-between;
  	counter-reset: step;
  	margin: 2rem 0 4rem;
}

.progressbar::before,
.progress {
	content: "";
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	height: 4px;
	width: 100%;
	background-color: #dcdcdc;
	z-index: -1;
}

.progress {
	background-color: var(--primary-color);
	width: 0%;
	transition: 0.3s;
}

.progress-step {
	width: 2.1875rem;
	height: 2.1875rem;
	background-color: #dcdcdc;
	border-radius: 50%;
	display: flex;
	justify-content: center;
	align-items: center;
}

.progress-step::before {
	counter-increment: step;
	content: counter(step);
}

.progress-step::after {
	content: attr(data-title);
	position: absolute;
	top: calc(100% + 0.5rem);
	font-size: 0.85rem;
	color: #666;
}

.progress-step-active {
	background-color: var(--primary-color);
	color: #f3f3f3;
}

/* Form */
.form {
	max-width: 90%;
	margin: 0 auto;
	border: 1px solid #ccc;
	border-radius: 0.35rem;
	padding: 1.5rem;
}

.form-step {
	display: none;
	transform-origin: top;
	animation: animate 0.5s;
}

.form-step-active {
  	display: block;
}

.input-group {
  	margin: 2rem 0;
}

@keyframes animate {
	from {
		transform: scale(1, 0);
		opacity: 0;
	}
	to {
		transform: scale(1, 1);
		opacity: 1;
	}
}

/* Button */
.btns-group {
	/* display: grid;
	grid-template-columns: repeat(2, 1fr);
	gap: 1.5rem; */
	display: flex;
	align-items: center;
	justify-content: center;
	gap: 5rem;
}

.btn {
	padding: 0.75rem;
	display: block;
	text-decoration: none;
	background-color: var(--primary-color);
	color: #f3f3f3;
	text-align: center;
	border-radius: 0.25rem;
	cursor: pointer;
	transition: 0.3s;
	max-width: 15%;
}

.btn-width {
    width: 15%;
}

.btn-submit-width {
    width: 15%;
}

.btn:hover {
  	box-shadow: 0 0 0 2px #fff, 0 0 0 3px var(--primary-color);
}
</style>

<script>
	const prevBtns = document.querySelectorAll(".btn-prev");
	const nextBtns = document.querySelectorAll(".btn-next");
	const progress = document.getElementById("progress");
	const formSteps = document.querySelectorAll(".form-step");
	const progressSteps = document.querySelectorAll(".progress-step");

	let formStepsNum = 0;

	const midJourneyFrom1 = document.getElementById('midJourneyFrom1');
	const midJourneyTo1 = document.getElementById('midJourneyTo1');

	document.getElementById('full_journey_option1').addEventListener('click', (e) => {
		midJourneyFrom1.disabled = true;
		midJourneyTo1.disabled = true;
	});

	document.getElementById('mid_journey_option1').addEventListener('click', (e) => {
		midJourneyFrom1.disabled = false;
		midJourneyTo1.disabled = false;
	});

	const midJourneyFrom2 = document.getElementById('midJourneyFrom2');
	const midJourneyTo2 = document.getElementById('midJourneyTo2');

	document.getElementById('full_journey_option2').addEventListener('click', (e) => {
		midJourneyFrom2.disabled = true;
		midJourneyTo2.disabled = true;
	});

	document.getElementById('mid_journey_option2').addEventListener('click', (e) => {
		midJourneyFrom2.disabled = false;
		midJourneyTo2.disabled = false;
	});

	const midJourneyFrom3 = document.getElementById('midJourneyFrom3');
	const midJourneyTo3 = document.getElementById('midJourneyTo3');

	document.getElementById('full_journey_option3').addEventListener('click', (e) => {
		midJourneyFrom3.disabled = true;
		midJourneyTo3.disabled = true;
	});

	document.getElementById('mid_journey_option3').addEventListener('click', (e) => {
		midJourneyFrom3.disabled = false;
		midJourneyTo3.disabled = false;
	});

	nextBtns.forEach((btn) => {
		btn.addEventListener("click", () => {
			formStepsNum++;
			updateFormSteps();
			updateProgressbar();
		});
	});

	prevBtns.forEach((btn) => {
		btn.addEventListener("click", () => {
			formStepsNum--;
			updateFormSteps();
			updateProgressbar();
		});
	});

	function updateFormSteps() {
		formSteps.forEach((formStep) => {
			formStep.classList.contains("form-step-active") &&
			formStep.classList.remove("form-step-active");
		});

		formSteps[formStepsNum].classList.add("form-step-active");
	}

	function updateProgressbar() {
		progressSteps.forEach((progressStep, idx) => {
			if (idx < formStepsNum + 1) {
				progressStep.classList.add("progress-step-active");
			} else {
				progressStep.classList.remove("progress-step-active");
			}
		});

		const progressActive = document.querySelectorAll(".progress-step-active");

		progress.style.width = ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
	}
</script>