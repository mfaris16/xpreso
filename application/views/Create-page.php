<h3 class="h2">Mohon Isi Data Dibawah Ini</h3>
        
                    <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                        <fieldset>
    
                            <div class="form-field">
                                <input name="cName" id="cName" class="full-width" placeholder="Nama Lengkap" value="" type="text">
                            </div>
    
                            <div class="form-field">
                                <input name="cEmail" id="cEmail" class="full-width" placeholder="Alamat Email" value="" type="email">
                            </div>
    
                            <div class="form-field">
								<label>Jenis Kelamin:</label><br>
								<input name="cGender" id="cGenderL" value="L" type="radio"> <label  for="cGenderL">Pria</label><br>
								<input name="cGender" id="cGenderP" value="P" type="radio"> <label for="cGenderP">Wanita</label>
							</div>
							
							<div class="form-field">
								<label for="cDateBirth">Tanggal Lahir : </label><br><input name="cDateBirth" id="cDateBirth" type="date">
							</div>
    
                            <div class="message form-field">
                                <textarea name="cAdress" id="cAddress" class="full-width" placeholder="Alamat Lengkap"></textarea>
							</div>
							
							<div class="form-field">
								<input type="text" name="cPhone" class="full-width" id="cPhone" placeholder="No Telpon">
							</div>

							<div class="form-field">
								<select name="cLomba" id="cLomba" class="full-width">
									<?php foreach($lomba as $l) :?>
									<option value="<?= $l?>"><?= $l?></option>
									<?php endforeach;?>
								</select>
							</div>

							<div class="form-field">
								<select name="cLagu" id="cLagu" class="full-width">
									<option value="-">--Pilih Lagu--</option>
								<?php foreach($laguL as $lL) :?>
									<option value="<?= $lL?>"><?= $lL?></option>
									<?php endforeach;?>
								</select>
							</div>
							<div class="form-field">
                                <input name="cAsal" id="cAsal" class="full-width" placeholder="Asal Sekolah" value="" type="text">
                            </div>
							<div class="form-field">
                                <input name="cNoSekolah" id="cNoSekolah" class="full-width" placeholder="No Telpon Sekolah" value="" type="text">
                            </div>
							<div class="form-field">
                                <input name="cNamaPembina" id="cNamaPembina" class="full-width" placeholder="Nama Pembina" value="" type="text">
                            </div>
							<div class="form-field">
                                <input name="cNoPembina" id="cNoPembina" class="full-width" placeholder="No HP Pembina" value="" type="text">
                            </div>
    
                            <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large full-width" value="Submit" type="submit">
    
                        </fieldset>
                    </form>