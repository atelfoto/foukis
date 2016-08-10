<!-- Change Language list -->
<!-- <ul> -->
<?php
foreach($availableLanguages as $key=>$value) {
    $link = $this->Html->Link($value, array('controller' => 'pages', 'action' => 'changeLanguage', $key),array("class"=> $value ,"title"=>__(" %s",$value),
    	'data-toggle'=>'tooltip','data-placement'=>'bottom'));
    echo $this->Html->Tag('li', $link, array('class' => $key == $language ? 'selected' : ''));
    // debug($key);
    // debug($value);
    // debug($link);
    // debug($language);
    // debug($availableLanguages);die();
} ?>
<!-- </ul> -->

