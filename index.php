<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>PHP Post</title>
</head>

<body>
    <div class="container">
        <h1>Exemplo de formulário</h1>
        <form method="POST" action="meus_dados.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="senha" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="container" id="demo">
    </div>
    <div class="container">
        <p>ViaCep Exemplo</p>
        <input type="text" id="cep">
        <button type="button" onclick="pegaEndereco()">Enviar</button>
    </div>
    <script>
        function pegaEndereco() {
            let cep = document.getElementById("cep").value;

            console.log(cep);
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                let data = JSON.parse(this.responseText);
                if(data['erro']){
                    alert("Está de brincadeira digita certo ai")
                }else{
                    document.getElementById("demo").innerHTML = this.responseText;
                }
            }

            xhttp.open("GET", "https://viacep.com.br/ws/" + cep + "/json/");
            xhttp.send();
        }
    </script>
</body>

</html>