@extends('frontend/master')

@section('content')
    <div class="full-body">
        <div class="container ">
            <div id="login" class=" login-before">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center border-bottom p-2">User Login</h5>
                        <form action="">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control mt-1" name="email" placeholder="Enter Email Address...">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control mt-1" name="password" placeholder="Enter Password...">
                            </div>
                            <button class="btn btn-primary w-100 mt-2">Login</button>
                            <small class="no-account">I have no account!</small>
                        </form>
                    </div>
                  </div>
            </div>

            <div id="register" class="register-before">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center border-bottom p-2">User Registration</h5>
                        <form action="">
                            <div class="form-group">
                                <input id="name" type="text" class="form-control mt-2" name="name" placeholder="Enter Username...">
                            </div>
                            <div class="form-group">
                                <input id="register_email" type="email" class="form-control mt-2" name="email" placeholder="Enter Email Address...">
                            </div>
                            <div class="form-group">
                                <input id="phone" type="text" class="form-control mt-2" name="email" placeholder="Enter Mobile Number...">
                            </div>
                            <div class="form-group">
                                <input id="register_password" type="password" class="form-control mt-2" name="password" placeholder="Enter Password...">
                            </div>
                            <div class="form-group">
                                <input id="re_password" type="password" class="form-control mt-2" name="re_password" placeholder="Enter Re-password...">
                            </div>
                            <div class="form-group">
                                <textarea name="address" id="address" class="form-control mt-2" placeholder="Enter Address..."  rows="1"></textarea>
                            </div>
                            <button class="btn btn-primary w-100 mt-2">Register</button>
                            <small class="have-account">Already have an account</small>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <script>
        let login = document.getElementById('login');
        let register = document.getElementById('register');
        let no_account = document.querySelector('.no-account');
        let have_account = document.querySelector('.have-account');
        no_account.addEventListener('click',function(){
            login.classList.add('login');
            register.classList.add('register');

            register.classList.add('register-before');
            login.classList.add('login-before');

            login.classList.remove('alogin');
            register.classList.remove('aregister');


        })
        have_account.addEventListener('click',function(){
            login.classList.remove('login');
            register.classList.remove('register');
            register.classList.remove('register-before');
            register.classList.remove('login-before');

            login.classList.add('alogin');
            register.classList.add('aregister');

        })
    </script>
@endsection