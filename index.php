<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Paquetes turisticos</h1>

    <form action="inicio.php" method="POST">

        <h2>Datos del cliente</h2>
        <p>Nombre completo: <input type="text" name="nombre" required></p>
        <p>Correo electronico: <input type="email" name="correo" required></p>

        <h2>Destinos</h2>
        <select name="destinos[]" multiple>
            <option>Cancún</option>
            <option>Puerto Vallarta</option>
            <option>Acapulco</option>
            <option>Los Cabos</option>
            <option>Mazatlán</option>
            <option>Huatulco</option>
            <option>Puerto Escondido</option>
        </select>

        <h2>Actividades</h2>
        <input type="checkbox" name="actividades[]" value="Buceo"> Buceo<br>
        <input type="checkbox" name="actividades[]" value="Paseo en lancha"> Paseo en lancha<br>
        <input type="checkbox" name="actividades[]" value="Visita a zonas arqueológicas"> Visita a zonas arqueológicas<br>
        <input type="checkbox" name="actividades[]" value="Senderismo"> Senderismo<br>
        <input type="checkbox" name="actividades[]" value="Pesca deportiva"> Pesca deportiva<br>
        <input type="checkbox" name="actividades[]" value="Recorrido gastronómico"> Recorrido gastronómico<br>
        <input type="checkbox" name="actividades[]" value="Visita a museos"> Visita a museos<br>

        <h2>Servicios</h2>
        <input type="checkbox" name="servicios[]" value="Transporte al aeropuerto"> Transporte al aeropuerto<br>
        <input type="checkbox" name="servicios[]" value="Desayuno incluido"> Desayuno incluido<br>
        <input type="checkbox" name="servicios[]" value="Hospedaje de lujo"> Hospedaje de lujo<br>
        <input type="checkbox" name="servicios[]" value="Seguro de viajero"> Seguro de viajero<br>
        <input type="checkbox" name="servicios[]" value="Renta de automóvil"> Renta de automóvil<br>
        <input type="checkbox" name="servicios[]" value="Guía turístico"> Guía turístico<br>

        <br>
        <button type="submit">Paquete</button>
    </form>
    
</body>
</html>