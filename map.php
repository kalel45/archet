
<div id="map" style="height:380px;width: 500px"></div>
<script type="text/javascript">




	// create a map in the "map" div, set the view to a given place and zoom
var map = L.map('map').setView([46.0, 0.8], 5);

	map.on('popupopen', function(e) {
		var post_id = e.popup.post_id;
		var nonce = '<?php print wp_create_nonce("popup_content"); ?>';
		jQuery.post("<?php print admin_url('admin-ajax.php') ?>",{action : 'popup_content',
			post_id :post_id, nonce : nonce},function(response){
				console.log("resp", response);
				e.popup.setContent(response);
			});
	});


// add an OpenStreetMap tile layer
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

/*var marker_53 = L.marker([46.361153, 4.683565]).addTo(map);
var popup_53 = L.popup().setContent('Eglise de SOLOGNY');
popup_53.post_id = 53;*/

</script>

<?php 
	
	//echo getMarkerList();

	echo "<script>".getMarkerList()."</script>";
?>
