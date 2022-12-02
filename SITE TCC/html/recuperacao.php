<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Recuperação</title>
    <link rel="stylesheet" href="../css/normalie.css">
    <link rel="stylesheet" href="../css/estilo-login.css">
</head>
<body>
   
    <div class="div-form">

                <h2 class="text-center"></h2>
                  <?php
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        if(isset($_SESSION['msgcad'])){
                            echo $_SESSION['msgcad'];
                            unset($_SESSION['msgcad']);
                        }
                    ?>
                    <form action="valida.php" method="post">	
                        <h>RECUPERAÇÃO</h>
    

        <div class="form-email">
                <p><label for="email">Email:</label></p>
                <input type="email"  name="usuario" placeholder="Digite seu Email:" size="30" required />
            </div>

        <div class="form-senha2">           
                <p><label for="password">Código de verificação:</label></p>
                <li><input type="text" name="codigo" placeholder="Um código foi enviado a seu E-mail" size="30" required/>
                <a href="obtercodigo" class="obtercodigo">Obter código</a></li>
            </div>

    
        <div class="form-cad">
                <a>Lembrou?</a>
                <a class="form-log" href="login.html">Clique aqui</a>
            </div>
           <div class="form-botao">
                <input type="submit" name="acessar" value="Acessar" />
            </div>
        </form>
            
            </div>			


</body>
</html>