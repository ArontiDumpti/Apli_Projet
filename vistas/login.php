

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia - Sistema de Inventario</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-image: url('./img/fondo.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column; /* Cambiado de row a column */
            align-items: center;
            justify-content: center;
        }

		.main-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        .language-selector {
            margin-bottom: 20px;
        }

        .box {
            margin: 0;
        }

        .title {
            color: #4e5d94;
            font-size: 28px;
            margin-bottom: 20px;
            font-family: 'Elephant', sans-serif; /* Cambiada la fuente */
        }

        .field {
            margin-bottom: 2em;
        }

        .label {
            color: #4e5d94;
            font-size: 18px;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            font-family: 'Barlow Black', sans-serif; /* Cambiada la fuente */
        }

        .input {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: 2px solid #4e5d94;
            border-radius: 8px;
            font-size: 18px;
            outline: none;
            transition: border-color 0.3s ease;
            font-family: 'Barlow Black', sans-serif; /* Cambiada la fuente */
        }

        .input:focus {
            border-color: #17a2b8;
        }

        .button {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background-color: #17a2b8;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-family: 'Quicksand', sans-serif; /* Cambiada la fuente */
        }

        .button:hover {
            background-color: #138496;
        }

        .has-text-centered {
            text-align: center;
        }

        .mb-4 {
            margin-bottom: 15px;
        }

        .mt-3 {
            margin-top: 15px;
        }

        .mt-4 {
            margin-top: 20px;
        }

        .language-message {
            color: #4e5d94;
            font-size: 18px;
            font-weight: bold;
            font-family: 'Barlow Black', sans-serif;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="language-selector">
            <label for="language">Selecciona el idioma:</label>
            <select id="language" name="language" onchange="changeLanguage(this.value)">
                <option value="es">Español</option>
                <option value="eng">Inglés</option>
            </select>
        </div>

        <div id="languageMessage" class="has-text-centered mt-4 language-message"></div>

        <form class="box login" action="" method="POST" autocomplete="off">
            <h5 class="title" style="color: #4e5d94; font-size: 28px; margin-bottom: 20px; font-family: 'Elephant', sans-serif;">
                <img src="./img/login.jpeg" alt="Logo" style="height: 24px; margin-right: 10px;">
                Sistema de inventario
            </h5>

            <div class="field">
                <label class="label" style="color: #4e5d94; font-size: 18px; font-weight: bold; display: block; margin-bottom: 8px; font-family: 'Barlow Black', sans-serif;">
                    Usuario
                </label>
                <div class="control">
                    <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
                </div>
            </div>

            <div class="field">
                <label class="label" style="color: #4e5d94; font-size: 18px; font-weight: bold; display: block; margin-bottom: 8px; font-family: 'Barlow Black', sans-serif;">
                    Contraseña
                </label>
                <div class="control">
                    <input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                </div>
            </div>

            <p class="has-text-centered mb-4 mt-3">
                <button type="submit" class="button" style="width: 100%; padding: 12px; box-sizing: border-box; border: none; border-radius: 8px; font-size: 18px; font-weight: bold; color: #fff; background-color: #17a2b8; cursor: pointer; transition: background-color 0.3s ease; font-family: 'Quicksand', sans-serif;">
                    Iniciar sesión
                </button>
            </p>

            <?php
            if (isset($_POST['login_usuario']) && isset($_POST['login_clave'])) {
                require_once "./php/main.php";
                require_once "./php/iniciar_sesion.php";
            }
            ?>
        </form>

        <script>
            function changeLanguage(selectedLanguage) {
                // Crear la cookie con el idioma seleccionado
                document.cookie = "coockieprime=" + selectedLanguage + "; path=/; max-age=" + (3600 * 24 * 7);

                // Obtener el elemento donde se mostrará el mensaje
                var messageElement = document.getElementById("languageMessage");

                // Mostrar el mensaje correspondiente al idioma seleccionado
                if (selectedLanguage === "es") {
                    messageElement.innerHTML = "La página está en español";
                } else if (selectedLanguage === "eng") {
                    messageElement.innerHTML = "The page is in English";
                }
            }
        </script>
    </div>

</body>
</html>

