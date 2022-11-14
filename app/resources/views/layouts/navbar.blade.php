<div class="mobile-menu-wrapper">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-11">
                <div class="menu-container">
                    {{-- top - trigger pra fechar --}}
                    <div class="mobile-menu-top">
                        <div class="mobile-trigger">
                            <i class="las la-times-circle"></i>
                        </div>
                    </div>
                    {{-- Marca --}}
                    <div class="mobile-menu-brand">
                        <a href="{{ route('dashboard') }}">
                            <img src="/assets/images/logotipo/logo-orange.png" class="img-fluid" style="width: 60px;">
                        </a>
                    </div>
                    {{-- texto --}}
                    <div class="mobile-menu-intro">
                        <h4 class="font-weight-bolder">Orange Evolution</h4>
                        <h5>A comunidade tech mais vitaminada</h5>
                    </div>
                    {{-- itens de navegação --}}
                    <ul class="mobile-menu-content">
                        @yield('mobile-menu-content')  
                    </ul>        
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar-wrapper">
    <div class="container">
        <div class="menu-wrapper">
            <div class="brand-wrapper">
                <a href="{{ route('dashboard') }}">
                    <img src="/assets/images/logotipo/logo-orange.png" class="img-fluid" style="width: 60px;">
                </a>
            </div>
            <div class="menu-content-wrapper">
                <ul class="menu-content">
                    @yield('menu-content')  
                </ul>
                <div class="mobile-trigger">
                    <i class="las la-bars"></i>
                </div>
            </div>
        </div>
    </div>
</nav>