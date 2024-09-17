{{-- Alerts --}}
<x-message-errors />
<x-message-status />

<x-navbar-dashboard />

<x-sidebar />

<main class="p-4 md:ml-64 h-auto pt-20">
    {{ $slot }}
</main>
