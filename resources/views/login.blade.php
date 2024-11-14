@extends('layout.app')

@section('content')
    <body class="login-body"> 
        <div class="login-container">
            <span class="close-btn" onclick="window.history.back();">&times;</span>
            <h2>Log in</h2>
            <p class="signup-link">Don't have an account? <a href="/register">Sign up</a></p>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-btn">Log in</button>
            </form>
        </div>
    </body>

    </html>
