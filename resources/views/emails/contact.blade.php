<style type="text/css">
    .marco {
        width: 400px;
        margin: auto;
        background-color: #D0FFD0;
        color: #008000;
    }
    h1 {
        font-weight: bolder;

    }
    @media only screen and (max-width: 600px){
        .marco {
            width: 90%;
        }
    }
    @media only screen and (min-width: 900px){
        .marco {
            width: 800px;
        }
    }
</style>
<div class="marco">
    <h1>Consulta realizada desde la web por {{ $name }} con email {{ $email }}</h1>
    <p>{{ $description }}</p>
</div>
