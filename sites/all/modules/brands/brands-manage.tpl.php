<?php 
	$i=0; 
	$brand_count = count($xml_obj->children());
?>

<?php if($brand_count){ ?>
	<table id="brand_list">
		<?php
			$i = 1;
			foreach($xml_obj->children() as $brand) {
				$classes = array();
				$classes[]	= $i%2 == 0 ? "even" : "odd";
				if($i==1){ $classes[] = "first"; }
				if($i==$brand_count){ $classes[] = "last"; }
				?><tr class="<?php print implode(' ',$classes) ?>"><?php 
					?><td><?php print $brand ?></td><?php
					?><td><img src="<?php print $brand['src'] ?>" alt="<?php print $brand ?>"></td><?php
					?><td><?php print l('delete','admin/content/brands/delete/'.$i)?></td><?php
				?></tr><?php
				$i++;
			}
		?>
	</table>	
<?php }else{ ?>
	<div class="message status">There are no brands (<?php print $brand_count?>)</div>
<?php } ?>

<?php print drupal_get_form('_brand_addform'); ?>