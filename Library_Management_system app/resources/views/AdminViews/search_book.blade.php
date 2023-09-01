@extends('AdminViews.Template')


@section('content')

<div class="tile is-parent ">

    <div class="tile is-child">

        <div class="hero is-small box has-background-grey-dark ">

            <div class="hero-body pb-1">

                <h1 class="title has-text-left is-size-1 mt-6 is-size-1 has-text-white ">
                     Look For a Book
                </h1>

            </div>

            
        </div>


        <form action="{{ route('search_book') }}" method="POST">
            @csrf

            <div class="field">

                <label for="searchbook" class="label">Search for a book</label>

                <div class="control">

                    <input type="text" class="input" name="BookName" placeholder="Enter Book Name">

                </div>

            </div>

            <div class="field is-grouped is-grouped-right">

                <div class="control">

                    <button class="button is-outlined is-link" type="submit">Search</button>

                </div>

                <div class="control">

                    <button class="button is-outlined is-danger" type="submit">Clear</button>

                </div>

            </div>
        </form>

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
                    
                    @forelse($books as $book)

                    <tr>
                        <td>{{ $book->Title }}</td>
                        <td>{{ $book->Description }}</td>
                        <td>{{ $book->book_details->Quantity}}</td>
                        <td>
                            <a href="{{ route('Book.show',['$book' => $book->id])}}" class="button  is-info">View Book</a>
                        </td>
                    </tr>

                    @empty
                        <tr>

                            <td colspan="4">No books available for now</td>

                        </tr>
                    @endforelse


            </table>

    </div>

</div>

@endsection