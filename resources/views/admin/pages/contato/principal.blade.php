<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Meu blog</h1>
    </header>
    <section class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Banco de Dados</a></li>
            <li><a href="#">Programação</a></li>
        </ul>
    </section>
    <section class="content">
        @yield('conteudo')
    </section>
    
</body>
</html>