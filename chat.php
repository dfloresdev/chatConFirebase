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
    <!--<center>-->
        <br />
        <br />
        <div class=" ui container aligned center">
            <div class="ui threaded comments">
            <div class="ui threaded comments" id="nomSala">
            </div>
                <div class="ui comments" id="msj">


<!--                    <div class="comment">
                        <a class="avatar">
                            <img src="/images/avatar/small/matt.jpg">
                        </a>
                        <div class="content">
                            <a class="author">Matt</a>
                            <div class="metadata">
                                <span class="date">Today at 5:42PM</span>
                            </div>
                            <div class="text">
                                How artistic!
                            </div>
                            <div class="actions">
                                <a class="reply">Reply</a>
                            </div>
                        </div>
                    </div>-->


                </div>
                <form class="ui reply form">
                    <div class="field">
                        <textarea id="areaMensaje"></textarea>
                    </div>
                    <div class="ui blue labeled submit icon button" 
                         onclick="mandarMensaje($('#areaMensaje').val(), getUrlVars()['sala']);">
                        <i class="icon edit"></i> Contestar
                    </div>
                </form>
            </div>
        </div>
        <!--</center>-->


        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>
        <script src="js/conexionAFirebase.js"></script>
        <script src="js/principal.js"></script>

        <script type="text/javascript">
                             $(document).ready(function ()
                             {
                                 nomDeSala(getUrlVars()['sala']);
                                 consultarChat(getUrlVars()['sala']);
                             });
        </script>

    </body>
</html>
