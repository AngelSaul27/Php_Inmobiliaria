<?php include 'components/header.php' ?>
<main class="windowsFullscreen flex flex-col items-center gap-5 px-[5%] py-[2%]">
    <div class="max-h-[600px] w-full gap-2 flex flex-col justify-center select-none">
        <div class="text-2xl font-bold text-slate-600 mb-3 w-full flex justify-between items-start items-center gap-2">
            <span>Historial de Citas</span>
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
                        <th class="p-3">Acesor</th>
                        <th class="p-3">Propiedad</th>
                        <th class="p-3">Tipo</th>
                        <th class="p-3">Ubicación</th>
                        <th class="p-3">Fecha</th>
                        <th class="p-3">Hora</th>
                        <th class="p-3">Precio</th>
                        <th class="p-3 text-center">Status</th>
                        <th class="p-3"></th>
                    </tr>
                </thead>
                <tbody class="border-b bg-[#101820] border-gray-700">
                    <?php foreach ($this->items as $item) : $fechaActual = date('Y-m-d'); ?>
                        <?php if (strtotime($item[1]) >= strtotime($fechaActual)) : ?>
                            <!-- PLANTILA PENDIENTE -->
                            <tr>
                                <td class="p-3">
                                    <p><?php echo $item[0] ?></p>
                                </td>
                                <td class="p-3">
                                    <p><?php echo $item[12] ?></p>
                                </td>
                                <td class="p-3">
                                    <p><?php echo $item[3] ?></p>
                                </td>
                                <td class="p-3">
                                    <p class="w-max"><?php echo $item[5] ?></p>
                                </td>
                                <td class="p-3">
                                    <p><?php echo $item[9] . ', ' . $item[7] . ', ' . $item[8] ?></p>
                                </td>
                                <td class="p-3">
                                    <p class="w-max"><?php echo $item[1] ?></p>
                                </td>
                                <td class="p-3">
                                    <p class="w-max"><?php echo $item[2] ?></p>
                                </td>
                                <td class="p-3">
                                    <p class="w-max"><?php echo '$ ' . number_format($item[6]) ?></p>
                                </td>
                                <td class="p-3 text-center">
                                    <span class="px-3 py-1 font-semibold rounded-md bg-amber-400 text-gray-900">
                                        <span>Pending</span>
                                    </span>
                                </td>
                                <td>
                                    <form action="<?php echo URL ?>deleted_cita" method="POST">
                                        <input type="text" name="cit_id" value="<?php echo $item[0] ?>" class="hidden">
                                        <input type="text" name="cit_loc" value="cliente/cita" class="hidden">
                                        <button type="submit" class="p-1 rounded-md text-gray-600 hover:bg-gray-700 focus:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-red-600">
                                                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php else : ?>
                            <!-- PLANTILLA VENCIDO -->
                            <tr>
                                <td class="p-3">
                                    <p><?php echo $item[0] ?></p>
                                </td>
                                <td class="p-3">
                                    <p><?php echo $item[12] ?></p>
                                </td>
                                <td class="p-3">
                                    <p><?php echo $item[3] ?></p>
                                </td>
                                <td class="p-3">
                                    <p class="w-max"><?php echo $item[5] ?></p>
                                </td>
                                <td class="p-3">
                                    <p><?php echo $item[9] . ', ' . $item[7] . ', ' . $item[8] ?></p>
                                </td>
                                <td class="p-3">
                                    <p class="w-max"><?php echo $item[1] ?></p>
                                </td>
                                <td class="p-3">
                                    <p class="w-max"><?php echo $item[2] ?></p>
                                </td>
                                <td class="p-3">
                                    <p class="w-max"><?php echo '$ ' . number_format($item[6]) ?></p>
                                </td>
                                <td class="p-3 text-center">
                                    <span class="px-3 py-1 font-semibold rounded-md bg-red-400 text-gray-900">
                                        <span class="w-max">Vencido</span>
                                    </span>
                                </td>
                                <td>
                                    <form action="<?php echo URL ?>deleted_cita" method="POST">
                                        <input type="text" name="cit_id" value="<?php echo $item[0] ?>" class="hidden">
                                        <input type="text" name="cit_loc" value="cliente/cita" class="hidden">
                                        <button type="submit" class="p-1 rounded-md text-gray-600 hover:bg-gray-700 focus:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-red-600">
                                                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include 'components/footer.php' ?>