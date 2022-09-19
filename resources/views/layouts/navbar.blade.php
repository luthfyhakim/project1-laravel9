<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #DEA057;">
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
                <a class="nav-link {{ ($title === "Profil") ? 'active' : '' }}" href="/profil">Profil</a>
            </div>
        </div>
    </div>
    <form class="d-flex input-group w-auto">
        <input
          type="search"
          class="form-control rounded"
          placeholder="Search"
          aria-label="Search"
          aria-describedby="search-addon"
        />
        <span class="input-group-text border-0" id="search-addon">
          <i class="fas fa-search"></i>
        </span>
    </form>
</nav>
