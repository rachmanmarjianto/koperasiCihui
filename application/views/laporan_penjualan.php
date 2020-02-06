        <!-- bootstrap-datetimepicker -->
        <link href="<?php echo base_url('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css');?>" rel="stylesheet">  

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Laporan Penjualan</h3>
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
                    <table class="table table-hover" style="text-align:center">
                      <thead>
                        <tr >
                          <th width="4%" style="text-align:center">No</th>
                          <th width="32%" style="text-align:center">Timestamp</th>
                          <th width="32%" style="text-align:center">ID Transaksi</th>
                          <th width="32%" style="text-align:center">Nilai</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr style="cursor:pointer" onclick="detailHistory('TR0000001')">
                          <td>1</td>
                          <td>2020-01-10 8:20</td>
                          <td>TR0000001</td>
                          <td>100.000</td>
                        </tr>
                        <tr style="cursor:pointer" onclick="detailHistory('TR0000001')">
                          <td>2</td>
                          <td>2020-01-10 10:22</td>
                          <td>TR0000002</td>
                          <td>200.000</td>
                        </tr>
                        <tr style="cursor:pointer" onclick="detailHistory('TR0000001')">
                          <td>3</td>
                          <td>2020-01-10 10:32</td>
                          <td>TR0000003</td>
                          <td>300.000</td>
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

        <!-- Modal Detail History Transaksi -->
        <div class="modal fade" id="idDetailHistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">History Transaksi</h4>
              </div>
              <div class="modal-body">
                ID Transaksi  : TR0000001 <br>
                TimeStamp     : 2020-01-10 10:32
                <table class="table table-hover" style="text-align:center">
                  <thead>
                    <tr >
                      <th width="5%" style="text-align:center">No</th>
                      <th width="70%" style="text-align:center">Item</th>
                      <th width="10%" style="text-align:center">Harga</th>
                      <th width="5%" style="text-align:center">Jumlah</th>
                      <th width="10%" style="text-align:center">Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr >
                      <td>1</td>
                      <td>Buku</td>
                      <td>10.000</td>
                      <td>3</td>
                      <td>30.000</td>
                    </tr>
                    <tr  >
                      <td>2</td>
                      <td>Permen</td>
                      <td>5.000</td>
                      <td>10</td>
                      <td>50.000</td>
                    </tr>
                    <tr  >
                      <td>3</td>
                      <td>donut</td>
                      <td>10.000</td>
                      <td>2</td>
                      <td>20.000</td>
                    </tr>
                    
                    <tr style="background: #f2f0f0">
                      <td colspan="2"><strong>Subtotal :</strong></td>
                      <td ><strong>100.000</strong></td>
                      <td colspan="2" rowspan="3" style="vertical-align:middle"><strong>Total: 100.000</strong></td>
                    </tr>
                    <tr style="background: #f2f0f0">
                      <td colspan="2"><strong>Tax (10%) :</strong></td>
                      <td ><strong>10.000</strong></td>
                    </tr>
                    <tr style="background: #f2f0f0">
                      <td colspan="2"><strong>Discount :</strong></td>
                      <td ><strong>10.000</strong></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>

        <!-- jQuery -->
        <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js');?>"></script>

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

          function detailHistory(id)
          {
            $('#idDetailHistory').modal('show');
          }
        </script>
