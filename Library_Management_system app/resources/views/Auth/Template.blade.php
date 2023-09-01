<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Library</title>
</head>
<body>
    
    <header>

        <div class="hero has-background-grey-dark">

            <div class="hero-body">

                <p class="title has-text-white mt-5 pt-5">
                    MOUNT KENYA LIBRARY
                  </p>
                  <p class="subtitle has-text-white">
                    Unlocking infinite possibilities
                  </p>
 

            </div>

            <div class="tabs is-right is-boxed">

                <ul>
                    <li><a href="{{ route('login') }}" class="button mr-4 has-text-grey-darker">Login</a></li>
                    <li><a href="{{ route('sign_up') }}" class="button has-text-grey-darker">Register</a></li>
                </ul>

            </div>

        </div>

    </header>

    @yield('content')

    <footer class="footer">

        <div class="content has-text-centered">
            MKU ONLINE LIBRARY
        </div>
       
    </footer>

</body>
</html>