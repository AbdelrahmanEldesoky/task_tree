@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('doctor/css/my_style.css') }}">

@section('content')
 <section class="forms-section">
        <h1 class="section-title">Animated Forms</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Login
                    <span class="underline"></span>
                </button>

                <form action="{{ route('login') }}" method="post" class="form form-login">
                    {{ csrf_field() }}
                    {{ method_field('post') }}

                    @include('partials._errors')

                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>
                        <div class="input-block">
                            <label for="login-email">E-mail</label>
                            <input id="login-email" type="email" name="email" required>
                        </div>
                        <div class="input-block">
                            <label for="login-password">Password</label>
                            <input id="login-password" type="password" name="password" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-login">Login</button>
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    Sign Up
                    <span class="underline"></span>
                </button>
                    <form action="{{ route('register1') }}" method="post"  class="form form-signup">
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                    <fieldset>
                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                        <div class="input-block">
                            <label for="signup-email">Name</label>
                            <input  type="text" name="name" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-email">E-mail</label>
                            <input id="signup-email" type="email" name="email" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-email">Phone</label>
                            <input  type="number" name="phone" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password">Password</label>
                            <input type="password" name="password"  required>
                        </div>

                    </fieldset>
                    <button type="submit" class="btn-signup">Continue</button>
                </form>
            </div>
        </div>
    </section>
@endsection
