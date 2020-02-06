        <!-- iCheck -->
        <link href="<?php echo base_url('vendors/iCheck/skins/flat/green.css');?>" rel="stylesheet">
        
        

        <!-- bootstrap-datetimepicker -->
        <link href="<?php echo base_url('vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css');?>" rel="stylesheet">  

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />


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
                <h3>Pengadaan Barang</h3>
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
                      <div class="col-md-2 col-sm-2 col-xs-2" style="text-align:right">
                        <label class="control-label:" style="margin-top:5px">No Faktur:</label>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-10">
                        <input type="text" class="form-control">
                      </div>  
                      <div class="col-md-4 col-sm-4">
                      </div>  
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-2 col-sm-2 col-xs-2" style="text-align:right">
                        <label class="control-label:" style="margin-top:5px">Supplier:</label>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-10">
                        <select class="selectpicker" data-show-subtext="true" data-live-search="true" style="width:100%">
                          <option data-subtext="Supp Obat">SAKAJAYA</option>
                          <option data-subtext="Snack">CV SUKA MAJU</option>
                          <option data-subtext="Minuman">CV SUKA MAJU 2</option>
                          <option data-subtext="Nasi Bungkus">BU TITIN</option>
                          <option data-subtext="Snack">PT DON</option>
                          <option data-subtext="Snack" disabled="disabled">CV SUKA NIPU</option>
                        </select>
                      </div>  
                      <div class="col-md-4 col-sm-4">
                      </div>      
                    </div>


                    <hr>
                    <label class="control-label:" >Detail Barang</label>
                    <div class="row">
                      
                      <div class="col-md-2 col-sm-2 col-xs-12">
                        
                        <input type="text" class="form-control" placeholder="ID Barang">
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control" placeholder="Nama Barang" width="100%">
                      </div>

                      <div class="col-md-1 col-sm-1 col-xs-12">
                        <input type="text" class="form-control" placeholder="Jumlah" style="padding-right:5px">
                      </div>
                      
                      <div class="col-md-2 col-sm-2 col-xs-12">
                        <input type="text" class="form-control" placeholder="Pajak">
                      </div>

                      <div class="col-md-2 col-sm-2 col-xs-12">
                        <input type="text" class="form-control" placeholder="Harga" >
                      </div>
                      
                      <div class="col-md-1 col-sm-1 col-xs-12" style="text-align: center;">
                        <button type="button" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                    <hr>

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="5%">No</th>
                          <th width="15%">Id Barang</th>
                          <th width="35%">Nama Barang</th>
                          <th width="5%">Jumlah</th>
                          <th width="10%">pajak</th>
                          <th width="13%">Harga</th>
                          <th width="13%">Subtotal</th>
                          <th width="4%">#</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table>

                    
                    <div class="row">
                      <div class="col-md-8 col-sm-8 col-xs-8">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <th style="width:50%">Subtotal:</th>
                                <td>Rp. 0</td>
                              </tr>
                              <tr>
                                <th>Pajak: </th>
                                <td>Rp. 0</td>
                              </tr>
                              <tr>
                                <th>Discount:</th>
                                <td>Rp. 0</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="jumbotron" style="padding-top:10px; padding-bottom:10px; margin-bottom:0px;">
                          <h4>Total:</h4>
                          <h3 style="text-align:center">Rp. 0</h3>
                        </div>
                        <br>
                        <button type="button" class="btn btn-success btn-lg" style="width:100%">Simpan Faktur</button>
                      </div>
                      

                      
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

       

        <!-- jQuery -->
        <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js');?>"></script>

        <!-- iCheck -->
        <script src="<?php echo base_url('vendors/iCheck/icheck.min.js');?>"></script>

        

        <!-- bootstrap-datetimepicker -->    
        <script src="<?php echo base_url('vendors/moment/min/moment.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js');?>"></script>

        <!-- select picker -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

        <script>
          $('#myDatepicker2').datetimepicker({
              format: 'DD-MM-YYYY'
          });

          $('#myDatepicker3').datetimepicker({
              format: 'DD-MM-YYYY'
          });
        </script>

        
