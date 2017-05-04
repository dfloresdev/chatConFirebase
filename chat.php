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
    </head>
    <body>
    <!--<center>-->
        <br />
        <br />
        <div class=" ui container aligned center">
        <div class="ui threaded comments">
            <h3 class="ui dividing header">Nombre del chat</h3>
            <div class="comment">
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
                        <a class="reply">Respuesta</a>
                    </div>
                </div>
            </div>
            <div class="comment">
                <a class="avatar">
                    <img src="/images/avatar/small/elliot.jpg">
                </a>
                <div class="content">
                    <a class="author">Elliot Fu</a>
                    <div class="metadata">
                        <span class="date">Yesterday at 12:30AM</span>
                    </div>
                    <div class="text">
                        <p>This has been very useful for my research. Thanks as well!</p>
                    </div>
                    <div class="actions">
                        <a class="reply">Reply</a>
                    </div>
                </div>
                <div class="comments">
                    <div class="comment">
                        <a class="avatar">
                            <img src="/images/avatar/small/jenny.jpg">
                        </a>
                        <div class="content">
                            <a class="author">Jenny Hess</a>
                            <div class="metadata">
                                <span class="date">Just now</span>
                            </div>
                            <div class="text">
                                Elliot you are always so right :)
                            </div>
                            <div class="actions">
                                <a class="reply">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment">
                <a class="avatar">
                    <img src="/images/avatar/small/joe.jpg">
                </a>
                <div class="content">
                    <a class="author">Joe Henderson</a>
                    <div class="metadata">
                        <span class="date">5 days ago</span>
                    </div>
                    <div class="text">
                        Dude, this is awesome. Thanks so much
                    </div>
                    <div class="actions">
                        <a class="reply">Reply</a>
                    </div>
                </div>
            </div>
            <form class="ui reply form">
                <div class="field">
                    <textarea></textarea>
                </div>
                <div class="ui blue labeled submit icon button" onclick="mandarMensaje()">
                    <i class="icon edit"></i> Contestar
                </div>
            </form>
        </div>
        </div>
    <!--</center>-->
    </body>
</html>
