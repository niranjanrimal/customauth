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

</style>

<form class="login-form" method="POST" action="{{route('login')}}">
    @csrf
    <h2>Login</h2>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    </div>
    <button type="submit">Login</button>
    <a href="#">Forgot password?</a>

    @if ($errors->has('credentials'))
        <div class="alert alert-danger">
            {{ $errors->first('credentials') }}
        </div>
    @endif

</form>


