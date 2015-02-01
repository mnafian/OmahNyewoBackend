<header>
    <div class="thumbnail">
        <div class="row">
            <div class="caption">
                <div class="col-xs-6 col-md-8">
                    <form class="form-horizontal" role="form" action="core/user/proses_iklan.php">
                        <div class="form-group">
                            <label for="tipeiklan" class="col-lg-4 control-label">Tipe Iklan</label>
                            <div class="col-lg-8">
                                <div class="radio">
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" name="tipeiklan" id="optionsRadios1" value="dicari" checked>
                                            Kost
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                            <input type="radio" name="tipeiklan" id="optionsRadios1" value="dijual">
                                            Kontrakan                                    
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-lg-4 control-label">Judul</label>
                            <div class="col-lg-8">
                                <input type="text" name="judul" class="form-control" placeholder="Nama Oemah" required="">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pengiklan" class="col-lg-4 control-label">Harga</label>
                            <div class="col-lg-8">
                                <input type="text" name="judul" class="form-control" placeholder="Harga Oemah" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Harga" class="col-lg-4 control-label">Telepon</label>
                            <div class="col-lg-8">
                                <input type="text" name="harga" class="form-control" id="harga" placeholder="Nomor Telepon" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Harga" class="col-lg-4 control-label">BBM</label>
                            <div class="col-lg-8">
                                <input type="text" name="harga" class="form-control" id="harga" placeholder="Nomor BBM" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="col-lg-4 control-label">Deskripsi</label>
                            <div class="col-lg-8">
                                <textarea name="deskripsi" class="form-control" style="resize: vertical;" required=""></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lokasi" class="col-lg-4 control-label">Lokasi</label>
                            <div class="col-lg-8">
                                <div class="btn-group">
                                    <select class="form-control" name="lokasi" required="">
                                        <option value="">Silahkan Pilih</option>                   
                                    </select>         
                                </div>
                            </div>
                        </div>
						
				<div class="form-group">
                       <div class="col-lg-8" style="margin-left:720px;">
								<input type="reset" class="btn btn-danger" value="Reset">
                                <input type="submit" class="btn btn-default" value="Terbitkan">
                            </div>
                 </div>

                    

                </div>

                <div class="col-md-4">
                    <h5>Upload Gambar Iklan.</h5>
                    <hr>

                        <input class="btn btn-default btn-xs" type="file" name="gambar">
                        <span class="help-block">Tipe gambar : *.jpg atau *.jpeg</span>
                        <hr>
						
                    
                </div>

            </div>		
			
			</form>

        </div>
    </div>
</header>
