<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Invoice</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('adminpanel/dashboard'); ?>">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Invoice</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<div class="mb-3">
							<h4 class="text-blue h4">List of Invoice</h4>
						</div>
						<div class="d-flex align-items-center">
							<label class="mr-2">Filter By Date</label>
							<input type="date" class="form-control" id="filterDate" style="max-width: 150px;">
						</div>
					</div>
					<div class="pb-20">
						<table class="data-table-export table multiple-select-row hover nowrap" id="invoiceTable">
							<thead>
								<tr>
									<tr>
										<th class="table-plus datatable-nosort">#</th>
										<th>Date</th>
										<th>Invoice</th>
										<th>Item Code</th>
										<th>Item Price</th>
										<th>Quantity</th>
										<th>Total Price</th>
									</tr>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1 ?>
								<?php foreach($get_data as $items) { ?>
								<tr>
										<td><?= $i++ ?></td>
										<td><?= $items->waktuTransaksi ?></td>
										<td><?= $items->kodeInvoice?></td>
										<td><?= $items->kodeBarang?>
										<small>(<?= $items->namaBarang?>)</small>
										</td>
										<td>Rp <?= number_format($items->harga,2)?></td>
										<td><?= $items->qty?></td>
										<td><?= $items->harga * $items->qty ?></td>
									</tr>
									<?php } ?>
							</tbody>
						</table>
					</div>
                    
				</div>
				<!-- Simple Datatable End -->

				<script>
    $(document).ready(function() {
        $('#filterDate').on('change', function() {
            var selectedDate = $(this).val();
            if (selectedDate) {
                $('#invoiceTable tbody tr').each(function() {
                    var row = $(this);
                    var rowDate = row.find('td:eq(1)').text().split(' ')[0]; 
                    if (rowDate === selectedDate) {
                        row.show();
                    } else {
                        row.hide();
                    }
                });
            } else {
                $('#invoiceTable tbody tr').show(); 
            }
        });
    });
</script>
