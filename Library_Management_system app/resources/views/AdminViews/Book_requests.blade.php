@extends('AdminViews.Template')
@section('title','Home')
@section('content')

    <div class="tile is-vertical">

        <div class="tile is-parent">

            <div class="tile is-child">

                <div class="hero is-small box has-background-grey-dark ">

                    <div class="hero-body pb-1">
        
                        <h1 class="title has-text-left is-size-1 mt-6 is-size-1 has-text-white ">
                            Book Requests
                        </h1>    
        
                    </div>
        
                    
                </div>
                


            </div>

        </div>

        <div class="tile is-parent">

            <div class="tile is-child">

                <table class="table is-fullwidth">

                    <thead>
                        <tr class="has-background-grey-lighter">
                            <td {{--colspan="4"--}}>
                                REQUESTED BOOKS
                            </td>
                        </tr>
                        <tr>
                            <td class="has-text-weight-semibold">
                                Book Title
                            </td>
                            <td class="has-text-weight-semibold">
                                Borrower
                            </td>
                            <td class="has-text-weight-semibold">
                                Book Status
                            </td>

                            <td class="has-text-weight-semibold">
                            Copies available
                            </td>

                            <td class="has-text-weight-semibold">
                                Total Copies
                            </td>


                            <td></td>
                            <td></td>
                                
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
                                <td>Righteous revenge of artemis bonner</td>
                                <td>Cedrick Nyakundi</td>
                                <td>Available
                                </td>

                                <td>
                                    55
                                </td>
                                <td>
                                    55
                                </td>

                                    <td>
                                       <a href="" class="button  is-info">Issue Book</a>
                                    </td>

                                    {{-- <td>
                                        <a href="" class="button  is-info">Edit Book</a>
                                     </td> --}}
                            </tr>
    
                        @endfor
    
    
    
                    </tbody>
    
                </table>

            </div>

        </div>

    </div>

@endsection