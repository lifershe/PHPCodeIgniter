<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Pasalwana</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php if(session()->get('isAdminLoggedIn')):?>
                    Welcome <?=session()->get('name'); ?>
                <?php endif; ?>
            </a>
      <a class="nav-item nav-link" href="<?=base_url()?>/initChart">Analytics</a>
      <a class="nav-item nav-link active" href="<?=base_url()?>/item/index">Products <span class="sr-only">(current)</span></a>

      <a class="nav-item nav-link"  href="<?=base_url()?>admin/logout">Logout</a>
    </div>
  </div>
</nav>