<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php ?>https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">

    <link rel="shortcut icon" href="<?php echo base_url('images/sae.ico')  ?>" type="image/x-icon">

    <style>
        .btn-signin {
            background-color: #ea4335;
            color: white;
        }

        .btn-signin:hover {
            opacity: .9;
            color: white;
        }

        .input-form {
            border-color: green;
        }

        :root {
            --input-padding-x: 1.5rem;
            --input-padding-y: .75rem;
        }

        body {
            background: aqua;
         
        }

        .card-signin {
            border: 0;
            border-radius: 3rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-signin .card-title {
            margin-bottom: 2rem;
            font-weight: 300;
            font-size: 1.5rem;
        }

        .card-signin .card-img-left {
            width: 45%;
            /* Link to your background image using in the property below! */
            background: scroll center url('login.jpg');
            background-size: cover;
        }

        .card-signin .card-body {
            padding: 2rem;
        }

        .form-signin {
            width: 100%;
        }

        .form-signin .btn {
            font-size: 80%;
            border-radius: 5rem;
            letter-spacing: .1rem;
            font-weight: bold;
            padding: 1rem;
            transition: all 0.2s;
        }

        .form-label-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-label-group input {
            height: auto;
            border-radius: 2rem;
        }

        .form-label-group>input,
        .form-label-group>label {
            padding: var(--input-padding-y) var(--input-padding-x);
        }

        .form-label-group>label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0;
            /* Override default `<label>` margin */
            line-height: 1.5;
            color: #495057;
            border: 1px solid transparent;
            border-radius: .25rem;
            transition: all .1s ease-in-out;
        }

        .form-label-group input::-webkit-input-placeholder {
            color: transparent;
        }

        .form-label-group input:-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-moz-placeholder {
            color: transparent;
        }

        .form-label-group input::placeholder {
            color: transparent;
        }

        .form-label-group input:not(:placeholder-shown) {
            padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
            padding-bottom: calc(var(--input-padding-y) / 3);
        }

        .form-label-group input:not(:placeholder-shown)~label {
            padding-top: calc(var(--input-padding-y) / 3);
            padding-bottom: calc(var(--input-padding-y) / 3);
            font-size: 12px;
            color: #777;
        }

        .link-red {
            color: green;
        }

        .link-red:hover {
            color:green;
            opacity: .8;
        }

        .btn-register {
            background-color: green;
            color: white;
        }

        .btn-register:hover {
            color: white;
            opacity: .8;
        }
    </style>

    <title>SaE - Register</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card card-signin flex-row my-5">
                    <div class="card-img-left d-none d-md-flex" style="background-image: url(<?php echo base_url() ?>images/login.jpg);">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Register Member</h5>
                        <form action="<?= base_url('login/register') ?>" method="post">

                            <div class="form-label-group">
                                <input name="username" type="text" id="inputUsername" class="form-control input-form" placeholder="Username" required value="<?php echo set_value('username'); ?>">
                                <?php echo form_error('username'); ?>
                                <label for="inputUsername">Username</label>

                            </div>

                            <div class="form-label-group">
                                <input name="email" type="email" id="inputEmail" class="form-control input-form" placeholder="Email address" required value="<?php echo set_value('email'); ?>">
                                <?php echo form_error('email'); ?>
                                <label for="inputEmail">Email address</label>
                            </div>

                            <div class="form-label-group">
                                <input name="no_telp_user" type="no_hp" id="inputPhone" class="form-control input-form" placeholder="Email address" required value="<?php echo set_value('no_telp_user'); ?>">
                                <?php echo form_error('no_telp_user'); ?>
                                <label for="inputPhone">Phone Number</label>
                            </div>

                            <hr>

                            <div class="form-label-group">
                                <input name="password" type="password" id="inputPassword" class="form-control input-form" placeholder="Password" required value="<?php echo set_value('password'); ?>">
                                <?php echo form_error('password'); ?>
                                <label for="inputPassword">Password</label>
                            </div>

                            <div class="form-label-group">
                                <input name="password_conf" type="password" id="inputConfirmPassword" class="form-control input-form" placeholder="Password" required value="<?php echo set_value('password_conf'); ?>">
                                <?php echo form_error('password_conf'); ?>
                                <label for="inputConfirmPassword">Confirm password</label>
                            </div>

                            <button class="btn btn-lg btn-default btn-block text-uppercase btn-register" name="btnSubmit" type="submit">Register</button>
                            <a class="d-block text-center mt-2 small link-red" href="<?php echo site_url('login')  ?>">Sign In</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous">
    </script>
</body>

</html>