(function($) {
    /* "use strict" */


 var dzChartlist = function(){
	let draw = Chart.controllers.line.__super__.draw; //draw shadow
	var screenWidth = $(window).width();
	var donutChart = function(){
		var options = {
          series: [45, 30, 25],
          chart: {
          type: 'donut',
        },
		  legend:{
			show:false  
		  },
		  plotOptions: {
			 pie: {
				startAngle: -86,
				donut: {
					 size: '40%',
				}
			 },
		  },
		  stroke:{
			width:'10'  
		  },
		  dataLabels: {
			  formatter(val, opts) {
				const name = opts.w.globals.labels[opts.seriesIndex]
				return [ val.toFixed() + '%']
			  },
			  dropShadow: {
                enabled: false
              },
			  style: {
                fontSize: '15px',
                colors: ["#fff"],
              }
			},
		  colors:['#214BB8','#45ADDA','#FE634E']
        /* responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
				show:false,
              position: 'bottom'
            }
          }
        }] */
        };

        var chart = new ApexCharts(document.querySelector("#donutChart"), options);
        chart.render();
	}
	
	
	
	var donutChart1 = function(){
		$("span.donut").peity("donut", {
			width: "90",
			height: "90"
		});
	}
	var widgetChart1 = function(){
		if(jQuery('#widgetChart1').length > 0 ){
			const chart_widget_1 = document.getElementById("widgetChart1").getContext('2d');
			new Chart(chart_widget_1, {
				type: "line",
				data: {
					labels: ["January", "February", "March", "April", "May", "June", "July", "Aug"],

					datasets: [{
						label: "Sales Stats",
						backgroundColor: ['rgba(19, 180, 151, 0)'],
						borderColor: '#FE634E',
						pointBackgroundColor: '#FE634E',
						pointBorderColor: '#FE634E',
						borderWidth:6,
						borderRadius:10,
						pointHoverBackgroundColor: '#FE634E',
						pointHoverBorderColor: '#FE634E',
						
						data: [5, 1, 5, 1, 7, 2, 6, 1]
					}]
				},
				options: {
					title: {
						display: !1
					},
					tooltips: {
						intersect: !1,
						mode: "nearest",
						xPadding: 10,
						yPadding: 10,
						caretPadding: 10
					},
					
					legend: {
						display: !1
					},
					responsive: !0,
					maintainAspectRatio: !1,
					hover: {
						mode: "index"
					},
					scales: {
						xAxes: [{
							display: !1,
							gridLines: !1,
							scaleLabel: {
								display: !0,
								labelString: "Month"
							}
						}],
						yAxes: [{
							display: !1,
							gridLines: !1,
							scaleLabel: {
								display: !0,
								labelString: "Value"
							},
							ticks: {
								beginAtZero: !0
							}
						}]
					},
					elements: {
						
						point: {
							radius: 0,
							borderWidth: 0
						}
					},
					layout: {
						padding: {
							left: 0,
							right: 0,
							top: 5,
							bottom: 0
						}
					}
				}
			});

		}
	}
	
	
	var revenueChart = function(){
		var revenue = document.getElementById("revenue");
			if (revenue !== null) {
				var activityData = [{
						first: [ 60, 40, 70, 40, 60, 80, 50, 45, 70, 45, 70, 40]
					},
					{
						first: [35, 35, 40, 30, 38, 40, 30, 38, 32, 42, 32, 42]
					},
					{
						first: [35, 40, 40, 30, 38, 32, 42, 32, 42, 30, 38, 32]
					},
					{
						first: [35, 40, 30, 38, 32, 42, 30, 35, 22, 30, 45, 30]
					}
				];
				revenue.height = 300;
				
				var config = {
					type: "line",
					data: {
						labels: [
							"January",
							"February",
							"March",
							"April",
							"May",
							"June",
							"July",
							"August",
							"September",
							"October",
							"November",
							"December",
						],
						datasets: [
							{
								label: "My First dataset",
								data:  [35, 40, 30, 38, 32, 42, 30, 35, 22, 30, 45, 30],
								borderColor: 'rgba(254, 99, 78, 1)',
								borderWidth: "8",
								backgroundColor: 'rgba(254, 99, 78, 0.1)'
								
							}
						]
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						elements: {
								point:{
									radius: 0
								}
						},
						legend:false,
						
						scales: {
							yAxes: [{
								gridLines: {
									color: "rgba(89, 59, 219,0.1)",
									drawBorder: true
								},
								ticks: {
									fontColor: "#999",
								},
							}],
							xAxes: [{
								gridLines: {
									display: false,
									zeroLineColor: "transparent"
								},
								ticks: {
									stepSize: 5,
									fontColor: "#999",
									fontFamily: "Nunito, sans-serif"
								}
							}]
						},
						tooltips: {
							enabled: false,
							mode: "index",
							intersect: false,
							titleFontColor: "#888",
							bodyFontColor: "#555",
							titleFontSize: 12,
							bodyFontSize: 15,
							backgroundColor: "rgba(256,256,256,0.95)",
							displayColors: true,
							xPadding: 10,
							yPadding: 7,
							borderColor: "rgba(220, 220, 220, 0.9)",
							borderWidth: 2,
							caretSize: 6,
							caretPadding: 10
						}
					}
				};

				var ctx = document.getElementById("revenue").getContext("2d");
				var myLine = new Chart(ctx, config);

				var items = document.querySelectorAll("#sales-revenue .nav-tabs .nav-item");
				items.forEach(function(item, index) {
					item.addEventListener("click", function() {
						config.data.datasets[0].data = activityData[index].first;
						myLine.update();
					});
				});
			}
	
		
	}
	
	
	var chartBar = function(){
		if(jQuery('#chart_widget_2').length > 0 ){
	
			const chart_widget_2 = document.getElementById("chart_widget_2").getContext('2d');
			//generate gradient
			const chart_widget_2gradientStroke = chart_widget_2.createLinearGradient(250, 0, 0, 0);
			chart_widget_2gradientStroke.addColorStop(1, "#EA7A9A");
			chart_widget_2gradientStroke.addColorStop(0, "#FAC7B6");

			// chart_widget_2.attr('height', '100');

			new Chart(chart_widget_2, {
				type: 'bar',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
					datasets: [
						{
							label: "My First dataset",
							data: [15, 40, 55, 40, 25, 35, 40, 50, 85, 40],
							borderColor: 'rgba(254, 99, 78, 1)',
							borderWidth: "0",
							backgroundColor: 'rgba(254, 99, 78, 1)', 
							hoverBackgroundColor: 'rgba(254, 99, 78, 1)'
						}
					]
				},
				options: {
					legend: false,
					responsive: true, 
					maintainAspectRatio: false,  
					scales: {
						yAxes: [{
							display: false, 
							ticks: {
								beginAtZero: true, 
								display: false, 
								max: 100, 
								min: 0, 
								stepSize: 10
							}, 
							gridLines: {
								display: false, 
								drawBorder: false
							}
						}],
						xAxes: [{
							display: false, 
							barPercentage: 0.4, 
							gridLines: {
								display: false, 
								drawBorder: false
							}, 
							ticks: {
								display: false
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
				donutChart();
				donutChart1();
				widgetChart1();
				revenueChart();
				chartBar();
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