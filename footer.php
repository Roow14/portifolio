<style>
footer {
    background-color: rgb(44, 68, 107); /* Cor de fundo do footer */
    padding: 20px;
    color: #e3d0b3; /* Cor do texto */
    border-top: 2px solid #e3d0b3; /* Borda superior */
}

.footer-info, .footer-contact, .footer-newsletter {
    margin-bottom: 20px;
    padding: 0 20px; /* Adicionando um pouco de padding para espaço extra */
}

.footer-info {
    flex: 1;
    border-right: 1px solid #e3d0b3; /* Linha divisória vertical */
}

.footer-contact {
    flex: 1;
   
}

.footer-newsletter {
    flex: 1;
}

.footer-info h1, .footer-contact h1 {
    font-size: 20px;
}

footer .container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1200px;
    margin: 0 auto;
}

footer a {
    color: #e3d0b3; /* Cor dos links */
    text-decoration: none;
    transition: color 0.3s ease; /* Transição suave para cor dos links */
}

footer a:hover {
    text-decoration: underline;
    color: #ffffff; /* Cor dos links ao passar o mouse */
}

footer form {
    display: flex;
    flex-direction: column;
}

footer input[type="email"] {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: border-color 0.3s ease; /* Transição suave para a cor da borda */
}

footer input[type="email"]:focus {
    border-color: #007bff; /* Cor da borda ao focar */
}

footer button {
    padding: 10px;
    border: none;
    background-color: #007bff;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Transição suave para a cor de fundo do botão */
}

footer button:hover {
    background-color: #0056b3;
}

@media (max-width: 768px) {
    footer .container {
        flex-direction: column;
    }
    .footer-info, .footer-contact {
        border-right: none; /* Remover a linha divisória vertical em telas menores */
        border-bottom: 1px solid #e3d0b3; /* Adicionar linha divisória horizontal */
        padding-bottom: 20px; /* Adicionar espaço extra abaixo das seções */
    }
}
</style>

<footer>
    <div class="container">
        <div class="footer-info">
            <h1>Romário Alcântara Campos</h1>
            <p>Desenvolvedor </p>
            
            <p>CNPJ: 49.489.865/0001-52</p> <!-- Substitua pelo seu CNPJ real -->
        </div>
        <div class="footer-contact">
            <h1>Contato</h1>
            <p>Email: <a href="mailto:romarioalcantaracampos@live.com">romarioalcantaracampos@live.com</a></p>
            <p>Telefone: 11 98619-3908</p>
            <p><a href="https://www.linkedin.com/in/seuperfil/" target="_blank">LinkedIn</a> </p><p> <a href="https://github.com/seuperfil" target="_blank">GitHub</a></p>
        </div>
    </div>
</footer>
