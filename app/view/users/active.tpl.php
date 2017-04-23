 <h1><?=$title?></h1>
<?php foreach ($users as $user) : 
if ($active) {

	if ($user->getProperties()['active'] != NULL) {
	?>

	<div class="user">
		<? $url = 'user/id/'.$user->getProperties()['id']; ?>
		<p>
			<a href='<?=$this->url->create($url)?>'><?echo $user->getProperties()['name']?></a>
			<i><?echo $user->getProperties()['created'];?></i> 
		</p>
		<i style="font-size: 12px;">
			<a style="text-decoration: none" href='<?=$this->url->create('user/inActive/'.$user->getProperties()['id'])?>'>Inaktivera konto</a>
		</i>
	</div>
	<?
	}
}
else {
	if ($user->getProperties()['active'] == NULL) {
	?>

	<div class="user">
		<? $url = 'user/id/'.$user->getProperties()['id']; ?>
		<p>
			<a href='<?=$this->url->create($url)?>'><?echo $user->getProperties()['name']?></a>
			<i><?echo $user->getProperties()['created'];?></i> 
		</p>
		<i style="font-size: 12px;">
			<a style="text-decoration: none" href='<?=$this->url->create('user/active/'.$user->getProperties()['id'])?>'>Aktivera konto</a>
		</i>
	</div>
	<?
	}
}

?>


<?php endforeach; ?>
<p><a href='<?=$this->url->create('user/list')?>'>Tillbaka</a></p>