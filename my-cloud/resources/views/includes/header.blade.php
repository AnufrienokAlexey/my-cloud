<div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="{{ request()->is('/') ? 'nav-link px-2 text-secondary' : 'nav-link px-2 text-white' }}">Главная</a></li>
            <li><a href="/about-us" class="{{ request()->is('about-us') ? 'nav-link px-2 text-secondary' : 'nav-link px-2 text-white' }}">О нас</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        @if (Auth::check())
        <a href="/private" class="{{ request()->is('private') ? 'nav-link px-2 text-secondary' : 'nav-link px-2 text-white' }}">Личный кабинет</a>
        <a href="/logout" class="btn btn-outline-light me-2">Выйти</a>
        @else
        <div class="text-end">
            <a href="/login" class="btn btn-outline-light me-2">Вход</a>
            <a href="/registration" class="btn btn-warning">Регистрация</a>
        </div>
        @endif
    </div>
</div>
