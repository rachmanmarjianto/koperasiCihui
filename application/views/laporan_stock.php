        <!-- iCheck -->
        <link href="<?php echo base_url('vendors/iCheck/skins/flat/green.css');?>" rel="stylesheet">
        
        <!-- Datatables -->
        <link href="<?php echo base_url('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css');?>" rel="stylesheet">

        <!-- bootstrap-datetimepicker -->
        <link href="<?php echo base_url('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css');?>" rel="stylesheet">  


        <style>
          th,td {
            text-align:center;
          }

          tr {
            cursor: pointer;
          }
        </style>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Laporan Stock</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>

            <div class="clearfix" style="height:0px"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
            
                   <div class="row">
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        Tanggal Awal
                        <div class="form-group">
                            <div class="input-group date" id="myDatepicker2">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        Tanggal Akhir
                        <div class="form-group">
                            <div class="input-group date" id="myDatepicker3">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4" style="text-align: center;">
                        <button type="button" class="btn btn-success" style="margin-top:20px">Lihat Laporan</button>
                      </div>
                    </div>

                    <hr>




                    
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th rowspan="2" width="5%" >No</th>
                          <th rowspan="2" width="15%">Item</th>
                          <th rowspan="2" width="10%">Stock Awal</th>
                          <th rowspan="2" width="10%">Penambahan</th>
                          <th colspan="4" width="40%">Pengurangan</th>
                          
                          <th rowspan="2" width="10%">Stock Akhir</th>
                          <th rowspan="2" width="10%">Stock Minimal</th>
                        </tr>
                        <tr>
                          <th >Terjual</th>
                          <th >Hilang</th>
                          <th >Retur</th>
                          <th >Rusak</th>
                        </tr>
                        
                      </thead>
                        

                      <tbody>

                        <tr>
                          <td>1</td>
                          <td>Teh Celup</td>
                          <td>20</td>
                          <td>30</td>
                          <td>20</td>
                          <td>0</td>
                          <td>5</td>
                          <td>1</td>
                          <td>24</td>
                          <td>10</td>
                        </tr>

                        <tr style="background:pink">
                          <td>2</td>
                          <td>Taro</td>
                          <td>10</td>
                          <td>50</td>
                          <td>40</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>20</td>
                          <td>20</td>
                        </tr>

                        <tr>
                          <td>3</td>
                          <td>Indomie</td>
                          <td>20</td>
                          <td>40</td>
                          <td>10</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>50</td>
                          <td>10</td>
                        </tr>
                       
                      </tbody>
                    </table>
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

       

        <!-- jQuery -->
        <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js');?>"></script>

        <!-- iCheck -->
        <script src="<?php echo base_url('vendors/iCheck/icheck.min.js');?>"></script>

        <!-- Datatables -->
        <script src="<?php echo base_url('vendors/datatables.net/js/jquery.dataTables.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.flash.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.html5.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/datatables.net-buttons/js/buttons.print.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js');?>"></script>
        <script src="<?php echo base_url('vendors/datatables.net-scroller/js/dataTables.scroller.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/jszip/dist/jszip.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/pdfmake/build/pdfmake.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/pdfmake/build/vfs_fonts.js');?>"></script>

        <!-- bootstrap-datetimepicker -->    
        <script src="<?php echo base_url('vendors/moment/min/moment.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js');?>"></script>

        <script>
          $('#myDatepicker2').datetimepicker({
              format: 'DD-MM-YYYY'
          });

          $('#myDatepicker3').datetimepicker({
              format: 'DD-MM-YYYY'
          });
        </script>

        
