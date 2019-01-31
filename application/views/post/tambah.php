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