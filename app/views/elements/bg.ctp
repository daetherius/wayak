<?php
if(is_c('inicio',$this)){
	echo $this->element('showcase',array('data'=>$carrusel,'id'=>'bg_showcase','opts'=>array('nav'=>false)));
} else {
	echo $html->image('bg_'.$this->params['controller'].'.jpg',array('alt'=>'bg_'.$this->params['controller'].'.jpg','class'=>'bg'));
}
?>
