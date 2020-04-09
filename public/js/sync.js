 
function sync(){

    var products= readAll();
    
     
     
    products.forEach(function(product){

        console.log(product);
        event.preventDefault(); //prevent default action 

var markers = [{ "position": "128.3657142857143", "markerPosition": "7" },

               { "position": "235.1944023323615", "markerPosition": "19" },

               { "position": "42.5978231292517", "markerPosition": "-3" }];

$.ajax({

    type: "POST",
    url: "/webservices/PodcastService.asmx/CreateMarkers",
    // The key needs to match your method's input parameter (case-sensitive).
    data: JSON.stringify({ Markers: markers }),
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    success: function(data){alert(data);},
    failure: function(errMsg) {
        alert(errMsg);
    }
});
        
        var post_url = "/api/postdata"; //get form action url
        var form_data =product;
        
        $.post( post_url, form_data, function( response ) {
            console.log(response);
            remove(product.id);
    
        });
    })






}