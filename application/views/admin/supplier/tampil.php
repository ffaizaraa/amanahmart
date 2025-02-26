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
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">List of Supplier</h4>
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">No</th>
									<th>Supplier Name</th>
									<th>Address</th>
									<th>Phone Number</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
                            <?php $no=1; foreach($supplier as $val){?>
								<tr>
									<td class="table-plus"><?php echo $no; ?></td>
									<td><?php echo $val->namaSupplier; ?></td>
                                    <td><?php echo $val->alamat; ?></td>
                                    <td><?php echo $val->no_telp; ?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item" href="<?php echo site_url('supplier/get_by_id/'.$val->idSupplier);?>"><i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item" href="<?php echo site_url('supplier/delete/'.$val->idSupplier);?>" onclick="return confirm('Are you sure you want to delete this data?')"> <i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
                            <?php $no++; } ?>
							</tbody>
						</table>
                        <div class="col-md-6 col-sm-12 text-left">
							<div>
								<a class="btn btn-primary" href="<?php echo site_url('supplier/add');?>" role="button">
									Add Supplier
								</a>
							</div>
						</div>
					</div>
                    
				</div>
				<!-- Simple Datatable End -->