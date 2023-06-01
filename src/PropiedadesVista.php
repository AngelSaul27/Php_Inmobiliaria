<?php include 'components/header.php' ?>
<main>
    <?php if (isset($this->data)) : $item = $this->data; ?>
        <div class="w-full max-h-[400px] relative">
            <div class="absolute absolute inset-x-0 inset-y-0 bg-neutral-950 opacity-40"></div>
            <div class="absolute z-10 flex gap-2 text-white p-2 text-sm bottom-5 right-8">
                <?php if (isset($_SESSION['logged'])) : ?>
                    <?php if (!$item[13]) : ?>
                        <form action="<?php echo URL ?>favorite_add" method="POST">
                            <input type="number" name="fav_properties" class="hidden" value="<?php echo $item[0] ?>">
                            <input type="text" name="fav_loc" value="propiedades/view/?id=<?php echo $item[0] ?>" class="hidden">
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
            <div class="absolute flex gap-2 text-white p-2 text-sm top-5 left-8">
                <div class="bg-amber-600 px-2 py-1 rounded-md">
                    <?php echo $item[3]; ?>
                </div>
                <div class="bg-[#101820] px-2 py-1 rounded-md">
                    Casa
                </div>
            </div>
            <img src="<?php echo $item[10]; ?>" class="object-cover object-top w-full h-full max-h-[400px] rounded-l-sm" alt="">
        </div>
        <div class="px-[5%] py-[2%] flex flex-col text-[#101820] items-stretch p-5 w-full select-none">
            <h1 class="font-bold text-2xl uppercase"><?php echo $item[1] ?></h1>
            <div class="grid grid-cols-2">
                <div>
                    <div class="flex gap-2 items-center mt-3 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-amber-600">
                            <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                        <small class="font-light tracking-wide text-[14px]"><?php echo $item[9] . ', ' . $item[7] . ', ' . $item[8] ?></small>
                    </div>
                    <h1 class="text-xl font-bold">Descripción:</h1>
                    <div class="text-xl mb-5 font-light">
                        <p><?php echo $item[2] ?></p>
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
                    <div class="flex items-center justify-between gap-5">
                        <h1 class="text-amber-600 font-bold text-2xl mt-5">MX $ <span class="text-[#101820] tracking-wide"><?php echo number_format($item[4]) ?></span></h1>
                        <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === 1) : ?>
                            <button type="button" data-modal-target="agendar-modal" data-modal-toggle="agendar-modal" class="mt-5 w-max px-4 py-2 font-bold rounded shadow bg-amber-600 hover:bg-amber-800 transition-all duration-500 text-white">
                                AGENDAR CITA
                            </button>
                        <?php else : ?>
                            <small class="text-light text-amber-300 break-words">Resgistrate o inicia sesión para poder generar una cita.</small>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="-mt-[40px]">
                    <section class="p-6 text-gray-100 shadow-2xl w-full max-w-xl p-8 mx-auto rounded-md shadow bg-[#101820] <?php if (!isset($_SESSION['logged'])) : ?>space-y-5<?php endif; ?>">
                        <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === 1) : ?>
                            <form action="<?php echo URL ?>question_properties" method="POST" class="ng-untouched ng-pristine ng-valid">
                                <input type="text" name="que_loc" value="propiedades/view/?id=<?php echo $item[0] ?>" class="hidden">
                            <?php endif; ?>
                            <h2 class="w-full text-3xl font-bold">Contactanos</h2>
                            <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === 0) : ?>
                                <small class="text-light text-amber-300">Resgistrate o inicia sesión para poder saber más de esta propiedad.</small>
                            <?php endif; ?>
                            <div>
                                <label for="name" class="block mb-1 ml-1">Nombre</label>
                                <input name="name" type="text" <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === 1) : ?> value="<?php echo ($_SESSION['use_data'])[1] ?>" <?php endif; ?> placeholder="Tu nombre completo" required class="block w-full p-2 rounded focus:ring-0 outline-none border-none placeholder-gray-400 text-slate-800">
                            </div>
                            <div>
                                <label for="email" class="block mb-1 ml-1">Email</label>
                                <input name="email" type="email" <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === 1) : ?> value="<?php echo ($_SESSION['use_data'])[2] ?>" <?php endif; ?> placeholder="Tu correo" required class="block w-full p-2 rounded focus:ring-0 outline-none border-none placeholder-gray-400 text-slate-800">
                            </div>
                            <div>
                                <label for="message" class="block mb-1 ml-1">Mensaje</label>
                                <textarea name="message" type="text" placeholder="Tu mesaje..." required class="block w-full p-2 rounded autoexpand focus:ring-0 outline-none border-none placeholder-gray-400 text-slate-800"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="w-full px-4 py-2 font-bold rounded shadow bg-amber-600 hover:bg-amber-800 transition-all duration-500 text-white">Enviar</button>
                            </div>
                            <?php if (isset($_SESSION['logged']) && $_SESSION['logged'] === 1) : ?>
                            </form>
                        <?php endif; ?>
                    </section>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>

<!-- Main modal -->
<div id="agendar-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-[#101820]">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-amber-800 hover:text-white" data-modal-hide="agendar-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Agenda Una Cita<span class="text-amber-600 font-bold"> Ahora!</span></h3>
                <form action="<?php echo URL ?>create_cite" method="POST" class="space-y-6">
                    <input type="text" name="cit_loc" value="propiedades/view/?id=<?php echo $item[0] ?>" class="hidden">
                    <input type="text" name="propertie" value="<?php echo $item[0] ?>" class="hidden">
                    <div>
                        <label for="Fecha" class="block mb-2 text-sm font-medium text-gray-500">Selecciona Una Fecha</label>
                        <input id="fecha-input" type="date" name="day" class="border text-sm rounded-lg focus:ring-0 focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" required>
                    </div>
                    <div>
                        <label for="Hora" class="block mb-2 text-sm font-medium text-gray-500">Selecciona Una Hora</label>
                        <input id="hora-input" type="time" name="time" class="border text-sm rounded-lg focus:ring-0 focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" required>
                    </div>
                    <button type="submit" class="w-full text-white bg-amber-700 shadow-xl hover:bg-amber-800 outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">AGENDAR AHORA</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var fechaInput = document.getElementById("fecha-input");
    var fechaActual = new Date().toISOString().split("T")[0];
    fechaInput.setAttribute("min", fechaActual);

    document.getElementById("hora-input").addEventListener("input", function() {
        var selectedTime = this.value;
        var selectedHour = parseInt(selectedTime.split(":")[0]);

        if (selectedHour < 10 || selectedHour >= 22) {
            this.value = ""; // Restablecer el valor a vacío si la hora está fuera del rango
            alert("Por favor, selecciona una hora entre las 10 am y las 10 pm.");
        }
    });
</script>
<!-- ---------- -->
<?php include 'components/footer.php' ?>