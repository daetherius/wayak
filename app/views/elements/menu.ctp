<ul id="menu">
<?php fb($sub_for_layout,'$sub');
echo $html->tag('li',$html->link($html->tag('span', 'Home'),'/'),array('class'=>$this->params['controller']=='inicio' ? 'mSelected' : ''));

$galleries = array();
$galleries['desarrollo'] = Configure::read('album_desarrollo_galeria');
$galleries['palm'] = Configure::read('album_palm_galeria');

foreach(Configure::read('Modules') as $cntllr => $mod){
	if(isset($mod['menu']) && $mod['menu']){
		$submenu = '';
		$gallery = '';
		
		if(in_array($cntllr, array('desarrollo','palm'))){
			switch($cntllr){
				case 'desarrollo':
					$submenu = 	$html->tag('li',$html->link('Villas',array('controller'=>'desarrollo','action'=>'jaal_ha')),array('class'=>$sub_for_layout == 'villas' ? 'selected':'')).
								$html->tag('li',$html->link('Departamentos',array('controller'=>'desarrollo','action'=>'departamentos')),array('class'=>$sub_for_layout == 'departamentos' ? 'selected':'')).
								$html->tag('li',$html->link('Amenidades',array('controller'=>'desarrollo','action'=>'amenidades')),array('class'=>$sub_for_layout == 'amenidades' ? 'selected':'')).
								(!empty($galleries['desarrollo']) ? $html->tag('li',$html->link('Galería','/'.$galleries['desarrollo'][0]['Albumimg']['src'],array('class'=>'pulsembox','rel'=>'gallery_desarrollo'))): '');
				break;

				case 'palm':
					$submenu = 	$html->tag('li',$html->link('Departamentos',array('controller'=>'palm','action'=>'pentgarden')),array('class'=>$this->params['controller'] == 'palm' ? 'selected':'')).
								(!empty($galleries['palm']) ? $html->tag('li',$html->link('Galería','/'.$galleries['palm'][0]['Albumimg']['src'],array('class'=>'pulsembox','rel'=>'gallery_palm'))): '');
				default:
				break;
			}

			$submenu = $html->tag('ul',$submenu,'submenu');

			if(!empty($galleries[$cntllr])){
				foreach ($galleries[$cntllr] as $img) {
					$src = '/'.$img['Albumimg']['src'];
					$desc = $img['Albumimg']['descripcion'];

					$gallery.= $html->link(basename($src),$src,array('class'=>'pulsembox','rel'=>'gallery','name'=>_dec($desc),'title'=>$desc));
				}
			}

			$submenu.= $html->div('hide',$gallery);
		}

		echo
			$html->tag('li',
				$html->link(
					$html->tag('span',$mod['menu']),
					 in_array($cntllr, array('desarrollo','palm')) ? '#' : array('controller'=>$cntllr,'action'=>'index')
				).$submenu,
				array('class'=>$this->params['controller'] == $cntllr ? 'mSelected' : '')
			);
	}
}
?>
</ul>