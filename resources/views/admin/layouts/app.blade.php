<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') Admin</title>
    
    @stack('styles')

</head>
<body>

    <div class="container">
        @yield('content')
    </div>

    {{-- Utilizando em casos especificos --}}
    @stack('scripts')

</body>
</html>