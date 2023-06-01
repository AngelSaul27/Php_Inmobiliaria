<?php include 'components/header.php' ?>
<main class="px-[5%] py-[2%]">

    <form action="<?php echo URL ?>propiedad_update" method="POST">
        <h1 class="text-2xl font-bold my-4">Formulario de Edición</h1>
        <input type="number" name="pro_id" value="<?php echo $this->data[0] ?>" class="hidden">
        <input type="text" name="pro_loc" value="<?php echo 'propiedad/edit/?id=' . $this->data[0] ?>" class="hidden">
        <fieldset class="grid grid-cols-3 gap-5 mb-[14px]">
            <div class="flex flex-col gap-2">
                <label for="Titulo" class="font-light text-slate-600">Titulo</label>
                <input type="text" name="pro_title" value="<?php echo $this->data[1] ?>" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Description" class="font-light text-slate-600">Descipción</label>
                <textarea name="pro_description" class="rounded-sm border-none shadow outline-none focus:ring-0"><?php echo $this->data[2] ?></textarea>
            </div>

            <div class="flex flex-col gap-2">
                <label for="Tipo" class="font-light text-slate-600">Tipo</label>
                <select name="pro_type" class="rounded-sm border-none shadow outline-none focus:ring-0 py-3 px-2">
                    <option value="Renta" <?php echo $this->data[3] === 'Renta' ? 'selected' : '' ?>>Renta</option>
                    <option value="Venta" <?php echo $this->data[3] === 'Venta' ? 'selected' : '' ?>>Venta</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label for="Precio" class="font-light text-slate-600">Precio</label>
                <input type="number" name="pro_price" value="<?php echo $this->data[4] ?>" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Habitaciones" class="font-light text-slate-600">Habitaciones</label>
                <input type="number" name="pro_rooms" value="<?php echo $this->data[5] ?>" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Baños" class="font-light text-slate-600">Baños</label>
                <input type="number" name="pro_bathrooms" value="<?php echo $this->data[6] ?>" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Ubicación" class="font-light text-slate-600">Ubicación</label>
                <input type="text" name="pro_address" value="<?php echo $this->data[7] ?>" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Pais" class="font-light text-slate-600">Pais</label>
                <input type="text" name="pro_pais" value="<?php echo $this->data[8] ?>" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Ciudad" class="font-light text-slate-600">Ciudad</label>
                <input type="text" name="pro_ciudad" value="<?php echo $this->data[9] ?>" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Cover" class="font-light text-slate-600">Vinculo de Fotografia</label>
                <input type="text" name="pro_cover" value="<?php echo $this->data[10] ?>" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>
            <div class="flex items-center justify-center h-full">
                <button type="submit" class="bg-green-500 rounded-md h-max px-8 py-3 my-auto text-white">
                    Actualizar
                </button>
            </div>
        </fieldset>
    </form>

</main>
<?php include 'components/footer.php' ?>