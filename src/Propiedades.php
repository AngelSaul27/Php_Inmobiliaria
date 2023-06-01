<?php include 'components/header.php' ?>
<main>
    <div class="px-[5%] py-[2%]">

        <div class="bg-[#101820] rounded-sm px-2 py-1 my-2 mb-5 w-max">
            <h1 class="text-white text-xl font-bold uppercase">Resultados</h1>
        </div>

        <!-- CATALOGOS -->
        <div class="grid grid-cols-2 gap-5">

            <div class="flex flex-col gap-5">
                <?php if (isset($this->items) && $this->items) : ?>
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
                                </div>
                                <img src="<?php echo $item[10]; ?>" class="object-fit w-full h-full rounded-l-sm" alt="">
                            </div>
                            <div class="flex flex-col text-[#101820] items-stretch p-5 w-full select-none">
                                <a href="<?php echo URL ?>propiedades/view/?id=<?php echo $item[0] ?>" class="font-bold text-md uppercase"><?php echo $item[1] ?></a>
                                <div class="flex gap-2 items-center mt-3 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-amber-600">
                                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                    </svg>
                                    <small class="font-light tracking-wide text-[14px]"><?php echo $item[9] . ', ' . $item[7] . ', ' . $item[8] ?></small>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-2">
                                        <img src="<?php echo URL ?>public/img/icons/wc.svg" width="24px" alt="wc">
                                        <span class="font-light tracking-wide text-[14px]">Baños: <?php echo $item[6] ?></span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <img src="<?php echo URL ?>public/img/icons/bed.svg" width="24px" alt="wc">
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
                <?php else : ?>
                    <div class="w-full flex flex-col items-center">
                        <img src="<?php echo URL ?>public/img/img_not_results.png" width="314px" alt="asd">
                        <small class="text-gray-400">Sin resultados</small>
                    </div>
                <?php endif; ?>
            </div>

            <!-- ADS -->
            <div class="flex flex-col gap-3 items-end pr-[15%]">
            </div>

        </div>
    </div>
</main>
<?php include 'components/footer.php' ?>