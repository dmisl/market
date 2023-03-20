<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('admin.title')
    </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <x-container>
        <div class="row">
            <a href="{{ route('admin.users.index') }}" class="col-md-4 text-decoration-none p-0">
                <button class="card w-100">
                    Users
                </button>
            </a>
            <a href="{{ route('admin.products.index') }}" class="col-md-4 text-decoration-none p-0">
                <button class="card w-100">
                    Products
                </button>
            </a>
            <a href="{{ route('admin.stats') }}" class="col-md-4 text-decoration-none p-0">
                <button class="card w-100">
                    Stats
                </button>
            </a>
    </x-container>
  </div>
    @yield('admin.content')
</body>
</html>