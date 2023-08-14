@extends('Users.Template')
@section('title','Search a book')

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


        <form action="">
            @csrf

            <div class="field">

                <label for="" class="label">Search for a book</label>

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
                    
                    @for($i=0;$i<6;$i++)

                    <tr>
                        <td>The righteous revenge of atremis bonner</td>
                        <td>In 1880, fifteen-year-old Artemis Bonner, an African-American New Yorker, travels to Tombstone Arizona, to avenge his uncle's murder and claim his gold stake. Artemis and his friend Frolic have several harrowing escapes and unusual adventures in this wildly funny romp through the Old West.</td>
                        <td>30</td>
                        <td>
                            <a href="" class="button  is-info">View Book</a>
                        </td>
                    </tr>
                    @endfor


            </table>

    </div>

</div>

@endsection