<?php
$visible = !empty($visible);
echo
	$html->div($visible ? '':'hide',null,array('id'=>'layer_departamentos')),
		$html->div('column',null,array('id'=>'column1')),
			$html->div('pad'),
				$html->tag('h2','Departamentos','title'),
				$html->para(null,'Disfrute una majestuosa vista al mar desde uno de nuestros cómodos departamentos, que te ofrecen a ti y a tu familia amplios espacios y una ubicación privilegiada.'),
				$html->tag('ul'),
					$html->tag('li','30 Amplios departamentos.'),
					$html->tag('li','8 Penthouse con Solarium.'),
				'</ul>',

				$this->element('hidden_gallery',compact('album')),
				$html->link('Ver Ficha Arquitectónica','/img/fichas/desarrollo/departamentos.jpg',array('class'=>'pulsembox')),
			'</div>',
		'</div>',
		//-----
		$html->div('column',null,array('id'=>'column2')),
			$html->div('pad'),
				$html->para(null,'Laborum ex consequuntur consectetuer bibendum, quae, fuga impedit modi tempor? Eget pretium luctus nec! Aliqua, dolorem auctor quo vero justo, nam excepteur. Placeat etiam! Conubia consequuntur. Nascetur fusce, atque hic? Interdum curae unde odit praesentium sapiente? Per hic reprehenderit lectus, urna eros totam euismod doloribus.'),
				$html->para(null,'Totam non sociis laboriosam aliquip volutpat tempore etiam ea itaque, ducimus officia cum sociosqu rem eiusmod asperiores architecto quae cum. Urna incididunt eum! Eveniet accumsan hac dictumst montes. Molestias natus. Proident curabitur modi cillum aliqua consectetuer, excepturi quod aliquam, placeat animi tenetur non anim itaque.'),
				$html->para(null,'Sed aut corporis iusto facilisis pretium ultrices. Minus! Nec commodi dignissim modi? Quod quos diam, nostra. Adipisci, harum lacus netus dis consectetuer metus sodales venenatis nibh consequat? Tempus, corrupti reprehenderit, sapiente recusandae itaque tempor eaque morbi, nulla. In, repellat, ratione, harum orci parturient nesciunt, dolorum.'),
			'</div>',
		'</div>',
	'</div>';
	$moo->scroll(array('column1','column2'));
?>