   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <section class="content-header">
              <h3 class="box-title"><strong>Data Operational Mesin Redemption</strong></h3>
              <ol class="breadcrumb">
                <li class="active"><?php echo date('l d F Y')?></li>
                <button type="button" name="button"><a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-input">Change <i class="fa fa-arrow-circle-right"></i></a></button>
              </ol>
              </section>
            </div>
            <!-- box add data -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $count_added;?> Mesin</h3>
                  <p>telah ditambahkan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-plus"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-input">Input Data Meteran <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!--  /box add data-->
            <!-- box meteran tetap  -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $count_notadded;?> Mesin</h3>
                  <p>belum ditambahkan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-warning"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat daftar mesin <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- /.box meteran tetap -->
            <!-- modal input counter -->
            <div class="modal fade" id="modal-input">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Masukan Data Meteran</h4>
                  </div>
                  <div class="modal-body">
                    <!-- form -->
                    <form role="form" action="<?php echo base_url();?>Operational/add_counter" method="post">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="InputMachineName">Nama Mesin</label>
                          <select class="cari form-control" style="width: 100%;" name="id_machine" id="id_machine"></select>
                        </div>
                        <div class="form-group">
                          <label for="InputSwipeCounter">Counter Swipe</label>
                          <input type="number" class="form-control" id="counter_swipe" name="counter_swipe" placeholder="Masukkan Nomor Sesuai Dengan Meteran Swipe" required/>
                        </div>
                        <div class="form-group">
                          <label for="InputTicketCounter">Counter Ticket"</label>
                          <input type="number" class="form-control" id="counter_ticket" name="counter_ticket" placeholder="Masukkan Nomor Sesuai Dengan Meteran Tiket" required/>
                        </div>
                      </div>
                      <!-- /.box-body -->
                    <!-- /.form -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" value="Submit" class="btn btn-primary">Kirim</button>
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
                  <th>No</th>
                  <th>Nama Mesin</th>
                  <!-- <th>Harga</th> -->
                  <th>Counter Swipe</th>
                  <th>Counter Ticket</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  foreach ($opr->result() as $o) {
                  ?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $o->name;?></td>
                  <!-- <td><?php echo $o->price;?></td> -->
                  <td><?php echo $o->swipe;?></td>
                  <td><?php echo $o->ticket;?></td>
                </tr>
                </tbody>
              <?php }?>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Mesin</th>
                  <!-- <th>Harga</th> -->
                  <th>Counter Swipe</th>
                  <th>Counter Ticket</th>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
    $('.cari').select2({
        placeholder: 'Masukan Nama Mesin...',
        ajax: {
        url: '<?php echo base_url();?>Operational/machine_autocomplete',
        dataType: 'json',
        delay: 250,
        processResults: function (data) {
            return {
            results:  $.map(data, function (item) {
                return {
                text: item.name,
                id: item.id
                }
            })
            };
        },
        cache: true
        }
    });
    </script>