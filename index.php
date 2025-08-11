<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Revisão Javascript</h1>
    <script>
        const nome = "Pedro"
        var numero = 11
        let idade = 35
        
        let meninas = [
            "Luana",
            "Maryellen",
            "Maria Eduarda",
            "Maria Clara",
            "Manuela",
            "Nathally",
            "Shaden"
        ]
        for(let i = 0; i < meninas.length; i++)
        {
            document.write(meninas[i]+"<br/>")
        }

        let marcelo = {
            "nome" : "marcelo",
            "idade" : "17",
            "peso" : "62",
            "altura" : "1.61"
        }

        let pedro = {
            "nome" : "pedro",
            "idade" : "31",
            "peso" : "70",
            "altura" : "1.76"
        }

        let yago = {
            "nome" : "yago",
            "idade" : "17",
            "peso" : "65",
            "altura" : "1.64"
        }

        let meninos = [marcelo, pedro, yago]
        for(let i = 0; i < meninos.length; i++){
            document.write(meninos[i].nome+"<br>")
        }
    </script>
</body>
</html>