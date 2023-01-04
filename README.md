# concesionario-php-phpmyadmin

Crear una página web para el mantenimiento de una base de datos de un concesionario. La página principal del concesionario tendrá un menú (menu.php) con las siguientes opciones:
    • Alta de coche (alta.php)
    • Baja de coche (baja.php)
    • Consulta de coche (consulta.php)
    • Actualización de coche (actualización.php)
    • Listado de coches (listado.php)

La estructura de la base de datos CONCESIONARIO es la siguiente:
Tabla COCHES
matricula varchar(7) clave primaria marca varchar(20)
modelo varchar(30) tipo varchar(1) motor varchar(1) color varchar(10) cilindrada int(4) precio decimal(8,2) extras varchar(100)
