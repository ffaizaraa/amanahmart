<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="d-flex justify-content-between">
							<div>
								<div class="title">
									<h4>Sale Of Goods</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="<?php echo site_url('adminpanel/dashboard'); ?>">Dashboard</a></li>
										<li class="breadcrumb-item active" aria-current="page">Sale Of Goods</li>
									</ol>
								</nav>
							</div>
							<div>
								<?php $k = rand() ?>
							</div>
							<div>
								Total Pembayaran 
								<h1 id="totalPayment">Rp.0</h1>
							</div>
						</div>
						</div>
					</div>
				</div>
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
								<div class="form-group row px-2">
									<label class="form-label">Item Code</label>
										<select class="form-control" id="kodeBarangSelect">
											<option>Select Item Code</option>
											<?php foreach($barang as $items) { ?>
												<?php if($items->stokBarang > 0) { ?>
													<option value="<?= $items->kodeBarang ?>""><?= $items->kodeBarang ?></option>
												<?php } ?>
											<?php } ?>
										</select>
								</div>
						</div>
						<div class="col-md-6 col-sm-12">
								<div class="form-group row px-2">
									<label class="form-label">Product Name</label>
										<input  id="namaBarangInput" type="text" class="form-control" disabled>
								</div>
						</div>
						<div class="col-md-6 col-sm-12">
								<div class="form-group row px-2">
									<label class="form-label">Product Price</label>
										<input  id="hargaBarangInput" type="text" class="form-control" disabled>
								</div>
						</div>
						<div class="col-md-6 col-sm-12">
								<div class="form-group row px-2">
									<label class="form-label">Quantity</label>
										<input  id="qty" type="number" class="form-control">
								</div>
						</div>
						<div class="col-md-8 col-sm-12">
								<button class="btn btn-primary" id="addButton">Add Item</button>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">List of Sales</h4>
					</div>
					<div class="pb-20">
						<table class=" table stripe hover nowrap" id="productTable">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Item Code</th>
									<th>Item Name</th>
									<th>Quantity</th>
                                    <th>Selling Price</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
                           
							</tbody>
						</table>
                        <div class="col-md-6 col-sm-12 text-left">
							<div>
								<button class="btn btn-primary" id="payButton">Bayar</button>
							</div>
						</dibu>
					</div>
				</div>



				<script>
					 $(document).ready(function() {
            $('#kodeBarangSelect').change(function() {
                var kodeBarang = $(this).val();
                if (kodeBarang) {
                    $.ajax({
                        url: '<?= base_url("Testing/getNamaBarang") ?>',
                        type: 'POST',
                        data: {kodeBarang: kodeBarang},
                        success: function(response) {
                            var data = JSON.parse(response);
                            if (data) {
                                $('#namaBarangInput').val(data.namaBarang);
                                $('#hargaBarangInput').val(data.hargaJual); // Assuming you have a hargaBarang field
                            } else {
                                $('#namaBarangInput').val('');
								$('#hargaBarangInput').val('');
                            }
                        }
                    });
                } else {
                    $('#namaBarangInput').val('');
                }
            });

            $('#addButton').click(function() {
                var kodeBarang = $('#kodeBarangSelect').val();
                var namaBarang = $('#namaBarangInput').val();
                var qty = $('#qty').val();
                var harga = $('#hargaBarangInput').val(); // Assuming you have a hargaBarang field

                if (kodeBarang && namaBarang && qty && harga) {
                    var newRow = `<tr>
                        <td>${kodeBarang}</td>
                        <td>${namaBarang}</td>
                        <td>${qty}</td>
                        <td>${harga}</td>
                        <td>
                            <button class="delete btn btn-danger">Delete</button>
                        </td>
                    </tr>`;
                    $('#productTable tbody').append(newRow);

                    // Calculate and update total payment
                    var currentTotal = parseInt($('#totalPayment').text().replace(/[^0-9]/g, '')) || 0;
                    var newTotal = currentTotal + (harga * qty);
                    $('#totalPayment').text('Rp. ' + newTotal.toLocaleString());

                    // Clear input fields
                    $('#kodeBarangSelect').val('');
                    $('#namaBarangInput').val('');
                    $('#hargaBarangInput').val('');
                    $('#qty').val('');
                } else {
                    alert('Please fill all fields');
                }
            });

            // Handle delete action
            $(document).on('click', '.delete', function() {
                var row = $(this).closest('tr');
                var harga = parseInt(row.find('td:eq(2)').text());
                var qty = parseInt(row.find('td:eq(3)').text());
                var currentTotal = parseInt($('#totalPayment').text().replace(/[^0-9]/g, '')) || 0;
                var newTotal = currentTotal - (harga * qty);
                $('#totalPayment').text('Rp. ' + newTotal.toLocaleString());

                row.remove();
            });

           

			$('#payButton').click(function () {
                        var transactionDetails = [];
                        $('#productTable tbody tr').each(function () {
                            var row = $(this);
                            var kodeBarang = row.find('td:eq(0)').text();
                            var namaBarang = row.find('td:eq(1)').text();
                            var qty = parseInt(row.find('td:eq(2)').text());
                            var harga = parseInt(row.find('td:eq(3)').text());

                            transactionDetails.push({
                                kodeBarang: kodeBarang,
                                namaBarang: namaBarang,
                                qty: qty,
                                harga: harga
                            });
                        });

                        var totalPayment = parseInt($('#totalPayment').text().replace(/[^0-9]/g, '')) || 0;
                        var kodeInvoice = <?= $k ?>;

                        if (transactionDetails.length > 0) {
                            $.ajax({
                                url: '<?= base_url("Kasir/saveTransaction") ?>',
                                type: 'POST',
                                data: {
                                    totalPayment: totalPayment,
                                    kodeInvoice: kodeInvoice,
                                    transactionDetails: transactionDetails
                                },
                                success: function (response) {
                                    alert('Transaction saved successfully');
                                    // Clear the table and total payment
                                    $('#productTable tbody').empty();
                                    $('#totalPayment').text('Rp. 0');
									
                                },
                                error: function (error) {
                                    alert('Error saving transaction');
                                }
                            });
                        } else {
                            alert('No items to pay for');
                        }
                    });
        });
				</script>
				<!-- Simple Datatable End -->
