<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <?php $aktif = "active"; ?>
    <li class="nav-item ">
      <a href="<?= site_url() ?>" class="nav-link <?= uri_string(true) == '' ? 'active' : '' ?>">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p> Dashboard </p>
      </a>
    </li>
    <li class="nav-item ">
      <a href="<?= site_url() ?>limbah" class="nav-link <?= uri_string(true) == 'limbah' ? 'active' : '' ?>">
        <i class="nav-icon fas fa-table"></i>
        <p> Data Limbah</p>
      </a>
    </li>
    <li class="nav-item ">
      <a href="<?= site_url() ?>terima" class="nav-link <?= uri_string(true) == 'terima' ? 'active' : '' ?>">
        <i class="nav-icon fas fa-save"></i>
        <p> Limbah Di Terima </p>
      </a>
    </li>
    <li class="nav-item ">
      <a href="<?= site_url() ?>history" class="nav-link <?= uri_string(true) == 'history' ? 'active' : '' ?>">
        <i class="nav-icon fas fa-trash"></i>
        <p>Limbah Di Tolak</p>
      </a>
    </li>
    <li class="nav-item <?= uri_string(true) == 'rstock' || uri_string(true) == 'rsuplier' || uri_string(true) == 'rkonsumen' || uri_string(true) == 'rtrx' || uri_string(true) == '1' ? 'menu-open' : '' ?>">
      <a href="#" class="nav-link <?= uri_string(true) == 'rstock' || uri_string(true) == 'rsupplier' || uri_string(true) == 'rkonsumen' || uri_string(true) == 'rtrx' || uri_string(true) == '1' ? 'active' : '' ?>">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Reporting
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="<?= site_url() ?>rmember" class="nav-link <?= uri_string(true) == 'rmember' ? 'active' : '' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Report Member</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url() ?>rparkir" class="nav-link <?= uri_string(true) == 'rparkir' ? 'active' : '' ?>">
            <i class="far fa-circle nav-icon"></i>
            <p>Report Parkir</p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>