<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Supplier</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo site_url('adminpanel/dashboard'); ?>">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Supplier</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Update Supplier</h4>
                        </div>
                    </div>
                    <form method="post" action="<?php echo site_url('supplier/validasi_edit');?>">
                    <input type="hidden" name="id" value="<?php echo $supplier->idSupplier; ?>">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Supplier Name</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="namaSupplier" placeholder="Category Name" value="<?php echo $supplier->namaSupplier; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Address</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="alamat" placeholder="Category Name" value="<?php echo $supplier->alamat; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Phone Number</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="no_telp" placeholder="Category Name" value="<?php echo $supplier->no_telp; ?>">
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
                 