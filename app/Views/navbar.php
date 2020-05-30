<?php
  $session = session();
?>
<nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">
      <a class="navbar-brand" href="#">TOKO ONLINE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <?php if($session->get('isLoggedIn')): ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('home/index')?>">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      <?php endif ?>
        <div class="form-inline my-2 my-lg-0">
          <ul class="navbar-nav mr-auto">
            <?php if($session->get('isLoggedIn')): ?>
              <li class="nav-item">
                <a class="btn btn-success" href="<?= site_url('auth/logout') ?>">Logout</a>
              </li>
            <?php else : ?>
              <li class="nav-item">
                <a class="btn btn-success" href="<?= site_url('auth/login')?>">Login</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-success" href="<?= site_url('auth/register') ?>">Register</a>
              </li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>