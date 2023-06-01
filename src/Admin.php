<?php include 'components/header.php' ?>
<?php $data = $_SESSION['use_data']; ?>
<main>
    <div class="flex flex-col items-center gap-5 px-[5%] py-[2%]">

        <div class="flex flex-col justify-center shadow-md rounded-xl px-12 py-6 h-max w-full bg-[#101820]">
            <img src="https://www.gravatar.com/avatar/'<?php echo $data[2]; ?>'.com?d=identicon" alt="" class="w-32 h-32 mx-auto rounded-full dark:bg-gray-500 aspect-square">
            <div class="space-y-4 text-center divide-y divide-gray-700 text-white">
                <div class="my-2 space-y-1">
                    <h2 class="font-semibold text-2xl uppercase"><?php echo $data[1] ?></h2>
                    <p class="px-5 text-xs sm:text-base text-gray-400 uppercase"><?php echo $data[5] ?></p>
                </div>
            </div>
        </div>

        <div class="flex gap-5">
            <form action="admin_update" method="POST" class="bg-white shadow-xl w-max px-12 py-5 rounded-xl h-max flex flex-col gap-2 items-center">
                <h1 class="text-2xl font-bold text-slate-600 mb-3">Información Personal</h1>
                <div class="flex gap-3">
                    <fieldset class="flex flex-col gap-4">
                        <span class="text-gray-500">Nombre Completo</span>
                        <input type="text" name="name" value="<?php echo $data[1]; ?>" class="text-amber-600 outline-none focus:ring-0 border-none shadow rounded-md" placeholder="Nombre">
                        <span class="text-gray-500">Correo Electronico</span>
                        <input type="email" name="email" value="<?php echo $data[2]; ?>" class="text-amber-600 outline-none focus:ring-0 border-none shadow rounded-md" placeholder="Correo electronico">
                    </fieldset>
                    <fieldset class="flex flex-col gap-4">
                        <span class="text-gray-500">Numero Telefonico</span>
                        <input type="number" name="phone" value="<?php echo $data[4]; ?>" class="text-amber-600 outline-none focus:ring-0 rounded-md border-none shadow" placeholder="+52 #######">
                        <span class="text-gray-500">Fecha de Registro</span>
                        <input type="date" name="fecha_registro" value="<?php echo $data[3]; ?>" class="toutline-none focus:ring-0 rounded-md border-none shadow text-gray-400" disabled>
                    </fieldset>
                </div>
                <button class="mt-5 px-4 block w-max py-2 text-sm font-medium leading-5 shadow text-white transition-colors duration-150 border border-transparent rounded-lg focus:outline-none focus:shadow-outline-amber bg-amber-600 active:bg-blue-600 hover:bg-amber-700">
                    Actualizar Datos
                </button>
            </form>
        </div>
    </div>
</main>
<?php include 'components/footer.php' ?>