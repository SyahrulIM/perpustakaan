
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.ico" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

<main class="form-signin">
  <form action="<?php echo base_url('login/ceklogin')?>" method="post">
  <img src="<?=base_url()?>assets/img/logo.png" alt="Logo" width="72" height="72">
    <h1 class="h3 mb-3 mt-3 fw-normal">Welcome Back Admin</h1>


    <?php
    $info = $this->session->flashdata('info');
    if (!empty($info)){
     echo $info;
    }
    ?>

    <div class="form-floating">
      <input type="username" name="username" class="form-control" id="username" placeholder="Username" autocomplete="off">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main>


    
  </body>
</html>