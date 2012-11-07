<?php
$visible = !empty($visible);
echo
	$html->div($visible ? '':'hide',null,array('id'=>'layer_naay_ha')),
		$html->div('column',null,array('id'=>'column3')),
			$html->div('pad'),
				$html->tag('h2','Villas Naay-Há','title'),
				$html->para(null,'Diseñada para satisfacer los más exigentes gustos, su diseño arquitectonico fusiona belleza y funcionalidad. Sus terrazas y balcones así como como sus cuatro habitaciones todas con vista al mar, transforma Naay-Há una fantasía hecha realidad.'),

				$this->element('hidden_gallery',compact('album')),
				$html->link('Ver Ficha Arquitectónica','/img/fichas/desarrollo/naay_ha.jpg',array('class'=>'pulsembox')),
			'</div>',
		'</div>',
		//-----
		$html->div('column',null,array('id'=>'column4')),
			$html->div('pad'),
				$html->tag('ul'),
					$html->tag('li','2 Plantas'),
					$html->tag('li','200 m2 de construcción.'),
					$html->tag('li','Terreno de 8 x 25 metros.'),
				'</ul>',

				$html->div('title title3','Planta Baja'),
				$html->tag('ul'),
					$html->tag('li','Terraza techada al frente.'),
					$html->tag('li','Sala y comedor.'),
					$html->tag('li','Estudio o habitación con baño.'),
					$html->tag('li','Cocina con meseta de granito.'),
					$html->tag('li','Medio baño.'),
					$html->tag('li','Área de lavado.'),
					$html->tag('li','Patio de servicio y tendido.'),
					$html->tag('li','Área para asar carnes.'),
					$html->tag('li','Garage privado para cuatro vehículos.'),
				'</ul>',

				$html->div('title title3','Planta Baja'),
				$html->tag('ul'),
					$html->tag('li','Tres habitaciones con clóset (caoba y cedro).'),
					$html->tag('li','Balcón techado en cada habitación.'),
					$html->tag('li','Dos baños con lavabo de piedra maya independiente.'),
					$html->tag('li','Clóset de blancos.'),
				'</ul>',
					
				$html->div('title title3','Penthouse'),
				$html->tag('ul'),
					$html->tag('li','Amplia recámara Principal.'),
					$html->tag('li','Sala privada en recámara principal.'),
				'</ul>',
			'</div>',
		'</div>',
	'</div>';
?>