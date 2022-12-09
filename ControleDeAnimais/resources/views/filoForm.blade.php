<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filo</title>
</head>
<body>
    
    <form action="/FiloCadastro" method='POST'>
        @csrf
        <input type="text" name="Nome" placeholder="Nome">
        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>