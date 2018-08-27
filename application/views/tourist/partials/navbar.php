<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= base_url() ?>">Tourist BD</a>
    </div>
    <ul class="nav navbar-nav">
      <li <?php if($active == 'home') echo 'class=active'; ?>><a href="<?= base_url() ?>">Home</a></li>
      <li <?php if($active == 'hotel') echo 'class=active'; ?>><a href="<?= base_url('tourist/hotel') ?>">Hotel Booking</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if($tourist):?>
        <li <?php if($active == 'tourist') echo 'class=active'; ?>><a href="<?= base_url('tourist/account') ?>"><i class="fa fa-user"></i> Account</a></li>
        <li <?php if($active == 'tourist_booking_history') echo 'class=active'; ?>><a href="<?= base_url('tourist/hotel/booking/history') ?>"><i class="fa fa-history"></i> Booking History</a></li>
        <li><a href="<?= base_url('tourist/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
      <?php else:?>
        <li><a href="<?= base_url('tourist/signup') ?>"><i class="fa fa-sign-out"></i> Register as Tourist</a></li>
        <li><a href="<?= base_url('tourist/login') ?>"><i class="fa fa-user"></i> Tourist Login</a></li>
        <li><a href="<?= base_url('admin/login') ?>"><i class="fa fa-sign-in"></i> Admin Login</a></li>
      <?php endif ?>
    </ul>
  </div>
</nav>
