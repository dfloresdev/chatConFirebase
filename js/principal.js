
function registrarUsuario(email, password, idMensaje)
{
    firebase.auth().createUserWithEmailAndPassword(email, password).then(
            function (usuario)
            {
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
    firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...
    });
}