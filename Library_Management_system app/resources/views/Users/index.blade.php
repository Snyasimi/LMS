@extends('Users.Template')
@section('title','My Profile')

@section('content')

    <div class="tile is-parent box">

        <div class="tile is-child ">

            <div class="hero is-small box has-background-grey-dark ">

                <div class="hero-body pb-1">
    
                    <h1 class="title has-text-left is-size-1 mt-6 is-size-1 has-text-white ">
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
                        <td class="has-background-grey-light has-text-weight-semibold">
                            Book Due
                        </td>
                    </tr>

                </thead>
               {{-- FOR LOOP HERE --}}
                <tbody>

                    @forelse($User->book_issued as $book)

                        <tr>
                            <td>{{$book->Title}}</td>
                            <td>
                                <p class=" is-size-5 is-family-sans-serif has-text-weight-light">{{$book->Description}}</p>
                                <p class="is-size-6 mt-3 is-italic">AUTHOR: {{$book->Author }} <span class="is-italic">the author of this book</span></p>
                            </td>
                            <td>
                                15-may Q0YS950JVF
                            </td>
                        </tr>

                    @empty
                    <tr>

                        <td colspan="3">No books Information, click <a href="{{ route('Book.index')}}">here</a> to browse books</td>

                    </tr>

                            
                    @endforelse

                </tbody>
                
            </table>

            


        </div>

    </div>

@endsection