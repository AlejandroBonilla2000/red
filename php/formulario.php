<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Formulario de Información Profesional">
    <title>Formulario de Información</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #4a90e2, #9013fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #ffffff;
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            transition: transform 0.3s ease-in-out;
        }

        .form-container:hover {
            transform: scale(1.03);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-container input, .form-container textarea, .form-container button {
            width: 100%;
            margin-bottom: 15px;
            padding: 12px 15px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
        }

        .form-container input, .form-container textarea {
            background: #f1f1f1;
        }

        .form-container input:focus, .form-container textarea:focus {
            background: #e0e0e0;
            outline: none;
        }

        .form-container button {
            background: #4a90e2;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .form-container button:hover {
            background: #3a7bd5;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Formulario de Información</h2>
    <form action="submit_form.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="number" name="edad" placeholder="Edad" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <textarea name="comentarios" placeholder="Comentarios"></textarea>
        <button type="submit">Enviar</button>
    </form>
</div>
</body>
</html>
