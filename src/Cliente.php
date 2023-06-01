<?php include 'components/header.php' ?>
<?php $data = $_SESSION['use_data']; ?>
<main>
    <div class="flex flex-col items-center gap-5 px-[5%] py-[2%]">

        <div class="flex flex-col justify-center shadow-md rounded-xl px-12 py-6 h-max w-full bg-[#101820]">
            <img src="https://www.gravatar.com/avatar/<?php echo $data[2]; ?>?d=identicon" alt="" class="w-32 h-32 mx-auto rounded-full dark:bg-gray-500 aspect-square">
            <div class="space-y-4 text-center divide-y divide-gray-700 text-white">
                <div class="my-2 space-y-1">
                    <h2 class="font-semibold text-2xl uppercase"><?php echo $data[1] ?></h2>
                    <p class="px-5 text-xs sm:text-base text-gray-400 uppercase"><?php echo $data[5] ?></p>
                </div>
            </div>
        </div>

        <div class="flex gap-5">
            <form action="cliente_update" method="POST" class="bg-white shadow-xl w-max px-12 py-5 rounded-xl h-max flex flex-col gap-2 items-center">
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
            <div class="bg-white shadow-xl w-max px-5 py-5 rounded-xl h-max flex flex-col gap-2 items-center select-none max-w-[560px] max-h-[335px]">
                <div class="text-2xl font-bold text-slate-600 mb-3 w-full flex justify-between items-start items-center gap-2">
                    <span>Favoritos</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                </div>
                <?php if (isset($this->favorite) && !empty($this->favorite)) : ?>
                    <div class="overflow-y-auto content_scroll">
                        <table class="w-full p-6 text-sm text-left">
                            <colgroup>
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                                <col>
                            </colgroup>
                            <thead>
                                <tr class="bg-gray-700 whitespace-nowrap">
                                    <th class="p-3 text-white">Propiedad</th>
                                    <th class="p-3 text-white">Tipo</th>
                                    <th class="p-3 text-white">Precio</th>
                                    <th class="p-3 text-white">Ubicación</th>
                                    <th class="p-3 text-white">Añadido</th>
                                    <th class="text-white">
                                        <span class="sr-only">Deleted</span>
                                    </th>
                                </tr>
                            </thead>
                            <?php foreach ($this->favorite as $favorite) : ?>
                                <tbody class="border-b bg-[#101820] border-gray-700">
                                    <tr>
                                        <td class="p-2">
                                            <p class="text-white uppercase break-words"><?php echo $favorite[1] ?></p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-white uppercase break-words"><?php echo $favorite[2] ?></p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-white uppercase break-words"><?php echo $favorite[3] ?></p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-white uppercase break-words"><?php echo $favorite[4] ?></p>
                                        </td>
                                        <td class="p-2">
                                            <p class="text-white uppercase break-words"><?php echo $favorite[5] ?></p>
                                        </td>
                                        <td class="p-1">
                                            <form action="cliente_favorite_remove" method="POST">
                                                <input type="text" name="fav_id" class="hidden" value="<?php echo $favorite[0] ?>">
                                                <button type="submit" class="p-1 rounded-md text-gray-600 hover:bg-gray-700 focus:bg-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-red-600">
                                                        <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php else : ?>
                    <img src="../public/img/img_not_results.png" alt="" width="170px" height="170px">
                    <span class="text-sm text-gray-400 -mb-1">Sin Resultados</span>
                    <span class="text-sm text-gray-400 -mt-1">Consulta nuestro catalogo <a href="" class="text-amber-600">aquí</a></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php include 'components/footer.php' ?>