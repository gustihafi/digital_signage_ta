                    
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
                                                        <div class="form-group">
                                                            <label>Display</label>
                                                            <select class="select2bs4" multiple="multiple" data-placeholder="Pilih Display" name="id_display[]" style="width: 100%;">
                                                                <option disabled="">----Display----</option>
                                                                <?php foreach ($display as $dt):?>
                                                                <option value="<?php echo $dt['id_display']; ?>"><?php echo $dt['display']; ?></option>
                                                            <?php endforeach; ?>
                                                            </select>
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