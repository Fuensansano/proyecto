<x-main>
	@livewire('navbar')

	<div class="container">
		<form action="proof-missing-teacher" class="form" method="post">
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
									name="journey_option1"
									value="full_journey_option1"
									id="full_journey_option1"
									class="@error('journey_option1') is-invalid @enderror"
								/>

								<label for="full_journey_option1" class="radio-label">
									He faltado la jornada completa<span class="text-danger"> *</span>
								</label>
								@if($errors->get('journey_option1'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('journey_option1')[0] }}
									</div>
								@endif
							</div>

							<div>
								<input
									type="radio"
									name="journey_option1"
									value="mid_journey_option1"
									id="mid_journey_option1"
									class="@error('journey_option1') is-invalid @enderror"
								/>

								<label for="mid_journey_option1" class="radio-label">
									No he faltado la jornada completa<span class="text-danger"> *</span>
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
									<label
										for="midJourneyFrom1"
										class="@error('midJourneyFrom1') is-invalid @enderror"
									>
										Desde <span class="text-danger"> *</span>
									</label>

									<input
										id="midJourneyFrom1"
										type="time"
										name="midJourneyFrom1"
										class="form-control"
									/>
									@if($errors->get('midJourneyFrom1'))
										<div class="text-danger mb-3 mt-0">
											{{ $errors->get('midJourneyFrom1')[0] }}
										</div>
									@endif
								</div>

								<div class="col">
									<label
										for="midJourneyTo1"
										class="@error('midJourneyTo1') is-invalid @enderror"
									>
										Hasta <span class="text-danger"> *</span>
									</label>

									<input
										id="midJourneyTo1"
										type="time"
										name="midJourneyTo1"
										class="form-control"
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
									id="full_journey_option2"
									type="radio"
									name="journey_option2"
									value="full_journey_option2"
									class="@error('journey_option2') is-invalid @enderror"
								/>

								<label for="full_journey_option2" class="radio-label">
									He faltado la jornada completa
								</label>
								@if($errors->get('journey_option2'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('journey_option2')[0] }}
									</div>
								@endif
							</div>

							<div>
								<input
									id="mid_journey_option2"
									type="radio"
									name="journey_option2"
									value="mid_journey_option2"
									class="@error('journey_option2') is-invalid @enderror"
								/>

								<label for="mid_journey_optio2" class="radio-label">
									No he faltado la jornada completa
								</label>
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
									<label
										for="midJourneyFrom2"
										class="@error('midJourneyFrom2') is-invalid @enderror"
									>
										Desde
									</label>

									<input
										id="midJourneyFrom2"
										type="time"
										name="midJourneyFrom2"
										class="form-control"
									/>
									@if($errors->get('midJourneyFrom2'))
										<div class="text-danger mb-3 mt-0">
											{{ $errors->get('midJourneyFrom2')[0] }}
										</div>
									@endif
								</div>

								<div class="col">
									<label
										for="midJourneyTo2"
										class="@error('midJourneyTo2') is-invalid @enderror"
									>
										Hasta
									</label>

									<input
										id="midJourneyTo2"
										type="time"
										name="midJourneyTo2"
										class="form-control"
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
									id="full_journey_option3"
									type="radio"
									name="journey_option3"
									value="full_journey_option3"
									class="@error('journey_option3') is-invalid @enderror"
								/>

								<label for="full_journey_option3" class="radio-label">
									He faltado la jornada completa
								</label>
								@if($errors->get('journey_option3'))
									<div class="text-danger mb-3 mt-0">
										{{ $errors->get('journey_option3')[0] }}
									</div>
								@endif
							</div>

							<div>
								<input
									id="mid_journey_option3"
									type="radio"
									name="journey_option3"
									value="mid_journey_option3"
									class="@error('journey_option3') is-invalid @enderror"
								/>

								<label for="mid_journey_optio3" class="radio-label">
									No he faltado la jornada completa
								</label>
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
									<label
										for="midJourneyFrom3"
										class="@error('midJourneyFrom3') is-invalid @enderror"
									>
										Desde
									</label>

									<input
										id="midJourneyFrom3"
										type="time"
										name="midJourneyFrom3"
										class="form-control"
									/>
									@if($errors->get('midJourneyFrom3'))
										<div class="text-danger mb-3 mt-0">
											{{ $errors->get('midJourneyFrom3')[0] }}
										</div>
									@endif
								</div>

								<div class="col">
									<label
										for="midJourneyTo3"
										class="@error('midJourneyTo3') is-invalid @enderror"
									>
										Hasta
									</label>

									<input
										id="midJourneyTo3"
										type="time"
										name="midJourneyTo3"
										class="form-control"
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
								<option value="L1: Licencia por asuntos propios para funcionarios en servicio activo. (2)">
                                    L1: Licencia por asuntos propios para funcionarios en servicio activo. (2)
                                </option>
								<option value="L2: Ausencia por enfermedad no superior a tres días. (10)" id="L2">L2: Ausencia por enfermedad no superior a tres días. (10)</option>
								<option value="L3: Licencia por enfermedad de más de tres días de duración. (1)">L3: Licencia por enfermedad de más de tres días de duración. (1)</option>
								<option value="P1: Permiso por traslado de domicilio. (3)">P1: Permiso por traslado de domicilio. (3)</option>
								<option value="P2: Permiso por exámenes finales y demás pruebas definitivas de aptitud. (4)">P2: Permiso por exámenes finales y demás pruebas definitivas de aptitud. (4)</option>
								<option value="P3: Permiso para el cumplimiento de deberes inexcusables de carácter público o personal. (6)">P3: Permiso para el cumplimiento de deberes inexcusables de carácter público o personal. (6)</option>
								<option value="P4: Permiso por adopción o acogimiento de menores de seis años y mayores de seis años discapacitados o minusválidos. (2)">P4: Permiso por adopción o acogimiento de menores de seis años y mayores de seis años discapacitados o minusválidos. (2)</option>
								<option value="P5: Permiso por lactancia. (2)">P5: Permiso por lactancia. (2)</option>
								<option value="P6: Permiso por reducción de jornada por guarda legal o atención por discapacidad.">P6: Permiso por reducción de jornada por guarda legal o atención por discapacidad.</option>
								<option value="P7: Permiso retribuido para las funcionarias en estado de gestación.">P7: Permiso retribuido para las funcionarias en estado de gestación.</option>
								<option value="P8: Permiso por parto">P8: Permiso por parto.</option>
								<option value="P9: Permiso por paternidad, por el nacimiento, adopción o acogimiento de un hijo. (2)">P9: Permiso por paternidad, por el nacimiento, adopción o acogimiento de un hijo. (2)</option>
								<option value="P10: Permiso por fallecimiento, enfermedad, accidente grave u operación de un familiar. (2)">P10: Permiso por fallecimiento, enfermedad, accidente grave u operación de un familiar. (2)</option>
								<option value="P11: Permiso por exámenes prenatales. (7)">P11: Permiso por exámenes prenatales. (7)</option>
								<option value="P12: Permiso sustitutivo de lactancia. (2)">P12: Permiso sustitutivo de lactancia. (2)</option>
								<option value="P13: Permiso de ausencia por nacimiento de hijos prematuros u hospitalizados tras el parto. (5)">P13: Permiso de ausencia por nacimiento de hijos prematuros u hospitalizados tras el parto. (5)</option>
								<option value="P14: Permiso de ausencia del trabajo para la conciliación de la vida familiar y profesional. (8)" id="P14">P14: Permiso de ausencia del trabajo para la conciliación de la vida familiar y profesional. (8)</option>
								<option value="P15: Permiso por reducción horaria por cuidado de familiares. (2)">P15: Permiso por reducción horaria por cuidado de familiares. (2)</option>
								<option value="P16: Flexibilización horaria para conciliación de la vida familiar. (9)">P16: Flexibilización horaria para conciliación de la vida familiar. (9)</option>
								<option value="P17: Permiso por estudios sobre materias relacionadas con el puesto de trabajo. (2)">P17: Permiso por estudios sobre materias relacionadas con el puesto de trabajo. (2)</option>
								<option value="P18: Permiso por razón de violencia de género.">P18: Permiso por razón de violencia de género.</option>
								<option value="P19: Permiso por riesgos en el embarazo o lactancia natural vinculado al puesto de trabajo. (1)">P19: Permiso por riesgos en el embarazo o lactancia natural vinculado al puesto de trabajo. (1)</option>
								<option value="P20: Permiso por matrimonio. (2)">P20: Permiso por matrimonio. (2)</option>
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
								<label class="radio-label mt-2">Otro motivo</label>
								<input type="text" class="form-control" name="reason"/>
							</div>
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
