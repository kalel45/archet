<?php 
$lieu = get_post_meta(get_the_ID(), 'wpcf-lieu', true);
$musiciens = get_post_meta(get_the_ID(), 'wpcf-musiciens', true);
$beneficiaire = get_post_meta(get_the_ID(), 'wpcf-beneficiaire', true); 
$recette = get_post_meta(get_the_ID(), 'wpcf-recette', true); 
$latitude = get_post_meta(get_the_ID(), 'lat', true);
$longitude = get_post_meta(get_the_ID(), 'lng', true);



?>
<div class="meta">
<?php if(!empty($lieu)):?>
	<span><?php echo $lieu; ?></span> </br>
<?php endif; ?>
<?php if(!empty($musiciens)):?>
	<span><?php echo $musiciens; ?></span></br>
<?php endif; ?>
<?php if(!empty($beneficiaire)):?>
	<span><?php echo $beneficiaire; ?></span></br>
<?php endif; ?>
<?php if(!empty($recette)):?>
	<span><?php echo $recette; ?></span></br>
<?php endif; ?>

<?php /* if(!empty($latitude)):?>
	<span><?php echo "Latitude: ".$latitude; ?></span></br>
<?php endif; ?>
<?php if(!empty($longitude)):?>
	<span><?php echo "Longitude: ".$longitude; ?></span></br>
<?php endif; */?>
</div>	