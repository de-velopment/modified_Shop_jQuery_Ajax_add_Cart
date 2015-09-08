# modified Shop „Ajax add Cart”

### Ajax add Cart Erweiterung für modified Shop Version 1.06 rev 4642 SP2 auf Basis von jQuery
---

![Screenshot](https://github.com/de-velopment/modified_Shop_jQuery_Ajax_add_Cart/blob/master/images/modified_shop_ajax_processing.png "Ajax add cart modified Shop")

![Screenshot](https://github.com/de-velopment/modified_Shop_jQuery_Ajax_add_Cart/blob/master/images/modified_shop_ajax_add_cart_success.png "Ajax add cart modified Shop")

## Schritt 1
Dateien/Verzeichnisse aus „new_files“ Einbinden

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

#### Hinweis:
Vor dem Einbau ein Backup des bestehenden Systems erzeugen.


##### License
---

The MIT License (MIT)


Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

Created by [de-velopment](http://de-velopment.de)

