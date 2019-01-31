 <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Posting</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Posting</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Beauty & Healthy</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

		
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table Posting</strong>
                        </div>
						 <div class="card-body">
							<button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#largeModal"><i class="fa fa-pencil"></i>&nbsp; Post Baru</button>
						  <p>
						  <table id="bootstrap-data-table" class="table table-striped table-bordered">
							<thead>
							  <tr>
								<th>Judul Post</th>
								<th>Kategori Post</th>
								<th>Tanggal Post</th>
								<th>Aksi</th>
							  </tr>
							</thead>
									<tbody>
							  <tr>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>
									<button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-edit"></i>&nbsp;Ubah</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-desktop"></i>&nbsp;Lihat</button>
									<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o"></i>&nbsp;Hapus</button>
								</td>
							  </tr>
							  <tr>
								<td>Garrett Winters</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>
									<button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-edit"></i>&nbsp;Ubah</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-desktop"></i>&nbsp;Lihat</button>
									<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o"></i>&nbsp;Hapus</button>
								</td>
							  </tr>
							  <tr>
								<td>Ashton Cox</td>
								<td>Junior Technical Author</td>
								<td>San Francisco</td>
								<td>
									<button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-edit"></i>&nbsp;Ubah</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-desktop"></i>&nbsp;Lihat</button>
									<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o"></i>&nbsp;Hapus</button>
								</td>
							  </tr>
							  <tr>
								<td>Cedric Kelly</td>
								<td>Senior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>
									<button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-edit"></i>&nbsp;Ubah</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-desktop"></i>&nbsp;Lihat</button>
									<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o"></i>&nbsp;Hapus</button>
								</td>
							  </tr>
							  <tr>
								<td>Airi Satou</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>
									<button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-edit"></i>&nbsp;Ubah</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-desktop"></i>&nbsp;Lihat</button>
									<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o"></i>&nbsp;Hapus</button>
								</td>
							  </tr>
						
							</tbody>
						  </table>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

		<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel"><?= $title ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
								<div class="card"> 
								  <div class="card-body card-block">
									<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
									   <div class="row form-group">
										<div class="col col-md-3"><label for="select" class=" form-control-label">Kategori</label></div>
										<div class="col-12 col-md-9">
										  <select name="select" id="select" class="form-control">
											<option value="0">Please select</option>
											<option value="1">Option #1</option>
											<option value="2">Option #2</option>
											<option value="3">Option #3</option>
										  </select>
										</div>
									  </div>
									  <div class="row form-group">
										<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Penulis</label></div>
										<div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Nama Penulis" class="form-control"></div>
									  </div>
									  <div class="row form-group">
										<div class="col col-md-3"><label for="text-input" class=" form-control-label">Slug</label></div>
										<div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Slug" class="form-control"><small class="form-text text-muted">Kode Judul Post (contoh : post-kategori-id)</small></div>
									  </div>
									  <div class="row form-group">
										<div class="col col-md-3"><label for="text-input" class=" form-control-label">Judul</label></div>
										<div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Judul" class="form-control"></div>
									  </div>
									   <div class="row form-group">
										<div class="col col-md-3"><label for="text-input" class=" form-control-label">Intisari</label></div>
										<div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Intisari" class="form-control"><small class="form-text text-muted">100 Kata Pertama</small></div>
									  </div>
									  <div class="row form-group">
										<div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Textarea</label></div>
										<div class="col-12 col-md-9">
										<textarea name="deskripsi" cols="40" rows="10" id="deskripsi" label="Deskripsi Event" class="summernote"></textarea>
										</div> 
									  </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
        </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
	
