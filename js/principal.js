
function registrarUsuario(email, password, idMensaje)
{
    firebase.auth().createUserWithEmailAndPassword(email, password).then(
            function (usuario)
            {
                console.log("si entra a agregar usuario");
                console.log(usuario);
                var usr = {};
                usr.correo = usuario.email;
                firebase.database().ref().child("usuario").push().set(usr);
            }
    , function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;

        $("#" + idMensaje).html("<h1>Hola perrines esta mal</h1>" + error.message);
        // ...
    });
}

function cerrarSesion()
{
    firebase.auth().signOut().then(function () {
        // Sign-out successful.
        console.log("Cerar sesión ya");
    }, function (error) {
        // An error happened.
        console.log("ERROR al cerrar cesión");
    });
}

function iniciarSesion(email, password)
{
    firebase.auth().signInWithEmailAndPassword(email, password).catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...
    });
}

function inicioConFacebook()
{
    var provider = new firebase.auth.FacebookAuthProvider();
    provider.addScope('user_birthday');

    firebase.auth().signInWithPopup(provider).then(function (result) {
        // This gives you a Facebook Access Token. You can use it to access the Facebook API.
        var token = result.credential.accessToken;
        // The signed-in user info.
        var user = result.user;
        console.log("si entra");
        console.log(user);

        var usr = {};
        usr.correo = user.email;
        usr.nombre = user.displayName;
        usr.photo = user.photoURL;
        usr.token = token;

        firebase.database().ref().child("usuario").child(user.uid).set(usr, function (error)
        {
//            console.log(error);
            window.location = "salas.html";
        });


        // ...
    }).catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // The email of the user's account used.
        var email = error.email;
        // The firebase.auth.AuthCredential type that was used.
        var credential = error.credential;
        $("#mensaje").html(error.message + error.code);
        // ...
    });
}

function consultarSalas()
{
    firebase.database().ref().child("salas").on("value", function (salasSnapShot)
    {
        $("#salas").html("");
        salasSnapShot.forEach(function (sala)
        {
            //este es para limpiar y no las duplique


            console.log(sala.val());

            $("#salas").append(
//                    '<div class = "item">'+
//                    '<img class = "ui small image" src = "' + sala.val().urlFoto + '" />'+
//                    '<div class = "content">'+
//                    '<a class = "header">Nombre de la sala: ' + sala.val().nombreSala + ' </a>'+
//                    '<div class = "description">Participantes: ' + sala.val().numPersonas + '</div>'+
//                    '</div>'+
//                    '</div>'

                    '<div class = "item">' +
                    '<img class = "ui avatar tiny image" src = "' + sala.val().urlFoto + '" >' +
                    '<div class = "content" >' +
                    '<div class = "header" >Nombre de sala: ' + sala.val().nombreSala + '</div>' +
                    'Participantes: ' + sala.val().numPersonas +
                    '</div>' +
                    '</div>'
                    );
        });
    });
}