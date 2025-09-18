<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>SCAEE</title>
    <style>
        /* Estilos inline adicionados para facilitar a compreensão, você pode mover esses estilos para o seu arquivo CSS */
        .password-container {
            position: relative;
            margin-top: 10px;
        }

        .password-container button {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="blur"></div>
    </div> 
    <div class="logo">
        <div class="img">
            <img src="imagens/logo.png">
        </div>
    </div>

    <div class="login-card">
        <h3>SCAEE</h3>
    
        <form class="login-form" method="POST" action="verifica_senha.php">
            <input type="text" name="email" placeholder="Email">
            <div class="password-container">
                <input type="password" name="senha" id="passwordInput" placeholder="Senha">
                <button id="toggleButton" type="button" onclick="togglePasswordVisibility()">
                    <img src="imagens/olho.png" alt="Mostrar Senha">
                </button>
            </div>  


            <button type="submit" name="submit">ENTRAR</button>
            
            <a href="http://localhost/TCC_ETEC/esqueci_senha/esqueci_senha.php">Esqueceu minha senha</a>
        </form>
    </div>
</body>



    <script src="java.js"></script>
</html>