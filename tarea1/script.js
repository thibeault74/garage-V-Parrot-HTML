document.addEventListener('DOMContentLoaded', function () {
  cargarUsuarios();
});

function agregarUsuario() {
console.log('Función agregarUsuario ejecutada');

var nombre = document.getElementById('nombre').value;
var apellidoPat = document.getElementById('apellidoPat').value;
var apellidoMat = document.getElementById('apellidoMat').value;
var dni = document.getElementById('dni').value;
var fechaNac = document.getElementById('fechaNac').value;
var empresa = document.getElementById('empresa').value;
var cargo = document.getElementById('cargo').value;
var sector = document.getElementById('sector').value;
var pais = document.getElementById('pais').value;
var email = document.getElementById('email').value;
var password1 = document.getElementById('password1').value;
var password2 = document.getElementById('password2').value;

if (password1 !== password2) {  
    alert('Las contraseñas no coinciden');
    return;
}

    if (nombre.trim() !== '') {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'agregar_usuario.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                var response = xhr.responseText;
                if (response.includes('Inscription réussie')) {
                    alert('Inscription réussie');
                    cargarUsuarios();
                    var nombre = document.getElementById('nombre').value;
                    var apellidoPat = document.getElementById('apellidoPat').value;
                    var apellidoMat = document.getElementById('apellidoMat').value;
                    var dni = document.getElementById('dni').value;
                    var fechaNac = document.getElementById('fechaNac').value;
                    var empresa = document.getElementById('empresa').value;
                    var cargo = document.getElementById('cargo').value;
                    var sector = document.getElementById('sector').value;
                    var pais = document.getElementById('pais').value;
                    var email = document.getElementById('email').value;
                    var password1 = document.getElementById('password1').value;
                } else {
                    alert("Erreur d'enregistrement: " + response);
                }
            }
        };
        xhr.send('nombre=' + encodeURIComponent(nombre) + '&apellidoPat=' + encodeURIComponent(apellidoPat) + '&apellidoMat=' + encodeURIComponent(apellidoMat) + '&dni=' + encodeURIComponent(dni) + '&fechaNac=' + encodeURIComponent(fechaNac) + '&empresa=' + encodeURIComponent(empresa) + '&cargo=' + encodeURIComponent(cargo) + '&sector=' + encodeURIComponent(sector) + '&pais=' + encodeURIComponent(pais) + '&email=' + encodeURIComponent(email) + '&password1=' + encodeURIComponent(password1));
    } else {
        alert('Ingrese un nombre válido.');
}
}



function cargarUsuarios() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'cargar_usuarios.php', true);
    xhr.onload = function () {
        if (xhr.status == 200) {
            document.getElementById('usuariosList').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function iniciarSesion() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (email.trim() !== '' && password.trim() !== '') {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'login.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status == 200) {
                var response = xhr.responseText;
                // show error message 
                console.log(response);
                if (response.trim() === 'Connexion réussie') {
                    
                    window.location.href = 'http://localhost/tarea1/registro.php';
                } else {
                    // check other responses
                    alert(response);
                }
            } else {
                // Maneja errores de conexión
                alert("Erreur de demande. Code d'état: " + xhr.status);
            }
        };
        // send data to the server
        xhr.send('email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));
    } else {
        // show a mesaje if the user did not fill the form
        alert("Remplissez tous les champs, s'il vous plaît.");
    }
}