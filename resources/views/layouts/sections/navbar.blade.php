<nav class="navbar bg-body-tertiary shadow mb-4">
    <div
        class="container justify-content-center d-flex flex-column d-md-flex flex-md-row justify-content-md-between align-items-center">
        {{-- Menu & Brand --}}
        <ul class="d-flex gap-2 m-0">
            <li class="nav-item">
                <a class="navbar-brand" href="{{ route('index') }}"><strong>فروشگاه</strong></a>
            </li>

        </ul>

        {{-- Controll --}}
        <div>
            @auth()
                <a href="#" class="btn btn-sm btn-dark rounded-circle">
                    <i class="bi bi-cart-fill" style="font-size: 1rem"></i>
                </a>
                <a href="{{ route('home.home') }}" class="btn btn-sm btn-dark rounded-circle">
                    <i class="bi bi-person-fill" style="font-size: 1rem"></i>
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-warning"
                   style="width: 70px"><strong>ورود</strong></a>
            @endauth
        </div>
    </div>
</nav>
