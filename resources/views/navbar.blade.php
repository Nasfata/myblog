<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- Navbar Bootstrap 5 -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Acceil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('view') }}">View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownId">
                            <li><a class="dropdown-item" href="#">Action 1</a></li>
                            <li><a class="dropdown-item" href="#">Action 2</a></li>
                        </ul>
                    </li>
                </ul>

                @if (!isset($showSearch) || $showSearch)
                <form class="d-flex" action="{{ route('posts.search') }}">
                    <input class="form-control me-2" type="search" placeholder="Search" name="motCle">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                @endif
            </div>
        </div>
    </nav>
</body>
</html>
