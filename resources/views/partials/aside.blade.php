<aside>
    <nav class="navbar">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item nav-item-custom">
                    <i class="fa-solid fa-house"></i>
                    <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <i class="fa-solid fa-folder-open"></i>
                    <a class="nav-link text-white" aria-current="page" href="{{ route('comics.index') }}">Archivio
                        fumetti</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <i class="fa-solid fa-folder-plus"></i>
                    <a class="nav-link text-white" href="{{ route('comics.create') }}">Aggiungi fumetto</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <i class="fa-solid fa-user"></i>
                    <a class="nav-link text-white" href="#">Admin</a>
                </li>
            </ul>
        </div>
    </nav>
</aside>
