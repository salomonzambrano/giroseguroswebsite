<nav class="w-screen overflow-scroll bg-white border-b dark:bg-black/40 border-slate-900/10 lg:px-8 dark:border-slate-300/10 lg:mx-0">
    <div class="px-4 mx-auto max-w-7xl sm:px-16 lg:px-20">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('/image/Giro .ico') }}" alt="Logo Giro" class="w-8 h-8">
                    </a>
                </div>
                <div class="mx-auto">
                    <div class="flex space-x-4">
                        <a href="{{ route('home') }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('home') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Inicio
                        </a>
                        <a href="{{ route('posts.index') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('posts.*') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Blog
                        </a>
                        <a href="{{ route('about') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('about') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Acerca de nosotros
                        </a>
                        <a href="{{ route('contact') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('contact') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Contactenos
                        </a>
                    </div>
                </div>
                <div class="ml-auto">
                    <div class="flex space-x-4">
                        @guest
                        <a href="{{ route('register') }}"
                            class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('register') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Registro
                        </a>
                        <a href="{{ route('login') }}"
                            class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('login') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Ingresar
                        </a>
                        @endguest
                        @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="#"
                                class="lg:px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white text-slate-400"
                                onclick="this.closest('form').submit()">Logout</a>
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>