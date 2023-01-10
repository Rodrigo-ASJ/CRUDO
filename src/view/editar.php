<?php
include("../model/conexion.php");
$db = conectar();

//* Capturar la query enviada por el href del anchor por la url
$id = $_GET['id']; 
//* Sanitize $id:
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT );

//* Selecionar el registro que coincida con la id enviada por la url
$sql = "SELECT * FROM problemas WHERE id = :id";

//* crear una declaración prepare 
$query = $db->prepare($sql);

//* ejecutar la query, mapeando :id asignando $id (key-value) dentro de un array
$query->execute(['id' => $id ]);

//! READ, renderiza el registro 
$row = $query->fetch(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar <?php echo $row['nombre'] ?></title>
    <?php include("../includes/head.php")?>
</head>

<body class="flex flex-col justify-between h-screen bg-slate-900 text-slate-400">
    <?php include("../includes/navbar.php")?>
    <main class="container mt-5 mb-auto">

        <h1 class="mb-6 text-xl text-teal-500 ">Realizar cambios en: <span
                class="text-slate-200 underline decoration-teal-500"><?= $row['nombre'] ?></span>
        </h1>
        <form class="mb-14 w-full lg:w-1/2 mb-4 block bg-slate-900 border border-slate-500 px-4 py-6" id="myform"
            action="../controller/update.php" method="POST">

            <!-- importante enviar este campo para poder hacer match en update.php -->
            <input type="hidden" name="id" value="<?php 
            echo $row['id'];              
                ?>">

            <div class="mb-6">
                <label
                    class="block text-sm font-medium text-slate-200 after:content-['*'] after:ml-0.5 after:text-red-500"
                    for="nombre">Nombre</label>
                <input class="w-full bg-slate-700 border border-slate-600 font-semibold text-slate-200
                                    focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-400" required
                    id="nombre" type="text" name="nombre" placeholder="introduce tu nombre" value="<?php 
                echo $row['nombre'];              
                ?>">
            </div>
            <div class="mb-6">
                <label
                    class="block text-sm font-medium text-slate-200 after:content-['*'] after:ml-0.5 after:text-red-500"
                    for="consulta">Consulta</label>
                <textarea class="w-full bg-slate-700 border border-slate-600 font-semibold text-slate-200
                                    focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-400" required
                    id="consulta" rows="2" type="text" name="consulta"
                    placeholder="Motivo de la consulta"><?php echo $row['consulta'];?></textarea>
            </div>


            <div>

                <input id="fecha" type="hidden" name="fecha" placeholder="fecha" value="<?php 
                echo $row['fecha'];
                ?>">
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                <button
                    class="mb-3 md:mb-0 hover:animate-shake col-span-2 md:col-span-1 text-sm sm:text-base block px-6 h-12 uppercase font-semibold tracking-wider bg-teal-400 text-slate-900 border border-teal-400 shadow-[5.3px_4px_0px_-.6px_rgba(0,0,0,0.3)] shadow-slate-200/100"
                    type="submit">Actualizar</button>
                <button
                    class="ease-in duration-200 hover:shadow-teal-400/100 hover:bg-slate-200 hover:text-slate-900 hover:border-slate-200 text-sm  block px-6 h-12 uppercase font-semibold tracking-wider border border border-slate-500  text-slate-200 shadow-[5.3px_4px_0px_-.6px_rgba(0,0,0,0.3)] shadow-slate-200/100"
                    onclick="limpiar(event);">Limpiar campos</button>
                <a class="ease-in duration-200 hover:shadow-slate-200/100 hover:bg-teal-400 hover:text-slate-900 hover:border-teal-400 px-6 h-12 flex items-center uppercase font-semibold tracking-wider text-sm border border-slate-500  text-slate-200 shadow-[5.3px_4px_0px_-.6px_rgba(0,0,0,0.3)] shadow-teal-400/100"
                    href="/CRUDO/src/view/index.php">Cancelar edición</a>
            </div>
        </form>
    </main>
    <?php include("../includes/footer.php")?>
</body>

</html>

<?php $db = null; ?>