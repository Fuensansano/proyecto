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
                    <label for="name" class="label">Nombre</label>
                    <input type="text" name="name" id="name" class="input @error('name') is-invalid @enderror"/>
                    @if($errors->get('name'))
                        <div class="text-danger mb-3 mt-0">
                            {{ $errors->get('name')[0] }}
                        </div>
                    @endif
                </div>

                <div class="input-group">
                    <label for="department" class="label">Departamento</label>
                    <input type="text" name="department" id="department" class="input @error('department') is-invalid @enderror"/>
                    @if($errors->get('department'))
                        <div class="text-danger mb-3 mt-0">
                            {{ $errors->get('department')[0] }}
                        </div>
                    @endif
                </div>

                <div class="input-group">
                    <label for="dni" class="label">DNI</label>
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
						<div>
							<label for="missingDay" class="label">Día faltado</label>
							<input type="date" name="missingDay" id="missingDay" class="input @error('missingDay') is-invalid @enderror"/>
							@if($errors->get('missingDay'))
								<div class="text-danger mb-3 mt-0">
									{{ $errors->get('missingDay')[0] }}
								</div>
							@endif
						</div>
					</div>

					<div class="col margin-radios">
						<div>
							<input type="radio" name="option1" value="yes1" id="yes1"/>
							<label for="yes" class="radio-label">He faltado la jornada completa</label>
						</div>
						<div>
							<input type="radio" name="option1" value="no1" id="no1"/>
							<label for="no" class="radio-label">No he faltado la jornada completa</label>
						</div>
					</div>

					<div class="col">
						<div class="row row-cols-2 mb-4">
							<div class="col">
								<div>
									<label for="mid-journey-from" class="label">Desde las</label>
									<input
										type="time"
										name="mid-journey-from"
										id="mid-journey-from"
										class="input"
									/>
								</div>
							</div>
		
							<div class="col">
								<div>
									<label for="mid-journey-to" class="label">a las</label>
									<input
										type="time"
										name="mid-journey-to"
										id="mid-journey-to"
										class="input"
									/>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">

					</div>

					<div class="col">

					</div>

					<div class="col">

					</div>
				</div>

				<div class="row">
					<div class="col">

					</div>

					<div class="col">

					</div>

					<div class="col">

					</div>
				</div>

                <div class="btns-group">
                    <a href="#" class="btn btn-prev btn-width">Previous</a>
                    <a href="#" class="btn btn-next btn-width">Next</a>
                </div>
            </div>
    
            <div class="form-step">
                <div class="input-group">
                    <label for="dob" class="label">Date of Birth</label>
                    <input type="date" name="dob" id="dob" class="input"/>
                </div>
                <div class="input-group">
                    <label for="ID" class="label">National ID</label>
                    <input type="number" name="ID" id="ID" class="input"/>
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

	/* const optionYes = document.getElementById('yes'); */
	const midJourneyFrom = document.getElementById('mid-journey-from');
	const midJourneyTo = document.getElementById('mid-journey-to');

	document.getElementById('yes').addEventListener('click', function(e) {
		midJourneyFrom.disabled = true;
		midJourneyTo.disabled = true;
	});

	document.getElementById('no').addEventListener('click', function(e) {
		midJourneyFrom.disabled = false;
		midJourneyTo.disabled = false;
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