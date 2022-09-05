<nav class="navbar navbar-light" style="background-color: #DEA057;">
    <nav class="navbar navbar-expand-lg navbar-light bg-FEC260">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" alt="logo smkn2" width="30" height="24" class="d-inline-block align-text-top">
                RPL SMKN 2 TRENGGALEK
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    <a class="nav-link {{ ($title === "Berita") ? 'active' : '' }}" href="/berita">Berita</a>
                    <a class="nav-link {{ ($title === "Agenda") ? 'active' : '' }}" href="/agenda">Agenda</a>
                    <a class="nav-link {{ ($title === "Kontak") ? 'active' : '' }}" href="/kontak">Kontak</a>
                </div>
            </div>
        </div>
    </nav>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline" style="background-color: #E0D8B0;" type="submit">Search</button>
    </form>
    </div>
</nav>
