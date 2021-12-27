(function($) {
    /* "use strict" */


 var dzChartlist = function(){
	let draw = Chart.controllers.line.__super__.draw; //draw shadow
	var screenWidth = $(window).width();
	var columnChart = function(){
		var options = {
			series: [{
				name: 'Aplication Sent',
				data: [40, 60, 20, 45, 70, 35, 40, 75, 45, 30, 55, 65, 20]
			}, {
				name: 'Appllication Answered',
				data: [20, 35, 40, 60,  35, 16, 60, 45, 60, 45, 20, 35, 55]
			}],
			chart: {
				type: 'bar',
				height: 250,
				stacked: true,
				toolbar: {
					show: false,
				}
			},
			responsive: [{
				breakpoint: 480,
				options: {
					legend: {
						position: 'bottom',
						offsetX: -10,
						offsetY: 0
					}
				}
			}],
			plotOptions: {
				bar: {
					horizontal: false,
					columnWidth: '30%',
					
					endingShape: "rounded",
					startingShape: "rounded",
					backgroundRadius: 10,
					colors: {
						backgroundBarColors: ['#ECECEC', '#ECECEC', '#ECECEC', '#ECECEC', '#ECECEC', '#ECECEC', '#ECECEC'],
						backgroundBarOpacity: 1,
						backgroundBarRadius: 10,
					},
				},
				
			},
			colors:[ '#707070', '#FE634E'],
			xaxis: {
				show: true,
				axisBorder: {
					show: false,
				},
				
				labels: {
					style: {
						colors: '#828282',
						fontSize: '14px',
						fontFamily: 'Poppins',
						fontWeight: 'light',
						cssClass: 'apexcharts-xaxis-label',
					},
				},
				crosshairs: {
					show: false,
				},
				
				categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13'],
			},
			yaxis: {
				show: false
			},
			grid: {
				show: false,
			},
			toolbar: {
				enabled: false,
			},
			dataLabels: {
			  enabled: false
			},
			legend: {
				show:false
			},
			fill: {
				opacity: 1
			}
		};

		var chart = new ApexCharts(document.querySelector("#columnChart"), options);
		chart.render();
	}
	
	var chartCircle = function(){
		
		
		var optionsCircle = {
			chart: {
				type: 'radialBar',
				height: 350,
				offsetY: 0,
				offsetX: 0,
				sparkline: {
					enabled: true,
				},
			},
			plotOptions: {
				radialBar: {
					size: undefined,
					inverseOrder: false,
					hollow: {
						margin: 0,
						size: '25%',
						background: 'transparent',
					},
			  
					track: {
						show: true,
						background: '#e1e5ff',
						strokeWidth: '12%',
						opacity: 1,
						margin: 10, // margin is in pixels
					},
				},
			},
			responsive: [{
				breakpoint: 480,
				options: {
					chart: {
						offsetY: 0,
						offsetX: 0
					},	
					legend: {
						position: 'bottom',
						offsetX:0,
						offsetY: 0
					}
				}
			}],	
		fill: {
			opacity: 1
        },
		stroke:{
			lineCap: 'round'
		},
		colors:['#FE634E','#707070', '#BFBFBF'],
		series: [65, 55, 45],
		labels: ['Ticket A', 'Ticket B', 'Ticket C'],
			
			legend: {
				fontSize: '14px',  
				show: true,
				position: 'bottom'
				
			},		 
		}

		var chartCircle1 = new ApexCharts(document.querySelector('#chartCircle'), optionsCircle);
		chartCircle1.render();
	}
	
	var donutChart1 = function(){
		$("span.donut").peity("donut", {
			width: "90",
			height: "90"
		});
	}
	
	var polarAreaCharts = function(){
		var options = {
			series: [42, 47, 52, 58],
			chart: {
				width: 270,
				type: 'polarArea',
				sparkline: {
					enabled: true,
				},
			},
			labels: ['VIP', 'Reguler', 'Exclusive', 'Economic'],
			fill: {
				opacity: 1,
				colors: ['#707070', '#BFBFBF', '#F3F3F3', '#FE634E']
			},
			stroke: {
				width: 0,
				colors: undefined
			},
			yaxis: {
				show: false
			},
			legend: {
				position: 'bottom'
			},
			plotOptions: {
				polarArea: {
					rings: {
						strokeWidth: 0
					}
				}
			},
			theme: {
				monochrome: {
					enabled: true,
					shadeTo: 'light',
					shadeIntensity: 0.6
				}
			}
		};

        var chart = new ApexCharts(document.querySelector("#polarAreaCharts"), options);
        chart.render();
	}
	
	var areaChart = function(){
		if(jQuery('#areaChart_2').length > 0 ){
			const areaChart_2 = document.getElementById("areaChart_2").getContext('2d');
			//generate gradient
			const areaChart_2gradientStroke = areaChart_2.createLinearGradient(0, 1, 0, 500);
			areaChart_2gradientStroke.addColorStop(0, "rgba(254, 99, 78, 0.0)");
			areaChart_2gradientStroke.addColorStop(1, "rgba(254, 99, 78, 0)");
			
			areaChart_2.height = 100;

			new Chart(areaChart_2, {
				type: 'line',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
					datasets: [
						{
							label: "My First dataset",
							data: [80, 50, 70, 40, 60, 30, 50],
							borderColor: "#FE634E",
							borderWidth: "4",
							backgroundColor: areaChart_2gradientStroke
						}
					]
				},
				options: {
					legend: false, 
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true, 
								max: 100, 
								min: 0, 
								stepSize: 20, 
								padding: 0
							}
						}],
						xAxes: [{ 
							
							ticks: {
								padding: 0,
							},
							gridLines: {
								display: false, 
								drawBorder: false
							}
						}]
					}
				}
			});
		}    
	}
	/* Function ============ */
		return {
			init:function(){
			},
			
			
			load:function(){
				columnChart();
				chartCircle();
				donutChart1();
				polarAreaCharts();
				areaChart();
			},
			
			resize:function(){
				
			}
		}
	
	}();

	jQuery(document).ready(function(){
	});
		
	jQuery(window).on('load',function(){
		setTimeout(function(){
			dzChartlist.load();
		}, 1000); 
		
	});

	jQuery(window).on('resize',function(){
		
		
	});     

})(jQuery);