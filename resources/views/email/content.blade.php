<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Siccoms</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        
        p {
            font-size: 14px;
            font-family: sans-serif;
        }
        /* Contenedor principal */
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f4f1f1;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        /* Encabezado */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .header h1 {
            font-family: sans-serif;
            color: #3178bf;
        }
        
        /* Contenido */
        .content {
            color: #666;
            margin-bottom: 20px;
        }
        
        /* Pie de página */
        .footer {
            color: #dfdada;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>SICCOMS</h1>
        </div>
        <div class="content">
            <p><strong>Correo de contacto:</strong> {{$email}}</p>
            <p><strong>Asunto:</strong> {{$subject}}</p>
            <p>{{$mensaje}}</p>
        </div>
        <div class="footer">
            <p>Este es un correo electrónico generado automáticamente. Por favor, no responder a este mensaje.</p>
        </div>
    </div>
</body>
</html>
