@extends('Auth.Template')
@section('content')

    <section class="section">

        <div class="container ">

           <div class="tile is-ancestor">

            <div class="tile is-parent">

                <div class="tile is-child">

                    <form action="" class="form box">

                        <div class="field">
            
                            <label for="Email" class="label">Email</label>
            
                            <div class="control">
            
                                <input type="text" class="input" autofocus required>
            
                            </div>
            
                        </div>
            
                        <div class="field">
            
                            <label for="Email" class="label">Password</label>
            
                            <div class="control">
            
                                <input type="password" class="input" required>
            
                            </div>
            
                        </div>
            
                        <div class="field is-grouped is-grouped-centered">
                    
                            <div class="control">
                    
                                <button class="button is-link" type="submit">Login</button>
                    
                            </div>
                    
                            <div class="control">
                    
                                <button class="button is-danger" type="reset">Clear</button>
                    
                            </div>
                    
                        </div>
            
                    </form>

                </div>

            </div>

           </div>

        </div>

    </section>

@endsection