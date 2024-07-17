<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Testing</title>
	 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h1>Invoice: #inaosin19</h1>
<div style="display:flex; justify-content:space-between">
	<div style="display:flex; padding:10px">
	<div>
		<label>Kode Barang</label>
		<select id="kodeBarangSelect">
			<option > Masukkan Kode Barang </option>
			<?php foreach($barang as $items) { ?>
				<option value="<?= $items->kodeBarang ?>""><?= $items->kodeBarang ?></option>
			<?php } ?>
		</select>
	</div>
	<div>
		<label>Nama Barang</label>
		<input  id="namaBarangInput" type="text">
	</div>
	<div>
		<label>Harga Barang</label>
		<input  id="hargaBarangInput" type="number">
	</div>
	<div>
		<label>Jumlah</label>
		<input type="number" name="qty"  id="qty">
	</div>
	 <button id="addButton">Tambah</button>
	</div>
	<div>
		<label>Jumlah Pembayaran</label>
        <h1 id="totalPayment">Rp. 0</h1>
	</div>
</div>
	<br>
	<table id="productTable" border="1">
		<thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Action</th>
            </tr>
        </thead>
		<tbody>

        </tbody>

		<button id="payButton">Bayar</button>
	</table>


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
                        <td>${harga}</td>
                        <td>${qty}</td>
                        <td>
                            <button class="delete">Delete</button>
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

            $('#payButton').click(function() {
                alert('Payment feature not implemented yet.');
            });
        });
    </script>
</body>
</html>
