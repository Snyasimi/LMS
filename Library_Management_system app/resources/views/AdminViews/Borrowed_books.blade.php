@extends('AdminViews.Template')
@section('title','Home')
@section('content')

    <div class="tile is-vertical">

        <div class="tile is-parent">

            <div class="tile is-child">

                <div class="hero is-small box has-background-grey-dark ">

                    <div class="hero-body pb-1">
        
                        <h1 class="title has-text-left is-size-1 mt-6 is-size-1 has-text-white ">
                            Borrowed Books
                        </h1>    
        
                    </div>
        
                    
                </div>

                <table class="table is-fullwidth">

                    <thead>
                        <tr class="has-background-grey-lighter">
                            <td {{--colspan="4"--}}>
                                BORROWED BOOKS
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
                            Due Date
                            </td>

                            


                            <td></td>
                            <td></td>
                                
                        </tr>
    
                    </thead>
                    <tbody>
    
                        {{-- FOR LOOP FOR THE FIRST 5 FOR NEW BOOKS--}}
                        @forelse($borrowed_books as $book)
                            <tr>
                                <td>{{ $book->book_borrowed->Title }}</td>
                                <td>{{ $book->borrower->FirstName }}</td>
                                <td>{{ $book->Book_status }}</td>
                                <td>{{$book->Return_date}}</td>
                            </tr>
                        @empty 
                            <tr>
                                <td colspan="3">No Books borrowed at the moment</td>
                            </tr>
                        @endforelse
    
    
    
                    </tbody>
    
                </table>
                


            </div>

        </div>

        <div class="tile is-parent">

            <div class="tile is-child">

                

            </div>

        </div>

    </div>

@endsection