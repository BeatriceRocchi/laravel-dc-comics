<header>
    <div class="container">
        <div class="d-flex justify-content-between">
            <img id="logo-comics" src="https://static1.srcdn.com/wordpress/wp-content/uploads/2020/03/DC-Comics-Logo.jpg"
                alt="Logo DC Comics">

            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item nav-item-custom">
                                <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item nav-item-custom">
                                <a class="nav-link text-white" aria-current="page"
                                    href="{{ route('comics.index') }}">Archivio fumetti</a>
                            </li>
                            <li class="nav-item nav-item-custom">
                                <a class="nav-link text-white" href="{{ route('comics.create') }}">Aggiungi fumetto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>
</header>
