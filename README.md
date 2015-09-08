# modified Shop „Ajax add Cart”

### Ajax add Cart Erweiterung für modified Shop Version 1.06 rev 4642 SP2 auf Basis von jQuery
---

![Screenshot](https://github.com/de-velopment/modified_Shop_jQuery_Ajax_add_Cart/blob/master/images/modified_shop_ajax_processing.png "Ajax add cart modified Shop")

![Screenshot](https://github.com/de-velopment/modified_Shop_jQuery_Ajax_add_Cart/blob/master/images/modified_shop_ajax_add_cart_success.png "Ajax add cart modified Shop")

## Schritt 1
Dateien/Verzeichnisse aus „new_files“ auf Einbinden

## Schritt 2

Core Dateien gemäss den Anpassungen der Dateien im Ordner „changes“ anpassen

Die betreffenden Stellen im Code wurden mit Kommentaren versehen.

Beispiel:

	<!-- //BOF seoss change2015-09-01 Time 11:46 AM Ajax add Cart-->
	<script type="text/javascript">
	$(document).ready(function(){
       $.get("checkJS.php");
       
     });
	</script>
	<?php
	if($_SESSION['javascript'] =='1'){
	require_once 'includes/seossAddCart.js.php';
	}
	?>
	<!-- //EOF seoss Ajax Add Cart -->


##### Lizenz
---
