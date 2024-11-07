<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Achyut</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F9F5F0] text-secondary min-h-screen mt-10">
<livewire:components.navbar />
{{ $slot }}
</body>
</html>
