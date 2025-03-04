<header>
    <div class="bg-base-100 bg-transparent">
        <div class="flex items-center justify-between px-4 py-2">
            <!-- Logo / Título -->
            <a href="{{ url('/') }}" class="btn btn-ghost text-xl flex items-center">
                <img class="max-h-12" src="{{ asset('img/logo.png') }}" alt="logo">
            </a>

            <!-- Menú Responsive -->
            <div class="flex items-center gap-2">
                <!-- Barra de búsqueda (siempre visible con la clase peer) -->
                <div class="form-control peer relative right-10">
                    <input type="text" placeholder="Search" class="input input-bordered w-24 sm:w-auto peer-focus:w-56 transition-all duration-200" />
                </div>

                <!-- Icono de menú en pantallas pequeñas -->
                <div class="relative sm:hidden">
                    <!-- Checkbox que controla la visibilidad del menú -->
                    <input type="checkbox" id="menu-toggle" class="peer hidden" />
                    <label for="menu-toggle" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>

                    <!-- Menú desplegable cuando el checkbox está marcado -->
                    <ul class="menu menu-sm dropdown-content bg-base-100 rounded-box mt-3 w-40 p-2 shadow absolute right-0 z-50 peer-checked:block hidden">
                        <li>
                            @guest
                                <div class="flex flex-col gap-2">
                                    <a href="login" class="btn btn-primary btn-sm">Login</a>
                                    <a href="register" class="btn btn-sm">Register</a>
                                </div>
                            @endguest

                            @auth
                                <p>{{auth()->user()->name}}</p>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            @endauth
                        </li>
                    </ul>
                </div>

                <!-- Dropdown de usuario (siempre visible en pantallas grandes) -->
                <div class="dropdown dropdown-end hidden sm:block">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 h-10 rounded-full">
                            <img class="max-h-full bg-white" src="{{asset('img/avatar.jpg')}}" alt="avatar">
                        </div>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box mt-3 w-52 p-2 shadow">
                        <li>
                            @guest
                                <div class="flex flex-col gap-2">
                                    <a href="login" class="btn btn-primary btn-sm">Login</a>
                                    <a href="register" class="btn btn-sm">Register</a>
                                </div>
                            @endguest

                            @auth
                                <p>{{auth()->user()->name}}</p>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm">
                                        {{ __('Log Out') }}
                                    </button>
                                </form>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>