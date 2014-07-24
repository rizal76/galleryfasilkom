<ul>
<?php 
foreach ($list as $key => $value) {
	if($value[0]==0)
	echo "<li> Kategori".$value[1]." Nama Karya".$value[2]."<a href='approveKarya/".$value[2]."'>Approve</a></li>";
	else 
	echo "<li> Kategori".$value[1]." Nama Karya".$value[2]."<a href='hideKarya/".$value[2]."'>Hide</a></li>";
	
}
?>
</ul>