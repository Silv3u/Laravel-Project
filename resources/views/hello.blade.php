<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login / Register</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .container {
        background: #fff;
        width: 350px;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        position: relative;
    }

    .tabs {
        display: flex;
        margin-bottom: 20px;
    }

    .tabs label {
        flex: 1;
        text-align: center;
        padding: 10px;
        cursor: pointer;
        font-weight: bold;
        border-bottom: 2px solid #ddd;
        transition: 0.3s;
    }

    input[type="radio"] {
        display: none;
    }

    #login:checked ~ .tabs label[for="login"],
    #register:checked ~ .tabs label[for="register"] {
        border-bottom: 2px solid #667eea;
        color: #667eea;
    }

    .form {
        display: none;
        flex-direction: column;
    }

    #login:checked ~ .forms .login-form,
    #register:checked ~ .forms .register-form {
        display: flex;
    }

    .form input {
        margin-bottom: 15px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        outline: none;
        transition: 0.3s;
    }

    .form input:focus {
        border-color: #667eea;
    }

    .form button {
        padding: 10px;
        border: none;
        border-radius: 5px;
        background: #667eea;
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .form button:hover {
        background: #5563c1;
    }

    .forgot {
        text-align: right;
        font-size: 12px;
        margin-bottom: 10px;
        color: #667eea;
        cursor: pointer;
    }

</style>
</head>
<body>

<div class="container">
    <input type="radio" name="tab" id="login" checked>
    <input type="radio" name="tab" id="register">

    <div class="tabs">
        <label for="login">Login</label>
        <label for="register">Register</label>
    </div>

    <div class="forms">
        <!-- Login Form -->
        <form class="form login-form">
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <div class="forgot">Forgot password?</div>
            <button type="submit">Login</button>
        </form>

        <!-- Register Form -->
        <form class="form register-form">
            <input type="text" placeholder="Full Name" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <input type="password" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</div>

</body>
</html>
