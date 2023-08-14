@extends('Users.Template')
@section('title','My Profile')

@section('content')

    <div class="tile is-parent box">

        <div class="tile is-child ">

            <div class="hero is-small box has-background-info-dark">

                <div class="hero-body">

                    <h1 class="title has-text-left is-size-1 has-text-white ">
                         Profile
                    </h1>

                </div>

            </div>

            <table class="table is-fullwidth is-striped">
                <thead>
                    <tr>
                        <td colspan=3 class="has-text-centered has-text-weight-bold">
                            BOOKS OVERVIEW
                        </td>
                    </tr>
                    <tr>
                        <td class="has-text-weight-semibold">
                            Book Title
                        </td>
                        <td class="has-text-weight-semibold">
                            Book Details
                        </td>
                        <td class="has-background-danger-light has-text-weight-semibold">
                            Book Due
                        </td>
                    </tr>

                </thead>
               {{-- FOR LOOP HERE --}}
                <tbody>

                    @for($i=0;$i<2;$i++)

                        <tr>
                            <td>BOOK TITLE CJE0KX56M0Q dom random s</td>
                            <td>
                                <p class=" is-size-5 is-family-sans-serif has-text-weight-light">Random random string string BJKRO02V2X8MP881E5WQHHLV2O1LF4LE
                                    45FT35D5CDQCJE0KX56M0Q0YS950JVFQ
                                    U058DTRIPPFRK6CW6NTW7OI0DBKMHOR0</p>
                                <p class="is-size-6 mt-3 is-italic">AUTHOR:  <span class="is-italic">the author of this book</span></p>
                            </td>
                            <td>
                                15-may Q0YS950JVF
                            </td>
                    @endfor

                </tbody>
                
            </table>

            


        </div>

    </div>

@endsection