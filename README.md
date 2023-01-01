<h1>CRUD - PHP</h1>
<p>Proyecto del bootcamp fullstack de Factoría F5</p>
<hr style="background:#2dd4bf;"/>
<p>Aplicación que permite pedir cita a los desrrolladores para resolver problemas técnicos de los equipos de desarrollo.</p>

<h3>Requerimientos</h3>
<p>Para la correcta ejecución de la aplicación se debe de crear una base de datos Myslq y una tabla.</p>

<p>a continuación la linea de comandos SQL para crear la base de datos y la tabla:</p>

1 - Crear Base de datos: `CRUDO`
```sql
create database CRUDO;
use CRUDO;
```
2 - Estructura de tabla para la tabla `problemas`
```sql
CREATE TABLE `problemas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `consulta` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (id)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```


