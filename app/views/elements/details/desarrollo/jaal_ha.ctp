<?php
$visible = !empty($visible);
echo
	$html->div($visible ? '':'hide',null,array('id'=>'layer_jaal_ha')),
		$html->div('column'),
			$html->tag('h2','Villas Jaal-Há','title'),
			$html->para(null,'Místicos amaneceres y majestuosos atardeceres, Las Villas Jaal-Há son para  aquello que quieren vivir el sueño Wayak al máximo. Ideada para los que no quieren escatimar en comodidades. Su exclusivo Penthouse y todo el equipamiento que una residencia de lujo puede aspirar, hacen hacen de la vida a la orilla del mar una experiencia única.'),
			$html->para(null,'Fusión entre belleza y lujo. Cuatro habitaciones y un penthouse, todas con terraza, dos balcones y vista al mar en todas las habitaciones.'),
			$html->para(null,'3 Plantas.<br/>200 m2 de construcción.<br/>Terreno de 8 x 25 metros.'),

			$this->element('hidden_gallery',compact('album')),
			$html->link('Ver Ficha Arquitectónica','/img/fichas/desarrollo/jaal_ha.jpg',array('class'=>'pulsembox')),
		'</div>',
		//-----
		$html->div('column'),
			$html->para(null,'Lectus tempora officia exercitationem hymenaeos reiciendis voluptas, architecto error, fringilla nascetur? Fringilla, sapien sit deleniti suspendisse laoreet consequatur optio urna, nascetur expedita occaecat culpa, lobortis urna. Integer! Cubilia. Tempora tristique! Fugit delectus per consequatur porttitor suscipit. Bibendum culpa culpa? Eaque, quos do do erat incidunt.'),
			$html->para(null,'Veniam nullam iaculis autem omnis! Mi metus quisquam, sapiente sociis autem nesciunt, cubilia inceptos varius sapiente, distinctio suspendisse? Dis fames, laborum sodales aliquet habitasse eos nostrud dolore feugiat, excepturi id eaque dicta adipisci dolor! Consectetur, assumenda? Quaerat nullam vero mauris ut aliquip? Rhoncus vulputate corporis.'),
			$html->para(null,'Laborum ex consequuntur consectetuer bibendum, quae, fuga impedit modi tempor? Eget pretium luctus nec! Aliqua, dolorem auctor quo vero justo, nam excepteur. Placeat etiam! Conubia consequuntur. Nascetur fusce, atque hic? Interdum curae unde odit praesentium sapiente? Per hic reprehenderit lectus, urna eros totam euismod doloribus.'),
		'</div>',
	'</div>';
?>