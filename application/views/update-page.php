<h3 class="h2">Mohon Isi Data Dibawah Ini</h3>
        
                    <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                        <fieldset>
                            <div class="form-field">
                                <input type="hidden" name="id" value="<?= $getId['id']; ?>">
                            </div>
                            <div class="form-field">
                                <input name="cName" id="cName" class="full-width" placeholder="Nama Lengkap" value="<?= $getId['nama']; ?>" type="text">
                            </div>
    
                            <div class="form-field">
                                <input name="cEmail" id="cEmail" class="full-width" placeholder="Alamat Email" value="<?= $getId['email']; ?>" type="email">
                            </div>
    
                            <div class="form-field">
								<label>Jenis Kelamin:</label><br>
								<input name="cGender" id="cGenderL" value="L" type="radio" <?php if($getId['jenis_kelamin']=='L'){echo 'checked="checked"';}?>> <label  for="cGenderL">Pria</label><br>
								<input name="cGender" id="cGenderP" value="P" type="radio" <?php if($getId['jenis_kelamin']=='P'){echo 'checked="checked"';}?>> <label for="cGenderP">Wanita</label>
							</div>
							
							<div class="form-field">
								<label for="cDateBirth">Tanggal Lahir : </label><br><input name="cDateBirth" id="cDateBirth" type="date" value="<?= $getId['tgl_lahir'];?>">
							</div>
    
                            <div class="message form-field">
                                <textarea name="cAdress" id="cAddress" class="full-width" placeholder="Alamat Lengkap"><?= $getId['alamat'];?></textarea>
							</div>
							
							<div class="form-field">
								<input type="text" name="cPhone" class="full-width" id="cPhone" placeholder="No Telpon" value="<?= $getId['nohp'];?>">
							</div>

							<div class="form-field">
								<select name="cLomba" id="cLomba" class="full-width">
                                    <option value="--Pilih Mata Lomba--"></option>
									<?php foreach($lomba as $l) :?>
                                    <?php if($l == $getId['mata_lomba']):?>
									    <option value="<?= $l?>" selected><?= $l?></option>
                                    <?php else:?>
                                        <option value="<?= $l?>"><?= $l?></option>
                                    <?php endif;?>
									<?php endforeach;?>
								</select>
							</div>

							<div class="form-field">
								<select name="cLagu" id="cLagu" class="full-width">
									<option value="-">--Pilih Lagu--</option>
								<?php foreach($laguL as $lL) :?>
                                <?php if($lL == $getId['lagu']):?>
                                <option value="<?= $lL?>" selected><?= $lL?></option>
                                <?php else : ?>
									<option value="<?= $lL?>"><?= $lL?></option>
                                <?php endif;?>
									<?php endforeach;?>
								</select>
							</div>
							<div class="form-field">
                                <input name="cAsal" id="cAsal" class="full-width" placeholder="Asal Sekolah" value="<?= $getId['asal_sekolah'];?>" type="text">
                            </div>
							<div class="form-field">
                                <input name="cNoSekolah" id="cNoSekolah" class="full-width" placeholder="No Telpon Sekolah" value="<?= $getId['no_sekolah'];?>" type="text">
                            </div>
							<div class="form-field">
                                <input name="cNamaPembina" id="cNamaPembina" class="full-width" placeholder="Nama Pembina" value="<?= $getId['nama_pembina'];?>" type="text">
                            </div>
							<div class="form-field">
                                <input name="cNoPembina" id="cNoPembina" class="full-width" placeholder="No HP Pembina" value="<?= $getId['nama_pembina'];?>" type="text">
                            </div>
    
                            <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large full-width" value="Submit" type="submit">
    
                        </fieldset>
                    </form>