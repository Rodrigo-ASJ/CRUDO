<nav class="pt-6 pb-4 mb-6">
    <div class="container text-white grid grid-cols-1 sm:grid-cols-2 gap-2">
        <?php include("../assets/logos/Logo.php");?>
        <ul class="mx-auto sm:ml-auto sm:mr-0 flex gap-5">
            <li class="flex items-center">
                <a class="px-6 h-12 flex items-center uppercase font-semibold tracking-wider text-sm sm:text-base <?php if($_SERVER["REQUEST_URI"] == "/CRUDO/src/view/index.php" || $_SERVER["REQUEST_URI"] == "/CRUDO/src/view/"){ echo "text-slate-900 bg-teal-400 shadow-[5.3px_4px_0px_-.6px_rgba(0,0,0,0.3)] shadow-slate-50/100";}else{ echo "bg-slate-50 text-slate-900 shadow-[5.3px_4px_0px_-.6px_rgba(0,0,0,0.3)] shadow-teal-400/100";} ?>"
                    href="/CRUDO/src/view/index.php">Lista</a>
            </li>
            <li class="flex items-center"><a
                    class="px-6 h-12 flex items-center uppercase font-semibold tracking-wider text-sm sm:text-base <?php if($_SERVER["REQUEST_URI"] == "/CRUDO/src/view/citas.php"){ echo "text-slate-900 bg-teal-400 shadow-[5.3px_4px_0px_-.6px_rgba(0,0,0,0.3)] shadow-slate-50/100";}else{ echo "bg-slate-50 text-slate-900 shadow-[5.3px_4px_0px_-.6px_rgba(0,0,0,0.3)] shadow-teal-400/100";} ?>"
                    href="/CRUDO/src/view/citas.php">Agendar Cita</a>
            </li>
        </ul>
    </div>
</nav>