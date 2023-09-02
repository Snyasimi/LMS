@extends('AdminViews.Template')
@section('title','Home')
@section('content')

    <div class="tile is-vertical">

        <div class="tile is-parent">

            <div class="tile is-child">

                <div class="hero is-small box has-background-grey-dark ">

                    <div class="hero-body pb-1">
        
                        <h1 class="title has-text-left is-size-1 mt-6 is-size-1 has-text-white ">
                            Admin Dashboard
                        </h1>    
        
                    </div>
        
                    
                </div>
                

                <table class="table is-fullwidth is-bordered">

                    <thead>
                        <tr>
                            <td class=" has-background-grey-light has-text-centered title is-5" >Borrowed Books</td>
                            <td class=" has-background-grey-light has-text-centered title is-5">Lost Books</td>
                            <td class=" has-background-grey-light has-text-centered title is-5">Total Books</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class=" has-text-centered subtitle is-5">{{ $BorrowedBooks }}</td>
                            <td class=" has-text-centered subtitle is-5">{{ $LostBooks }}</td>
                            <td class=" has-text-centered subtitle is-5">{{ $TotalBooks }}</td>
                        </tr>
                    </tbody>

                </table>


            </div>

        </div>

        <div class="tile is-parent">

            <div class="tile is-child">

                <table class="table is-fullwidth">

                    <thead>
                        <tr class="has-background-grey-lighter">
                            <td {{--colspan="4"--}}>
                                NEW BOOKS
                            </td>
                        </tr>
                        <tr>
                            <td class="has-text-weight-semibold">
                                Book Author
                            <td class="has-text-weight-semibold">
                                Book Title
                            </td>
                            <td class="has-text-weight-semibold">
                                Book Description
                            </td>
                            <td></td>
                            <td></td>
                                
                        </tr>
    
                    </thead>
                    <tbody>
    
                        {{-- FOR LOOP FOR THE FIRST 5 FOR NEW BOOKS--}}
                        @forelse($NewBooks as $book)
                            <tr>
                                <td>{{ $book->Author }}</td>
                                <td>{{ $book->Title }}</td>
                                <td>{{$book->Description}}</td>
                            </tr>
                        @empty 
                            <tr>
                                <td colspan="3">No Books</td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>

                <table class="table is-fullwidth">
                    
                    <thead>
                        <tr class="has-background-grey-lighter">
                            <td {{--colspan="4"--}}>
                                BOOKS
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
                            <td></td>
                            <td></td>
                                
                        </tr>
    
                    </thead>

                    </tbody>
    
                    @forelse($Books as $book)
                    <tr>
                        <td>{{ $book->Author }}</td>
                        <td>{{ $book->Title }}</td>
                        <td>{{$book->Description}}</td>
                    </tr>
                @empty 
                    <tr>
                        <td colspan="3">No Books</td>
                    </tr>
                @endforelse
    
    
    
                    </tbody>
    
                </table>

            </div>

        </div>

    </div>

@endsection