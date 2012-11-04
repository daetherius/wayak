<?php
if(!empty($album)){
	$first = $album[0]['Albumimg'];
	echo $html->link('Galería de Fotos','/'.$first['src'],array('class'=>'pulsembox','rel'=>'album','name'=>$first['descripcion'],'title'=>_dec($first['descripcion'])));

	$hidden_album = '';
	foreach ($album as $img) {
		$img = $img['Albumimg'];
		$hidden_album.= $html->link(basename($img['src']),'/'.$img['src'],array('class'=>'pulsembox','rel'=>'album','name'=>$img['descripcion'],'title'=>_dec($img['descripcion'])));
	}
	echo $html->div('hide',$hidden_album);
}
?>