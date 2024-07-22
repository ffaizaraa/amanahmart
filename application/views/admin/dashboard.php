<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="<?php echo base_url('assets/vendors/images/bg-dashboard.svg');?>" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue">Admin!</div>
						</h4>
						<p class="font-18 max-width-600">Welcome back! We're delighted to see you again in the dashboard. Here, you can easily manage users and content, track site performance, and view the latest reports. Feel free to customize the settings to suit your needs. If you need any assistance or have any questions, our support team is always ready to help. Thank you for your dedication and hard work!</p>
					</div>
				</div>
			</div>
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">Best Selling Products</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Product</th>
							<th>Item Name</th>
							<th>Item Stocks</th>
							<th>Price</th>
							<th>Category</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($barang as $val){?>
						<tr>
							<td class="table-plus">
								<img src="<?php echo base_url('assets/product-image/'.$val->gambarBarang); ?>" width="70" height="70" alt="">
							</td>
							<td>
								<h5 class="font-16"><?php echo $val->namaBarang; ?></h5>
							</td>
							<td><?php echo $val->stokBarang; ?></td>
							<td><?php echo $val->hargaJual; ?></td>
							<td><?php echo $val->namaKategori; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>