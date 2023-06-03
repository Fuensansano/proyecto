<x-main>
	@livewire('navbar')
	<div class="container">
		<form action="proof-missing-teacher" method="post">
			@csrf
			<div class="card mt-5">
				<h1 class="text-primary text-center">JUSTIFICANTE FALTA PROFESORADO</h1>

				<div class="card-body">
					<div class="row row-cols-3 mb-4">
						<div class="col">
							<label for="name">
								Nombre<span class="text-danger"> *</span>
							</label>
						</div>
						<div class="col">
							<label for="department">
								Departamento<span class="text-danger"> *</span>
							</label>
						</div>
						<div class="col">
							<label for="dni">
								DNI<span class="text-danger"> *</span>
							</label>
						</div>

						<div class="col">
							<input
								id="name"
								type="text"
								name="name"
								class="form-control @error('name') is-invalid @enderror"
							/>
							@if($errors->get('name'))
							<div class="text-danger mb-3 mt-0">
									{{ $errors->get('name')[0] }}
								</div>
							@endif
						</div>
						<div class="col">
							<input
								id="department"
								type="text"
								name="department"
								class="form-control @error('department') is-invalid @enderror"
							/>
							@if($errors->get('department'))
								<div class="text-danger mb-3 mt-0">
									{{ $errors->get('department')[0] }}
								</div>
							@endif
						</div>
						<div class="col">
							<input
								id="dni"
								type="text"
								name="dni"
								class="form-control @error('dni') is-invalid @enderror"
							/>
							@if($errors->get('dni'))
								<div class="text-danger mb-3 mt-0">
									{{ $errors->get('dni')[0] }}
								</div>
							@endif
						</div>
					</div>

					<div class="row row-cols-3">
						<div class="col">
							<label for="missingDay1">
								Día faltado<span class="text-danger"> *</span>
							</label>

							<input
								id="missingDay1"
								type="date"
								name="missingDay1"
								class="form-control @error('missingDay1') is-invalid @enderror"
							/>
							@if($errors->get('missingDay1'))
								<div class="text-danger mb-3 mt-0">
									{{ $errors->get('missingDay1')[0] }}
								</div>
							@endif
						</div>

						<div class="col mt-3">
							<div>
								<input
									type="radio"
									name="journeyType1"
									value="fullJourneyOption1"
									id="fullJourneyOption1"
									class="@error('journeyType1') is-invalid @enderror"
								/>

								<label for="fullJourneyOption1" class="radio-label">
									He faltado la jornada completa<span class="text-danger"> *</span>
								</label>
								@if($errors->get('journeyType1'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('journeyType1')[0] }}
									</div>
								@endif
							</div>

							<div>
								<input
									type="radio"
									name="journeyType1"
									value="midJourneyOption1"
									id="midJourneyOption1"
									class="@error('journeyType1') is-invalid @enderror"
								/>

								<label for="midJourneyOption1" class="radio-label">
									No he faltado la jornada completa<span class="text-danger"> *</span>
								</label>
								@if($errors->get('journeyType1'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('journeyType1')[0] }}
									</div>
								@endif
							</div>
						</div>

						<div class="col">
							<div class="row row-cols-2 mb-4">
								<div class="col">
									<label
										for="journeyStartTime1"
										class="@error('journeyStartTime1') is-invalid @enderror"
									>
										Desde <span class="text-danger"> *</span>
									</label>

									<input
										id="journeyStartTime1"
										type="time"
										name="journeyStartTime1"
										class="form-control"
									/>
									@if($errors->get('journeyStartTime1'))
										<div class="text-danger mb-3 mt-0">
											{{ $errors->get('journeyStartTime1')[0] }}
										</div>
									@endif
								</div>

								<div class="col">
									<label
										for="journeyEndTime1"
										class="@error('journeyEndTime1') is-invalid @enderror"
									>
										Hasta <span class="text-danger"> *</span>
									</label>

									<input
										id="journeyEndTime1"
										type="time"
										name="journeyEndTime1"
										class="form-control"
									/>
									@if($errors->get('journeyEndTime1'))
										<div class="text-danger mb-3 mt-0">
											{{ $errors->get('journeyEndTime1')[0] }}
										</div>
									@endif
								</div>
							</div>
						</div>
					</div>

					<div class="row row-cols-3">
						<div class="col">
							<label for="missingDay2">
								Día faltado
							</label>

							<input
								id="missingDay2"
								type="date"
								name="missingDay2"
								class="form-control @error('missingDay2') is-invalid @enderror"
							/>
							@if($errors->get('missingDay2'))
								<div class="text-danger mb-3 mt-0">
									{{ $errors->get('missingDay2')[0] }}
								</div>
							@endif
						</div>

						<div class="col mt-3">
							<div>
								<input
									id="fullJourneyOption2"
									type="radio"
									name="journeyType2"
									value="fullJourneyOption2"
									class="@error('journeyType2') is-invalid @enderror"
								/>

								<label for="fullJourneyOption2" class="radio-label">
									He faltado la jornada completa
								</label>
								@if($errors->get('journeyType2'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('journeyType2')[0] }}
									</div>
								@endif
							</div>

							<div>
								<input
									id="midJourneyOption2"
									type="radio"
									name="journeyType2"
									value="midJourneyOption2"
									class="@error('journeyType2') is-invalid @enderror"
								/>

								<label for="midJourneyOption2" class="radio-label">
									No he faltado la jornada completa
								</label>
								@if($errors->get('journeyType2'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('journeyType2')[0] }}
									</div>
								@endif
							</div>
						</div>

						<div class="col">
							<div class="row row-cols-2 mb-4">
								<div class="col">
									<label
										for="journeyStartTime2"
										class="@error('journeyStartTime2') is-invalid @enderror"
									>
										Desde
									</label>

									<input
										id="journeyStartTime2"
										type="time"
										name="journeyStartTime2"
										class="form-control"
									/>
									@if($errors->get('journeyStartTime2'))
										<div class="text-danger mb-3 mt-0">
											{{ $errors->get('journeyStartTime2')[0] }}
										</div>
									@endif
								</div>

								<div class="col">
									<label
										for="journeyEndTime2"
										class="@error('journeyEndTime2') is-invalid @enderror"
									>
										Hasta
									</label>

									<input
										id="journeyEndTime2"
										type="time"
										name="journeyEndTime2"
										class="form-control"
									/>
									@if($errors->get('journeyEndTime2'))
										<div class="text-danger mb-3 mt-0">
											{{ $errors->get('journeyEndTime2')[0] }}
										</div>
									@endif
								</div>
							</div>
						</div>
					</div>

					<div class="row row-cols-3">
						<div class="col">
							<label for="missingDay3">
								Día faltado
							</label>

							<input
								id="missingDay3"
								type="date"
								name="missingDay3"
								class="form-control @error('missingDay3') is-invalid @enderror"
							/>
							@if($errors->get('missingDay3'))
								<div class="text-danger mb-3 mt-0">
									{{ $errors->get('missingDay3')[0] }}
								</div>
							@endif
						</div>

						<div class="col mt-3">
							<div>
								<input
									id="fullJourneyOption3"
									type="radio"
									name="journeyType3"
									value="fullJourneyOption3"
									class="@error('journeyType3') is-invalid @enderror"
								/>

								<label for="fullJourneyOption3" class="radio-label">
									He faltado la jornada completa
								</label>
								@if($errors->get('journeyType3'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('journeyType3')[0] }}
									</div>
								@endif
							</div>

							<div>
								<input
									id="midJourneyOption3"
									type="radio"
									name="journeyType3"
									value="midJourneyOption3"
									class="@error('journeyType3') is-invalid @enderror"
								/>

								<label for="midJourneyOption3" class="radio-label">
									No he faltado la jornada completa
								</label>
								@if($errors->get('journeyType3'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('journeyType3')[0] }}
									</div>
								@endif
							</div>
						</div>

						<div class="col">
							<div class="row row-cols-2 mb-4">
								<div class="col">
									<label
										for="journeyStartTime3"
										class="@error('journeyStartTime3') is-invalid @enderror"
									>
										Desde
									</label>

									<input
										id="journeyStartTime3"
										type="time"
										name="journeyStartTime3"
										class="form-control"
									/>
									@if($errors->get('journeyStartTime3'))
										<div class="text-danger mb-3 mt-0">
											{{ $errors->get('journeyStartTime3')[0] }}
										</div>
									@endif
								</div>

								<div class="col">
									<label
										for="journeyEndTime3"
										class="@error('journeyEndTime3') is-invalid @enderror"
									>
										Hasta
									</label>

									<input
										id="journeyEndTime3"
										type="time"
										name="journeyEndTime3"
										class="form-control"
									/>
									@if($errors->get('journeyEndTime3'))
										<div class="text-danger mb-3 mt-0">
											{{ $errors->get('journeyEndTime3')[0] }}
										</div>
									@endif
								</div>
							</div>
						</div>
					</div>

					<div class="row row-cols-1">
                        <label for="permissionsSelect">Por el siguiente motivo:</label><br>
						<div class="input-group">
							<select
								class="form-select mb-3"
								aria-label=".form-select-lg example"
								id="permissionsSelect"
                                name="permissionsSelect"
								onchange="showHiddenFields()"
							>
                                @foreach(config('proofMissingTeacherSelectOptions') as $key => $value)
                                    <option value="{{ $value }}" id="{{ $key }}">
                                        {{ $value }}
                                    </option>
                                @endforeach

							</select>
						</div>
                        @if($errors->get('permissionsSelect'))
                            <div class="text-danger mb-3 mt-0">
                                {{ $errors->get('permissionsSelect')[0] }}
                            </div>
                        @endif

						<div class="col mb-4" id="medicalProof" style="display: none;">
							<div>
								<input type="radio" onchange="hideAnotherReason()" id="doctor" name="reason" value="el médico no tiene consulta en otro horario."/>
								<label for="doctor" class="radio-label">El médico no tiene consulta en otro horario</label>
							</div>
							<div>
								<input type="radio" onchange="hideAnotherReason()" id="schedule" name="reason" value="la necesidad de asistencia ha impedido hacerlo en otro horario o en otra fecha."/>
								<label for="schedule" class="radio-label">La necesidad de asistencia ha impedido hacerlo en otro horario o en otra fecha</label>
							</div>
                            <div>
                                <input type="radio" onchange="displayAnotherReason()" name="reason" id="another" value="another"/>
                                <label for="another" class="radio-label">Otro motivo:</label>
                            </div>
                            <input type="text" onchange="updateAnotherValue()" style="display: none" id="anotherReason" class="form-control" name="anotherReason" />
						</div>
					</div>
				</div>

				<div class="d-grid gap-2 col-4 mx-auto">
					<x-clauses-index-modal></x-clauses-index-modal>
				</div>

				<hr>

                <x-form-buttons></x-form-buttons>
			</div>
		</form>
	</div>
</x-main>

<script>
    function displayAnotherReason() {
        const anotherReason = document.getElementById('anotherReason');
        anotherReason.style.display = 'block';
        anotherReason.disabled = false;
    }

    function hideAnotherReason() {
        const anotherReason = document.getElementById('anotherReason');
        anotherReason.style.display = 'none';
        anotherReason.disabled = false;
    }

    function updateAnotherValue() {
        const another = document.getElementById('another');
        const anotherReason = document.getElementById('anotherReason');
        another.value = anotherReason.value;
    }

	const journeyStartTime1 = document.getElementById('journeyStartTime1');
	const journeyEndTime1 = document.getElementById('journeyEndTime1');

	document.getElementById('fullJourneyOption1').addEventListener('click', (e) => {
		journeyStartTime1.disabled = true;
		journeyEndTime1.disabled = true;
	});

	document.getElementById('midJourneyOption1').addEventListener('click', (e) => {
		journeyStartTime1.disabled = false;
		journeyEndTime1.disabled = false;
	});

	const journeyStartTime2 = document.getElementById('journeyStartTime2');
	const journeyEndTime2 = document.getElementById('journeyEndTime2');

	document.getElementById('fullJourneyOption2').addEventListener('click', (e) => {
		journeyStartTime2.disabled = true;
		journeyEndTime2.disabled = true;
	});

	document.getElementById('midJourneyOption2').addEventListener('click', (e) => {
		journeyStartTime2.disabled = false;
		journeyEndTime2.disabled = false;
	});

	const journeyStartTime3 = document.getElementById('journeyStartTime3');
	const journeyEndTime3 = document.getElementById('journeyEndTime3');

	document.getElementById('fullJourneyOption3').addEventListener('click', (e) => {
		journeyStartTime3.disabled = true;
		journeyEndTime3.disabled = true;
	});

	document.getElementById('midJourneyOption3').addEventListener('click', (e) => {
		journeyStartTime3.disabled = false;
		journeyEndTime3.disabled = false;
	});

	function showHiddenFields() {
        const permissionsSelect = document.querySelector('#permissionsSelect');
        const selectedOption = permissionsSelect.options[permissionsSelect.selectedIndex].id;
        const medicalProof = document.querySelector('#medicalProof');

        if (selectedOption === 'L2' || selectedOption === 'P14') {
            medicalProof.style.display = "block";
        } else {
            medicalProof.style.display = "none";
        }
    }

</script>
