 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($this->uri->segment(1)=="Dashboard"){echo "active";}?>">
          <a href="<?=base_url('Dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(1)=="Operational"){echo "active";}?> treeview" >
          <a href="#">
            <i class="fa fa-gear"></i> <span>Operational</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="<?php if($this->uri->segment(2)=="KiddieAndVideo"){echo "active";}?> fa fa-child"></i> Kiddie Rides & Video Games </a></li>
            <li><a href="#"><i class="<?php if($this->uri->segment(2)=="Redemption"){echo "active";}?> fa fa-ticket"></i> Redemption </a></li>
            <li><a href="#"><i class="<?php if($this->uri->segment(2)=="Vending"){echo "active";}?> fa fa-building"></i> Vending </a></li>
            <li><a href="#"><i class="<?php if($this->uri->segment(2)=="Froggy"){echo "active";}?> fa fa-life-bouy"></i> Froggy </a></li>
          </ul>
        </li>
        <!-- Machines Nav -->
        <li class="<?php if($this->uri->segment(1)=="Machines"){echo "active";}?> treeview">
          <a href="#">
            <i class="fa fa-legal"></i> <span>Machines</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-gears"></i> All Machines</a></li>
            <li class="treeview">
              <a href="#"><i class=""></i> By Category
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="<?php if($this->uri->segment(2)=="KiddieAndVideo"){echo "active";}?> fa fa-child"></i> Kiddie Rides</a></li>
                <li><a href="#"><i class="<?php if($this->uri->segment(2)=="Froggy"){echo "active";}?> fa fa-life-bouy"></i> Merchandiser </a></li>
                <li><a href="#"><i class="<?php if($this->uri->segment(2)=="Redemption"){echo "active";}?> fa fa-ticket"></i> Redemption </a></li>
                <li><a href="#"><i class="<?php if($this->uri->segment(2)=="Vending"){echo "active";}?> fa fa-building"></i> Vending </a></li>
                <li><a href="#"><i class="<?php if($this->uri->segment(2)=="KiddieAndVideo"){echo "active";}?>fa fa-gamepad"></i> Video Games </a></li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- .Machines Nav -->
      </ul>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $this->uri->segment(1);?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <!-- <li class="active">Dashboard</li> -->
        <?php foreach ($this->uri->segments as $segment): ?>
        <?php 
          $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
          $is_active =  $url == $this->uri->uri_string;
        ?>
	<li class="breadcrumb-item <?php echo $is_active ? 'active': '' ?>">
          <?php if($is_active): ?>
            <?php echo ucfirst($segment) ?>
          <?php else: ?>
            <a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
      </ol>
    </section>