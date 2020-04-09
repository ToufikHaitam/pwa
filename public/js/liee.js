
 
window.indexedDB = window.indexedDB || window.mozIndexedDB || window.webkitIndexedDB || window.msIndexedDB;
 
//prefixes of window.IDB objects
window.IDBTransaction = window.IDBTransaction || window.webkitIDBTransaction || window.msIDBTransaction;
window.IDBKeyRange = window.IDBKeyRange || window.webkitIDBKeyRange || window.msIDBKeyRange

var s="<table border='4px'>"

if (!window.indexedDB) {
    window.alert("Your browser doesn't support a stable version of IndexedDB.")
}
 
const customerData = [
  {  email: "Bill@gmail.com", url: "https://justmegareth.com/2017-07-15-progressive-web-app-in-laravel/?utm_source=learninglaravel.net", taxe_id:"3" },
 ];
 
 
var db;
var request = window.indexedDB.open("newDatabase", 1);
 
request.onerror = function(event) {
  console.log("error: ");
};
 
request.onsuccess = function(event) {
  db = request.result;
  console.log("success: "+ db);
};
 
request.onupgradeneeded = function(event) {
        var db = event.target.result;
        var objectStore = db.createObjectStore("customers", {keyPath: "id",autoIncrement:true});
 			
        for (var i in customerData) {
                objectStore.add(customerData[i]);      
        }
}


 
 
function read() {

         
        var transaction = db.transaction(["customers"]);
        var objectStore = transaction.objectStore("customers");
        var request = objectStore.get("00-03");
        request.onerror = function(event) {
          alert("Unable to retrieve daa from database!");
        };
        request.onsuccess = function(event) {
          // Do something with the request.result!
          if(request.result) {
                alert("Name: " + request.result.name + ", Age: " + request.result.age + ", Email: " + request.result.email);
          } else {
                alert("Kenny couldn't be found in your database!"); 
          }
        };
}
var timestamps = [];
 function readAll() {


        
      

        var objectStore = db.transaction(["customers"], "readwrite").objectStore("customers");


       
        objectStore.getAll().onsuccess = function(event) {
                 timestamps= event.target.result;
              };


              return timestamps;
         
}
 
function add(obj) {
    console.log(obj.email);
        var request = db.transaction(["customers"], "readwrite")
                .objectStore("customers")
                .add({ email:obj.email, url:obj.url, taxe_id:obj.taxe_id});
                                 
        request.onsuccess = function(event) {
                alert("Kenny has been added to your database.");
        };
         
        request.onerror = function(event) {
                alert("Unable to add data\r\nKenny is aready exist in your database! ");       
        }
         
}
 
function remove(id) {
 
        var request = db.transaction(["customers"], "readwrite")
                .objectStore("customers")
                .delete(id);
        request.onsuccess = function(event) {
        console.log(id+"deleted");


};
}
 