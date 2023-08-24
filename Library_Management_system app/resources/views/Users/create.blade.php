@extends('AdminViews.Template')
@section('title','Add Student')

@section('content')

<div class="tile is-parent box">

    <div class="tile is-child ">

        <div class="hero is-small box has-background-grey-dark ">

            <div class="hero-body pb-1">

                <h1 class="title has-text-left is-size-1 mt-6 is-size-1 has-text-white ">
                    Add User
                </h1>    

            </div>

            
        </div>

        <form action="" class="form">
            @csrf

            <div class="field is-horizontal">

                <div class="field-label">

                    <label for="Name" class="label">Names</label>

                </div>

                <div class="field-body">

                    <div class="field">

                        <input type="text" class="input" name="FirstName" placeholder="First Name">
                        

                    </div>

                    <div class="field">

                        <input type="text" class="input" name="LastName" placeholder="Last Name">
                        
                    </div>

                </div>

            </div>

            <div class="field is-horizontal">

                <div class="field-label">

                    <label for="StaffNumber" class="label">Staff/Student Number</label>

                </div>

                <div class="field-body">

                    <div class="control">

                        <input type="text" class="input" name="StaffNumber" placeholder="DIT.../BIT.../ICT...">
    
                    </div>

                </div>

            </div>


            <div class="field is-horizontal">

                <div class="field-label">

                    <label for="StaffNumber" class="label">Role</label>

                </div>

                <div class="field-body">

                    <div class="control">

                        <label for="ADM" class="radio">
                            <input type="radio" value="ADM" class="radio" name="Role">
                            Administrator
                        </label>

                        <label for="ADM" class="radio">
                            <input type="radio" value="STD" class="radio" name="Role">
                            Student
                        </label>

    
                    </div>

                </div>

            </div>


            <div class="field is-horizontal">

                <div class="field-label">

                    <label for="StaffNumber" class="label">Password</label>

                </div>

                <div class="field-body">

                    <div class="control">

                        <input type="password" class="input" name="Password">
                        <p class="help">Password must contain  atleast 6 charaters</p>
    
                    </div>

                </div>

            </div>

            <div class="field is-horizontal">

                <div class="field-label">

                    <label for="StaffNumber" class="label">Confirm Password</label>

                </div>

                <div class="field-body">

                    <div class="control">

                        <input type="password" class="input" name="ConfirmPassword">
                        <p class="help">Password must match</p>
    
                    </div>

                </div>

            </div>

            <div class="field is-grouped is-grouped-right">

                <div class="control">

                    <button class="button is-success" type="submit">Add Member</button>

                </div>

                <div class="control">

                    <button class="button is-danger" type="submit">Clear</button>

                </div>

            </div>

        </form>

        


    </div>

</div>

@endsection