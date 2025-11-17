<nav class="navbar navbar-expand-lg bg-light custom-text">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="/images/Logo1.png" alt="Logo" width="50" height="50" class="me-3">
            <span>PRATAMA JAYA GROUP</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse custom-navbar-text" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item mx-4">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="#home">Home</a>
                </li>

                <li class="nav-item mx-4">
                    <a class="nav-link" href="#services">Daftar Layanan</a>
                </li>

                <li class="nav-item mx-4">
                    <a class="nav-link" href="/testimoni">Testimoni</a>
                </li>

                <li class="nav-item mx-4">
                    <a class="nav-link contact-btn" href="#location">Kontak Kami</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
