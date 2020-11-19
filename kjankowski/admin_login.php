<?php 
session_start();

include('admin-head.php') ?>

<body class="admin_login">
    <div class="d-flex justify-content-center admin_login_form">
        <form action="login.php" style="width: 500px;" method="post">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" id="login" aria-describedby="emailHelp" placeholder="Login"
                    name="login">
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" placeholder="Hasło" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Zaloguj</button>
        </form>


    </div>

</body>