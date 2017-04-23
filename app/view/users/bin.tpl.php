<h1>Visar papperskorgen</h1>

<?php foreach ($users as $user) : 
if ($user->getProperties()['deleted'] != NULL) {
	?>

	<div class="user">
		<? $url = 'user/id/'.$user->getProperties()['id']; ?>
		<p>
			<a href='<?=$this->url->create($url)?>'><?echo $user->getProperties()['name']?></a>
			<i><?echo $user->getProperties()['created'];?></i> 
		</p>
		<i style="font-size: 12px;">
			<a style="text-decoration: none" href='<?=$this->url->create('user/unSoftDelete/'.$user->getProperties()['id'])?>'>Återställ mjuk radering</a>
		</i>
	</div>
	<?
}
?>


<?php endforeach; ?>
<p><a href='<?=$this->url->create('user/list')?>'>Tillbaka</a></p>