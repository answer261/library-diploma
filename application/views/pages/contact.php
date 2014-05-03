<!-- Content-center -->
			<div class="row">
				<div class="content-center">								
					<div class="contact-body row">
						<div class="img-contact">
							<img src="public/images/contact-page.jpg">
						</div>
						<div class="contact_seconadary_block column width 90">
							<div class="contact-about  column width-30">
								<span class="contact_text_bold">ТОВ "AutosalonUI"</span>															
								<span class="">Ми будемо раді бачити Вас за адресою:</span> 
								<span>77400, м.Івано-Франківськ, вул.Академіка Сахарова,7</span>  
								<span class="contact_text_bold">Розклад роботи:</span>
								<span class="">ПН-ПТ 8.30-20.30 СБ 9.00-18.00 </span>
								<span class="contact_text_bold">Контактні телефони: </span> 
								<span class=""> (044) 566-00-40</span>								
								<span class="">e-mail: autosalon@drago.if.ua </span>																																							
							</div>
							<!-- /contact-about -->
					<script>
					var mapsCenter=new google.maps.LatLng(48.914097,24.711663);
					function initialize()
					{
					var mapProp = {
					  center: mapsCenter,
					  zoom:15,
					  mapTypeId: google.maps.MapTypeId.ROADMAP				  };

					var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

					var marker = new google.maps.Marker({
					  position: mapsCenter,
					  title:'Click to zoom',
					  animation:google.maps.Animation.DROP
					  });

					marker.setMap(map);
					var infowindow = new google.maps.InfoWindow({
					  content:"Будемо раді бачити Вас в нашому автосалоні"
					  });

					google.maps.event.addListener(marker, 'click', function() {
					  infowindow.open(map,marker);
					  map.setZoom(18);
					  map.setCenter(marker.getPosition(mapsCenter));
					  });
					     
					google.maps.event.addListener(map,'center_changed',function() {
					//  seconds after the center of the map has changed, pan back to the marker
					  window.setTimeout(function() {
					    map.panTo(marker.getPosition());
					  },7000);
					  });
					}

					google.maps.event.addDomListener(window, 'load', initialize);					
					</script>
							<div id="googleMap" class="contact-maps  width-60"> Here will be block with google maps</div>	
						</div>
						<!-- /contact_seconadary_block-->
				     </div>
				   <!-- /contact-body -->				   
				 </div>
				 <!-- /Content-center -->
			</div>
			<!-- /row -->
			   
		    
