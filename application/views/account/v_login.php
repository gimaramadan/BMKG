<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')  ?>">

    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url('assets/img/BMKG.png') ?>" />

    <style>
        .card-member {
            margin-top: 30%;
            height: 200px;
            max-width: 5500px;
        }

        .link-red {
            color:  black;
        }

        .link-red:hover {
            color: #1e90ff;
            opacity: .8;
        }

        .btn-signin {
            background-color: #1e90ff;
            color: white;
        }

        .btn-signin:hover {
            opacity: .9;
            color: white;
        }

        .input-form {
            border-color: #1e90ff;
        }

        :root {
            --input-padding-x: 1.5rem;
            --input-padding-y: 0.75rem;
        }

        .login,
        .image {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('login.jpg');
            background-size: cover;
            background-position: center;
        }

        .login-heading {
            font-weight: 300;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
            border-radius: 2rem;
        }

        .form-label-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-label-group>input,
        .form-label-group>label {
            padding: var(--input-padding-y) var(--input-padding-x);
            height: auto;
            border-radius: 2rem;
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
            color: #1e90ff;
            cursor: text;
            /* Match the input under the label */
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

        /* Fallback for Edge
  -------------------------------------------------- */

        @supports (-ms-ime-align: auto) {
            .form-label-group>label {
                display: none;
            }

            .form-label-group input::-ms-input-placeholder {
                color: #777;
            }
        }

        /* Fallback for IE
  -------------------------------------------------- */

        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .form-label-group>label {
                display: none;
            }

            .form-label-group input:-ms-input-placeholder {
                color: #777;
            }
        }
    </style>

    <title>Admin - Login</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image" style="background-image: url('<?php echo base_url() ?>assets/img/portal4.jpg');">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <?php

                                echo "<img src=" . base_url('assets/img/BMKG.png') . " style='max-width: 150px;'>";

                                ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4 text-center"></h3>

                                <?php echo $this->session->flashdata('message'); ?>

                                <form action="<?php echo site_url('login') ?>" method="post">
                                    <div class="form-label-group">
                                        <input name="email" type="email" id="inputEmail" class="form-control input-form" placeholder="Email address" required value="<?php echo set_value('email'); ?>">
                                        <?php echo form_error('email'); ?>
                                        <label for="inputEmail">Email</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input name="password" type="password" id="inputPassword" class="form-control input-form" placeholder="Password" required value="<?php echo set_value('password'); ?>">
                                        <?php echo form_error('password'); ?>
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <button class="btn btn-lg btn-default btn-block btn-login text-uppercase font-weight-bold mb-2 btn-signin" type="submit">Sign in</button>

                                </form>
                              <!--   <div class="text-center">
                                    <a class="small link-red" href="<?php echo base_url();  ?>login/register">Not have account? Register
                                        now</a>
                                </div> -->
                                <div class="text-center">
                                    <a class="small link-red" href="<?php echo base_url();  ?>lupa_password/index">Forgot Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
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