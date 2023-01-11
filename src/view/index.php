<?php 
use App\model\conexion;
include("../model/conexion.php"); 

$con = new Conexion;
$con->getSession();
$db = $con->conectar();
$sql = "SELECT * FROM problemas";
$query = $db->query($sql);
$listados = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUDO</title>
    <?php include("../includes/head.php")?>
</head>



<body class="flex flex-col justify-between h-screen bg-slate-900 text-slate-400">
    <?php include("../includes/navbar.php")?>
    <main class="container mt-5 mb-auto">
        <div class="flex">

            <div class="w-full">
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
                <h1 class="mb-6 text-xl text-teal-500 ">Citas previstas</h1>
                <table class="table-auto w-full border-separate border border-slate-500 border-spacing-2 mb-20">
                    <thead class="bg-slate-700">
                        <tr class="">
                            <th
                                class=" border border-slate-600 font-semibold p-2 sm:p-4 text-slate-200 text-center hidden sm:table-cell">
                                id
                            </th>
                            <th class=" border border-slate-600 font-semibold p-2 sm:p-4 text-slate-200 text-center">
                                Nombres</th>
                            <th
                                class="w-1/2 border border-slate-600 font-semibold p-2 sm:p-4 text-slate-200 text-center">
                                Consultas</th>
                            <th
                                class="border border-slate-600 font-semibold p-2 sm:p-4 text-slate-200 text-center hidden sm:table-cell">
                                Fechas de
                                creación</th>
                            <th class="border border-slate-600 font-semibold p-2 sm:p-4 text-slate-200 text-center">
                                <span class="hidden text-center sm:block">Acciones</span>
                                <span class="block text-center sm:hidden">ACCI</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php
                    foreach( $listados as $row ){ 
                       
                      echo"<tr class='hover:bg-slate-800'>".
                        "<td class='p-2 text-xs	sm:text-base sm:p-4 border border-slate-700 text-center hidden sm:table-cell'> {$row['id']}</td>" 
                        ."<td class='p-2 text-xs sm:text-base sm:p-4 border border-slate-700 text-center'>". $row['nombre'] ."</td>"                       
                        ."<td class='p-2 text-xs sm:text-base sm:p-4 border border-slate-700'>". "<div class='overflow-y-scroll max-h-[5rem]'>" .$row['consulta']. "</div>" ."</td>"
                        ."<td class='p-2 text-xs sm:text-base sm:p-4 border border-slate-700 hidden sm:table-cell text-center'>". $row['fecha'] ."</td>"
                        ."<td class='p-2 sm:p-4 text-xs sm:text-base border border-slate-700'>
                        <div class='text-center flex flex-col sm:flex-row justify-center items-center gap-2 sm:gap-5'>
                        <a class='ease-in duration-300 group hover:text-slate-200' href='editar.php?id={$row['id']}'>
                        <svg class='ease-in duration-200 group-hover:text-blue-700 inline' width='24px' height='24px' viewBox='0 0 24 24' >
                            
                            <g id='editar-icon' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                                <g id='Editor' transform='translate(-144.000000, -192.000000)'>
                                    <g id='edit_3_line' transform='translate(144.000000, 192.000000)'>
                                        <path
                                            d='M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z'
                                            id='MingCute' fill-rule='nonzero'></path>
                                        <path
                                            d='M16.7243,3.03 C15.9432,2.24895 14.6769,2.24895 13.8958,3.03 L3.58212,13.3437 C3.20705,13.7188 2.99634,14.2275 2.99634,14.7579 L2.99634,19.9906 C2.99634,20.5484 3.44857,21.0006 4.00634,21.0006 L20,21 C20.5523,21 21,20.5523 21,20 C21,19.4477 20.5523,19 20,19 L12.068,19 L20.9669,10.1011 C21.7479,9.32002 21.7479,8.05369 20.9669,7.27264 L16.7243,3.03 Z M9.23957,19 L19.5527,8.68685 L15.31,4.44421 L4.99634,14.7579 L4.99634,19.0006 C6.41074,19.0006 7.8252,19 9.23957,19 Z'
                                            id='editar-path' fill='currentColor'></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <small class='hidden sm:inline'>Editar</small></a>
                        <a class='ease-in duration-300 group hover:text-slate-200' href='../controller/delete.php?id={$row['id']}'>
                            <svg class='ease-in duration-200 inline group-hover:text-rose-700' width='24px' height='24px' viewBox='0 0 24 24'>

                                <g id='eliminar-icon' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                                    <g id='System' transform='translate(-382.000000, -192.000000)' fill-rule='nonzero'>
                                        <g id='delete_back_line' transform='translate(382.000000, 192.000000)'>
                                            <path
                                                d='M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z'
                                                id='MingCute' fill-rule='nonzero'></path>
                                            <path
                                                d='M19,3 C20.5976286,3 21.9036571,4.24892392 21.9949071,5.82372764 L22,6 L22,18 C22,19.597725 20.7510296,20.903664 19.1762674,20.9949075 L19,21 L8.10845,21 C7.13872812,21 6.23313125,20.5316309 5.67200026,19.7503766 L5.56445,19.59 L1.4832,13.06 C1.10904,12.4613846 1.08026698,11.7140828 1.39685735,11.0925926 L1.4832,10.94 L5.56445,4.41 C6.07840625,3.58768125 6.95551777,3.06795234 7.91544369,3.00619841 L8.10845,3 L19,3 Z M19,5 L8.10845,5 C7.80675875,5 7.5236875,5.13599031 7.33521209,5.36585965 L7.26045,5.47 L3.1792,12 L7.26045,18.53 C7.4203475,18.78585 7.68569453,18.9538062 7.98051525,18.9917977 L8.10845,19 L19,19 C19.5127571,19 19.9354959,18.613973 19.9932711,18.1166239 L20,18 L20,6 C20,5.48716857 19.6138867,5.06449347 19.1166055,5.0067278 L19,5 Z M10.8786,8.46447 L12.9999,10.5858 L15.1213,8.46447 C15.5118,8.07394 16.145,8.07394 16.5355,8.46447 C16.926,8.85499 16.926,9.48815 16.5355,9.87868 L14.4142,12 L16.5355,14.1213 C16.926,14.5118 16.926,15.145 16.5355,15.5355 C16.145,15.9261 15.5118,15.9261 15.1213,15.5355 L12.9999,13.4142 L10.8786,15.5355 C10.4881,15.9261 9.85493,15.9261 9.46441,15.5355 C9.07389,15.145 9.07389,14.5118 9.46441,14.1213 L11.5857,12 L9.46441,9.87868 C9.07389,9.48815 9.07389,8.85499 9.46441,8.46447 C9.85493,8.07394 10.4881,8.07394 10.8786,8.46447 Z'
                                                id='eliminar-path' fill='currentColor'></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <small class='hidden sm:inline'>Eliminar</small>
                        </a>
                        </div>
                        </td>"
                        ."</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php include("../includes/footer.php")?>
</body>

</html>

<?php $db = null; ?>