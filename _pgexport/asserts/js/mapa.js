var map;
var idInfoBoxAberto;
var infoBox = [];
var markers = [];

function initialize() {	
	var latlng = new google.maps.LatLng(-22.9104377, -43.2297446);
	
    var options = {
 		center: latlng,
		zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("mapa"), options);
}

initialize();

function abrirInfoBox(id, marker) {
	if (typeof(idInfoBoxAberto) == 'number' && typeof(infoBox[idInfoBoxAberto]) == 'object') {
		infoBox[idInfoBoxAberto].close();
	}

	infoBox[id].open(map, marker);
	idInfoBoxAberto = id;
}

function carregarPontos() {
	
	$.getJSON('asserts/js/pontos.json', function(pontos) {
		
		var latlngbounds = new google.maps.LatLngBounds();
		
		$.each(pontos, function(index, ponto) {
			
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(ponto.Latitude, ponto.Longitude),
				title: "Meu ponto personalizado! :-D",
				icon: 'asserts/images/marcador3.png',
				map:map
			});
			


			var ibOptions = {
				      
						disableAutoPan: false
						,maxWidth: 0
						,pixelOffset: new google.maps.Size(-110, 0)
						,zIndex: null
						,height:200
						,boxStyle: {
					  padding: "0px 0px 0px 0px",
					  width: "252px",
					  height: "40px"
					},
					closeBoxURL : "",
					infoBoxClearance: new google.maps.Size(1, 1),
						isHidden: false,
						pane: "floatPane",
						enableEventPropagation: false
					};

			var myOptions = {
				content: "<p>" + ponto.Descricao + "</p>",
				pixelOffset: new google.maps.Size(-150, 0)
        	};

			//infoBox[ponto.Id] = new InfoBox(myOptions);
			//infoBox[ponto.Id] = new InfoBox(ibOptions);
			//infoBox[ponto.Id].marker = marker;
			
			google.maps.event.addListener(marker, 'click', function (e) {
				
				if (typeof(idInfoBoxAberto) == 'number' && typeof(infoBox[idInfoBoxAberto]) == 'object') {
					infoBox[idInfoBoxAberto].close();
				}
				var template = "";
				
				if(ponto.Id==1){
				template   = "\
				<div class='info-box-wrap'>\
					<img src='http://www.ibol.com.br/imagens/dest-unidades.jpg' />\
					<div class='info-box-text-wrap'>\
						<h6 class='address'>IBOL BOTAFOGO - </h6>\
						<p class='price'>Praia de Botafogo, 206 - Botafogo</p>\
					</div>\
					<div class='action-btns'>\
					<i class='fa fa-bars' aria-hidden='true></i>\
					</div>\
				</div>";
				}

				if(ponto.Id==2){
					template   = "\
					<div class='info-box-wrap'>\
						<img src='http://www.ibol.com.br/img/imagens_secoes/85.jpg' />\
						<div class='info-box-text-wrap'>\
							<h6 class='address'>IBOL COPACABANA - </h6>\
							<p class='price'>Av. Nossa Senhora de Copacabana,1052/4 Andar</p>\
						</div>\
						<div class='action-btns'>\
						<i class='fa fa-bars' aria-hidden='true></i>\
						</div>\
					</div>";
					}

					if(ponto.Id==3){
						template   = "\
						<div class='info-box-wrap'>\
							<img src='https://i.pinimg.com/236x/91/9c/85/919c85f3ac860040e8ba95b9ae41532b--vila-janeiro.jpg' />\
							<div class='info-box-text-wrap'>\
								<h6 class='address'>IBOL VILA DA PENHA</h6>\
								<p class='price'>Av. Meriti, 2567 - Vila da Penha</p>\
							</div>\
							<div class='action-btns'>\
							<i class='fa fa-bars' aria-hidden='true></i>\
							</div>\
						</div>";
						}
						if(ponto.Id==4){
							template   = "\
							<div class='info-box-wrap'>\
								<img src='http://www.ibol.com.br/img/imagens_secoes/88.jpg' />\
								<div class='info-box-text-wrap'>\
									<h6 class='address'>IBOL BARRA</h6>\
									<p class='price'>Av. Armando Lombardi, 1000 - Lj 129 </p>\
								</div>\
								<div class='action-btns'>\
								<i class='fa fa-bars' aria-hidden='true></i>\
								</div>\
							</div>";
							}

							if(ponto.Id==6){
								template   = "\
								<div class='info-box-wrap'>\
									<img src='http://www.ibol.com.br/img/imagens_secoes/88.jpg' />\
									<div class='info-box-text-wrap'>\
										<h6 class='address'>IBOL BARRA</h6>\
										<p class='price'>Av. Armando Lombardi, 1000 - Lj 129 </p>\
									</div>\
									<div class='action-btns'>\
									<i class='fa fa-bars' aria-hidden='true></i>\
									</div>\
								</div>";
								}
					
								
								if(ponto.Id==6){
									template   = "\
									<div class='info-box-wrap'>\
										<img src='https://diariodorio.com/wp-content/uploads/2018/12/WhatsApp-Image-2018-12-04-at-18.47.01-1-1140x641.jpeg' />\
										<div class='info-box-text-wrap'>\
											<h6 class='address'>IBOL CACHAMBI</h6>\
											<p class='price'>Rua Cachambi, 707 </p>\
										</div>\
										<div class='action-btns'>\
										<i class='fa fa-bars' aria-hidden='true></i>\
										</div>\
									</div>";
									}

									if(ponto.Id==7){
										template   = "\
										<div class='info-box-wrap'>\
											<img src='' />\
											<div class='info-box-text-wrap'>\
												<h6 class='address'>IBOL MADUREIRA</h6>\
												<p class='price'>.... </p>\
											</div>\
											<div class='action-btns'>\
											<i class='fa fa-bars' aria-hidden='true></i>\
											</div>\
										</div>";
										}
							
					

				var boxText = document.createElement("div");
				boxText.style.cssText = "margin-top: 8px; background: #fff; padding: 0px;";
				boxText.innerHTML = template;
		 
				ibOptions.content = boxText
				infoBox[ponto.Id] = new InfoBox(ibOptions);
				infoBox[ponto.Id].open(map, marker);
				infoBox[ponto.Id].marker = marker;
				idInfoBoxAberto = ponto.Id;

			});

	

			
			markers.push(marker);
			
			latlngbounds.extend(marker.position);
			
		});
		
		//var markerCluster = new MarkerClusterer(map, markers, { ignoreHidden: false });
		
		map.fitBounds(latlngbounds);
		
	});
	
}

carregarPontos();