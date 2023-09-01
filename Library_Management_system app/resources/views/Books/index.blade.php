@extends('Users.Template')
@section('title','Books')

@section('content')

<div class="tile is-parent ">

    <div class="tile is-child">

        <div class="hero is-small box has-background-grey-dark ">

            <div class="hero-body pb-1">

                <h1 class="title has-text-left is-size-1 mt-6 is-size-1 has-text-white ">
                     Books
                </h1>

            </div>

            
        </div>

        {{-- @if($Book) --}}

            <table class="table is-fullwidth is-bordered mt-5">

                <thead>
                    <tr>
                        <td class="has-text-weight-semibold">Book Title</td>
                        <td class="has-text-weight-semibold">Book Description</td>
                        <td class="has-text-weight-semibold">Copies Left</td>
                        <td class="has-text-weight-semibold"></td>
                    </tr>
                </thead>

                <tbody>
                    
                    @forelse($Books as $book)

                    <tr>
                        <td>{{$book->Title}}</td>
                        <td>{{$book->Description}}</td>
                        <td>{{$book->book_details->Quantity}}</td>
                        <td>
                            <a href="{{ route('Book.show',['Book' => $book->id ]) }}" class="button  is-info">View Book</a>
                        </td>
                    </tr>
                    @empty
                        <tr>

                            <td colspan="4" class="has-text-white has-background-grey">No Books Available at the moment</td>

                        </tr>
                    @endforelse


            </table>

    </div>

</div>

@endsection