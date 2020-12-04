					<table style="width: 80%">
						<h3>Invoice Anda</h3>
						<?php foreach($transaksi as $tr) : ?>
							<tr>
								<td>
									Nama Customer
								</td>
								<td>:</td>
								<td>
									<?php echo $tr->nama ?>
								</td>
							</tr>
							<tr>
								<td>Merk</td>
								<td>:</td>
								<td><?php echo $tr->merk ?></td>
							</tr>
							<tr>
								<td>Tanggal Rental</td>
								<td>:</td>
								<td><?php echo $tr->tanggal_rental ?></td>
							</tr>
							<tr>
								<td>Tanggal Kembali</td>
								<td>:</td>
								<td><?php echo $tr->tanggal_kembali ?></td>
							</tr>
							<tr>
								<td>Biaya Sewa/Hari</td>
								<td>:</td>
								<td>Rp.<?php echo number_format($tr->harga,0,',','.')  ?></td>
							</tr>
							<tr>
								<?php 
								$x = strtotime($tr->tanggal_kembali);
								$y  = strtotime($tr->tanggal_rental);
								$z  = abs(($x - $y )/(60*60*24));
								 ?>
								<td>Jumlah Hari Sewa</td>
								<td>:</td>
								<td><?php echo $z  ?> Hari</td>
							</tr>
							<tr>
								<td>Status Pembayaran</td>
								<td>:</td>
								<td><?php 
								if ($tr->status_pembayaran =='0') {
								 	echo "Belum Lunas";
								 }else{
								 	echo "Lunas";
								 }?>
								 </td>
							</tr>
							<tr>
								<td>Rekening Pembayaran</td>
								<td>:</td>
								<td>
									<ul>
										<li>BANK BRI 65601016367508 A/N LUCKY PRATAMA</li>
									</ul>
								</td>
							</tr>
							<tr style="font-weight: bold; color: red;">
						
								<td>Jumlah Pembayaran</td>
								<td>:</td>
								<td>Rp.<?php echo number_format($tr->harga*$z,0,',','.')  ?></td>
							</tr>
						
						<?php endforeach;  ?>
					</table>


<script type="text/javascript">
	window.print();
</script>