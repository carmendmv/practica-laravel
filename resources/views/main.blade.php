<x-layouts.layout title="Home">
    @guest
    <div class="hero min-h-full" style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">
                    Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.
                </p>
                <!-- Botón para mostrar el formulario de inicio de sesión -->
                <button id="loginButton" class="btn btn-primary">¿No tienes cuenta? Registrate</button>
            </div>
        </div>
    </div>

    <script>
        // Obtén los elementos del DOM
        const loginButton = document.getElementById('loginButton');
        const loginForm = document.getElementById('loginForm');

        // Cuando se hace clic en "Inicia sesión", muestra el formulario de inicio de sesión
        loginButton.addEventListener('click', () => {
            loginForm.classList.toggle('hidden'); // Muestra u oculta el formulario
        });

        // Si el usuario hace clic en el enlace de "Registrate", puedes redirigirlo a la página de registro
        loginButton.addEventListener('click', () => {
            window.location.href = "/register"; // Cambia la URL para redirigir al formulario de registro
        });
    </script>
    @endguest

    @auth
    <div class="card image-full w-96 shadow-xl ml-5 pt-5">
        <figure>
            <img src="{{asset('img/alumnos.webp')}}" alt="Alumnos" />
        </figure> 
        <div class="card-body pr-3 pt-5">
            <h2 class="card-title">Alumnos</h2>
            <p>Accede a la lista de alumnos</p>
            <div class="card-actions justify-end">
                <button id= "alumnosButton" class=" btn btn-primary">Ver alumnos</button>
            </div>
        </div>
    </div>
    @endauth
</x-layouts.layout>