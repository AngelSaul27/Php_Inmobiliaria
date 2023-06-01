<?php include 'components/header.php' ?>
<main class="windowsFullscreen flex flex-col items-center gap-5 px-[5%] py-[2%]">
    <div class="max-h-[600px] w-full gap-2 flex flex-col justify-center select-none">
        <div class="text-2xl font-bold text-slate-600 mb-3 w-full flex justify-between items-start items-center gap-2">
            <span>Historial de Propiedades</span>
        </div>
        <div class="overflow-y-auto content_scroll shadow-xl text-white">
            <table class="w-full p-6 text-sm text-left">
                <colgroup>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                    <col>
                </colgroup>
                <thead class="bg-gray-700 whitespace-nowrap">
                    <tr class="text-left">
                        <th class="p-3">#</th>
                        <th class="p-3">Propiedad</th>
                        <th class="p-3">Tipo de Propiedad</th>
                        <th class="p-3">Precio</th>
                        <th class="p-3">Cuartos</th>
                        <th class="p-3">Baños</th>
                        <th class="p-3">Dirección</th>
                        <th class="p-3">Publicado</th>
                        <th class="p-3">Acesor</th>
                        <th class="p-3"></th>
                    </tr>
                </thead>
                <tbody class="border-b bg-[#101820] border-gray-700">
                    <?php if (isset($this->items)) : ?>
                        <?php foreach ($this->items as $item) : $fechaActual = date('Y-m-d'); ?>
                            <tr>
                                <td class="p-3">
                                    <p><?php echo $item[0] ?></p>
                                </td>
                                <td class="p-3">
                                    <p><?php echo $item[1] ?></p>
                                </td>
                                <td class="p-3">
                                    <p><?php echo $item[3] ?></p>
                                </td>
                                <td class="p-3">
                                    <p class="w-max"><?php echo '$ ' . number_format($item[4]) ?></p>
                                </td>
                                <td class="p-3">
                                    <p><?php echo $item[5] ?></p>
                                </td>
                                <td class="p-3">
                                    <p><?php echo $item[6] ?></p>
                                </td>
                                <td class="p-3">
                                    <p><?php echo $item[7] . ', ' . $item[8] . ', ' . $item[9] ?></p>
                                </td>
                                <td class="p-3">
                                    <p class="w-max"><?php echo $item[11] ?></p>
                                </td>
                                <td class="p-3">
                                    <p><?php echo $item[13] ?></p>
                                </td>
                                <td class="flex items-center gap-2">
                                    <form action="<?php echo URL ?>deleted_propiedad_admin" method="POST">
                                        <input type="text" name="pro_id" value="<?php echo $item[0] ?>" class="hidden">
                                        <input type="text" name="pro_loc" value="acesor/propiedades" class="hidden">
                                        <button type="submit" class="p-1 rounded-md text-gray-600 hover:bg-gray-700 focus:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-red-600">
                                                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                    <a href="<?php echo URL ?>propiedad/edit/?id=<?php echo $item[0] ?>" class="text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include 'components/footer.php' ?>