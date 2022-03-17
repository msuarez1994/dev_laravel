$(function () {
    $.ajax({
        type: "GET",
        url: "http://api-swap.rtp.gob.mx/api/recaudacion",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            var mapOptions = {
                center: [19.2824955, -99.13473100000002],
                zoom: 12
            }
            var map = new L.map('map', mapOptions);
            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
		        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
	        }).addTo(map);
            $.each(data.items, function(idx, el) {
                //if (el.deviceId == '7126') {
                    L.marker([el.latitude,el.longitude]).addTo(map).bindPopup('<strong>' + 
                                                                        'Economico: ' + el.deviceId + 
                                                                        '</strong>' + '<br>' +
                                                                        '<br>Latitud: ' + el.latitude +
                                                                        '<br>Longitud: ' + el.longitude +
                                                                        '<br>Speed: ' + el.speed
                                                                        );
                //}              
                
            });
        },
        failure: function (data) {
            
        },
        error: function (data) {
            
            
        }
    });
});