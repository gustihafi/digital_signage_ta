

  <!-- Modal Update Package-->
	<form action="<?php echo site_url('package/update');?>" method="post">
		<div class="modal fade" id="UpdateModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Update Package</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Agenda</label>
				    <div class="col-sm-10">
				      <input type="text" name="nama_agenda" class="form-control" placeholder="Nama Agenda" required>
				    </div>
        </div>
        <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Unit Pelaksana</label>
				    <div class="col-sm-10">
            <select class="form-control select2" name="id_unit" style="width: 100%;">
              <option value="<?php echo $dt['id_unit']; ?>"><?php echo $dt['nama_unit']; ?></option>
              <?php foreach ($unit as $dta):
                if ($dt['id_unit'] != $dta['id_unit']):
                ?>
                <option value="<?php echo $dta['id_unit']; ?>"><?php echo $dta['nama_unit']; ?></option>
                <?php 
                endif;
                endforeach; ?>
              </select>
				    </div>
				</div>
				<div class="form-group row">
				    <label class="col-sm-2 col-form-label">Product</label>
				    <div class="col-sm-10">
				      	<select class="form-control select2" name="product_edit[]" data-width="100%" data-live-search="true" multiple required>
				      		<?php foreach ($product->result() as $row) :?>
						  		<option value="<?php echo $row->product_id;?>"><?php echo $row->product_name;?></option>
						  	<?php endforeach;?>
						</select>
				    </div>
        </div>
        <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Tanggal Agenda</label>
				    <div class="col-sm-10">
				      <input type="date" name="tanggal_agenda" class="form-control" placeholder="Nama Agenda" required>
				    </div>
        </div>
        <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Tanggal Selesai</label>
				    <div class="col-sm-10">
				      <input type="date" name="tanggal_selesai" class="form-control" placeholder="Nama Agenda" required>
				    </div>
        </div>
        <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Jam Mulai</label>
				    <div class="col-sm-10">
				      <input type="time" name="jam_mulai" class="form-control" placeholder="Nama Agenda" required>
				    </div>
        </div>
        <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Jam Selesai</label>
				    <div class="col-sm-10">
				      <input type="time" name="jam_selesai" class="form-control" placeholder="Nama Agenda" required>
				    </div>
        </div>
        <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Tanggal Pengajuan</label>
				    <div class="col-sm-10">
				      <input type="date" name="tanggal_pengajuan" class="form-control" placeholder="Nama Agenda" required>
				    </div>
        </div>
        <div class="form-group row">
				    <label class="col-sm-2 col-form-label">Tanggal Publis</label>
				    <div class="col-sm-10">
				      <input type="date" name="tanggal_publish" class="form-control" placeholder="Nama Agenda" required>
				    </div>
        </div>

		      </div>
		      <div class="modal-footer">
		      	<input type="hidden" name="edit_id" required>
		        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-success btn-sm">Update</button>
		      </div>
		    </div>
		  </div>
		</div>
  </form>
  
  <script type="text/javascript">
		$(document).ready(function(){
			$('.select2').selectpicker();

			//GET UPDATE
			$('.update-record').on('click',function(){
				var id_agenda = $(this).data('id_agenda');
        var nama_agenda = $(this).data('nama_agenda');
        var tanggal_agenda = $(this).data('tanggal_agenda');
        var tanggal_selesai = $(this).data('tanggal_selesai');
				$(".strings").val('');
				$('#UpdateModal').modal('show');
				$('[name="edit_id"]').val(package_id);
				$('[name="package_edit"]').val(package_name);
                //AJAX REQUEST TO GET SELECTED PRODUCT
                $.ajax({
                    url: "<?php echo site_url('package/get_product_by_package');?>",
                    method: "POST",
                    data :{package_id:package_id},
                    cache:false,
                    success : function(data){
                        var item=data;
                        var val1=item.replace("[","");
                        var val2=val1.replace("]","");
                        var values=val2;
                        $.each(values.split(","), function(i,e){
                            $(".strings option[value='" + e + "']").prop("selected", true).trigger('change');
                            $(".strings").selectpicker('refresh');

                        });
                    }
                    
                });
                return false;
			});

			//GET CONFIRM DELETE
			$('.delete-record').on('click',function(){
				var package_id = $(this).data('package_id');
				$('#DeleteModal').modal('show');
				$('[name="delete_id"]').val(package_id);
			});

		});
	</script>