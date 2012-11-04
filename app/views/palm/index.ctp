<?php
echo
	$this->element('top',array('wide'=>true)),
	$html->div('section_nav'),
		$html->link('Pentgarden',array('controller'=>'palm','action'=>'pentgarden'),array('id'=>'pentgarden','class'=>$visible == 'pentgarden' ? 'selected' : '')),
		$html->link('Departamentos',array('controller'=>'palm','action'=>'departamentos'),array('id'=>'departamentos','class'=>$visible == 'departamentos' ? 'selected' : '')),
		$html->link('Penthouse',array('controller'=>'palm','action'=>'penthouse'),array('id'=>'penthouse','class'=>$visible == 'penthouse' ? 'selected' : '')),
	'</div>',
	$html->div('sections clear'),
		$this->element('details/palm/pentgarden',array('album'=>$albums['pentgarden'],'visible'=>$visible == 'pentgarden')),
		$this->element('details/palm/departamentos',array('album'=>$albums['departamentos'],'visible'=>$visible == 'departamentos')),
		$this->element('details/palm/penthouse',array('album'=>$albums['penthouse'],'visible'=>$visible == 'penthouse')),
	'</div>';
?>
</div>
</div><!-- .content -->