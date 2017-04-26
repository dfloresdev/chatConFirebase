function registrarUsuario(email, password, idMensaje)
{
    firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  
  
  $("#" + idMensaje).html("<h1>Hola perrines esta mal</h1>" + error.message);
  
  
  
  // ...
});
}