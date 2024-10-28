<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo de Fútbol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Efecto parallax */
        .parallax {
            background-image: url('https://via.placeholder.com/1920x800'); /* Cambia la URL a una imagen de fondo */
            height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .parallax h1 {
            color: white;
            font-size: 3rem;
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Menú de Navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Equipo de Fútbol</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#mision">Misión</a></li>
                <li class="nav-item"><a class="nav-link" href="#vision">Visión</a></li>
                <li class="nav-item"><a class="nav-link" href="#galeria">Galería</a></li>
                <li class="nav-item"><a class="nav-link" href="#registro">Regístrate</a></li>
                <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Encabezado con Parallax -->
<header class="parallax d-flex justify-content-center align-items-center">
    <h1>Bienvenidos al Equipo de Fútbol</h1>
</header>

<!-- Misión -->
<section id="mision" class="container py-5">
    <h2 class="text-center">Nuestra Misión</h2>
    <p class="text-center">Nuestra misión es fomentar el amor por el deporte, desarrollar talento y promover la importancia de la disciplina y el trabajo en equipo en cada uno de nuestros jugadores.</p>
</section>

<!-- Visión -->
<section id="vision" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Nuestra Visión</h2>
        <p class="text-center">Ser reconocidos como un equipo de alto rendimiento que inspira a la comunidad y a futuras generaciones, generando un impacto positivo tanto en el campo de juego como fuera de él.</p>
    </div>
</section>

<!-- Galería de Fotos -->
<section id="galeria" class="container py-5">
    <h2 class="text-center">Galería de Fotos</h2>
    <div class="row g-4">
        <!-- Cada imagen puede ser reemplazada por una imagen real -->
        <div class="col-md-4">
            <img src="https://via.placeholder.com/300x200" class="img-fluid rounded" alt="Foto 1">
        </div>
        <div class="col-md-4">
            <img src="https://via.placeholder.com/300x200" class="img-fluid rounded" alt="Foto 2">
        </div>
        <div class="col-md-4">
            <img src="https://via.placeholder.com/300x200" class="img-fluid rounded" alt="Foto 3">
        </div>
        <!-- Más imágenes si es necesario -->
    </div>
</section>

<!-- Registro -->
<section id="registro" class="bg-dark text-light py-5">
    <div class="container">
        <h2 class="text-center">Regístrate</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="phone" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>
    </div>
</section>

<!-- Login -->
<section id="login" class="container py-5">
    <h2 class="text-center">Iniciar Sesión</h2>
    <form>
        <div class="mb-3">
            <label for="email-login" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email-login" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
    </form>
</section>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
