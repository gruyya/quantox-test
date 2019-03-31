<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/">QuantoxTest</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="students">Students</a>
      </li>
    </ul>
    <ul class="navbar-nav mr-right">
      <?php if (isset($_SESSION['email'])) : ?>
      	<li class="nav-item active">
      	  <a class="nav-link" href="logout">Logout</a>
      	</li>
      <?php else: ?>
      	<li class="nav-item active">
      	  <a class="nav-link" href="loginShow">Login</a>
      	</li>
      	<li class="nav-item active">
      	  <a class="nav-link" href="registerShow">Register</a>
      	</li>
      <?php endif; ?>
    </ul>
  </div>
</nav>