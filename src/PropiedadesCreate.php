<?php include 'components/header.php' ?>
<main class="px-[5%] py-[2%]">

    <form action="<?php echo URL ?>propiedad_create" method="POST">
        <h1 class="text-2xl font-bold my-4">Formulario de Creación</h1>
        <fieldset class="grid grid-cols-3 gap-5 mb-[14px]">
            <div class="flex flex-col gap-2">
                <label for="Titulo" class="font-light text-slate-600">Titulo</label>
                <input type="text" name="pro_title" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Description" class="font-light text-slate-600">Descipción</label>
                <textarea name="pro_description" class="rounded-sm border-none shadow outline-none focus:ring-0"></textarea>
            </div>

            <div class="flex flex-col gap-2">
                <label for="Tipo" class="font-light text-slate-600">Tipo</label>
                <select name="pro_type" class="rounded-sm border-none shadow outline-none focus:ring-0 py-3 px-2">
                    <option value="Renta">Renta</option>
                    <option value="Venta">Venta</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label for="Precio" class="font-light text-slate-600">Precio</label>
                <input type="number" name="pro_price" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Habitaciones" class="font-light text-slate-600">Habitaciones</label>
                <input type="number" name="pro_rooms" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Baños" class="font-light text-slate-600">Baños</label>
                <input type="number" name="pro_bathrooms" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Ubicación" class="font-light text-slate-600">Ubicación</label>
                <input type="text" name="pro_address" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Pais" class="font-light text-slate-600">Pais</label>
                <input type="text" name="pro_pais" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Ciudad" class="font-light text-slate-600">Ciudad</label>
                <input type="text" name="pro_ciudad" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>

            <div class="flex flex-col gap-2">
                <label for="Cover" class="font-light text-slate-600">Vinculo de Fotografia</label>
                <input type="text" name="pro_cover" class="rounded-sm border-none shadow outline-none focus:ring-0">
            </div>
            <div class="flex items-center justify-center h-full">
                <button type="submit" class="bg-green-500 rounded-md h-max px-8 py-3 my-auto text-white">
                    Crear Post
                </button>
            </div>
        </fieldset>
    </form>

</main>
<?php include 'components/footer.php' ?>