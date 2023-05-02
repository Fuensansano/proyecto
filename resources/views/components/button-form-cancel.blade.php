<button type="button" class="button-arounder-cancelar">
    CANCELAR
</button>

<style>
    button {
        background: white;
        padding: 10px;
        margin-bottom: 10px;
        margin-left: 15px;
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