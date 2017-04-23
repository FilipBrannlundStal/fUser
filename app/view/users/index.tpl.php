<h1><?=$title?></h1>
 
<p>Välkommen till användarsektionen. Vad vill du göra?</p>
 
 <?=$users?>

<h3><a href='<?=$this->url->create('user/setup')?>'>Skapa tabell och några användare</a></h3>
<h3><a href='<?=$this->url->create('user/list')?>'>Visa Användare</a></h3>
<h3><a href='<?=$this->url->create('user/active')?>'>Visa Aktiva Användare</a></h3>
<h3><a href='<?=$this->url->create('user/deleted')?>'>Visa Papperskorg</a></h3>
<h3><a href='<?=$this->url->create('user/add')?>'>Skapa Användare</a></h3>
