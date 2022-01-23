<?php

class Config{

    //Informações básicas do site
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "loja";
    const SITE_NOME = "Loja do Jonathan - PHP 7 E MySql";
    const SITE_EMAIL = "lojadojonathan399@gmail.com";

    //Informações do banco de dados
    const BD_HOST = "localhost",
        BD_USER = "root",
        BD_SENHA = "",
        BD_BANCO = "lojajonathan",
        BD_PREFIX = "";
        
    //Informações para o PHP mailler
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "lojadojonathan399@gmail.com";
    const EMAIL_NOME = "Contato loja Jonathan";
    const EMAIL_SENHA = "lojadojonathan";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "lojadojonathan399@gmail.com";

}



?>