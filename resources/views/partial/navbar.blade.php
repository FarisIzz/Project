  <nav class="navbar navbar-expand-lg text-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="/">Jabatan Penjara</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($page==="Home" ? 'active' : '')  }}" aria-current="page" href="/">Home</a>
          <a class="nav-link {{ ($page==="About" ? 'active' : '')  }}" href="/about">About</a>
          <a class="nav-link {{ ($page==="Posts" ? 'active' : '')  }}" href="/posts">Posts</a>
        </div>
      </div>
    </div>
  </nav>