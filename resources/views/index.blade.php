<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atencion caja</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="./php/login.php" method="post">
                    <div class="img__container">
                        <img class="img" src="./img/logo_trans.png" alt="">
                    </div>
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="usuario" required>
                        <label for="">usuario</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="contraseña" required>
                        <label for="">Contraseña</label>
                    </div>
                    <button>iniciar sesión</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>