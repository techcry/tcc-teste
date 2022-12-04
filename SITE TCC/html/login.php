<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
    <form action="../php/valida.php" method="post">	
            <h>LOGIN</h>

        <div class="form-email">
                <p><label for="email">Email:</label></p>
                <input type="email"  name="usuario" placeholder="Digite seu Email:" size="30" required />
            </div>

        <div class="form-senha">           
                <p><label for="password">Senha:</label></p>
                <input type="password" name="senha" placeholder="Digite a sua senha" size="30" required/>
            </div>
    
        <div class="form-cad">
            <a class="form-log" href="recuperacao.html">Esqueci a senha</a>
            <a>Não tem login?</a>
                <a class="form-log" href="registro.html">Clique aqui</a>
            </div>
           <div class="form-botao">
                <input type="submit" name="acessar" value="Acessar" />
            </div>
    </form>
            
            </div>			


</body>
</html>