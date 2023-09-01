@extends('AdminViews.Template')
@section('title','Add Book')

@section('content')

<div class="tile is-parent box">

    <div class="tile is-child ">

        <div class="hero is-small box has-background-grey-dark ">

            <div class="hero-body pb-1">

                <h1 class="title has-text-left is-size-1 mt-6 is-size-1 has-text-white ">
                    Add a Book
                </h1>    

            </div>

            
        </div>

        <form action={{route('Book.store')}} method="POST" class="form">
            @csrf
        
            <div class="field is-horizontal">
        
                <div class="field-label">
        
                    <label for="Name" class="label">Book Name</label>
        
                </div>
        
                <div class="field-body">
        
                    <div class="field">
        
                        <input type="text" class="input" name="BookName" placeholder="Book Name">
                        
        
                    </div>
        
                </div>
        
            </div>


            <div class="field is-horizontal">
        
                <div class="field-label">
        
                    <label for="Author" class="label">Author</label>
        
                </div>
        
                <div class="field-body">
        
                    <div class="field">
        
                        <input type="text" class="input" name="Author" placeholder="Author">
                        
        
                    </div>
        
                </div>
        
            </div>
        
            <div class="field is-horizontal">
        
                <div class="field-label">
        
                    <label for="StaffNumber" class="label">ISBN</label>
        
                </div>
        
                <div class="field-body">
        
                    <div class="control">
        
                        <input type="text" class="input" name="ISBN" placeholder="LB .BD550">
        
                    </div>
        
                </div>
        
            </div>
        
        
            <div class="field is-horizontal">
        
                <div class="field-label">
        
                    <label for="Category" class="label">Category</label>
        
                </div>
        
                <div class="field-body">
        
                    <div class="field">
        
                        <div class="control">
        
                            <div class="select">
        
                                <select name="Category">
                                    @forelse($categories as $category)
					<option value="{{ $category->id }}">{{ $category->Category}}</option>
				    @empty
					<option vlaue="">NO CATEGORIES</option>
				    @endforelse
                                </select>
        
                            </div>
        
                        </div>
        
                    </div>
        
                </div>
        
            </div>


            <div class="field is-horizontal">
        
                <div class="field-label">
        
                    <label for="CallNumber" class="label">Call Number</label>
        
                </div>
        
                <div class="field-body">
        
                    <div class="control">
        
                        <input type="text" class="input" name="CallNumber" placeholder="55543">
        
                    </div>
        
                </div>
        
            </div>

        
        
            <div class="field is-horizontal">
        
                <div class="field-label">
        
                    <label for="StaffNumber" class="label">Number of Copies</label>
        
                </div>
        
                <div class="field-body">
        
                    <div class="control">
        
                        <input type="number" class="input" name="NumberOfCopies">
                        <p class="help">Total copies of the book</p>
        
                    </div>
        
                </div>
        
            </div>
        
            <div class="field is-horizontal">
        
                <div class="field-label">
        
                    <label for="StaffNumber" class="label">Book Description</label>
        
                </div>
        
                <div class="field-body">
        
                    <div class="control">
        
                        <textarea cols="50" rows="5" class="textarea" placeholder="Describe the book" name="BookDescription"></textarea>
                        
        
                    </div>
        
                </div>
        
            </div>
        
            <div class="field is-grouped is-grouped-right">
        
                <div class="control">
        
                    <button class="button is-success" type="submit">Add Book</button>
        
                </div>
        
                <div class="control">
        
                    <button class="button is-danger" type="reset">Clear</button>
        
                </div>
        
            </div>
        
        </form>

        


    </div>

</div>


@endsection
