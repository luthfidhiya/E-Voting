  <aside class="main-sidebar">
    <section class="sidebar">
      
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/'); ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU ADMINISTRATOR</li>
        <li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
          <a href="<?php echo site_url('admin/dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="<?php echo $this->uri->segment(2) == 'kelas' ? 'active' : '' ?>">
          <a href="<?php echo site_url('admin/kelas');?>">
            <i class="fa fa-book"></i> <span>Kelas</span>
          </a>
        </li>

        <li class="<?php echo $this->uri->segment(2) == 'kandidat' ? 'active' : '' ?>">
          <a href="<?php echo site_url('admin/kandidat');?>">
            <i class="fa fa-users"></i> <span>Kandidat</span>
          </a>
        </li>

        <li class="<?php echo $this->uri->segment(2) == 'visi_misi' ? 'active' : '' ?>">
          <a href="<?php echo site_url('admin/visi_misi');?>">
            <i class="fa fa-paper-plane"></i> <span>Visi & Misi</span>
          </a>
        </li>

        <li class="<?php echo $this->uri->segment(2) == 'suara' ? 'active' : '' ?>">
          <a href="<?php echo site_url('admin/suara');?>">
            <i class="fa fa-bell"></i> <span>Suara</span>
          </a>
        </li>

        <li class="<?php echo $this->uri->segment(2) == 'user' ? 'active' : '' ?>">
          <a href="<?php echo site_url('admin/user');?>">
            <i class="fa fa-user"></i> <span>User</span>
          </a>
        </li>

        <li class="<?php echo $this->uri->segment(2) == 'logout' ? 'active' : '' ?>">
          <a href="<?php echo site_url('auth/logout');?>">
            <i class="fa fa-sign-out"></i> <span>Log Out</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">