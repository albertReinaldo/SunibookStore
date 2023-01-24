<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <header>
        <div class="p-2 pe-3 ps-3" style="background-color: #7fa7a6">
            <div class="d-flex justify-content-between align-items-center" >
                <div class="d-flex justify-content-start">
                    <a href="/">
                        <img src="{{asset('img/logo.png')}}" alt="logo" class="ms-2" style="width: 120px; height: 80px;">
                    </a>
                </div>
            @guest
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="color: black" href="/"><img src="{{ asset('ctrl/home.png') }}" alt="" width="30px"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('ctrl/Category.png') }}" width="30px" alt=""></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/categories/1">Romance</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/categories/2">Horror</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/categories/3">Fantasy</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/categories/4">Comedy</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black" href="/publisher"><img src="{{ asset('ctrl/brand.png') }}" width="30px" alt=""></a>
                </li>
            </ul>
            <div class="d-flex">
                <form class="d-flex" role="right">
                    <div class="ms-auto pe-2">
                        <button class="btn btn-outline-light" type="button"><a class="nav-link active" href="/login">Login</a></button>
                        <button class="btn btn-outline-light " type="button"><a class="nav-link active" href="/register">Register</a></button>
                    </div>
                </form>
            </div>

            @endguest

            @auth
                @if (Auth::user()->is_admin == 1)
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: black" href="/"><img src="{{ asset('ctrl/home.png') }}" alt="" width="30px"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('ctrl/Category.png') }}" width="30px" alt=""></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/categories/1">Romance</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/categories/2">Horror</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/categories/3">Fantasy</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/categories/4">Comedy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black" href="/publisher"><img src="{{ asset('ctrl/brand.png') }}" width="30px" alt=""></a>
                    </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('ctrl/manage.png') }}" width="30px" alt=""></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/view">View Books</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/addBooks">Add Books</a></li>
                    </ul>
                </li>
            </ul>
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px">{{Auth::user()->name}}</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile/{{auth()->user()->id}}">Edit Profile</a></li>
                        <li><hr class="dropdown-divider bg-light"></li>
                        <li><a class="dropdown-item" href="/changePassword/{{auth()->user()->id}}">Edit Password</a></li>
                        <li><hr class="dropdown-divider bg-light"></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                @elseif (Auth::user()->is_admin == 0)
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: black" href="/"><img src="{{ asset('ctrl/home.png') }}" alt="" width="30px"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{ asset('ctrl/Category.png') }}" width="30px" alt=""></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/categories/1">Romance</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/categories/2">Horror</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/categories/3">Fantasy</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/categories/4">Comedy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black" href="/publisher"><img src="{{ asset('ctrl/brand.png') }}" width="30px" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black" href="/transactionHistory/{{auth()->user()->id}}"><img src="{{ asset('ctrl/history.png') }}" width="30px" alt=""></a>
                    </li>
                </ul>
                <div class="d-flex">

                    <a class="nav-link active" aria-current="page" href="/cart/{{Auth::user()->id}}"><img src= "{{asset('ctrl/cart.png')}}" alt="" width="30px"></a>
                    <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px">{{Auth::user()->name}}</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile/{{auth()->user()->id}}">Edit Profile</a></li>
                        <li><hr class="dropdown-divider bg-light"></li>
                        <li><a class="dropdown-item" href="/changePassword/{{auth()->user()->id}}">Edit Password</a></li>
                        <li><hr class="dropdown-divider bg-light"></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                @endif
                @endauth
                    </div>
                </form>
            </div>
            </div>
        </div>
    </header>

    @yield('content')
</body>

<footer style="background-color: #7fa7a6">
    <div class="text-center text-white p-2">
        <div class="d-flex justify-content-center">
            <h3>SunibookStore</h3>
        </div>
        <div>
            <div class="d-flex justify-content-center p-1 fs-4">
                Sunibook Store Siap Melayani Anda
            </div>
        </div>

        {{-- Socmed --}}
        <div class="d-flex justify-content-center">
            <div class="p-1">
                <a href="https://www.instagram.com/">
                    <img src="{{ asset('img/instagram.png') }}" alt="" class="rounded-circle" style="height:30px;width:30px;">
                </a>
            </div>

            <div class="p-1">
                <a href="https://twitter.com/">
                    <img src="{{ asset('img/twitter.png') }}" alt="" class="rounded-circle" style="height:30px;width:30px;">
                </a>
            </div>

            <div class="p-1">
                <a href="https://www.facebook.com/">
                    <img src="{{ asset('img/fb.png') }}" alt="" class="rounded-circle" style="height:30px;width:30px;">
                </a>
            </div>
            <div class="p-1">
                <a href="https://www.youtube.com/">
                    <img src="{{ asset('img/youtube.png') }}" alt="" class="rounded-circle" style="height:30px;width:30px;">
                </a>
            </div>
            <div class="p-1">
                <a href="https://www.whatsapp.com/">
                    <img src="{{ asset('img/wa.png') }}" alt="" class="rounded-circle" style="height:30px;width:30px;">
                </a>
            </div>
        </div>
        <div class="p-1">
            Privacy Policy | Terms of Service | Contact Us | About Us | Legal Notices
        </div>
        <div class="d-flex justify-content-center p-1">
            Copyright @Kelompok berapa
        </div>
    </div>
</footer>
</html>
