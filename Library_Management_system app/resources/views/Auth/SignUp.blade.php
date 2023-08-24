@extends('Auth.Template')
@section('content')

    <section class="section">

        <div class="container ">

           <div class="tile is-ancestor">

            <div class="tile is-parent">

                <div class="tile is-child">

                    <form action="" class="form box">

                        <div class="field is-horizontal">

                            <div class="field-label">
                                <label for="Names" class="label">Names</label>
                            </div>

                            <div class="field-body">

                                <div class="field">

                                    <div class="control">
                                        <input type="text" class="input" name='FirstName' required autofocus>
                                        <p class="help">Enter your First Name</p>
                                    </div>
                                    
                                </div>

                                <div class="field">

                                    <div class="control">
                                        <input type="text" class="input" name="LastName" required>
                                        <p class="help">Enter your Last Name</p>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="field is-horizontal">

                            <div class="field-label">
                                <label for="Email" class="label">Email</label>
                            </div>

                            <div class="field-body">

                                <div class="field">

                                    <div class="control">
                                        <input type="email" class="input" name="Email">
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="field is-horizontal">

                            <div class="field-label">
                                <label for="Email" class="label">Campus</label>
                            </div>

                            <div class="field-body">

                                <div class="field">

                                    <div class="control">
                                        <input type="text" class="input" name="Campus">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="field is-horizontal">

                            <div class="field-label">
                                <label for="Email" class="label">Course</label>
                            </div>

                            <div class="field-body">

                                <div class="field">

                                    <div class="control">
                                        <input type="text" class="input" name="Course">
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="field is-horizontal">

                            <div class="field-label">
                                <label for="Email" class="label">Password</label>
                            </div>

                            <div class="field-body">

                                <div class="field">

                                    <div class="control">
                                        <input type="text" class="input" name="Password">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="field is-horizontal">

                            <div class="field-label">
                                <label for="Email" class="label">Confirm Password</label>
                            </div>

                            <div class="field-body">

                                <div class="field">

                                    <div class="control">
                                        <input type="text" class="input" name="ConfirmPassword">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="field is-grouped is-grouped-centered">
        
                            <div class="control">
                    
                                <button class="button is-info" type="submit">Sign up</button>
                    
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