<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .menu {
            background-color: rgb(44, 68, 107);
            display: flex;
            align-items: center;
            padding: 10px 20px;
            height: 80px;
            width: 100%;
            box-sizing: border-box;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .menu a {
            color: #e3d0b3;
            text-align: center;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 17px;
            transition: color 0.3s ease, background-color 0.3s ease;
        }
        .menu a:hover {
            color: #00008B;
            background-color: #e3d0b3;
        }
        .menu .spacer {
            flex-grow: 1;
        }
    </style>
</head>
<body>

<div class="menu">
    <div class="spacer"></div>
    <a href="index.php">Home</a>
    <a href="#sobre">Sobre</a>
    <a href="#experiencia">experiência</a>
    <a href="#projetos">Projetos</a>
    
    <div class="spacer"></div>
</div>

</body>
</html>
