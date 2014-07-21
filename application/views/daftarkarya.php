<?php
//hapus jika di develope
 echo $pesan;
//echo $apaini;
// echo $video;

 ?>

<h1><a>Form Register Karya</a></h1>
		<form id="form_876345" class="appnitro" enctype="multipart/form-data" method="post" action="<?= base_url() ?>index.php/gallery/addKarya">
					<div class="form_description">
			<h2>Untitled Form</h2>
			<p>This is your form description. Click here to edit.</p>
		</div>						
			<ul >
			
					<li id="li_12" >
		<label class="description" for="element_12">Jenis Karya </label>
		<div>
		<select class="element select medium" id="element_12" name="element_12"> 
			<option value="" selected="selected"></option>
			<option value="games" >Games</option>
			<option value="app" >Apps</option>
			<option value="sp" >Research Product</option>
			<option value="bi" >Business Incubator</option>

		</select>
		</div> 
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Nama Unik Karya </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Email </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Judul karya </label>
		<div>
			<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Tanggal publish </label>
		<span>
			<input id="element_4" name="element_4" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_4">DD</label>
		</span>
		
		</span>
	
		<span id="calendar_4">
			<img id="cal_img_4" class="datepicker" src="images/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_4_3",
			baseField    : "element_4",
			displayArea  : "calendar_4",
			button		 : "cal_img_4",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectEuropeDate
			});
		</script>
		 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Link Video </label>
		<div>
			<input id="element_5" name="element_5" class="element file" type="text"/> 
		</div>  
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Deskripsi </label>
		<div>
			<textarea id="element_6" name="element_6" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Deskripsi Singkat </label>
		<div>
			<input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Gambar </label>
		<div>
			<input id="element_81" name="element_81" class="element file" type="file"/> 
			<input id="element_82" name="element_82" class="element file" type="file"/> 
		</div>  
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Anggota tim </label>
		<div>
			<textarea id="element_9" name="element_9" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_10" >
		<label class="description" for="element_10">More ( URL ) </label>
		<div>
			<input id="element_10" name="element_10" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_11" >
		<label class="description" for="element_11">Contact person </label>
		<div>
			<input id="element_11" name="element_11" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="876345" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>