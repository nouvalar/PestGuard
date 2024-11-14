@extends('layout.app')

@section('content')
    <span class="close-btn" onclick="window.history.back();">&times;</span>

    <body class="register-body">
        <div class="register-container">
            <div class="form-box">
                <button class="Regclose-btn">&times;</button>
                <h2>Create an account</h2>
                <p>Already have an account? <a href="/login">Log in</a></p>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" required>

                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit" class="register-btn">Create an account</button>
                </form>
            </div>
        </div>
    </body>
