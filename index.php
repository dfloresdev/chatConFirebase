<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chat</title>
        <?php
        include_once './librerias/librerias.php';
        ?>
        <script src="https://www.gstatic.com/firebasejs/3.8.0/firebase.js"></script>
    </head>
    <body>

        <div class="ui container center aligned grid">
            <h1 class="ui ">Inicio sesión</h1>
        </div>

        <div class="ui container grid">
            <div class="ui form center aligned grid">
                <form method="post">
                    <label for="correo" >Correo</label>
                    <input type="email" id="correo" placeholder="correo" />

                    <label for="pass">Contraseña</label>
                    <input type="password" id="pass" placeholder="Contraseña" />
                    <hr />
                    <input type="submit" value="Iniciar Sesión" class="ui button green">
                    <input type="button" value="Registrar" onclick="
                                registrarUsuario(
                                $('#correo').val(),//con el #hace refencia al id
                                $('#pass').val(),
                                'mensajes'
                                        );" 
                                class="ui button blue">
                    
<!--                    <p class="ui err" id="mensajes"></p>-->
                    <div id="mensajes"></div>
                    
                </form>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>
        <script src="js/conexionAFirebase.js"></script>
        <script src="js/principal.js"></script>
        <script>
            $(document).ready(function ()
            {
                firebase.auth().onAuthStateChanged(function (user) {
                    if (user) {
                        console.log(user);
                    } else {
//                        console.log(user);
                    }
                });
            });
        </script>
        
        
    </body>
</html>
