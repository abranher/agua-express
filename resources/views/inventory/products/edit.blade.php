<x-layout title="Inventario Productos - crear" :vite="['js/inventory/product/edit-product.js']" react>

    <x-main.admin>
        <x-title title="Inventario Productos - Editar" />

        {{-- tabla de datos --}}
        <section class="w-full">
            <div id="main" class="relative p-4 w-full h-auto max-h-full m-auto"></div>
        </section>
    </x-main.admin>

    <script>
        const product = @json($product);
    </script>
</x-layout>
