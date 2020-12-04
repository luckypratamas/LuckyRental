<div class="container" mt-5 mb-5>
	<div class="card" style="margin-top: 30%; margin-bottom: 30%">
		<div class="card-body">
			<?php foreach($detail as $dt) : ?>
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo base_url('assets/upload/'.$dt->gambar)?>"style="width: 80%">
					</div>
					<div class="col-md-6">
						<table class="table ml-3 table-respondsive">
							<tr>
								<th>Merk</th>
								<td><?php echo $dt->merk ?></td>
							</tr>
							<tr>
								<th>No Plat</th>
								<td><?php echo $dt->no_plat ?></td>
							</tr>
							<tr>
								<th>Warna</th>
								<td><?php echo $dt->warna ?></td>
							</tr>
							<tr>
								<th>Tahun</th>
								<td><?php echo $dt->tahun ?></td>
							</tr>
							<tr>
								<th>Status</th>
								<td><?php
                 				   if($dt->status == "0"){
                   				     echo "<span class='badge badge-danger'>
                	 		         Tidak Tersedia
                    			     </span>";
                   				 }else{
                      			  echo "<span class='badge badge-success'>
                      			  Tersedia
                      			  </span>";
				                    }
								?></td>
								</tr>
								<tr>
								<td>
									<?php 
                if($dt->status =="0"){
                  echo "<span class='btn btn-danger' disable>Telah di Sewa</span>";
                }else{
                  echo anchor('customer/rental/tambah_rental'.$dt->id_mobil,'<button class="btn btn-success">Sewa</button>');
                }
                 ?>
								</td>
								</tr>
						</table>
					</div>
				</div>
			<?php endforeach;?>
			 
		</div>
	</div>
</div>