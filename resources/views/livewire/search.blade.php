
<div class="container-fluid search-container">
    <h1>Encuentre el formulario que desee</h1>
    <select class="form-select w-100 p-3" aria-label="formulario a buscar">
        @foreach(config('typeOfForms') as $key => $form)

            <option>
                {{ $form }}
            </option>

        @endforeach
    </select>
</div>


<style>
.search-container {
    align-self: center;
    width: 50%;
    margin-top: 15%;
}

.search-container select {
    align-self: center;
    width: 100%;
}

select > option {
    align-self: center;
    width: 500px;
    min-height: 100px;
}

 h1 {
     align-self: center;
     font-size: 55px;
     font-weight: inherit;
     font-family: Garuda;
     color: dodgerblue;
     margin-left: 5%;
}
</style>

