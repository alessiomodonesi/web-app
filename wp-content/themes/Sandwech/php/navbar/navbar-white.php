<header class="sticky-top">
    <nav class="navbar navbar-expand-lg text-white">
        <div class="container-fluid">
            <a class="navbar-brand text-white">
                <img src="http://localhost/sandwech/wp-content/themes/Sandwech/assets/img/logo.png" alt="logo" width="55" height="40" class="d-inline-block align-text-top logo-nb">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="cursor: pointer;">
                        <a class="nav-link active text-white" href="http://localhost/sandwech">Home</a>
                    </li>
                    <?php if ($user[0]->email == $studente || $user[0]->email == $admin) : ?>
                        <li class="nav-item" style="cursor: pointer;">
                            <a class="nav-link active text-white" href="http://localhost/sandwech/studente">Studente</a>
                        </li>
                    <?php endif ?>
                    <?php if ($user[0]->email == $mng || $user[0]->email == $admin) : ?>
                        <li class="nav-item" style="cursor: pointer;">
                            <a class="nav-link active text-white" href="http://localhost/sandwech/management">Management</a>
                        </li>
                    <?php endif ?>
                    <?php if ($user[0]->email == $vendite || $user[0]->email == $admin) : ?>
                        <li class="nav-item" style="cursor: pointer;">
                            <a class="nav-link active text-white" href="http://localhost/sandwech/vendite">Vendite</a>
                        </li>
                    <?php endif ?>
                </ul>
                <form class="d-flex" role="search" method='post'>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id='search' name='search'>
                    <button class="btn btn-outline-light search-btn" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>