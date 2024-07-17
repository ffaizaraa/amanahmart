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
                            <h4 class="text-blue h4">Add Item</h4>
                        </div>
                    </div>
                    <form method="post" action="<?php echo site_url('barang/add');?>" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Item Code</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="kodeBarang" placeholder="Item Code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Item Name</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="namaBarang" placeholder="Item Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Item Stocks</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="stokBarang" placeholder="Item Stocks">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Purchase Price</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="hargaBeli" placeholder="Purchase Price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Selling Price</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="hargaJual" placeholder="Selling Price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="deskripsi" placeholder="Description">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Pictures</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="file" name="gambarBarang" placeholder="Pictures">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Supplier Name</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="idSupplier" id="idSupplier" class="form-control" required="required">
                                    <option value="" disabled selected>Select Supplier</option>
                                    <?php foreach($supplier as $supp) { ?>
                                        <option value="<?php echo $supp->idSupplier; ?>"><?php echo $supp->namaSupplier; ?></option>
                                    <?php } ?>
	                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="idKategori" id="idKategori" class="form-control" required="required">
                                    <option value="" disabled selected>Select Category</option>
                                    <?php foreach($kategori as $kat) { ?>
                                        <option value="<?php echo $kat->idKategori; ?>"><?php echo $kat->namaKategori; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
				<!-- Default Basic Forms End -->
                 