<header class="nav-holder make-sticky">
  <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
    <div class="container">
      <a href="<?=base_url('home');?>" class="navbar-brand home">
        <img src="<?=base_url('assets/img/logo.png');?>" alt="Universal logo" class="d-none d-md-inline-block">
        <img src="<?=base_url('assets/img/logo-small.png');?>" alt="Universal logo" class="d-inline-block d-md-none">
        <span class="sr-only">Universal - go to homepage</span>
      </a>
      <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
      <div id="navigation" class="navbar-collapse collapse">
        <ul class="nav navbar-nav ml-auto">
          <?php $uri1 = $this->uri->segment(1); ?>
          <?php foreach(config('menu') as $key => $val): ?>
          <li class="nav-item <?php if($uri1 == $key): ?>active<?php endif; ?>">
            <a href="<?=base_url($key);?>"><?=$val['nama_menu'];?> <b class="caret"></b></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div id="search" class="collapse clearfix">
        <form role="search" class="navbar-form">
          <div class="input-group">
            <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
              <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>