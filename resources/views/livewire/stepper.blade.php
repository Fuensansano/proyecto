<div class="row">
    <div class="col-xs-12 col-md-8 offset-md-2 block border">
        <div class="wrapper-progressBar">
            <ul class="progressBar">
                <li class="active">Paso 1</li>
                <li class="">Paso 2</li>
                <li>Paso 3</li>
            </ul>
        </div>
    </div>
</div>

<style>
    .wrapper-progressBar {
        width: 100%
    }

    .progressBar {
    }

    .progressBar li {
        list-style-type: none;
        float: left;
        width: 33%;
        position: relative;
        text-align: center;
    }

    .progressBar li:before {
        content: " ";
        line-height: 30px;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        border: 1px solid #ddd;
        display: block;
        text-align: center;
        margin: 0 auto 10px;
        background-color: white
    }

    .progressBar li:after {
        content: "";
        position: absolute;
        width: 100%;
        height: 4px;
        background-color: #ddd;
        top: 15px;
        left: -50%;
        z-index: -1;
    }

    .progressBar li:first-child:after {
        content: none;
    }

    .progressBar li.active {
        color: dodgerblue;
    }

    .progressBar li.active:before {
        border-color: dodgerblue;
        background-color: dodgerblue
    }

    .progressBar .active:after {
        background-color: dodgerblue;
    }
</style>

