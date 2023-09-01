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

                            <p class="menu-label has-background-grey-dark has-text-white is-size-5 has-text-centered"> NAVIGATION MENU</p>
                            <ul class="menu-list">

                                <li><a href="{{ route('AdminHome') }}">Home</a></li>                                
                                
                                <li><a href="">Find a Book</a></li>
                                <li><a href="">Change password</a></li>
                                <li><a href="">Log Out</a></li>
                                
                            </ul>

                            <p class="menu-label has-background-grey-dark has-text-white is-size-5 has-text-centered"> USER MANAGEMENT</p>
                            <ul class="menu-list">

                                <li><a href="{{ route('search_user')}}">Find Student</a></li>                                
                                
                                <li><a href="{{ route('User.create') }}">Add User</a></li>
                               
                                
                            </ul>


                            <p class="menu-label has-background-grey-dark has-text-white  is-size-5 has-text-centered"> BOOK MANAGEMENT</p>
                            <ul class="menu-list">

                                <li><a href="{{ route('Book.create')}}">Add a Book</a></li>                                
                                <li><a href="{{ route('admin_search_book')}}">Find a Book</a></li>
                                <li><a href="{{ route('BorrowedBooks')}}">Borrowed Books</a></li>
                                <li><a href="{{ route('RequestedBooks')}}">Book requests</a></li>

                                <li>
                                    <a href="" class="has-background-grey-dark has-text-white is-size-6 is-active">Category</a>
                                    <ul>
                                        <li class="is-size-6" ><a href="{{route('viewcategory')}}">Add A Category</a></li>
                                    </ul>
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