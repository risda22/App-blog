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
                            <li class="active"><?= $category1 ?> & <?= $category2?></li>
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
							<?php if (count($post) > 0){
								
								foreach ($post as $post){
							?>
								<tr>
								<td><?php echo $post['title'];?></td>
								<td><?php echo $post['category'];?></td>
								<td><?php echo $post['creat_at'];?></td>
								<td>
									<a href="<?php echo site_url('post/'.$con4.'/'.$post['slug']);?>" >
									<button type="button" class="btn btn-outline-secondary btn-sm" ><i class="fa fa-edit"></i>&nbsp;Ubah</button>
									</a>
									<a href="<?php echo site_url('view/'.$con3.'/'.$post['slug']);?>">
                                    <button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-desktop"></i>&nbsp;Lihat</button>
									</a>
									<a href="<?php echo site_url('post/'.$con2.'/'.$post['id']);?>">
									<button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash-o"></i>&nbsp;Hapus</button>
									</a>
								</td>
							  </tr>
							<?php
								}
							}else{
							?>
								<tr>
								<td>Tidak Ada Data</td>
								</tr>
							 <?php
							}?>
						
							</tbody>
						  </table>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
	</div>

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
							<?php echo validation_errors(); ?>
							<?php echo form_open('post/'.$con);?>
							<div class="row form-group">
								<div class="col col-md-3"><label for="select" class=" form-control-label">Kategori</label></div>
								 <div class="col-12 col-md-9">
								 <select name="category" id="category"" class="form-control">
									<option value="0">Please select</option>
									<option value="<?= $category1 ?>"><?= $category1 ?></option>
									<option value="<?= $category2 ?>"><?= $category2 ?></option>
								 </select>
								 </div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Penulis</label></div>
								<div class="col-12 col-md-9"><input type="text" id="creat_name" name="creat_name" placeholder="Nama Penulis" class="form-control"></div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3"><label for="text-input" class=" form-control-label">Judul</label></div>
								<div class="col-12 col-md-9"><input type="text" id="title" name="title" placeholder="Judul" class="form-control"></div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3"><label for="text-input" class=" form-control-label">Intisari</label></div>
								<div class="col-12 col-md-9"><input type="text" id="short_post" name="short_post" placeholder="Intisari" class="form-control"><small class="form-text text-muted">100 Kata Pertama</small></div>
							</div>
							<div class="row form-group">
								<div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Textarea</label></div>
								<div class="col-12 col-md-9">
								<textarea name="body" cols="40" rows="10" id="body" label="Deskripsi Event" class="summernote"></textarea>
								</div> 
						    </div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary">Confirm</button>
							</div>
							<?php echo form_close()?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /#right-panel -->

    <!-- Right Panel -->
	
	

    <!-- Right Panel -->
	
	

</div>