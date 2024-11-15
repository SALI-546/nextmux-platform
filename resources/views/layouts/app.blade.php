<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nextmux Platform</title>
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body class="bg-gray-100 text-gray-900">
    <!-- Sidebar -->
    <aside class="bg-nextmux-green text-white w-64 min-h-screen p-4 fixed">
        <h2 class="text-2xl font-bold mb-8">Nextmux</h2>
        <nav>
            <ul>
                <li><a href="{{ route('dashboard') }}" class="block mb-4">Dashboard</a></li>
                <li><a href="{{ route('crm.clients') }}" class="block mb-4">CRM</a></li>
                <li><a href="{{ route('devis.index') }}" class="block mb-4">Devis</a></li>
                <li><a href="{{ route('factures.index') }}" class="block mb-4">Factures</a></li>
                <li><a href="{{ route('services.index') }}" class="block mb-4">Services</a></li>
                <li><a href="{{ route('projets.index') }}" class="block mb-4">Projets</a></li>
                <li><a href="{{ route('formation.cours') }}" class="block mb-4">Formation</a></li>
                <li><a href="{{ route('parametres.utilisateurs') }}" class="block mb-4">Paramètres</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-8">
        @yield('content')
    </main>
</body>

</html>
