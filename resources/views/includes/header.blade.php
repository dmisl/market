<header>
<nav class="navbar navbar-expand-md bg-body-tertiary border-bottom">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home.index') }}">DMISL Market</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form action="{{ route('search') }}" method="GET" class="d-flex" style="width: 85vw;" role="search">
            <input class="search form-control w-50 text-center mx-auto" name="search" type="search" placeholder="Search" aria-label="Search">
        </form>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active icon" aria-current="page" href="{{ route('profile.index') }}">
                <img class="icon" src="{{ asset('storage/icons/user.png') }}" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>