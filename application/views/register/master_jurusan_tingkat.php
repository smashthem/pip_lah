<?php if(!count($tingkat)): ?>
	<option>- Tidak ada data -</option>
<?php else: ?>
	<option class="0">- Pilih -</option>
	<?php foreach($tingkat as $key): ?>
		<option value="<?=$key['KODETINGKAT'];?>.<?=$key['TINGKAT'];?>"><?=$key['TINGKAT'];?></option>
	<?php endforeach; ?>
<?php endif; ?>