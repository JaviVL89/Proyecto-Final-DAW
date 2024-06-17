<!DOCTYPE html>
<html lang="es">
<head>
    <title>Contacto | CustomAcademy</title>    
    @include('profile.partials.header')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
</head>
<body>
    <main class="main-content">
        <h1>Contacto</h1>
        <p>Si tienes alguna duda o sugerencia, por favor ponte en contacto con nosotros a través de este formulario y recibirás una respuesta de nuestro equipo a la mayor brevedad posible.</p>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </main>
    @include('profile.partials.footer')
</body>
</html>
