<section class="header">
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="Home"><span class="navbar-text" id="navbar-text"><h2>GBookIn</h2></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 navbar-text">
                    <li class="nav-item">
                        <a class="nav-link <?= ($this->router->fetch_class() == 'Home' && $this->router->fetch_method() == 'index') ? 'active' : ''; ?>" href="Home"><span class="navbar-text" id="navbar-text">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($this->router->fetch_class() == 'Books' && $this->router->fetch_method() == 'index') ? 'active' : ''; ?>" href="Books"><span class="navbar-text" id="navbar-text">Books</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($this->router->fetch_class() == 'Collection' && $this->router->fetch_method() == 'index') ? 'active' : ''; ?>" href="Collection"><span class="navbar-text" id="navbar-text">Collection</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($this->router->fetch_class() == 'AboutUs' && $this->router->fetch_method() == 'index') ? 'active' : ''; ?>" href="AboutUs" ><span class="navbar-text" id="navbar-text">About Us</span></a>
                    </li>
                    <li class="nav-item login">
                        <a class="nav-link" href="Login" >Login</a>
                    </li>
                </ul>
                <ul class="navbar-nav phone-hidden ms-auto navbar-text" id="navbar-text">
                    <li class="nav-item" style="margin: 0px -10px;">
                        <form class="d-flex nav-link" role="search">
                            <span class="navbar-text" id="navbar-text"><i class="fa-solid fa-magnifying-glass fa-lg mt-1"></i></span>
                            <input class="ms-2 me-2" type="search" placeholder="Search a Book" aria-label="Search" id="search">
                        </form>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="Cart"><span class="navbar-text" id="navbar-text"><i class="fa-solid fa-bag-shopping fa-lg"></i></span></a>
                    </li>
                    <li class="nav-item mt-2" style="margin: 0px -10px;">
                        <a class="nav-link"><span class="navbar-text" id="navbar-text">|</span></a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" href="Login"><span class="navbar-text" id="navbar-text">Login</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>