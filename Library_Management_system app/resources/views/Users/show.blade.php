@extends('AdminViews.Template')
@section('title','Borrow a book')

@section('content')

    <div class="tile is-parent">

        <div class="tile is-child">

            <div class="hero is-small box has-background-grey-dark ">

                <div class="hero-body pb-1">
    
                    <h1 class="title has-text-left is-size-1 mt-6 is-size-1 has-text-white ">
                        User Details
                    </h1>
    
                </div>
    
                
            </div>

            {{-- <section class="section"> --}}

                

                <table class="table is-fullwidth">

                    <tbody>

                        <tr>
                            <td class=" has-text-weight-bold">First Name</td>
                            <td class="">STEVE</td>
                        </tr>

                        <tr>
                            <td class=" has-text-weight-bold">Last Name</td>
                            <td class=" " >Solomon</td>
                        </tr>

                        <tr>
                            <td class="has-text-weight-bold">Student/Staff ID</td>
                            <td class=" ">ICT/001/002</td>
                        </tr>

                        <tr>
                            <td class="has-text-weight-bold">Books Borrowed</td>
                            <td class=" ">10</td>
                        </tr>

                       

                        <tr>
                            <td class="has-text-weight-bold">Books Lost</td>
                            <td class=" ">15</td>
                        </tr>



                        <tr>
                            <td class="has-text-weight-bold">REQUEST BOOK</td>
                            <td>
                                <a href="" class="button">Request</a>
                                <a href="" class="button">Edit</a>
                            
                            </td>
                        
                        </tr>


                    </tbody>


                </table>

            {{--</section>--}}

        </div>

         
        
        

    </div>

@endsection