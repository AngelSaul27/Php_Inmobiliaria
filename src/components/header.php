<header class="w-full bg-[#101820]  shadow-xl ">
    <div class="flex items-center gap-2 justify-between py-1 px-10">
        <a href="/" class="flex items-center gap-2 select-none cursor-pointer">
            <img src="<?php echo URL ?>/public/img/logo.png" alt="" height="20px" width="54px" class="box-border py-1">
            <div class="flex flex-col justify-center text-white">
                <h1 class="text-xl font-bold">DARK BLOCK</h1>
                <h1 class="text-xs font-light text-slate-400 tracking-wide">SOLUCIONES INMOBILIARIAS</h1>
            </div>
        </a>

        <div class="text-white flex items-center gap-3 px-5 select-none">
            <div class="flex gap-2 hover:text-amber-600 transition-all duration-300 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-amber-600">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                </svg>
                <div class="flex flex-col text-sm font-light">
                    <strong class="font-bold">Telefono</strong>
                    <span>+(52) 9933445959</span>
                </div>
            </div>

            <div class="flex gap-2 hover:text-amber-600 transition-all duration-300 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-amber-600">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                </svg>
                <div class="flex flex-col text-sm font-light">
                    <strong class="font-bold">Información</strong>
                    <span>example@dark_block.com</span>
                </div>
            </div>

            <div class="flex gap-2 hover:text-amber-600 transition-all duration-300 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-amber-600">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
                </svg>
                <div class="flex flex-col text-sm font-light">
                    <strong class="font-bold">Atención</strong>
                    <span>24 / 7</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-amber-600 h-[30px] w-full flex items-center justify-between px-10 py-1">

        <?php if (!isset($_SESSION['role'])) : ?>
            <ul class="text-white flex items-center h-full items-center gap-3">
                <li><a class="hover:text-[#101829] transition-all duration-500" href="<?php echo URL ?>propiedades/filter/?type=venta">En Venta</a></li>
                <li><a class="hover:text-[#101829] transition-all duration-500" href="<?php echo URL ?>propiedades/filter/?type=renta">En Renta</a></li>
                <li><a class="hover:text-[#101829] transition-all duration-500" href="<?php echo URL ?>propiedades/filter/?type=all">Catalogos</a></li>
                <li><a class="hover:text-[#101829] transition-all duration-500" href="#">Nosotros</a></li>
            </ul>
        <?php else : ?>
            <?php if ($_SESSION['role'] !== 'admin') : ?>
                <ul class="text-white flex items-center h-full items-center gap-3">
                    <li><a class="hover:text-[#101829] transition-all duration-500" href="<?php echo URL ?>propiedades/filter/?type=venta">En Venta</a></li>
                    <li><a class="hover:text-[#101829] transition-all duration-500" href="<?php echo URL ?>propiedades/filter/?type=renta">En Renta</a></li>
                    <li><a class="hover:text-[#101829] transition-all duration-500" href="<?php echo URL ?>propiedades/filter/?type=all">Catalogos</a></li>
                    <li><a class="hover:text-[#101829] transition-all duration-500" href="#">Nosotros</a></li>
                </ul>
            <?php endif; ?>
        <?php endif; ?>

        <?php if (!isset($_SESSION['logged'])) : ?>

            <div>
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                    </svg>
                    <span>Iniciar Session</span>
                </button>
            </div>

        <?php else : ?>
            <div class="flex text-white gap-4">
                <a href="<?php echo URL ?><?php echo $_SESSION['role']; ?>" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                    </svg>
                    <span>Mi Cuenta</span>
                </a>

                <?php if ($_SESSION['role'] === 'cliente') : ?>
                    <a href="<?php echo URL ?>cliente/cita" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                        </svg>
                        <span>Citas</span>
                    </a>

                    <a href="<?php echo URL ?>cliente/mensaje" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                            <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                        </svg>
                        <span>Mensajes</span>
                    </a>
                <?php endif; ?>

                <?php if ($_SESSION['role'] === 'acesor') : ?>
                    <a href="<?php echo URL ?>acesor/citas" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                        </svg>
                        <span>Citas</span>
                    </a>
                    <a href="<?php echo URL ?>acesor/propiedades" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M19.006 3.705a.75.75 0 00-.512-1.41L6 6.838V3a.75.75 0 00-.75-.75h-1.5A.75.75 0 003 3v4.93l-1.006.365a.75.75 0 00.512 1.41l16.5-6z" />
                            <path fill-rule="evenodd" d="M3.019 11.115L18 5.667V9.09l4.006 1.456a.75.75 0 11-.512 1.41l-.494-.18v8.475h.75a.75.75 0 010 1.5H2.25a.75.75 0 010-1.5H3v-9.129l.019-.006zM18 20.25v-9.565l1.5.545v9.02H18zm-9-6a.75.75 0 00-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75H9z" clip-rule="evenodd" />
                        </svg>
                        <span>Propiedades</span>
                    </a>
                    <a href="<?php echo URL ?>propiedad/create" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M19.006 3.705a.75.75 0 00-.512-1.41L6 6.838V3a.75.75 0 00-.75-.75h-1.5A.75.75 0 003 3v4.93l-1.006.365a.75.75 0 00.512 1.41l16.5-6z" />
                            <path fill-rule="evenodd" d="M3.019 11.115L18 5.667V9.09l4.006 1.456a.75.75 0 11-.512 1.41l-.494-.18v8.475h.75a.75.75 0 010 1.5H2.25a.75.75 0 010-1.5H3v-9.129l.019-.006zM18 20.25v-9.565l1.5.545v9.02H18zm-9-6a.75.75 0 00-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75H9z" clip-rule="evenodd" />
                        </svg>
                        <span>Crear</span>
                    </a>
                <?php endif; ?>

                <?php if ($_SESSION['role'] === 'admin') : ?>
                    <a href="<?php echo URL ?>admin/citas" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                            <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                        </svg>
                        <span>List. de Citas</span>
                    </a>
                    <a href="<?php echo URL ?>admin/propiedades" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M19.006 3.705a.75.75 0 00-.512-1.41L6 6.838V3a.75.75 0 00-.75-.75h-1.5A.75.75 0 003 3v4.93l-1.006.365a.75.75 0 00.512 1.41l16.5-6z" />
                            <path fill-rule="evenodd" d="M3.019 11.115L18 5.667V9.09l4.006 1.456a.75.75 0 11-.512 1.41l-.494-.18v8.475h.75a.75.75 0 010 1.5H2.25a.75.75 0 010-1.5H3v-9.129l.019-.006zM18 20.25v-9.565l1.5.545v9.02H18zm-9-6a.75.75 0 00-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75H9z" clip-rule="evenodd" />
                        </svg>
                        <span>List. de Propiedades</span>
                    </a>
                    <a href="<?php echo URL ?>admin/clientes" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M10.375 2.25a4.125 4.125 0 100 8.25 4.125 4.125 0 000-8.25zM10.375 12a7.125 7.125 0 00-7.124 7.247.75.75 0 00.363.63 13.067 13.067 0 006.761 1.873c2.472 0 4.786-.684 6.76-1.873a.75.75 0 00.364-.63l.001-.12v-.002A7.125 7.125 0 0010.375 12zM16 9.75a.75.75 0 000 1.5h6a.75.75 0 000-1.5h-6z" />
                        </svg>
                        <span>List. Clientes</span>
                    </a>
                    <a href="<?php echo URL ?>admin/acesores" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z" clip-rule="evenodd" />
                            <path d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                        </svg>
                        <span>List. Acesores</span>
                    </a>
                    <a href="<?php echo URL ?>propiedad/create" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M19.006 3.705a.75.75 0 00-.512-1.41L6 6.838V3a.75.75 0 00-.75-.75h-1.5A.75.75 0 003 3v4.93l-1.006.365a.75.75 0 00.512 1.41l16.5-6z" />
                            <path fill-rule="evenodd" d="M3.019 11.115L18 5.667V9.09l4.006 1.456a.75.75 0 11-.512 1.41l-.494-.18v8.475h.75a.75.75 0 010 1.5H2.25a.75.75 0 010-1.5H3v-9.129l.019-.006zM18 20.25v-9.565l1.5.545v9.02H18zm-9-6a.75.75 0 00-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75H9z" clip-rule="evenodd" />
                        </svg>
                        <span>Crear</span>
                    </a>
                <?php endif; ?>

                <form action="<?php echo URL ?>logout" method="POST">
                    <button type="submit" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z" clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M19 10a.75.75 0 00-.75-.75H8.704l1.048-.943a.75.75 0 10-1.004-1.114l-2.5 2.25a.75.75 0 000 1.114l2.5 2.25a.75.75 0 101.004-1.114l-1.048-.943h9.546A.75.75 0 0019 10z" clip-rule="evenodd" />
                        </svg>
                        <span>Salir</span>
                    </button>
                </form>
            </div>
        <?php endif; ?>

    </div>
</header>

<?php if (!isset($_SESSION['logged'])) : ?>
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content login -->
            <div class="relative rounded-lg shadow bg-[#101820]" id="login_content_modal">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-amber-800 hover:text-white" data-modal-hide="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Bienvenido a <span class="text-amber-600 font-bold">DARCK BLOCK</span></h3>
                    <form class="space-y-6" action="<?php echo URL ?>auth_login" id="auth_login" method="POST">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-500">Tu correo</label>
                            <input type="email" name="email" class="border text-sm rounded-lg focus:ring-0 focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-500">Tu contraseña</label>
                            <input type="password" name="password" placeholder="••••••••" class="border text-sm rounded-lg focus:ring-0 focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" required>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-0 bg-gray-600 border-gray-500 focus:ring-amber-600 dark:ring-offset-amber-800 dark:focus:ring-offset-amber-800">
                                </div>
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Recuerdame</label>
                            </div>
                            <a href="#" class="text-sm hover:underline text-amber-500">Olvidaste tu contraseña?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-amber-700 shadow-xl hover:bg-amber-800 outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ingresa a tu cuenta</button>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                            Sin cuenta? <span onclick="changueContentModal('register_content_modal','login_content_modal')" class="hover:underline text-amber-500 cursor-pointer">Crea una aquí</span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal content register -->
            <div class="relative rounded-lg shadow bg-[#101820] hidden" id="register_content_modal">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-amber-800 hover:text-white" data-modal-hide="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Registrarse en <span class="text-amber-600 font-bold">DARCK BLOCK</span></h3>
                    <form class="space-y-6" action="auth_register" method="POST">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-500">Nombre Completo</label>
                            <input value="easdasd" type="text" name="name" class="border text-sm rounded-lg focus:ring-0 focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" placeholder="juan perez" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-500">Tu Correo</label>
                            <input value="example@gmail.com" type="email" name="email" class="border text-sm rounded-lg focus:ring-0 focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-500">Su Contraseña</label>
                            <input value="12asd" type="password" name="password" placeholder="••••••••" class="border text-sm rounded-lg focus:ring-0 focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white" required>
                        </div>
                        <button type="submit" class="w-full text-white bg-amber-700 shadow-xl hover:bg-amber-800 outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center">Crear una cuenta</button>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                            Ya estas registrado? <span onclick="changueContentModal('login_content_modal', 'register_content_modal')" class="hover:underline text-amber-500 cursor-pointer">Ingresa aquí</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['MENSSAGE']) && $_SESSION['MENSSAGE'] != null) : ?>
    <div id="message" class="fixed top-2 right-2 z-[100] flex p-4 mb-4 border-t-4 text-red-400 bg-[#17212C] border-red-800" role="alert">
        <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3 text-sm font-medium">
            <?php echo $_SESSION['MENSSAGE'];
            $_SESSION['MENSSAGE'] = null; ?>
        </div>
    </div>
    <script>
        setTimeout(function() {
            var messageDiv = document.getElementById("message");
            if (messageDiv) {
                messageDiv.style.display = "none";
            }
        }, 5000); // Retraso de 5 segundos
    </script>
<?php endif; ?>

<?php if (isset($_SESSION['MENSSAGE_SUCCESS']) && $_SESSION['MENSSAGE_SUCCESS'] != null) : ?>
    <div id="message" class="fixed top-2 right-2 z-[100] flex p-4 mb-4 border-t-4 text-green-400 bg-[#17212C] border-green-800" role="alert">
        <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
        <div class="ml-3 text-sm font-medium">
            <?php echo $_SESSION['MENSSAGE_SUCCESS'];
            $_SESSION['MENSSAGE_SUCCESS'] = null; ?>
        </div>
    </div>
    <script>
        setTimeout(function() {
            var messageDiv = document.getElementById("message");
            if (messageDiv) {
                messageDiv.style.display = "none";
            }
        }, 5000); // Retraso de 5 segundos
    </script>
<?php endif; ?>
<?php

/*

                    <a href="<?php echo URL ?>acesor/preguntas" class="text-white flex items-center gap-2 hover:text-[#101829] transition-all duration-500" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                            <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                        </svg>
                        <span>Mensajes</span>
                    </a>

*/
?>