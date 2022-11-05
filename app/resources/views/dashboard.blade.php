<body>
    <div class="container">
        <h1>Usuário da Comunidade: {{ $user->name }}</h1>

        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
            @csrf
        </form>
    </div>
</body>
