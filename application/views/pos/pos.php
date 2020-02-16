        <style>
          .inputTable {
            background:transparent; 
            border:none; 
            text-align:center; 
            width:100%
          }

          .inputResume{
            background:transparent; 
            border:none; 
            width:100%
          }

        </style>
        
        <!-- page content -->
        <?php
          $attributes = array("id"=>'myForm');
          echo form_open("C_pos/submitForm", $attributes);
        ?>

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
                    <input type="text" id="idBarcode" required="required" class="form-control col-md-12 col-xs-12" placeholder="Enter ITEM CODE or Scan Product" style="background-color:#f5f4f4" onkeyup="findProduct(event)">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="height:200px; overflow-y:scroll">
                    
                    <table class="table" style="text-align:center" id="idTabelBelanja">
                      <thead>
                        <tr >
                          <th width="52%" style="text-align:center">Nama Barang</th>
                          <th width="11%" style="text-align:center">Harga (Rp.)</th>
                          <th width="2%" style="text-align:center"></th>
                          <th width="5%" style="text-align:center">Jumlah</th>
                          <th width="2%" style="text-align:center"></th>
                          <th width="18%" style="text-align:center">Subtotal (Rp.)</th>
                          <th width="3%"></th>
                        </tr>
                      </thead>
                      <tbody id="listBelanjaBody">
                        
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
                            <td id="idsubtotalBelanja">Rp. 0</td>
                          </tr>
                          <tr>
                            <th>Tax (10%)</th>
                            <td id="idTax">Rp. 0</td>
                          </tr>
                          <tr>
                            <th>Discount:</th>
                            <td id="idDiskon">Rp. 0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="jumbotron" style="padding-top:10px; padding-bottom:10px; margin-bottom:0px;">
                      <h4>Total:</h4>
                      <h3 style="text-align:center" id="idTotal">Rp. 0</h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-7">    
                      <a class="btn btn-app" onclick="lihatHistory()">
                        <i class="fa fa-history"></i> History
                      </a>                    
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5" style="text-align:center">
                      <a class="btn btn-app" onclick="submitPosCash()">
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
        
        <input type="hidden" name="totalBelanja" id="idTotalBelanja" value="0">
        <input type="hidden" name="taxVal" id="idTaxVal" value="0">
        <input type="hidden" name="diskonVal" id="idDiskonVal" value="0">
        <input type="hidden" name="subtotalBelanjaVal" id="idsubtotalBelanjaVal" value="0">

        <?php
          echo form_close();
        ?>

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


        <!-- Modal Barang tidak ditemukan -->
        <div class="modal fade" id="modalProdNotFound" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">

          <!-- Change class .modal-sm to change the size of the modal -->
          <div class="modal-dialog modal-md" role="document">


            <div class="modal-content">
              
              <div class="modal-body">
                <h1 style="text-align:center;color:red">Produk Tidak Ditemukan</h1>
              </div>
              <div class="modal-footer">

                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal" id="idButtonCloseNotFound">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Barang tidak ditemukan -->


        <!-- Modal Pilihan Product -->
        <div class="modal fade" id="idPilihProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Pilih Product</h4>
              </div>
              <div class="modal-body">
                <table class="table table-hover" style="text-align:center">
                  <thead>
                    <tr >
                      <th width="60%" style="text-align:center">Nama</th>
                      <th width="40%" style="text-align:center">Harga</th>
                    </tr>
                  </thead>
                  <tbody id="idBodyPilihProduct">
                    <tr style="cursor:pointer" onclick="detailHistory('TR0000001')">
                      <td>Jajan 1</td>
                      <td>100.000</td>
                    </tr>
                    <tr style="cursor:pointer" onclick="detailHistory('TR0000001')">
                      <td>Jajan 2</td>
                      <td>200.000</td>
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
        <!-- Modal Pilihan Product -->
        
        <!-- konversi Ke Rupiah -->
        <script src="<?php echo base_url('vendors/konversiRupiah/konversiRupiah.js');?>"></script>


        <script>

        var debitPilih='';
        var taxActive=1;
        var cart = new Array();
        var pilihanProduct;
        var curCol = 0;
        
        window.onload=function(){
          //********* hrs dipanggil di setiap page ***************
          startTime(); //located in "head_home.php"
          //************************************************** */
          document.getElementById('idBarcode').value='';
          document.getElementById('idTotalBelanja').value=0;
          document.getElementById('idTaxVal').value=0;
          document.getElementById('idDiskonVal').value=0;
          document.getElementById('idsubtotalBelanjaVal').value=0;
        }

        function findProduct(event)
        {
          if(event.keyCode==13)
          {
            var barcode = document.getElementById('idBarcode').value;
            url = 'C_pos/findProduct';
 
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
              //jika berhasil
              if(this.readyState==4 && this.status == 200)
              {
                document.getElementById('idBarcode').value='';
                if(this.responseText != -1)
                {
                  var product = JSON.parse(this.responseText);
                  
                  if(product.length==1)
                  {
      /*              if(product[0].barcode in cart)
                    {
                      var id = cart[product[0].barcode];
                      document.getElementById(id).childNodes[7].childNodes[0].value++;
                    }
                    else
                    { 
                      var idcol = 'col'+curCol;
                      cart[product[0].barcode] = idcol;
                      
                      curCol++;
                      
                      var isi ='\
                        <tr id="'+idcol+'">\
                          <td>Buku</td>\
                          <td><input type="text" name="jualHargaSatuan[]" value="'+convertToRupiah(product[0].harga_jual)+'" class="inputTable"></td>\
                          <td><i class="fa fa-minus-square fa-lg" style="cursor:pointer" onclick="kurangQuantity(\''+idcol+'\')"></i></td>\
                          <td><input type="text" name="jualQty[]" value="1" class="inputTable"></td>\
                          <td><i class="fa fa-plus-square fa-lg" style="cursor:pointer" onclick="tambahQuantity(\''+idcol+'\')"></td>\
                          <td><input type="text" name="jualSubtotal[]" value="'+convertToRupiah(product[0].harga_jual)+'" class="inputTable" ></td>\
                          <td><i class="fa fa-close fa-lg" style="color:red; cursor:pointer" onclick="hapusEntry(\''+idcol+'\')"></i></td>\
                        </tr>\
                      ';
                      updateResume(parseInt(product[0].harga_jual), 1);
                      document.getElementById('listBelanjaBody').innerHTML += isi;
                    }               
      */            
                    tambahKeCart(product[0].nama, product[0].barcode, product[0].harga_jual);
                  }
                  else
                  {
                    pilihanProduct = product;
                    var isi='';
                    for(var i=0; i<product.length; i++)
                    {
                      isi +='\
                      <tr style="cursor:pointer" onclick="clickPilihProduct(\''+i+'\')">\
                        <td>'+product[i].nama+'</td>\
                        <td> Rp. '+convertToRupiah(parseInt(product[i].harga_jual))+'</td>\
                      </tr>\
                      ';
                    }

                    document.getElementById('idBodyPilihProduct').innerHTML = isi;                    

                    $('#idPilihProduct').modal('show');
                    console.log(this.responseText);

                  }
                }
                else
                {
                  document.getElementById('idButtonCloseNotFound').focus();
                  $('#modalProdNotFound').modal('show');                  
                }
              }
              
            }

            xhttp.open("POST", url, true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("barcode="+barcode);
          }          
          
        }

        function clickPilihProduct(index)
        {
          $('#idPilihProduct').modal('hide');
          tambahKeCart(pilihanProduct[index].nama, pilihanProduct[index].barcode, pilihanProduct[index].harga_jual);
        }

        function tambahKeCart(nama, barcode, harga_jual)
        {
          if(barcode in cart)
          {
            var id = cart[barcode];
            tambahQuantity(id);
          }
          else
          { 
            var idcol = 'col'+curCol;
            cart[barcode] = idcol;
            
            curCol++;

            var table = document.getElementById('idTabelBelanja').getElementsByTagName('tbody')[0];
            var row = table.insertRow(table.rows.length);
            row.setAttribute('id', idcol);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);

            cell1.innerHTML = nama+'<input type="hidden" name="product[]" value="'+barcode+'">';
            cell2.innerHTML = '<input type="text" name="jualHargaSatuan[]" value="'+convertToRupiah(harga_jual)+'" class="inputTable" readonly>';
            cell3.innerHTML = '<i class="fa fa-minus-square fa-lg" style="cursor:pointer" onclick="kurangQuantity(\''+idcol+'\')"></i>';
            cell4.innerHTML = '<input type="text" name="jualQty[]" value="1" class="inputTable" readonly></td>';
            cell5.innerHTML = '<i class="fa fa-plus-square fa-lg" style="cursor:pointer" onclick="tambahQuantity(\''+idcol+'\')">';
            cell6.innerHTML = '<input type="text" name="jualSubtotal[]" value="'+convertToRupiah(harga_jual)+'" class="inputTable" readonly>';
            cell7.innerHTML = '<i class="fa fa-close fa-lg" style="color:red; cursor:pointer" onclick="hapusEntry(\''+idcol+'\')">';
            

            
  /*          var isi ='\
              <tr id="'+idcol+'">\
                <td>'+nama+'<input type="hidden" name="product[]" value="'+barcode+'"></td>\
                <td><input type="text" name="jualHargaSatuan[]" value="'+convertToRupiah(harga_jual)+'" class="inputTable"></td>\
                <td><i class="fa fa-minus-square fa-lg" style="cursor:pointer" onclick="kurangQuantity(\''+idcol+'\')"></i></td>\
                <td><input type="text" name="jualQty[]" value="1" class="inputTable"></td>\
                <td><i class="fa fa-plus-square fa-lg" style="cursor:pointer" onclick="tambahQuantity(\''+idcol+'\')"></td>\
                <td><input type="text" name="jualSubtotal[]" value="'+convertToRupiah(harga_jual)+'" class="inputTable" ></td>\
                <td><i class="fa fa-close fa-lg" style="color:red; cursor:pointer" onclick="hapusEntry(\''+idcol+'\')"></i></td>\
              </tr>\
            ';
  */
            updateResume(parseInt(harga_jual), 1);
            //document.getElementById('listBelanjaBody').innerHTML += isi;
          }
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

        function kurangQuantity(id)
        {
          var el = document.getElementById(id);
          var subTotalEl = el.childNodes[5].childNodes[0];
         

          updateResume(convertToAngka(subTotalEl.value),0);
          
          var quantityEl = el.childNodes[3].childNodes[0]; //quantity is the 0th childnode of childNodes index 7 
          var newQuantity = quantityEl.value - 1;
          if(newQuantity >= 0)
          {
            quantityEl.value = newQuantity;
            var harga = convertToAngka(el.childNodes[1].childNodes[0].value);
            var subtotal = harga * newQuantity;

            subTotalEl.value = convertToRupiah(subtotal);
            
            updateResume(subtotal,1);
          }
  
        }

        function tambahQuantity(id)
        {
          var el = document.getElementById(id);
          var subTotalEl = el.childNodes[5].childNodes[0];
          updateResume(convertToAngka(subTotalEl.value),0);
          
          var quantityEl = el.childNodes[3].childNodes[0]; //quantity is the 0th childnode of childNodes index 7 
          var newQuantity = parseInt(quantityEl.value) + 1;
          
          quantityEl.value = newQuantity;
          var harga = convertToAngka(el.childNodes[1].childNodes[0].value);
          var subtotal = harga * newQuantity;

          subTotalEl.value = convertToRupiah(subtotal);
 
          updateResume(subtotal,1);
          
        }

        /*
        * flag 0 --> kurang
        * flag 1 --> tambah
        */
        function updateResume(val, flag)
        {
          var totalBel = document.getElementById('idTotalBelanja').value;
          var subtotalEl = document.getElementById('idsubtotalBelanjaVal');
          var tax = document.getElementById('idTaxVal');
          var Diskon = document.getElementById('idDiskonVal').value;
          var subTotalVal=0;
          var taxVal = 0;
          if(flag==0)
            subTotalVal= parseInt(subtotalEl.value) - val;
          else
            subTotalVal= parseInt(subtotalEl.value) + val;

          if(taxActive==1)
          {
            taxVal = subTotalVal / 10;
          }

          totalBel = subTotalVal + taxVal - Diskon;

          subtotalEl.value=subTotalVal;
          document.getElementById('idTotalBelanja').value=totalBel;
          tax.value = taxVal;
          
          document.getElementById('idTotal').innerHTML = 'Rp. '+convertToRupiah(totalBel);
          document.getElementById('idTax').innerHTML = 'Rp. '+convertToRupiah(taxVal);
          document.getElementById('idsubtotalBelanja').innerHTML = 'Rp. '+convertToRupiah(subTotalVal);
        }

        function hapusEntry(id)
        {
          var i=0;
          for(var key in cart)
          {            
            if(cart[key] === id)
            {
              
              delete cart[key];
              break;
            }
            i++;
          }
                    
          var subTotal = document.getElementById(id).childNodes[5].childNodes[0].value;
          updateResume(convertToAngka(subTotal), 0)
          
          document.getElementById(id).remove();
        }

        function submitPosCash()
        {
          document.getElementById('myForm').submit();
        }
         

        </script>
