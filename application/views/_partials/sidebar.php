 <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
          <a href="<?php echo base_url('template');?>">
            <i class="fa fa-tachometer"></i> <span>Redemption</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'machines' ? 'active': '' ?>">
          <a href="<?php echo base_url('machine');?>">
            <i class="fa fa-tachometer"></i> <span>Machines</span>
          </a>
        </li>
      </ul>