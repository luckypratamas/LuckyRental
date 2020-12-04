<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-8">
			<div class="card" style="margin-top:140px">
				<div class="card-header alert alert-warning">
					Invoice Pembayaran Anda
				</div>
				<div class="card-body">
					<table class="table">
						<?php foreach($transaksi as $tr) : ?>
							<tr>
								<th>Merk</th>
								<td>:</td>
								<td><?php echo $tr->merk ?></td>
							</tr>
							<tr>
								<th>Tanggal Rental</th>
								<td>:</td>
								<td><?php echo $tr->tanggal_rental ?></td>
							</tr>
							<tr>
								<th>Tanggal Kembali</th>
								<td>:</td>
								<td><?php echo $tr->tanggal_kembali ?></td>
							</tr>
							<tr>
								<th>Biaya Sewa/Hari</th>
								<td>:</td>
								<td>Rp.<?php echo number_format($tr->harga,0,',','.')  ?></td>
							</tr>
							<tr>
								<?php 
								$x = strtotime($tr->tanggal_kembali);
								$y  = strtotime($tr->tanggal_rental);
								$z  = abs(($x - $y )/(60*60*24));
								 ?>
								<th>Jumlah Hari Sewa</th>
								<td>:</td>
								<td><?php echo $z  ?> Hari</td>
							</tr>
							<tr class="text-sucess">
						
								<th>Jumlah Pembayaran</th>
								<td>:</td>
								<td><button class ="btn btn-sm btn-success">Rp.<?php echo number_format($tr->harga*$z,0,',','.')  ?></button></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><a href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental )?>" class="btn btn-sm btn-secondary">Print Invoice</a></td>
							</tr>
						
						<?php endforeach;  ?>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card"style="margin-top:140px">
			<div class="card-header alert alert-primary" >
				Informasi Pembayaran
			</div>
			<div class="card-body">
				<p class="text-sucess mb-3">Silahkan Melakukan Pembayaran Melalui Nomor Rekening Dibawah ini : </p>
				  <ul class="list-group list-group-horizontal-lg">
				  <li class="list-group-item">BANK BRI 65601016367508 A/N LUCKY PRATAMA</li>
				</ul>
				<?php
				if (empty($tr->bukti_pembayaran)) { ?>
					<button style="width: 100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">
					  Upload Bukti Pembayaran
					</button>
				<?php }elseif($tr->status_pembayaran == '0'){ ?>
					<button style="width: 100%" class="btn btn-sm btn-warning mt-3">
						<i class="fa fa-clock-o"></i>
					  Menunggu Konfirmasi
					</button>
				<?php }elseif($tr->status_pembayaran == '1'){?>
					<button style="width: 100%" class="btn btn-sm btn-success mt-3">
						<i class="fa fa-check-o"></i>
					  Success
					</button>
				<?php } ?>
			</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal buat Upload Bukti Pembayaran Bos Ku -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
        	<input type="hidden" name="id_rental" class="form-control" value="<?php echo $tr->id_rental ?>">
        	<label>Upload Bukti Pembayaran</label>
        	<input type="file" name="bukti_pembayaran" class="form-control">
        </div>	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-sm btn-success">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>		