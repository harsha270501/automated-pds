
window.onload = function () {
	
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	
	axisX:{
		interval: 1
	},
	axisY2:{
		interlacedColor: "3F77BC",
		gridColor: "#78b8e9",
		title: "2020"
	},
	data: [{
		type: "bar",
		name: "companies",
		axisYType: "secondary",
		color: "#014D65",
		dataPoints: [
			{ y: 3, label: "January" },
			{ y: 7, label: "Febraury" },
			{ y: 5, label: "March" },
			{ y: 9, label: "April" },
			{ y: 7, label: "May" },
			{ y: 7, label: "June" },
			{ y: 9, label: "July" },
			{ y: 8, label: "August" }
		]
	}]
});
chart.render();

}
