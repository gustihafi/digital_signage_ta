                    
                                                            <!-- Start Modal -->
                                                            <!-- Modaledit -->
                                                            <div id="edit<?= $key['id_agenda'] ?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                    <!-- konten modal-->
                                                    <div class="modal-content">
                                                        <!-- heading modal -->
                                                        <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Pilih Display</h4>
                                                        </div>
                                                        <!-- body modal -->
                                                        <div class="modal-body">
                                                        <form method="POST" action="<?= site_url('') ?>">
                                                             <input type="text" id="id_displayx" name="id_displayx" value="<?php echo $id_agenda; ?>" />
                                                            <?php if($list)
                                                                    {
                                                                    foreach($list as $x){ ?>
                                                                        <input type="hidden" id="id_displayx" name="id_displayx" value="<?php echo $x->id_display; ?>" />
                                                                        <?php
                                                                    } 
                                                                    } else { ?>

                                                                    <input type="hidden" id="id_displayx" name="id_displayx" value="0" />
                                                                    <?php } ?>
                                                        <div class="form-group">
                          <label>Display</label>
                            <?php 
                           
                            if($list){
                                    foreach($list as $x){
                                        $data[] = $x->id_display; 
                                    }
                                }else{
                                    $data[] = FALSE;
                                }
                            $selected = set_value('id_display[]',$data);
                            echo form_dropdown('id_display[]', $display, $selected, "class='form-control select2' style='width: 100%;' id='id_display' multiple");
                            ?>
                        </div>
                                                    </div>
                                                    <!-- footer modal -->
                                                    <div class="modal-footer">
                                                    <input type="submit" class="btn btn-success mr-2" name="simpan" value="Simpan">
                                                    
                                                    <button type="reset" class="btn btn-default">Reset</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button> 
                                                    </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>