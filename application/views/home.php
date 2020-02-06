         

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>

            <div class="x_content" style="margin-top:-200px">
              <div class="row top_tiles" style="margin: 10px 0;">
                <div class="col-md-3 tile">
                  <span>Pinjaman</span>
                  <h2>Rp. 25.000.000</h2>
                  
                </div>
                <div class="col-md-3 tile">
                  <span>Angsuran</span>
                  <h2>Rp. 6.000.000</h2>
                  
                </div>
                <div class="col-md-3 tile">
                  <span>Tabungan</span>
                  <h2>Rp. 50.000.000</h2>
                  
                </div>
                <div class="col-md-3 tile">
                  <span>Denda</span>
                  <h2>Rp. 2.000.000</h2>
                  
                </div>
              </div>


            </div>

            <div class="x_content" style="margin-top:-100px">

              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Omset Bulanan</h2>
                      
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px none; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe>
                      <canvas id="lineChart" style="width: 484px; height: 242px;" width="484" height="242"></canvas>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Jumlah Transaksi Bulanan</h2>
                      
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px none; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe>
                      <canvas id="mybarChart" style="width: 484px; height: 242px;" width="484" height="242"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            

            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

        <!-- Chart.js -->
        <script src="<?php echo base_url('vendors/Chart.js/dist/Chart.min.js');?>"></script>

        <script>
          window.onload=function(){
          //********* hrs dipanggil di setiap page ***************
          startTime(); //located in "head_home.php"
          //************************************************** */
          }

        </script>
        
