<?php 
    session_start();
    include_once('config.php');
    require_once ('classes/BD.class.php');
    @BD::conn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entre no chat</title>
    <link rel="stylesheet" href="css/estilo.css">

    <?php
        if (isset($_POST['acao']) && ($_POST['acao'] == 'logar')) {
            $email = strip_tags(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
            if ($email == '') {
            }
            else {
                $pegar_user = BD::conn() -> prepare('SELECT id FROM `usuarios` WHERE email = ?');
                
                $pegar_user -> execute(array($email));

                if ($pegar_user -> rowCount() == 0) {
                    
                    echo '<script> alert("Usuário não encontrado!"); </script>'; 
                    
                }
                else {
                    $fetch = $pegar_user -> fetchObject();
                    $_SESSION['id_user'] = $fetch -> id;
                    echo  '<script> 
                               alert ("Login efetuado"); 
                               location.href="chat.php";
                          </script>';
                }
            }
        }
    ?>
    

<body>
    <div id="formulario">
        <span>Digite seu email.</span>
        <form action="" method="post" enctype="multipart/form-data">
            <label>
                <input type="text" name="email">
            </label>
            <input type="hidden" name="acao" value="logar">
            <input type="submit" value="logar">
        </form>
    </div>

</body>
</html>