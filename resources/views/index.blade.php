<x-layout title="Home">

    <!-- Navbar -->
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-bold">Agua Express</a>
            <ul class="flex space-x-4">
                <li><a href="#services" class="text-white hover:text-blue-200">Servicios</a></li>
                <li><a href="#contact" class="text-white hover:text-blue-200">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-blue-600 text-white text-center py-16">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold mb-4">¡Tu solución de agua rápida y confiable!</h1>
            <p class="text-lg mb-6">Distribución de botellones de agua potable para hogares y empresas.</p>
            <a href="{{ route('login') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Iniciar
                sesión</a>
            <a href="#contact" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Contáctanos</a>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Nuestros Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Venta de Botellones</h3>
                    <p>Ofrecemos botellones de agua de alta calidad para satisfacer todas tus necesidades.</p>
                </div>
                <!-- Service 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Distribución Rápida</h3>
                    <p>Nos aseguramos de que tu pedido llegue a tiempo y en perfectas condiciones.</p>
                </div>
                <!-- Service 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Servicio al Cliente</h3>
                    <p>Estamos disponibles para resolver cualquier duda y asegurar tu satisfacción.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-blue-500 text-white text-center py-4">
        <p>&copy; 2024 Agua Express. Todos los derechos reservados.</p>
    </footer>



</x-layout>
