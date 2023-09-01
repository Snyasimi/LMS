<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>@yield('title')</title>
</head>
<body>

    <div class="tile is-ancestor">

        <div class="tile is-parent is-2">
            {{-- NAVIGATION BAR --}}
            <div class="tile is-child">


                <section class="hero is-fullheight "> 

                    <div class="hero-head">

                        <aside class="menu mt-8">

                            <p class="menu-label  is-size-5 has-text-centered"> NAVIGATION MENU</p>
                            <ul class="menu-list">

                                <li><a href="{{route('Book.index')}}">Home</a></li>                                
                                
                                <li><a href="{{ route('find_book') }}">Find a Book</a></li>
                                <li><a href="">Change password</a></li>
                                <li><a href="">Profile</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="button" type="submit">Log out</button>

                                    </form>
                                </li>
                                
                            </ul>
        
                            
        
                        </aside>

                    </div>

                </section>

            </div>

        </div>

        @yield('content')
    
    </div>
    <footer class="footer">

        <div class="content has-text-centered">
            MKU ONLINE LIBRARY
        </div>
       
    </footer>
    
    
</body>
</html>