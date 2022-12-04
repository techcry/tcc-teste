<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/normalie.css">
    <link rel="stylesheet" href="../css/estilo-registro.css">
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
        <form action="../php/valida.php" method="post">	<h>CADASTRO</h>
      
        <div class="form-nome">
                <p><label for="name">Nome:</label></p>
                <input type="name" name="name" placeholder="Digite seu nome:" size="30"/>
            </div>

        <div class="form-email">
                <p><label for="email">Email:</label></p>
                <input type="email"  name="usuario" placeholder="Digite seu Email:" size="30" required/>
                <p><label for="email2">Repita o Email:</label></p>
                <input type="email" name="usuario" placeholder="Repita seu email:" size="30" required/>
            </div>

        <div class="form-senha">           
                <p><label for="password">Senha:</label></p>
                <input type="password" name="senha" placeholder="Digite a sua senha" size="30" required/>
                <p><label for="password">Repita sua senha:</label></p>
                <input type="password" name="senha" placeholder="Repita sua senha:" size="30" required/>
            </div>

       
        
        <div class="form-cad">
                <a>Já tem login?</a>
                <a class="form-log" href="login.html">Clique aqui</a>
            </div>
           <div class="form-botao">
                <input type="submit" name="acessar" value="Acessar" />
            </div>
        </form>
            
            </div>			


</body>

</html>