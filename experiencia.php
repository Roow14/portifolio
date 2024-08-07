
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: rgb(44, 68, 107); /* Azul claro para o fundo da página */
        }
        .carousel-wrapper {
            position: relative;
            width: 80%;
            max-width: 600px;
            margin: auto;
            top:-5px;
        }
        .carousel {
            overflow: hidden;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff; /* Fundo branco para o carrossel */
            color: rgb(44, 68, 107);
        }
        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .carousel-item {
            min-width: 100%;
            box-sizing: border-box;
            padding: 20px;
            background:#e3d0b3; /* Azul claro para o fundo dos itens do carrossel */
        }
        .carousel-item h2 {
            margin-top: 0;
        }
        .carousel-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
            z-index: 10; /* Garantir que as setas estejam acima do conteúdo */
        }
        .carousel-control {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 15px;
            cursor: pointer;
            font-size: 24px; /* Aumentar o tamanho das setas */
            border-radius: 50%;
            width: 50px; /* Tamanho do botão */
            height: 50px; /* Tamanho do botão */
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
    top: 98px;
        }
        .carousel-control:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .prev {
            position: absolute;
            left: -60px; /* Ajuste a distância da seta à esquerda */
        }
        .next {
            position: absolute;
            right: -60px; /* Ajuste a distância da seta à direita */
        }
        .titulox h1 {
            color: rgb(44, 68, 107);
                    
           
            text-align: center;
            padding: 10px;
        }
        .titulox {
            background-color:  #e3d0b3;

            
            
        }
    </style>
</head>
<body>
<span class="anchor" id="experiencia"></span>
    <div class="titulox"><h1>Experiência</h1></div>

    <div class="carousel-wrapper">
        <div class="carousel">
            <div class="carousel-inner">
                <?php
                $experiences = [
                    [
                        "title" => "Desenvolvedor Front End",
                        "role" => "Desenvolvedor Front End",
                        "company" => "Fisiopeti Clínica De Reabilitação",
                        "description" => "Minha primeira oportunidade na área da programação surgiu quando fui contratado para o suporte técnico em uma clínica. Acabei assumindo a responsabilidade pelo suporte de um sistema privado já existente. Este sistema era voltado para o cadastro e agendamento de pacientes. Curiosamente, mesmo sem ter acesso ao código-fonte, decidi recriar completamente o sistema do zero, utilizando HTML e CSS."
                    ],
                    [
                        "title" => "Desenvolvedor Web Full Stack",
                        "role" => "Desenvolvedor Web Full Stack",
                        "company" => "Forecast Web",
                        "description" => "Como desenvolvedor, este é meu primeiro contrato assinado. Fui contratado para a posição de front-end junior. O sistema da Fisiopeti foi originalmente desenvolvido pela Forecast Web. Tive que entrar em contato com a Forecast e, após avaliarem positivamente o meu trabalho, me fizeram uma proposta. Decidi aceitar, e este é o meu emprego atual."
                    ],
                    [
                        "title" => "WordPress",
                        "role" => "Função WordPress",
                        "company" => "Bassh",
                        "description" => "Neste papel, trabalhei com WordPress, assumindo responsabilidades relacionadas ao desenvolvimento e manutenção de sites baseados na plataforma. A experiência envolveu a personalização de temas, plugins e a garantia de que os sites funcionassem corretamente em diferentes dispositivos e navegadores."
                    ]
                ];

                foreach ($experiences as $exp) {
                    echo "<div class='carousel-item'>";
                    echo "<h2>{$exp['title']}</h2>";
                    echo "<p><strong>Nome da Empresa:</strong> {$exp['company']}</p>";
                    echo "<p>{$exp['description']}</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
        <button class="carousel-control prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="carousel-control next" onclick="moveSlide(1)">&#10095;</button>
    </div>
    <script>
        let slideIndex = 0;

        function moveSlide(step) {
            const slides = document.querySelectorAll('.carousel-item');
            slideIndex = (slideIndex + step + slides.length) % slides.length;
            document.querySelector('.carousel-inner').style.transform = `translateX(${-slideIndex * 100}%)`;
        }
    </script>
</body>
</html>
