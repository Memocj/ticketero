<?php
header("Content-Type: text/html; charset=UTF-8");

$usuariosCaja = array(
    "caja1" => "123",
    "caja2" => "123",
    "caja3" => "123",
    "caja4" => "123",
    "caja5" => "123",
    "caja6" => "123",
);
$usuariosRegistro = array(
    "registro1" => "123",
    "registro2" => "123",
    "registro3" => "123",
    "registro4" => "123",
    "registro5" => "123",
    "registro6" => "123",
);

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
//verifica el usuario y la contraseña de caja
    if (isset($usuariosCaja[$usuario]) && $usuariosCaja[$usuario] == $contraseña) {
        // Redirigir al usuario a la página correspondiente
        $paginaCaja = $usuario . ".html";
        header("Location: ../pages/cajas/" . $paginaCaja);
        exit();
    }
    // Verifica el usuario y la contraseña de registro
    if (isset($usuariosRegistro[$usuario]) && $usuariosRegistro[$usuario] == $contraseña) {
        // Redirigir al usuario a la página correspondiente
        $paginaRegistro = $usuario . ".html";
        header("Location: ../pages/registros/" . $paginaRegistro);
        exit();
    }
    echo "Credenciales inválidas. Por favor, inténtalo de nuevo.";
}
?>