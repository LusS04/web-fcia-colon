<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <title>{{ $title ?? 'Farmacia Colon MG' }}</title>
</head>
<body class="font-sans antialiased gradient-bg">

    <header>
        <x-navigation />
    </header>

    <main class="pt-10">
        <div class="max-w-screen-xl mx-auto p-4">
            {{ $slot }}
        </div>
    </main>

    <footer class="bg-gray-50 py-4">
        <div class="max-w-screen-xl mx-auto text-center text-gray-600">
             2024 Farmacia Colon. 
        </div>
    </footer>

</body>
</html>