<?php
namespace App;

include("../model/conexion.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar un cita</title>
    <?php include("../includes/head.php") ?>
</head>

<body class="flex flex-col justify-between h-screen bg-slate-900 text-slate-400">
    <?php include("../includes/navbar.php") ?>
    <main class="mb-auto mt-5">

        <div class="container">
            <?php if(isset($_SESSION['mensaje'])){ ?>

            <div class="<?= $_SESSION['mensaje_type']; ?> rounded-lg py-5 px-6 mb-6 text-base inline-flex items-center w-full"
                role="alert">
                <?= $_SESSION['icon'] ?>
                <p>
                    <?= $_SESSION['mensaje'] ?>
                </p>
            </div>
            <?php 
            session_unset();
                //eliminar session
                }?>

            <h1 class="mb-6 text-xl text-teal-500 text-center">Ingrese los datos de su consulta</h1>
            <div class="mx-auto flex items-center justify-center flex-col">
                <form class="w-full sm:w-1/2 mb-4 block bg-slate-900 border border-slate-500 px-4 py-6" method="POST"
                    action="../controller/crear.php">

                    <div class="mb-6">
                        <label
                            class="block text-sm font-medium text-slate-200 after:content-['*'] after:ml-0.5 after:text-red-500"
                            for="nombre">Nombre</label>
                        <input class="w-full bg-slate-700 border border-slate-600 font-semibold text-slate-200
                                    focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-400"
                            id="nombre" type="text" name="nombre" placeholder="Nombre de usuario" required>
                    </div>

                    <div class="mb-6">
                        <label
                            class="block text-sm font-medium text-slate-200 after:content-['*'] after:ml-0.5 after:text-red-500"
                            for="consulta">Consulta</label>
                        <textarea class="w-full bg-slate-700 border border-slate-600 font-semibold text-slate-200
                                    focus:outline-none focus:border-teal-400 focus:ring-1 focus:ring-teal-400"
                            id="consulta" rows="2" name="consulta" placeholder="introduce tu consulta"
                            required></textarea>
                    </div>



                    <button type="submit" onclick="noRefrescar(e);"
                        class="w-full sm:w-1/2 block mx-auto hover:animate-shake col-span-2 md:col-span-1 text-sm sm:text-base block px-6 h-12 uppercase font-semibold tracking-wider bg-teal-400 text-slate-900 border border-teal-400 shadow-[5.3px_4px_0px_-.6px_rgba(0,0,0,0.3)] shadow-slate-200/100">Enviar</button>
                </form>
                <small class="text-sm text-center block mb-12">Los campos marcados con asterisco son
                    obligatorios</small>
            </div>
        </div>

    </main>


    <?php include("../includes/footer.php") ?>
</body>

</html>

<?php $db = null; ?>