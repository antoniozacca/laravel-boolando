<header>
    <div class="container-fluid">
        <div class="row py-2 align-items-center">
            <!-- Hamburger menu button for "Donna", "Uomo", "Bambini" on small screens -->
            <div class="col-6 d-md-none d-flex justify-content-start">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavLeft" aria-controls="navbarNavLeft" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">&#9776;</span>
                </button>
            </div>
            <!-- Text links for "Donna", "Uomo", "Bambini" on medium and larger screens -->
            <div class="col-6 col-md-4 d-none d-md-flex justify-content-center justify-content-md-start align-items-center">
                <span class="mx-1">Donna</span>
                <span class="mx-1">Uomo</span>
                <span class="mx-1">Bambini</span>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center align-items-center my-2 my-md-0">
                <img class="icona-logo" src="{{ Vite::asset('resources/img/boolean-logo.png') }}">
            </div>
            <div class="col-6 col-md-4 d-flex justify-content-end align-items-center">
                <!-- Hamburger menu button for icons on small screens -->
                <button class="navbar-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarNavRight" aria-controls="navbarNavRight" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">&#9776;</span>
                </button>
                <!-- Icons for medium and larger screens -->
                <div class="d-none d-md-flex">
                    <img class="icone mx-1" src="https://img.icons8.com/forma-thin/24/user.png">
                    <img class="icone mx-1" src="https://img.icons8.com/ios/50/like--v1.png">
                    <img class="icone mx-1" src="https://img.icons8.com/ios-filled/50/shopping-bag.png">
                </div>
            </div>
        </div>
        <!-- Collapsible menu content for "Donna", "Uomo", "Bambini" -->
        <div class="collapse d-md-none" id="navbarNavLeft">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Donna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Uomo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bambini</a>
                </li>
            </ul>
        </div>
        <!-- Collapsible menu content for icons -->
        <div class="collapse d-md-none" id="navbarNavRight">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><img class="icone mx-1" src="https://img.icons8.com/forma-thin/24/user.png"> User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img class="icone mx-1" src="https://img.icons8.com/ios/50/like--v1.png"> Likes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img class="icone mx-1" src="https://img.icons8.com/ios-filled/50/shopping-bag.png"> Cart</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<style scoped>
    header {
        background-color: orange;
    }
    .icone {
        height: 20px;
        width: 20px;
    }
    .icona-logo {
        width: 150px;
        height: 50px;
    }
    .navbar-toggler {
        border: none;
        background-color: transparent;
    }
</style>