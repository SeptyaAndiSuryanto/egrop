    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <section class="content-header">
              <h3 class="box-title">List Mesin Gresik</h3>
              <ol class="breadcrumb">
                <li class="active"><?php echo date('l d F Y')?></li>
              </ol>
              </section>
            </div>
            <!-- box add data -->
            <!-- Box Total Mesin -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Total <br><?php echo $count;?> Mesin</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-tachometer"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-input">Tambah Mesin Baru <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- /Box Total Mesin -->
            <!-- Box Total Mesin -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Total <br><?php echo $count;?> Mesin</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-tachometer"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-input">Tambah Mesin Baru <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- /Box Total Mesin -->            
            <!-- Box Total Mesin -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Total <br><?php echo $count;?> Mesin</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-tachometer"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-input">Tambah Mesin Baru <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- /Box Total Mesin -->            
            <!-- Box Total Mesin -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Total <br><?php echo $count;?> Mesin</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-tachometer"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-input">Tambah Mesin Baru <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- /Box Total Mesin -->
            <!--  /box add data-->
            <!-- modal input counter -->
            <div class="modal fade" id="modal-input">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Masukan Data Mesin</h4>
                  </div>
                  <div class="modal-body">
                    <!-- form -->
                    <form role="form" action="<?php base_url();?>machine/add_machine" method="post">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="InputMachineName">Nama Mesin</label>
                          <input type="text" class="form-control" id="machine_name" name="machine_name" placeholder="Contoh: Hole In One" required>
                        </div>
                        <div class="form-group">
                          <label for="InputMachineType">Jenis Mesin</label>
                          <input type="text" class="form-control" id="machine_type" name="machine_type" placeholder="Pilih jenis mesin" required>
                        </div>
                        <div class="form-group">
                          <label for="InputMachinePrice">Harga Mesin</label>
                          <input type="number" class="form-control" id="machine_price" name="machine_price" placeholder="Masukkan harga mesin" required>
                        </div>
                        <div class="form-group">
                          <label for="InputMachineStatus">Status Mesin</label>
                          <select class="form-control" name="machine_status" id="machine_status">
                            <option selected= value="0"="">OFF</option>
                            <option selected="selected" value="1"="">ON</option>
                          </select>
                        </div>
                      </div>
                      <!-- /.box-body -->
                    <!-- /.form -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" value="Submit" class="btn btn-primary">Tambah</button>
                  </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
            </div>
            <!-- /.modal input counter -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Mesin</th>
                  <th>Jenis</th>
                  <th>Harga</th>
                  <th>Status</th>
                  <th>Tanggal Ditambahkan</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($machine->result() as $m) {
                    $no=1;
                  ?>
                <tr>
                  <td><?php echo $m->id ;?></td>
                  <td><?php echo $m->name;?></td>
                  <td><?php echo $m->type;?></td>
                  <td><?php echo $m->price;?></td>
                  <td><?php if($m->status==0){echo 'OFF';}else{echo 'ON';}?></td>
                  <td><?php echo $m->date_added;?></td>
                </tr>
                </tbody>
              <?php }?>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Nama Mesin</th>
                  <th>Jenis</th>
                  <th>Harga</th>
                  <th>Status</th>
                  <th>Tanggal Ditambahkan</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      </div>
      <!-- /.row -->
    </section>