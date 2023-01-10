<div class="login">
    <form  method="POST" action="/authenticate"> 

        <h1>Login Page</h1>
    <?php 
    
    if (!empty($_SESSION) && isset($_SESSION['error']) && !empty($_SESSION['error'])) : ?>
            <div class='alert alert-danger mb-3' role='alert'>
                <?= $_SESSION['error'] ?>
            </div>
        <?php
            $_SESSION['error'] = null;
        endif; ?>


        <div class="log">
            <label for="admin-username" ></label>
            <input type="text"  id="admin-username" name="username" placeholder="Username" required>
        </div>
        <div class="log">
            <label for="admin-password" ></label>
            <input type="password"  id="admin-password" name="password" placeholder="Password" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox"  id="remember-me" name="remember_me">
            <label for="remember-me">Remember Me</label>
        </div>
        <button id="submit"type="submit">Login</button>
    </form>
<body>

