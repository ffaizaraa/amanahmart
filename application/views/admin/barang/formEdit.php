<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Inventory</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('adminpanel/dashboard'); ?>">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Inventory</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Update Item</h4>
                        </div>
                    </div>
                    <form method="post" action="<?php echo site_url('barang/validasi_edit');?>" enctype="multipart/form-data">
                    <?php if ($barang) { ?>
                    <input type="hidden" name="kodeBarang" value="<?php echo $barang->kodeBarang; ?>">
                    <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Item Code</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="kodeBarang" placeholder="Item Code" value="<?php echo $barang->kodeBarang; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Item Name</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="namaBarang" placeholder="Item Name" value="<?php echo $barang->namaBarang; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Item Stocks</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="stokBarang" placeholder="Item Stocks" value="<?php echo $barang->stokBarang; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Purchase Price</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="hargaBeli" placeholder="Purchase Price" value="<?php echo $barang->hargaBeli; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Selling Price</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="hargaJual" placeholder="Selling Price" value="<?php echo $barang->hargaJual; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="deskripsi" placeholder="Description" value="<?php echo $barang->deskripsi; ?>">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Pictures</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="file" name="gambarBarang" placeholder="Pictures">
                                <img src="<?php echo base_url('assets/product-image/'.$barang->gambarBarang); ?>" width="150" height="110">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Supplier Name</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="idSupplier" id="idSupplier" class="form-control" required="required">
                                    <option value="" disabled>Select Supplier</option>
                                    <?php foreach($supplier as $supp) { ?>
                                        <option value="<?php echo $supp->idSupplier; ?>" <?php if($supp->idSupplier == $barang->idSupplier) echo 'selected'; ?>>
                                            <?php echo $supp->namaSupplier; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="idKategori" id="idKategori" class="form-control" required="required">
                                    <option value="" disabled>Select Category</option>
                                    <?php foreach($kategori as $kat) { ?>
                                        <option value="<?php echo $kat->idKategori; ?>" <?php if($kat->idKategori == $barang->idKategori) echo 'selected'; ?>>
                                            <?php echo $kat->namaKategori; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="clearfix">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
				<!-- Default Basic Forms End -->
                 