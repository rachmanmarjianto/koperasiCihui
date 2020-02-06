        <!-- page content -->
        <div class="right_col" role="main" style="margin-left:0px">
          <div class="">
            
              <div class="x_content" style="margin:0px">
                <br>
              <!--  <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate=""> -->
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID Anggota
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                        
                        
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Anggota
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" disabled>
                          </div>
                        </div>
                    </div>      
                  </div>
              <!--  </form> -->
              </div>
           

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <input type="text" id="first-name" required="required" class="form-control col-md-12 col-xs-12" placeholder="Enter ITEM CODE or Scan Product" style="background-color:#f5f4f4">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="height:200px; overflow-y:scroll">
                    
                    <table class="table" style="text-align:center">
                      <thead>
                        <tr >
                          <th width="5%" style="text-align:center">No</th>
                          <th width="50%" style="text-align:center">Nama Barang</th>
                          <th width="17%" style="text-align:center">Harga (Rp.)</th>
                          <th width="1%" style="text-align:center"></th>
                          <th width="5%" style="text-align:center">Jumlah</th>
                          <th width="1%" style="text-align:center"></th>
                          <th width="18%" style="text-align:center">Subtotal (Rp.)</th>
                          <th width="3%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Buku</td>
                          <td>10.000</td>
                          <td><i class="fa fa-minus-square fa-lg" style="cursor:pointer"></i></td>
                          <td>2</td>
                          <td><i class="fa fa-plus-square fa-lg" style="cursor:pointer"></td>
                          <td>20.000</td>
                          <td><i class="fa fa-close fa-lg" style="color:red; cursor:pointer"></i></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Krupuk</td>
                          <td>50.000</td>
                          <td><i class="fa fa-minus-square fa-lg" style="cursor:pointer"></i></td>
                          <td>2</td>
                          <td><i class="fa fa-plus-square fa-lg" style="cursor:pointer"></td>
                          <td>100.000</td>
                          <td><i class="fa fa-close fa-lg" style="color:red; cursor:pointer"></i></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Rengginang</td>
                          <td>8.000</td>
                          <td><i class="fa fa-minus-square fa-lg" style="cursor:pointer"></i></td>
                          <td>10</td>
                          <td><i class="fa fa-plus-square fa-lg" style="cursor:pointer"></td>
                          <td>80.000</td>
                          <td><i class="fa fa-close fa-lg" style="color:red; cursor:pointer"></i></td>
                        </tr>
                      </tbody>
                    </table>


                  </div>
                </div>

                <div class="row">
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>Rp. 200.000</td>
                          </tr>
                          <tr>
                            <th>Tax (10%)</th>
                            <td>Rp. 20.000</td>
                          </tr>
                          <tr>
                            <th>Discount:</th>
                            <td>Rp. 20.000</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="jumbotron" style="padding-top:10px; padding-bottom:10px; margin-bottom:0px;">
                      <h4>Total:</h4>
                      <h3 style="text-align:center">Rp. 200.000</h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-7">    
                      <a class="btn btn-app" onclick="lihatHistory()">
                        <i class="fa fa-history"></i> History
                      </a>                    
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5" style="text-align:center">
                      <a class="btn btn-app" >
                        <i class="fa fa-money"></i> Cash
                      </a>

                      <a class="btn btn-app" onclick="kartuDebit()">
                        <i class="fa fa-credit-card"></i> Debit
                      </a>

                      <a class="btn btn-app" >
                        <i class="fa fa-chevron-down"></i> Ovo
                      </a>
                    </div>
                  </div>

                  
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->


        <!-- Modal KArtu Debit -->
        <div class="modal fade" id="idKartuDebit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Pembayaran Kartu Debit</h4>
              </div>
              <div class="modal-body">
                <div class="row" id="debit-1"  style="cursor:pointer" onclick="pilihKartuDebit('debit-1')">
                  <div class="col-md-3 col-sm-3 col-xs-3"></div>
                  <div class="col-md-6 col-sm-6 col-xs-6" style="text-align: center">
                    <img src="<?php echo base_url('images/mandiri-button.png');?>" height="80" width="250">
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"></div>
                </div>
                <div  class="row" id="debit-2" style="cursor:pointer" onclick="pilihKartuDebit('debit-2')">
                  <div class="col-md-3 col-sm-3 col-xs-3"></div>
                  <div class="col-md-6 col-sm-6 col-xs-6" style="text-align: center">
                    <img src="<?php echo base_url('images/bca-button.png');?>" height="90" width="250">
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"></div>
                </div>
              </div>
              <div class="modal-footer">
                <div class="row">
                  <div class="col-md-7 col-sm-7 col-xs-7" style="text-align: center">
                    <input type="text" id="debitMandiri" class="form-control" placeholder="Nomor Kartu" style="background-color:#f5f4f4">
                  </div>
                  <div class="col-md-5 col-sm-5 col-xs-5">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Simpan Transaksi</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal History Transaksi -->
        <div class="modal fade" id="idHistoryTransaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">History Transaksi</h4>
              </div>
              <div class="modal-body">
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
              <div class="modal-footer">
                
                </div>
              </div>
            </div>
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
              <div class="modal-footer">
                
                </div>
              </div>
            </div>
          </div>
        </div>

        



        <script>

        var debitPilih='';
        
        window.onload=function(){
          //********* hrs dipanggil di setiap page ***************
          startTime(); //located in "head_home.php"
          //************************************************** */
        }

        function kartuDebit()
        {
          $('#idKartuDebit').modal('show');
        }

        function lihatHistory()
        {
          $('#idHistoryTransaksi').modal('show');
        }

        function detailHistory(id)
        {
          $('#idHistoryTransaksi').modal('toggle');
          $('#idDetailHistory').modal('show');
        }

        function pilihKartuDebit(id)
        {
        //  alert(id);
          if(debitPilih != '')
          {
            prevEl = document.getElementById(debitPilih);
            prevEl.style.background="";
          }

          debitPilih=id;
          document.getElementById(id).style.background="#e1dddd";
       
        }
         

        </script>
