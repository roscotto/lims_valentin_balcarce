<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificado</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
        h1 { font-size: 24px; }
        p { font-size: 18px; }
        .certificado { border: 2px solid black; padding: 20px; display: inline-block; }
    </style>
</head>
<body>
    <div class="certificado">
        <h1>Certificado de Finalización</h1>
        <p>Otorgado a: <strong>{{ $datos['nombre'] }}</strong></p>
        <p>Por completar el curso: <strong>{{ $datos['curso'] }}</strong></p>
        <p>Fecha: <strong>{{ $datos['fecha'] }}</strong></p>
    </div>
</body>
</html>
