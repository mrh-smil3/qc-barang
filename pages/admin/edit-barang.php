

<!-- edit form -->
  <div class="modal fade" id="edit-barang" tabindex="-1" role="dialog" aria-labelledby="edit-barang" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h5 class="">Edit barang</h5>
              </div>
              <div class="card-body">
                <form role="form text-left" method="POST" action="">
                  
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" value="<?php echo $barang->nama_barang; ?>" name="nama_barang" class="form-control" required >
                  </div>
                  <div class="text-center">
                    <button type="submit" name="t-barang" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>