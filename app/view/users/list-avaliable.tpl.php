<h1>Visa alla aktiva och icke raderade användare</h1>
<?php foreach ($users as $user) : ?>

<?
	if ($user->getProperties()['deleted'] == NULL && $user->getProperties()['active'] != NULL) {
?>
<div class="user">
	<? $url = 'user/id/'.$user->getProperties()['id']; ?>
	<p>
		<a href='<?=$this->url->create($url)?>'><?echo $user->getProperties()['name']?></a>
		<i><?echo $user->getProperties()['created'];?></i> 
	</p>
	<i style="font-size: 12px;">
		<a style="text-decoration: none" href='<?=$this->url->create('user/update/'.$user->getProperties()['id'])?>'>Ändra | </a>
		<a style="text-decoration: none" href='<?=$this->url->create('user/delete/'.$user->getProperties()['id'])?>'>Radera | </a>
		<a style="text-decoration: none" href='<?=$this->url->create('user/softDelete/'.$user->getProperties()['id'])?>'>Radera mjukt | </a>
		<a style="text-decoration: none" href='<?=$this->url->create('user/unSoftDelete/'.$user->getProperties()['id'])?>'>Återställ mjuk radering | </a>
	</i>
	<hr>
</div>

<?php 
}
endforeach; 
?>