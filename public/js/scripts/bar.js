var result;

$.ajax({
  type: "GET",
  url: 'api/data',
  datatype: "json",
  async: false,
  success: function(data){
    result = data;
    console.log("Inside ajax: "+result);                
  }
});

console.log("Outside ajax: "+result);
 
 new Chart(document.getElementById("barchart"), {
	type: 'bar',
	data: {
		labels: result.map(a => a.mo),
		datasets: [{
			data: result.map(a => a.total),
			label: 'nuitees restorations',
			backgroundColor: "#4755AB",
			borderWidth: 1,
		}, {
			data: result.map(a => a.total),
			label: 'nuitees',
			backgroundColor: "#E7EDF6",
			borderWidth: 1,
		}]
	},
	options: {
		responsive: true,
		legend: {
			position: 'top',
		},
	}
});
