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

            <section class="section">

                

                <table class="table">

                    <tbody>

                        <tr>
                            <td class=" has-text-weight-bold">TITLE</td>
                            <td class="has-text-centered ">THE RIGHTEOUS REVENGE OT ARTEMIS BONNER</td>
                        </tr>

                        <tr>
                            <td class=" has-text-weight-bold">ISBN</td>
                            <td class="has-text-centered " >LB .BC3355</td>
                        </tr>

                        <tr>
                            <td class="has-text-weight-bold">AUTHOR</td>
                            <td class="has-text-centered ">William J.SHakespeer</td>
                        </tr>

                        <tr>
                            <td class="has-text-weight-bold">DESCRIPTION</td>
                            <td class="has-text-centered ">In 1880, fifteen-year-old Artemis Bonner, an African-American New Yorker, travels to Tombstone Arizona, to avenge his uncle's murder and claim his gold stake. Artemis and his friend Frolic have several harrowing escapes and unusual adventures in this wildly funny romp through the Old West</td>
                        </tr>

                       

                        <tr>
                            <td class="has-text-weight-bold">CALL NUMBER</td>
                            <td class="has-text-centered ">5657</td>
                        </tr>

                        <tr>
                            <td class="has-text-weight-bold">COPIES</td>
                            <td class="has-text-centered ">5657</td>
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

            </section>

        </div>

         
        
        

    </div>

@endsection