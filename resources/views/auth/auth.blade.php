<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    @vite(['resources/css/auth.css', 'resources/js/auth.js'])
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container register-container">
        <form action="#">
          <h1>Register</h1>
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <button>Get Started</button>
        </form>
      </div>

      <div class="form-container login-container">
        <form action="#">
          <h1>Login</h1>
          <input type="text" placeholder="Email" />
          <input type="password" placeholder="Password" />
        
          <div class="content">
            <div class="pass-link">
              <a href="#">Forgot Password?</a>
            </div>
          </div>
          <button>Login</button>
        </form>
      </div>

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1 class="title">UniShare</h1>
            <p>Share skills. Share things. Build your campus community.</p>
            <h2 class="title">Hello friend</h2>
            <p>
              If you already have an account you can login here. Welcome back
              and have fun
            </p>
            <button class="ghost" id="login">Login</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1 class="title">UniShare</h1>
            <p>Share skills. Share things. Build your campus community.</p>
            <h2 class="title">
              Start your <br />
              journey
            </h2>
            <p>
              If don't have an account yet, you can register first and start
              your journey
            </p>
            <button class="ghost" id="register">Register</button>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
