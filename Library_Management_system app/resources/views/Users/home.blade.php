@extends('Users.Template')
@section('title','Home')

@section('content')


    <div class="tile is-parent">

        <div class="tile is-child">

            <div class="hero is-small box has-background-grey-dark">

                <div class="hero-body pb-1 ">

                    <h1 class="title has-text-left  mt-6 is-size-1 has-text-white ">
                         Library
                    </h1>

                </div>

            </div>

            <table class="table is-fullwidth">

                <thead>
                    <tr class="has-background-grey-lighter">
                        <td {{--colspan="4"--}}>
                            NEW BOOKS
                        </td>
                    </tr>
                    <tr>
                        <td class="has-text-weight-semibold">
                            Book Title
                        </td>
                        <td class="has-text-weight-semibold">
                            Book Category
                        </td>
                        <td class="has-text-weight-semibold">
                            Book Description
                        </td>
                        <td>
                            
                    </tr>

                </thead>
                <tbody>

                    {{-- FOR LOOP FOR THE FIRST 5 FOR NEW BOOKS--}}
                    {{-- @forelse($Books as $book)
                        <tr>
                            <td>Book Title</td>
                            <td>Category</td>
                            <td>Description</td>
                        </tr>
                    @empty 
                        <tr>
                            <td colspan="3">No Books</td>
                        </tr>
                    @endforelse --}}

                    @for($i=0;$i<10;$i++)

                        <tr>
                            <td>Book Title BOOK TITLE CJE0KX56M0Q dom random s</td>
                            <td>Category Random random string string BJKRO02V2X8MP881E5WQHHLV2O1L</td>
                            <td>Random random string string BJKRO02V2X8MP881E5WQHHLV2O1LF4LE
                                45FT35D5CDQCJE0KX56M0Q0YS950JVFQ
                                U058DTRIPPFRK6CW6NTW7OI0DBKMHOR0</td>
                                <td>
                                    <a href="" class="button  is-info">View Book</a>
                                </td>
                        </tr>

                        @if($i>5)

                            <tr class="has-background-grey-lighter">
                                <td >
                                 BOOKS
                                 </td>
                            </tr>

                            @break

                        @endif

                    @endfor

                    @for($j=0;$j<5;$j++)

                        <tr>
                            <td>Book Title BOOK TITLE CJE0KX56M0Q dom random s</td>
                            <td>Category Random random string string BJKRO02V2X8MP881E5WQHHLV2O1L</td>
                            <td>Random random string string BJKRO02V2X8MP881E5WQHHLV2O1LF4LE
                                45FT35D5CDQCJE0KX56M0Q0YS950JVFQ
                                U058DTRIPPFRK6CW6NTW7OI0DBKMHOR0</td>
                                <td>
                                    <a href="" class="button  is-info">View Book</a>
                                </td>
                        </tr>
                    @endfor


                </tbody>

            </table>

        </div>

    </div>

@endsection