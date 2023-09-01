@extends('Users.Template')
@section('title','Borrow a book')

@section('content')

    <div class="tile is-parent">

        <div class="tile is-child">

            <div class="hero is-small box has-background-grey-dark ">

                <div class="hero-body pb-1">
    
                    <h1 class="title has-text-left is-size-1 mt-6 is-size-1 has-text-white ">
                        Book Details
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

            <section class="section">

                

                

                <table class="table">

                    <tbody>

                        <tr>
                            <td class=" has-text-weight-bold">TITLE</td>
                            <td class="has-text-centered ">{{ $book->Title}}</td>
                        </tr>

                        <tr>
                            <td class=" has-text-weight-bold">ISBN</td>
                            <td class="has-text-centered " >{{ $book->ISBN}}</td>
                        </tr>

                        <tr>
                            <td class="has-text-weight-bold">AUTHOR</td>
                            <td class="has-text-centered ">{{ $book->Author}}</td>
                        </tr>

                        <tr>
                            <td class="has-text-weight-bold">DESCRIPTION</td>
                            <td class="has-text-centered ">{{ $book->Description}}</td>
                        </tr>

                       

                        <tr>
                            <td class="has-text-weight-bold">CALL NUMBER</td>
                            <td class="has-text-centered ">{{ $book->book_details->Call_number}}</td>
                        </tr>

                        <tr>
                            <td class="has-text-weight-bold">COPIES</td>
                            <td class="has-text-centered ">{{ $book->book_details->Quantity}}</td>
                        </tr>


                        <tr>
                            <td class="has-text-weight-bold">REQUEST BOOK</td>
                            <td>
                                {{-- <a href="" class="button">Request</a> --}}
                                <form method="POST" action="{{ route('request_book',['id' => $book->id] )}}">
                                    @csrf
                                    {{-- <input type="text" hidden value={{$book->id}}> --}}
                                    <button type="submit" class="button" >Request</button>
                                </form>
                                {{-- <a href="" class="button">Edit</a> --}}
                            
                            </td>
                        
                        </tr>


                    </tbody>


                </table>

            </section>

        </div>

         
        
        

    </div>

@endsection