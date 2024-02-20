<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement de l'utilisateur</title>
    <?php require_once 'link.php'; ?>
    <script src="script.js"></script>
</head>
<body>
<?php require_once 'NavBar2.php'; ?>
    <div class="container_record">
        <h1>Enregistrement</h1>

        <form id="userForm">
        <label for="nombre">Pre nom:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellidoPat">Nom Pere:</label>
            <input type="text" id="apellidoPat" name="apellidoPat">

            <label for="apellidoMat">Nom Maire:</label>
            <input type="text" id="apellidoMat" name="apellidoMat">

            <label for="dni">D.N.I:</label>
            <input type="text" id="dni" name="dni">

            <label for="fechaNac">Date de naissance:</label>
            <input type="date" id="fechaNac" name="fechaNac">

            <label for="empresa">Entreprise:</label>
            <input type="text" id="empresa" name="empresa">

            <label for="cargo">Poste:</label>
            <input type="text" id="cargo" name="cargo">

            <label for="sector">Secteur:</label>
            <input type="text" id="sector" name="sector">

            <label for="pais">Pays:</label>
            <input type="text" id="pais" name="pais">

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email">

            <label for="password1">mot de passe:</label>
            <input type="text" id="password1" name="password1">

            <label for="password2">Vérification des clés:</label>
            <input type="text" id="password2" name="password2">

            <button type="button" onclick="agregarUsuario()">Ajouter un utilisateur</button>
        </form>

        <!--<div id="usuariosList"></div>-->
    </div>

</body>
<footer>
<script>
    document.getElementById('userForm').addEventListener('submit', function() {
        alert('Datos enviados correctamente');
        document.getElementById('nombre').value = '';
        document.getElementById('apellidoPat').value = '';
        document.getElementById('apellidoMat').value = '';
        document.getElementById('dni').value = '';
        document.getElementById('fechaNac').value = '';
        document.getElementById('empresa').value = '';
        document.getElementById('cargo').value = '';
        document.getElementById('sector').value = '';
        document.getElementById('pais').value = '';
        document.getElementById('email').value = '';
        document.getElementById('password1').value = '';
        document.getElementById('password2').value = '';
    });
</script>
</footer>
</html>