<?php
if(($tweets = Cache::read('tweets','twitter'))===false){
	$tweets = json_decode(file_get_contents("http://api.twitter.com/1/statuses/user_timeline/villaswayak.json?count=3"),true);
	Cache::write('tweets',$tweets,'twitter');
}

if($tweets && in_array($this->params['controller'], array('contacto','events'))){
	echo
		$html->div('tweets'),
		$html->tag('ul',null,array('id'=>'tweets'));
		foreach ($tweets as $tweet) {
			echo $html->tag('li',$html->para(null,$text->autoLink($tweet['text'],array('target'=>'_blank','rel'=>'nofollow'))).$html->para('date',$html->link($util->fdate('%b %d, %I:%M %P',$tweet['created_at']),'http://twitter.com/villaswayak/statuses/'.$tweet['id_str'],array('target'=>'_blank','rel'=>'nofollow'))),'tweet');
		}
			
	echo '</ul></div>';
	$moo->scroller('tweets');
}
?>