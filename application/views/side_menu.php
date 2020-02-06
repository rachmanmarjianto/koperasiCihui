<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-2 left_col">
          <div class="left_col scroll-view">  

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('images/img.jpg');?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Salam Sukses,</span>
                <h2>John Doe</h2>
              </div>
              
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li>
                    <a ><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('C_home');?>">Home</a></li>
                    </ul>
                  </li>

                  <li>
                    <a><i class="fa fa-edit"></i> Penjualan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('C_pos');?>">POS</a></li>
                      <li><a href="<?php echo site_url('C_laporan_penjualan');?>">Laporan Penjualan</a></li>
                    </ul>
                  </li>
                  
                  <li>
                    <a ><i class="fa fa-shopping-cart"></i> Stock <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('C_laporan_stock');?>">Laporan Stock</a></li>
                      <li><a href="<?php echo site_url('C_pengadaan');?>">Pengadaan</a></li>
                    </ul>
                  </li>

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        