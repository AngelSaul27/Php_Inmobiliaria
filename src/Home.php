<?php include 'components/header.php' ?>
<main>
    <section class="w-full presentacion object-cover relative">
        <img src="../public/img/presentacion_cover.jpg" class="w-full object-cover object-center">
        <div class="absolute bg-neutral-900 opacity-50 inset-x-0 inset-y-0"></div>
        <div class="text-white absolute inset-x-0 inset-y-0 flex flex-col justify-center items-center gap-2">
            <h1 class="text-4xl font-bold ">¿Estas buscando un lugar donde vivir?</h1>
            <h1 class="text-2xl font-semibold"><span class="font-bold text-amber-600">DARK BLOCK</span> esta contigo 24/7</h1>
            <h1 class="text-md font-light">Te ayudamos a encontrar la mejor combinación de propiedades que necesitas en solo unos pocos pasos.</h1>
            <form action="#" class="flex items-center gap-3 mt-4">
                <select class="text-[#101820] w-[200px] py-1 rounded-sm pl-2 focus:ring-offset-0 focus:ring-0 outline-none">
                    <option value="renta">Renta</option>
                </select>
                <select class="text-[#101820] w-[200px] py-1 rounded-sm pl-2 focus:ring-offset-0 focus:ring-0 outline-none">
                    <option value="casa">Casa</option>
                </select>
                <button class="bg-amber-700 py-1 px-2 rounded-md" type="submit">
                    <div>
                        <span>Buscar</span>
                    </div>
                </button>
            </form>
        </div>
    </section>

    <div class="px-[5%] py-[2%]">

        <div class="bg-[#101820] rounded-sm px-2 py-1 my-2 mb-5 w-max">
            <h1 class="text-white text-xl font-bold uppercase">Casas en renta</h1>
        </div>

        <!-- CATALOGOS -->
        <div class="grid grid-cols-2 gap-5">

            <div class="flex flex-col gap-5">
                <?php if (isset($this->items)) : ?>
                    <?php foreach ($this->items as $item) : ?>
                        <div class="flex items-stretch gap-2 rounded-sm shadow-xl h-full">
                            <div class="w-[400px] overflow-hidden relative">
                                <div class="absolute inset-x-0 inset-y-0 bg-neutral-950 opacity-30"></div>
                                <div class="absolute z-10 flex gap-2 text-white p-2 text-sm ">
                                    <div class="bg-amber-600 px-2 py-1 rounded-md">
                                        <?php echo $item[3]; ?>
                                    </div>
                                    <div class="bg-[#101820] px-2 py-1 rounded-md">
                                        Casa
                                    </div>
                                    <?php if (isset($_SESSION['logged'])) : ?>
                                        <?php if (!$item[13]) : ?>
                                            <form action="favorite_add" method="POST">
                                                <input type="number" name="fav_properties" class="hidden" value="<?php echo $item[0] ?>">
                                                <input type="text" name="fav_loc" value="/" class="hidden">
                                                <button type="submit" class="text-white p-1 hover:bg-amber-900 bg-amber-600 hover:text-gray-200 rounded-md transition-all duration-500 shadow-xl cursor-pointer">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        <?php else : ?>
                                            <span class="bg-amber-900 text-gray-200 p-1 rounded-md transition-all duration-500 shadow-xl cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                                </svg>
                                            </span>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                                <img src="<?php echo $item[10]; ?>" class="object-fit w-full h-full rounded-l-sm" alt="">
                            </div>
                            <div class="flex flex-col text-[#101820] items-stretch p-5 w-full select-none">
                                <a href="<?php echo URL?>propiedades/view/?id=<?php echo $item[0]?>" class="font-bold text-md uppercase"><?php echo $item[1] ?></a>
                                <div class="flex gap-2 items-center mt-3 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-amber-600">
                                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                    </svg>
                                    <small class="font-light tracking-wide text-[14px]"><?php echo $item[9] . ', ' . $item[7] . ', ' . $item[8] ?></small>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-2">
                                        <img src="./public/img/icons/wc.svg" width="24px" alt="wc">
                                        <span class="font-light tracking-wide text-[14px]">Baños: <?php echo $item[6] ?></span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="./public/img/icons/bed.svg" width="24px" alt="wc">
                                        <span class="font-light tracking-wide text-[14px]">Dormitorios: <?php echo $item[5] ?></span>
                                    </div>
                                </div>
                                <div class="flex items-stretch content-end self-end place-self-end h-full">
                                    <div class="flex items-end w-full h-full">
                                        <h1 class="text-amber-600 font-bold">MX $ <span class="text-[#101820] tracking-wide"><?php echo number_format($item[4]) ?></span></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php endif; ?>
            </div>

            <!-- ADS -->
            <div class="flex flex-col gap-3 items-end pr-[15%]">
                <img src="../public/img/ads/3.jpg" class="w-[350px] shadow-xl" alt="ads inmobiliara dark block">
                <img src="../public/img/ads/2.jpg" class="w-[350px] shadow-xl" alt="ads inmobiliara dark block">
                <img src="../public/img/ads/1.jpg" class="w-[350px] shadow-xl" alt="ads inmobiliara dark block">
            </div>

        </div>
    </div>
</main>
<?php include 'components/footer.php' ?>