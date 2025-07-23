<header data-bs-theme="dark"> 
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> 
    <div class="container-fluid"> 
      <a class="navbar-brand" href="#">Carousel</a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" 
              aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
      </button> 

      <div class="collapse navbar-collapse" id="navbarCollapse"> 
        <ul class="navbar-nav me-auto mb-2 mb-md-0"> 
            <a class="nav-link <?= ($_GET['page'] ?? '') == 'home' ? 'active' : '' ?>" 
                href="/Day5/frontend/index.php?page=home">Home</a>
            <a class="nav-link <?= ($_GET['page'] ?? '') == 'viewCart' ? 'active' : '' ?>" 
                href="/Day5/frontend/index.php?page=viewCart">Giỏ hàng</a>
        </ul> 

        <!-- <form class="d-flex me-3" role="search"> 
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> 
          <button class="btn btn-outline-success" type="submit">Search</button> 
        </form>  -->

        <?php
        if (session_status() === PHP_SESSION_NONE) session_start();
        ?>

        <div class="d-flex align-items-center">
          <?php if (isset($_SESSION['user'])): ?>
            <span class="text-white me-3">👋 Xin chào, <?= htmlspecialchars($_SESSION['user']['username']) ?></span>
            <a href="/Day5/frontend/pages/logout.php" class="btn btn-danger">Logout</a>
          <?php else: ?>
            <a href="/Day5/frontend/pages/login.php" class="btn btn-outline-light me-2">Login</a>
            <a href="/Day5/frontend/pages/register.php" class="btn btn-primary">Register</a>
          <?php endif; ?>
        </div>

      </div> 
    </div> 
  </nav> 
</header>
