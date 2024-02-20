<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Garage V.Parrot</title>
<?php require_once 'link.php'; ?>
  
</head>
<body>

<?php require_once 'NavBar2.php'; ?>

<header class="header">
    <h1>Acceder</h1>
</header>

<div class="login">
  <h1>Commencer la session</h1>

  <form id="loginForm">
      <label for="email">Correo Electrónico:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Contraseña:</label>
      <input type="text" id="password" name="password" required>

      <button type="button" onclick="iniciarSesion()">Iniciar Sesión</button>
  </form>
</div>



</body>

<footer>
  
  <script src="script.js"></script>

</footer>
</html>