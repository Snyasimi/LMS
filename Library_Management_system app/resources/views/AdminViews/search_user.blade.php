@extends('AdminViews.Template')


@section('content')

<div class="tile is-parent ">

    <div class="tile is-child">

        <div class="hero is-small box has-background-grey-dark ">

            <div class="hero-body pb-1">

                <h1 class="title has-text-left is-size-1 mt-6 is-size-1 has-text-white ">
                     Search for a user
                </h1>

            </div>

            
        </div>


        <form action="{{ route('query_users') }}" method="POST">
            @csrf

            <div class="field">

                <label for="searchbook" class="label">Enter Registration Number</label>

                <div class="control">

                    <input type="text" class="input" name="data" placeholder="Enter User  Resistration number">

                </div>

            </div>

            <div class="field is-grouped is-grouped-right">

                <div class="control">

                    <button class="button is-outlined is-link" type="submit">Search</button>

                </div>

                <div class="control">

                    <button class="button is-outlined is-danger" type="reset">Clear</button>

                </div>

            </div>
        </form>


            @isset($users)

            <table class="table is-fullwidth is-bordered mt-5">

                <thead>
                    <tr>
                        <td class="has-text-weight-semibold">Names</td>
                        <td class="has-text-weight-semibold">Registration Number</td>
                        <td class="has-text-weight-semibold">Books borrowed</td>
                        <td class="has-text-weight-semibold">Option</td>
                    </tr>
                </thead>

                <tbody>
                    
                    @forelse($users as $user)

                    <tr>
                        <td>{{ $user->FirstName." ".$user->LastName }}</td>
                        <td>{{ $user->RegNo}}</td>
                        <td>{{ $user->book_issued->count()}}</td>
                        <td>
                            <a href="{{ route('User.show',['User' => $user->User_id] ) }}" class="button  is-info">Show user</a>
                        </td>
                    </tr>

                    @empty
                        <tr>

                            <td colspan="4">No such user</td>

                        </tr>
                    @endforelse


            </table>

            @endisset

    </div>

</div>

@endsection