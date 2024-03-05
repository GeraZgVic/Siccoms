@extends('layout.app')

@section('titulo')
    Contáctanos
@endsection


@section('contenido')
    <section class="bg-white">
        <div class="container px-6 py-12 mx-auto">

            <livewire:text-animation texto="Ponte en contacto" />

            <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-3">
                <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-1">
                    <div>
                        <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 ">Correo electrónico</h2>
                        <p class="mt-2 text-sm text-gray-500 ">Nuestro equipo amigable está aquí para ayudarte.</p>
                        <a href="mailto:ventas@siccoms.com" class="mt-2 text-sm text-blue-500">ventas@siccoms.com</a>
                    </div>

                    <div>
                        <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 ">Oficina</h2>
                        <p class="mt-2 text-sm text-gray-500">Ven a saludarnos a nuestra oficina principal.</p>
                        <address class="mt-2 text-sm text-blue-500">Av. del Sol #202, Fracc. Galaxia, Villahermosa, Tabasco
                            86035
                        </address>
                    </div>

                    <div>
                        <span class="inline-block p-3 text-blue-500 rounded-full bg-blue-100/80 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </span>

                        <h2 class="mt-4 text-base font-medium text-gray-800 ">Teléfono</h2>
                        <p class="mt-2 text-sm text-gray-500">De lunes a viernes de 8am a 5pm.</p>
                        <p class="mt-2 text-sm text-blue-500">+52 993 268 0885</p>
                    </div>
                </div>

                <div class="overflow-hidden rounded-lg lg:col-span-2 h-96 lg:h-auto">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1005.0410244641496!2d-92.95114501363369!3d18.000605765716696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edd7933d329dd9%3A0xff26104d4b594117!2sAv.%20del%20Sol%20202%2C%20Fraccionamiento%20Galaxia%2C%2086035%20Villahermosa%2C%20Tab.!5e0!3m2!1ses!2smx!4v1709398876799!5m2!1ses!2smx"
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    {{-- Formulario de contacto --}}
    <section class="bg-white border-t seccion">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900">Contáctenos</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 sm:text-xl">Envíanos un mensaje de forma rápida, te
                responderemos lo antes posible.</p>
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input type="email" id="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="correo@correo.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Asunto</label>
                    <input type="text" id="subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Permítenos saber en qué te podemos ayudar" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Tu mensaje</label>
                    <textarea id="message" rows="6"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Deje un comentario"></textarea>
                </div>
                <button type="submit"
                    class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Enviar
                    mensaje</button>
            </form>
        </div>
    </section>
@endsection
