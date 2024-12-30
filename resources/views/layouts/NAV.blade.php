
    <nav class="nav">
    <a class="nav-link active" aria-current="page" href="">@yield('title')</a>
    <a class="nav-link" href="home">Home</a>
        <a class="nav-link" href="{{ url('tampil-produk')}}">Produk</a>
        <a class="nav-link" href="transaksi">Transaksi</a>
        <a class="nav-link" href="{{ url('tampil-kategori')}}">Kategori</a>
        <a class="nav-link" href="laporan">Laporan</a>
            @auth
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a href="route('profile')" class="dropdown-item" >Profile</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            @else
            <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
            @endauth
</nav>
    <style>
        .nav {
            display: flex;
            background-color: #333333; /* Green background */
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }
        .nav-link {
            color: white; /* White text */
            text-decoration: none; /* Remove underline */
            padding: 10px 15px;
            border-radius: 4px;
            transition: background 0.3s;
        }
        .nav-link:hover {
            color: cyan; /* Darker green on hover */
        }
        .nav-link.active:hover {
            color: cyan; /* Darker green on hover */
        }
        .nav-link.active {
            color: white; /* Highlight for active link */
            font-weight: bold; /* Bold text for active link */
        }
    </style>

