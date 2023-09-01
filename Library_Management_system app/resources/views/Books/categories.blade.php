@extends('AdminViews.Template')
@section('title','Add Book')

@section('content')

<div class="tile is-parent box">

    <div class="tile is-child ">

        <div class="hero is-small box has-background-grey-dark ">

            <div class="hero-body pb-1">

                <h1 class="title has-text-left is-size-1 mt-6 is-size-1 has-text-white ">
                    Add a Category
                </h1>    

            </div>

            
        </div>

        @if(session('message'))
            
            <div class="column mx-5 my-6">

                <div class="notification is-success is-light">
                    <ul>
                        
                         <li class="has-text-success is-light">{{ session('message') }}</li>
                       
                    </ul>
                </div>

            </div>

            @endif

        <form  method="POST" action="{{ route('addcategory') }}" class="form" >
            @csrf
        
            <div class="field is-horizontal">
        
                <div class="field-label">
        
                    <label for="category" class="label">Add a category</label>
        
                </div>
        
                <div class="field-body">
        
                    <div class="field">
        
                        <input type="text" class="input" name="category" placeholder="eg Fiction">
                        
        
                    </div>
        
                </div>
        
            </div>
        
           
        
            <div class="field is-grouped is-grouped-centered">
        
                <div class="control">
        
                    <button class="button is-success" type="submit">Add Category</button>
        
                </div>
        
                <div class="control">
        
                    <button class="button is-danger" type="reset">Clear</button>
        
                </div>
        
            </div>
        
        </form>

        


    </div>

</div>


@endsection
