<?php
/*-----------------------------------------------
 File: seossAddCart.php
 Timestamp:2015-08-24T 15:25:38Z
 
 Copyright (C) 2015 Development, Gräfenhainichen www.de-velopment.de
 
 Released under the GNU General Public License
-----------------------------------------------*/	
?>
<script type="text/javascript">

$(document).ready(function(){ 
 
    $("#ajax_cart_quantity").submit(function(event){ //user clicks form submit button
  
          
		event.preventDefault();
  
  

	var form_data = $(this).find(':input').not(':radio,:checkbox ').serializeArray(); //prepare form data for Ajax post
	
	var button_content = $(this).find('button[type=submit]'); //get clicked button info
    button_content.html('<?php echo ARTICLE_ADDED ?>'); //Loading button text //change button text


	var post = '';
   
   	 for (i = 0; i < form_data.length; i++) {
     
       if (form_data[i].value != 'on') {
            if (i > 0) { post += '&'; }
            post += form_data[i].name + '=' + encodeURIComponent(form_data[i].value);
            
        }

    }
   
    post += '&MODsid=<?php echo xtc_session_id(); ?>'

//Activity Indicator
$('.spinner').show();
$('.spinner').html('<img src="templates/<?php echo CURRENT_TEMPLATE ?>/img/ajax-loader.gif" width="32" height="32" />');


	//Ajax	Request
		$.ajax({
				url : "seossAjaxAddCart.php",
				type: "POST",
				data : post,
				dataType : "json",
				success: function(post){
					
						button_content.html('<?php echo BUY_PRODUCT_AJAX ?>');
						//Show Shopping Cart
						$('#box_cart').html(post);
						
					$('.spinner').html('<img src="templates/<?php echo CURRENT_TEMPLATE ?>/img/ajax-success.gif" width="32" height="32" /><span>im Warenkorb</span>');
					//Fade out spinner
					$('.spinner').delay(1500).fadeOut();
					
					//BOF seoss change2015-09-09 Time 01:11 PM
					//Reset Input Fields
					$('#cart_quantity').each(function(){
	                    this.reset();
	                    });
						

						
    			},
				error: function (jqXHR, textStatus, errorThrown){
 		$('.spinner').hide();
				//Show Error as alert
				alert('<?php echo ERROR_MESSAGE ?>' + textStatus + ':' + errorThrown);
    			
    			}
		});
        

 	});
  
});



</script>