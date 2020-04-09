<!DOCTYPE html>


<!DOCTYPE HTML>
<html lang="zxx">
<script> var num=0;</script>
<head>
    <title> </title>
    @laravelPWA

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Triple Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

<script type="text/javascript" src="js/liee.js"></script>
<script type="text/javascript" >

 
 



</script>
   
    <script>
 
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
    </script>
    <style>

.preloader {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   z-index: 9999;
   background-image: url('/images/load.gif');
   background-repeat: no-repeat; 
   background-color: #FFF;
   background-position: center;
}
         table, th, td {
      padding: 10px;
      border: 1px solid black;
      border-collapse: collapse;
      }
    </style>

    <script type="text/javascript">

function load(){
    $('#myTable').html('');   
$.ajax({
    url: '/api/liees',
    dataType: 'json',
    success: function(data) {
        console.log("data"+data);
        for (var i=0; i<data.length; i++) {
            var row = $('<tr border="1px" ><td>' + data[i].id+ '|</td><td>' + data[i].email + '</td><td>|' + data[i].taxe_id + '</td></tr>');
            $('#myTable').append(row);
        }
    },
    error: function(jqXHR, textStatus, errorThrown){
        alert('Error: ' + textStatus + ' - ' + errorThrown);
    }
});}



function loadcache(){
 
 readAll();
 console.log("ana hna");
 var data=readAll();
    for (var i=0; i<data.length; i++) {
            var row = $('<tr border="1px" ><td>' + data[i].id+ '|</td><td>' + data[i].email + '</td><td>|' + data[i].taxe_id + '</td></tr>');
            $('#mycache').innerHTML='<table id="mycache" style=" padding: 10px;border: 1px solid black; border-collapse: collapse;"><tbody></tbody></table>';
            $('#mycache').append(row);
        }
 
 }
</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="main-bg">
		<!-- title -->
		<h1>PWA application</h1>
        <!-- //title -->
        <div class="preloader"></div>
        <script>
        
   $('.preloader').hide();
 </script>
		<div class="sub-main-w3">
			<div class="image-style">

			</div>
			<!-- vertical tabs -->
			<div class="vertical-tab">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

            

         		<div id="section1" class="section-w3ls">
					<input type="radio" name="sections" id="option1" checked>
					<label for="option1" class="icon-left-w3pvt">
                        <span class="fa fa-plus" aria-hidden="true"></span>Ajout data </label>
					<article>
                    <p><button class="w3-btn w3-red" id="server" width="100%"> 
                     </button><span class="w3-badge w3-margin-left w3-green" id="span"></span>
                     <button id="sync" class="w3-badge w3-margin-left w3-green" style="margin-left: 400px" value="sync">sync</button>
                    
                    </p>

                    
                    <form action="/api/postdata" method="post" id="my_form">

                            <h3 class="legend">Add data in 2  tables   <span class="w3-badge w3-tiny w3-green" id="test">connecte</span></h3>
                             @csrf

							<div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input type="email" name="email" id="email" placeholder="mail" required />
							</div>
							<div class="input">
								<span class="fa fa-link" aria-hidden="true"></span>
								<input type="url" name="website" placeholder="url"  id="url" required />
                            </div>
                            
                            <div class="input">
								<span class="fa fa-book" aria-hidden="true"></span>
                                <select name="taxe_id" id="taxes" class="form-control" style="width: 400px";heigth:"30px" >
                                <option value="0">by default</option>
                                </select>							
                            </div>
							<button type="submit" class="btn submit"  id="button" value="Submit Form">Add liee</button>
 						</form>
					</article>
				</div>
				<div id="section2" class="section-w3ls">
					<input type="radio" name="sections" id="option2">
					<label for="option2" class="icon-left-w3pvt"><span class="fa fa-pencil-square" aria-hidden="true"></span>cache data</label>
					<article>
 							<div class="input">
                             <table id="mycache" style=" padding: 10px;border: 1px solid black; border-collapse: collapse;">
                                <tbody>
                                    
                                </tbody>
                                </table>
                           </div>
                          
                            

                            <script>

                                loadcache();
                            </script>
					</article>
				</div>
				<div id="section3" class="section-w3ls">
					<input type="radio" name="sections" id="option3">
					<label for="option3" class="icon-left-w3pvt"><span class="fa fa-book" aria-hidden="true"></span>Remote data</label>
					<article>
 							<h3 class="legend last">Remote data</h3>
							<p class="para-style">
                            <div class="input"> 
                                <table id="myTable" style=" padding: 10px;
      border: 1px solid black;
      border-collapse: collapse;">
                                <tbody>
                                    
                                </tbody>
                                </table></p> 
                            </div>

                            <script>

                                load();
                            </script>
                            </article>

				</div>
			</div>
			<!-- //vertical tabs -->
			<div class="clear"></div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			 
		</div>
		<!-- //copyright -->
	</div>

</body>

</html>












<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @laravelPWA

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

        

    <script>

        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/serviceworker.js');
            });
        }
    </script>





 

<script async src="js/user.js"></script>
 



    
  


<script>

    
document.getElementsByTagName("BODY")[0].ononline = function() {onFunction()};
document.getElementsByTagName("BODY")[0].onoffline = function() {offFunction()};

function onFunction() {
    document.getElementById("test").innerHTML = "conecte";
    document.getElementById("test").className = 'w3-badge w3-tiny w3-green';
    $("#sync").show()
  alert ("Your browser is working online.");
}

function offFunction() {
    document.getElementById("test").innerHTML = "Deconecte";
    document.getElementById("test").className = 'w3-badge w3-tiny w3-red';
    ;$("#sync").hide();

  alert ("Your browser is working offline.");
}
</script>

  
<script >
var request = self.indexedDB.open('EXAMPLE_DB', 1);

request.onsuccess = function(event) {
    // some sample products data
    var products = [
        {id: 1, name: 'Red Men T-Shirt', price: '$3.99'},
        {id: 2, name: 'Pink Women Shorts', price: '$5.99'},
        {id: 3, name: 'Nike white Shoes', price: '$300'}
    ];
    // get database from event
    var db = event.target.result;

    // create transaction from database
    var transaction = db.transaction('products', 'readwrite');

    // add success event handleer for transaction
    // you should also add onerror, onabort event handlers
    transaction.onsuccess = function(event) {
        console.log('[Transaction] ALL DONE!');
    };

    // get store from transaction
    var productsStore = transaction.objectStore('products');

    /*************************************/

    // put products data in productsStore
    products.forEach(function(product){


        
	event.preventDefault(); //prevent default action 
	var post_url = "/api/postdata"; //get form action url
	var form_data = product; //Encode form elements for submission
	
	$.post( post_url, form_data, function( response ) {
        console.log(response);


    });
        
 

        var db_op_req = productsStore.add(product);

        db_op_req.onsuccess = function(event) {
            console.log(event.target.result == product.id); // true
        }
    });

    // count number of objects in store
    productsStore.count().onsuccess = function(event) {
        console.log('[Transaction - COUNT] number of products in store', event.target.result);
    };

    // get product with id 1
    productsStore.get(1).onsuccess = function(event) {
        console.log('[Transaction - GET] product with id 1', event.target.result);
    };

    // update product with id 1
    products[0].name = 'Blue Men T-shirt';
    productsStore.put(products[0]).onsuccess = function(event) {
        console.log('[Transaction - PUT] product with id 1', event.target.result);
    };

    // delete product with id 2
    productsStore.delete(2).onsuccess = function(event) {
        console.log('[Transaction - DELETE] deleted with id 2');
    };
};

request.onerror = function(event) {
    console.log('[onerror]', request.error);
};

request.onupgradeneeded = function(event) {
    var db = event.target.result;
    var productsStore = db.createObjectStore('products', {keyPath: 'id'});
};
</script>

    <script>
$("#sync").click(function(event){ 
  
  
    var products= readAll();
if(products){ 
    
    $("#sync").hide();
    $('.preloader').show()
    window.setTimeout(function(){
       
  $('.preloader').hide();
    }, 800);}

 products.forEach(function(product){

 $.ajax({
    type: "POST",
    url: "/api/postdata",
    // The key needs to match your method's input parameter (case-sensitive).
    data:  'id='+ product.id  + '&email='+ product.email  + '&website='+product.url + '&taxe_id='+product.taxe_id,
   
    success: function(data) {
        remove(product.id);
        console.log(data);
         
    },
    error: function(jqXHR, textStatus, errorThrown){
        alert('Error: ' + textStatus + ' - ' + errorThrown);
    }
});
});
 $("#sync").show();
load();
loadcache();
$("#server").html( "la synchronisation est bien effectue:)");
});

$("#my_form").submit(function(event){
     
	event.preventDefault(); //prevent default action 
	var post_url = $(this).attr("action"); //get form action url
	var form_data = $(this).serialize(); //Encode form elements for submission
    var liee=new Object();
    liee.email=$("#email"). val();
    liee.url=$("#url"). val();
    liee.taxe_id=$("#taxes"). val();
    if(navigator.onLine){
   console.log("vous etes connecte    :)");

   $.post( post_url, form_data, function( response ) {

        console.log(response);

       $("#server").html( "les donnees sont bien ajoutee :)");
       $("#span").html(++num);
       load();
    });
   }
    
    else{
        
        $("#server").html( "les donnees sont bien ajoutee a la cache :( " );
       $("#span").html(++num);
        add(liee);
        load();
         
       loadcache();
       


 console.log(
             "vous n'etes pas connecte oppppppps?????"
         )
    }
});
    </script>

 
 

<script>




    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/serviceWorker.js');
        });
    }
</script>



 