<div class="container-fluid search-container">
    <h1 class="title-principle-page">Encuentre el formulario que desee</h1>
    <select onchange="location = this.value;" name="selectedOption" class="form-select w-100 p-3" aria-label="formulario a buscar">
        @foreach(config('typeOfForms') as $key => $form)
            <option value="{{ $key }}">
                {{ $form }}
            </option>
        @endforeach
    </select>
</div>

