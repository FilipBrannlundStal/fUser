 <h1><?=$title?></h1>
 
<pre><?=var_dump($user->getProperties())?></pre>
 
<p><a href='<?=$this->url->create('user/list')?>'>Tillbaka</a></p>