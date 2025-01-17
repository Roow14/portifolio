<style type="text/css">
.owl-carousel {
    margin-top: 60px;
}
.banner {
    position: relative;
}
.banner img {
    position: relative;
    top: 10px;   
    width: 22%;
    left: 60%;
}
.banner .titulo {
    position: absolute;
    top: 20%;
    line-height: 1;
    padding-right: 15px;
    left: -56px;
}
.banner .titulo h1 {
    color: #fff;
    font-size: 24px;
    position: relative;
    top: -10px;
    left: 20%;
}
.banner .titulo h1 span {
    color: #e3d0b3;
}
.banner .titulo h3 {
    color: #fff;
}
.banner .titulo .botoes {
    margin-top: 25px;
}
@media only screen and (max-width: 400px) {
    .banner img {
        width: 30%; /* Ajusta o tamanho da imagem */
        left: 25%; /* Centraliza a imagem */
    }
    .banner .titulo {
        top: 40%; /* Ajusta a posição do título */
        padding-right: 10px;
        left: 10%; /* Ajusta a posição do título */
        left: -56px;
    }
    .banner .titulo h1 {
        font-size: 18px; /* Reduz o tamanho da fonte do título */
        left: 0%; /* Alinha o título à esquerda */
    }
    .banner .titulo .botoes .botao {
        font-size: 14px; /* Reduz o tamanho da fonte dos botões */
        padding: 8px 20px; /* Ajusta o padding dos botões */
        left: 0%; /* Alinha os botões à esquerda */
    }
}
@media only screen and (min-width: 768px) {
    .banner .titulo {
        top: 30%;
        padding-right: 25px;
    }
}
@media only screen and (min-width: 1200px) {
    .banner .titulo {
        width: 60%;
    }
    .banner .titulo h1 {
        font-size: 40px;
    }
}
@media only screen and (min-width: 1600px) {
    .banner .titulo h1 {
        font-size: 60px;
    }
}
.banner .titulo .botoes .botao {
    padding: 10px 30px;
    border-radius: 7px;
    font-weight: 600;
    display: inline-block;
    font-size: 16px;
    margin-bottom: 10px;
    position: relative;
    top:0px;
    left: 18%;
    color: black;
    background: #e3d0b3;
}
</style>

<section class="banner">
    <div class="owl-carousel owl-theme owl-loaded">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="owl-item">
                    <picture>
                        <source media="(min-width: 768px)" srcset="./imagens/bannerliso2.png" />
                        <img src="./imagens/bannerliso2.png" alt="" />
                    </picture>
                    <div class="largura">
                        <div class="titulo">
                            <h1><span>Romário Alcântara</span><br>Desenvolvedor</h1>

                            <div class="botoes">
                                <a href="https://wa.me//5511986193908?text=Olá,%20estou%20entrando%20em%20contato%20pelo%20site%20" 
                                class="botao fundo-dourado"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                                <a href="https://www.linkedin.com/in/romario-alcantara/" 
                                class="botao fundo-dourado linkedin"><i class="fab fa-linkedin"></i> LinkedIn </a>
                                <a href="https://github.com/Roow14/" 
                                class="botao fundo-dourado Github"><i class="fab fa-github"></i> Github </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
