<header>
    <div class="flex flex-row justify-around items-center w-full h-20 bg-violet-900 rounded-t-lg">
        <div class="flex flex-row justify-around w-3/5 m-2">
            <div class="flex flex-row justify-around w-1/4">
                <div>
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div>
                    <button type="button" class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="menu-notificacao" aria-expanded="false" aria-haspopup="true">
                        <i class="fa-solid fa-bell text-lg"></i>
                    </button>
                    <div class="flex flex-col origin-top-left absolute mt-2 w-96 rounded-md divide-y shadow-lg bg-violet-100 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-notificacao" tabindex="-1"">
                        <div class="flex justify-center items-center text-violet-400 py-4"><h1>NOTIFICAÇÕES</h1></div>
                        <div class="p-2 text-violet-400 overflow-y-auto h-96">
                            @for ($i = 0; $i < 5; $i++)
                                <div>
                                    <a class="flex flex-row justify-around text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md"
                                        href="">
                                        <div class="">
                                            <h1>BOKU NO HERO</h1>
                                            <h2>CAP-123</h2>
                                            <p>16/05/2022</p>
                                        </div>
                                        <button
                                            class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </a>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-around items-center w-3/5">
                <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="#">INICIO</a>
                <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="#">ÚLTIMOS CAPÍTULOS</a>
                <div class="">
                    <button type="button" class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="menu-biblioteca" aria-expanded="false" aria-haspopup="true">
                        <div>BIBLIOTECA | <i class="fa-solid fa-angle-down ml-1"></i></div>
                    </button>
                    <div class="flex flex-col origin-top-left absolute mt-2 w-44 rounded-md shadow-lg py-4 bg-violet-100 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-biblioteca" tabindex="-1"">
                        <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="">MANGAS</a>
                        <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="">QUADRINHOS</a>
                        <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="">MANHAW</a>
                        <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="">WEBCOMIC</a>
                        <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="">NOVEL</a>
                        <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="">LIVRO</a>
                    </div>
                </div>
                <div class="">
                    <button type="button"
                        class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="menu-colecao" aria-expanded="false" aria-haspopup="true">
                        <div>MINHA COLEÇÃO | <i class="fa-solid fa-angle-down ml-1"></i></div>
                    </button>
                    <div class="flex flex-col origin-top-left absolute mt-2 w-44 rounded-md shadow-lg py-4 bg-violet-100 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-colecao" tabindex="-1"">
                        <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="">FAVORITOS</a>
                        <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="">DESTAQUES</a>
                        <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="">LENDO</a>
                        <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="">VOU LER</a>
                        <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="">FINALIZADOS</a>
                        <a class="text-violet-300 hover:bg-violet-700 hover:text-violet-100 px-3 py-2 rounded-md" href="">DROPADOS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-around w-2/5 m-2">
            <div class="w-3/4">
                <form class="flex flex-row justify-center item-center border rounded-lg p-1 bg-violet-700 w-4/5" action="">
                    <i class="fa-solid fa-magnifying-glass text-violet-300 hover:text-violet-100 px-3 py-2 rounded-md"></i>
                    <input class="w-full h-full bg-violet-500 rounded-lg p-2" type="text">
                </form>
            </div>
            <div class="w-1/4">
                <div class="w-full">ICONE_LOGO</div>
            </div>
        </div>
    </div>
    </div>
</header>
