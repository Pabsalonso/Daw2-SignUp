<?php
if(isset($_POST['submit'])) {
    $file = "data.json";
    $arr = array(
        'name'     => $_POST['name'],
        'email'    => $_POST['email'],
        'password' => $_POST['password'],
    );
    $json_string = json_encode($arr);
    $file = fopen($file, 'a');
    fwrite($file, $json_string);
    fclose($file);

    //file_put_contents($file, $json_string);
    echo "Registro realizado con exito";
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>DAW-2 Regístrate</title>
    <meta charset="UTF-8">
	<link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="user">
	<header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
    	<h1 class="user__title">Bienvenido a DAW 2  Regístrate</h1>
    </header>
    <form name="form1" method="post" action="" class="form">
        <div class="form__group">
            <input class="form__input" type="text" name="name" id="name" placeholder="Nombre" autofocus required>
        </div>
        <div class="form__group">
            <input class="form__input" type="email" name="email" id="email" placeholder="Correo Electrónico" autofocus required>
        </div>
        <div class="form__group">
            <input class="form__input" type="password" name="password" id="password" placeholder="Contraseña" autofocus required>
        </div>
        <p style="text-align: center;">
            <input type="submit" name="submit" id="submit" value="Registrarme" class="btn">
        </p>
    </form>
</div>
</body>
</html>
