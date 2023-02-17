<style>
    .login-form {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .login-form h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .login-form .form-group {
        margin-bottom: 15px;
    }

    .login-form label {
        display: block;
        margin-bottom: 5px;
    }

    .login-form input[type="email"],
    .login-form input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .login-form button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background: #428bca;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .login-form a {
        display: block;
        text-align: right;
        margin-top: 10px;
    }


    .register-form {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .register-form h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .register-form .form-group {
        margin-bottom: 15px;
    }

    .register-form label {
        display: block;
        margin-bottom: 5px;
    }

    .register-form input[type="text"],
    .register-form input[type="email"],
    .register-form input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 20px;
    }

    .register-form button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .register-form button[type="submit"]:hover {
        background-color: #45a049;
    }
    alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
        padding: 8px 16px;
        margin-bottom: 16px;
    }

</style>

<form class="register-form" action="{{route('register')}}" method="POST">
    @csrf
    <h2>Register</h2>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        @error('email')
        <span class="error">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        @error('password')
        <span class="error">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="confirm-password" required>
        @error('password_confirmation')
        <span class="error">
            {{$message}}
        </span>
        @enderror
    </div>
    <button type="submit">Register</button>
</form>
