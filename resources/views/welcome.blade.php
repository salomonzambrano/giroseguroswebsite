<x-layouts.app
    title="Home"
    meta-description="Home meta description">
    @auth
    <div class="text-white">
        Authenticated User: {{ Auth::user()->name }}
    </div>
    @endauth
    <div
        class="flex flex-col bg-cover bg-center bg-no-repeat text-white items-center justify-center p-8 pb-12 xl:px-64 xl:py-16"
        style="background-image: url('image/a-serene-landscape.jpeg');">
        <div>
            <div class="flex flex-col items-center justify-center relative z-10 text-center">
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4">
                    Giro S.A. agencia asesora productora de seguros
                </h1>
                <p class="text-lg md:text-xl mb-6">
                    Trabajamos con las mejores aseguradoras del mercado.
                </p>
                <a class="bg-white text-gray-800 py-2 px-4 rounded-full font-bold hover:bg-gray-300 transition duration-300">
                    Saber mas
                </a>
            </div>
            <br>
        </div>
        <q class="text-lg md:text-xl mb-6">
            Mejor es tener un seguro y no usarlo que necesitarlo y no tenerlo.
        </q>
    </div>

</x-layouts.app>