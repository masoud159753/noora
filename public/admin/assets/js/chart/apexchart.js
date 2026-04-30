const chartEmployeeConfig = {
	series: [
		{
			name: 'سود خالص',
			data: [390, 115, 305, 250, 102, 40, 195, 235, 280]
		},
		{
			name: 'میزان درآمد',
			data: [105, 205, 120, 380, 105, 205, 290, 310, 105]
		},
		{
			name: 'جریان نقدی آزاد',
			data: [180, 200, 180, 250, 100, 400, 90	, 115, 195]
		}
	],
	colors: ['var(--bs-primary)', 'var(--bs-secondary)', 'var(--bs-info)'],
	chart: {
		type: 'bar',
		height: 320,
		
		toolbar: {
            show: false
        }
	},
	plotOptions: {
		bar: {
            horizontal: false,
            columnWidth: '55%',
            borderRadius: 3,
        },
	},
	dataLabels: {
		enabled: false
	},
	stroke: {
		show: true,
		width: 2,
		colors: ['transparent']
	},
	xaxis: {
		categories: ['فرو', 'ارد', 'خرد', 'تیر', 'مرد', 'شهر', 'مهر', 'آبا', 'آذر'],
		axisBorder: {
			color: 'var(--bs-border-color)',
		},
		axisTicks: {
			show: false,
		},
		labels: {
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontFamily: 'var(--bs-body-font-family)'
			}
		}
	},
	yaxis: {
		min: 0,
		max: 500,
		tickAmount: 5,
		labels: {
			formatter: function (value) {
				return value;
			},
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontFamily: 'var(--bs-body-font-family)'
			}
		}
	},
	grid: {
		borderColor: 'var(--bs-border-color)',
		strokeDashArray: 5,
		xaxis: {
			lines: {
				show: false
			}
		},
		yaxis: {
			lines: {
				show: true,
			}
		}
	},
	fill: {
		opacity: 1
	},
	tooltip: {
		y: {
            formatter: function (val) {
				return "$ " + val + " هزار"
            }
		}
	},
	legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        markers: {
			size: 5,
            shape: 'circle',
            radius: 10,
			width: 10,
			height: 10,
		},
		labels: {
			colors: 'var(--bs-heading-color)',
			fontFamily: 'var(--bs-body-font-family)',
			fontSize: '13px',
        }
    }
};
const chartEmployee = document.querySelector("#chartEmployee");
if (typeof chartEmployee !== undefined && chartEmployee !== null) {
    const chartInit = new ApexCharts(chartEmployee, chartEmployeeConfig);
	chartInit.render();
}




const chartAttendanceRateConfig = {
	series: [
		{
			name: 'بار اول',
			data: [35, 55, 41, 67, 22, 43, 21, 49, 49, 49, 49, 49]
		},
		{
			name: 'دیر',
			data: [13, 23, 20, 8, 13, 27, 33, 12, 12, 12, 12, 12]
		},
		{
			name: 'غایب',
			data: [11, 17, 15, 15, 21, 14, 15, 13, 13, 13, 13, 13]
		}
	],
	colors: [
		'var(--bs-primary)',
		'var(--bs-secondary)',
		'var(--bs-gray)'
	],
	chart: {
		type: 'bar',
		height: 320,
		stacked: true,
		stackType: '100%',
		toolbar: { show: false }
	},
	stroke: {
		show: true,
		width: 1,
		colors: ['var(--bs-body-bg)']
	},
	grid: {
		borderColor: "var(--bs-border-color)",
		strokeDashArray: 5,
		yaxis: {
			lines: {
				show: true,
			},
		},
	},
	plotOptions: {
		bar: {
			horizontal: false,
			endingShape:'rounded',
			columnWidth: '25%',
			borderRadius: 6,
		}
	},
	dataLabels: {
		enabled: false
	},
	markers: {
		size: 0
	},
	legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        markers: {
			size: 5,
            shape: 'circle',
            radius: 10,
			width: 8,
			height: 8,
		},
		labels: {
			colors: 'var(--bs-heading-color)',
			fontFamily: 'var(--bs-body-font-family)',
			fontSize: '13px',
        }
    },
	yaxis: {
		min: 0,
		max: 500,
		tickAmount: 5,
		labels: {
			formatter: function (value) {
				return value + '%';
			},
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontFamily: 'var(--bs-body-font-family)'
			}
		}
	},
	xaxis: {
		type: "month",
		categories: ['فرو', 'ارد', 'خرد', 'تیر', 'مرد', 'شهر', 'مهر', 'آبا', 'آذر', 'دی', 'بهم', 'اسف'],
		axisBorder: {
			color: 'var(--bs-border-color)',
			axisBorder: {
				show: true,
				color: 'var(--bs-light)',
				height: 0.5,
				width: '100%',
				offsetX: 0,
				offsetY: 0
			},
		},
		axisTicks: {
			show: false,
		},
		labels: {
			rotate: -90,
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontFamily: 'var(--bs-body-font-family)'
			}
		},
	},
	fill: {
		opacity: 1
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val + '%';
			}
		}
	},
	grid: {
		show: false,
	}
};
const chartAttendanceRate = document.querySelector("#chartAttendanceRate");
if (typeof chartAttendanceRate !== undefined && chartAttendanceRate !== null) {
    const chartInit = new ApexCharts(chartAttendanceRate, chartAttendanceRateConfig);
	chartInit.render();
}






const chartPayrollSummaryConfig = {
	series: [
		{
			name: "حقوق ناخالص",
			data: [55000, 60000, 68000, 52000, 69000, 73000, 71000, 74000, 70000, 75000, 72000, 77000]
		},
		{
			name: "حقوق خالص",
			data: [25000, 27000, 16000, 15500, 16500, 17200, 15800, 17000, 16200, 16800, 16000, 17500]
		},
		{
			name: "کسر مالیات",
			type: 'line',
			data: [25000, 50000, 40000, 20000, 52500, 45000, 55200, 47000, 25800, 58200, 36000, 59500]
		}
	],
	chart: {
		type: 'bar',
		height: 320,
		stacked: true,
		toolbar: {
			show: false
		},
		zoom: {
           enabled: true
		},
		dropShadow: {
           enabled: true,
           enabledOnSeries: undefined,
           top: 3,
           left: 0,
           blur: 4,
           color: "#000",
           opacity: 0.1,
		},
	},
	grid: {
		borderColor: 'var(--bs-border-color)',
		strokeDashArray: 3
	},
	yaxis: {
        min: 100000,
        max: 0,
        tickAmount: 5,
		labels: {
			formatter: function (value) {
				return (value / 1000) + "K";
			},
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontFamily: 'var(--bs-body-font-family)'
			}
		}
    },
	xaxis: {
		type: "month",
		categories: ['فرو', 'ارد', 'خرد', 'تیر', 'مرد', 'شهر', 'مهر', 'آبا', 'آذر', 'دی', 'بهم', 'اسف'],
		axisBorder: {
			color: 'var(--bs-border-color)',
			axisBorder: {
				show: true,
				color: 'var(--bs-light)',
				height: 0.5,
				width: '100%',
				offsetX: 0,
				offsetY: 0
			},
		},
		axisTicks: {
			show: false,
		},
		labels: {
			rotate: -90,
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontFamily: 'var(--bs-body-font-family)'
			}
		},
	},
	colors: [
		"var(--bs-secondary)",
		"var(--bs-primary)",
		"var(--bs-info)"
	],
	legend: {
        show: true,
        position: 'bottom',
        horizontalAlign: 'center',
        markers: {
			size: 5,
            shape: 'circle',
            radius: 10,
			width: 8,
			height: 8,
		},
		labels: {
			colors: 'var(--bs-heading-color)',
			fontFamily: 'var(--bs-body-font-family)',
			fontSize: '13px',
        }
    },
	markers: {
		size: 4,
		colors: ['var(--bs-info)'], 
		strokeColors: '#ffffff',
		strokeWidth: 2,
		hover: {
			size: 4
		}
	},
	stroke: {
		curve: 'straight',
		width: [0, 0, 2.5],
	},
	plotOptions: {
		bar: {
			columnWidth: "40%",
			borderRadius: 0,
		}
	},
	dataLabels: {
		enabled: false
	},
	fill: {
		opacity: 1
	}
};
const chartPayrollSummary = document.querySelector("#chartPayrollSummary");
if (typeof chartPayrollSummary !== undefined && chartPayrollSummary !== null) {
    const chartInit = new ApexCharts(chartPayrollSummary, chartPayrollSummaryConfig);
	chartInit.render();
}





const averageTeamKPIConfig = {
	series: [
		{
			data: [300, 200, 190, 100, 250, 300, 350, 500]
		}
	],
	chart: {
		height: 320,
		type: 'area',
		toolbar:{
			show: false
		},
	},
	colors:[
		"var(--bs-secondary)",
	],
	dataLabels: {
		enabled: false
	},
	stroke: {
		curve: 'smooth',
		width: 2,
	},
	legend:{
		show: false,
	},
	grid:{
		show: true,
		strokeDashArray: 3,
		borderColor: 'var(--bs-border-color)',
	},
	yaxis: {
		min: 0,
		max: 500,
		tickAmount: 5,
		labels: {
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '14px',
			},
			formatter: function (value) {
				return value;
			}
		},
	},
	xaxis: {
		categories: ['فرو', 'ارد', 'خرد', 'تیر', 'مرد', 'شهر', 'مهر', 'آبا'],
		labels:{
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '12px',
			},
		},
		axisTicks : {
			show : false
		},
		axisBorder : {
			show : false
		},
	},
	fill:{
		type:'gradient',
		gradient: {
			colorStops:[ 
				[
					{
						offset: 0,
						color: 'var(--bs-secondary)',
						opacity: 0.2
					},
					{
						offset: 50,
						color: 'var(--bs-secondary)',
						opacity: 0.1
					},
					{
						offset: 80,
						color: 'var(--bs-secondary)',
						opacity: 0
					}
				]
			]
		},				
	},
	tooltip: {
		x: {
			show: true,
		},
		y: {
			formatter: function (val) {
				return val.toLocaleString();
			}
		},
		theme: "light"
	},
	responsive: [{
		breakpoint: 575,
		options: {
			chart : {
				height:200,
			},
			yaxis: {
				labels:{
					style: {
						fontSize: '11px',
					},
				},
			},
			xaxis: {
				labels:{
					style: {
						fontSize: '11px',
					},
				},
			},
		},
	}]
}
const averageTeamKPI = document.querySelector("#averageTeamKPI");
if (typeof averageTeamKPI !== undefined && averageTeamKPI !== null) {
    const chartInit = new ApexCharts(averageTeamKPI, averageTeamKPIConfig);
	chartInit.render();
}




function generateDayData(day) {
	let data = [];
	for (let i = 0; i < 24; i++) {
		data.push({
			x: `${i}:00`,
			y: Math.floor(Math.random() * 60)
		});
	}
	return {
		name: day,
		data: data
	};
}
const chartDailySalesStatesConfig = {
	chart: {
		height: 320,
		type: 'heatmap',
		toolbar: { show: false }
	},
	dataLabels: { enabled: false },
	colors: ["#EFF3FF"],
	plotOptions: {
		heatmap: {
			shadeIntensity: 0.5,
			radius: 3,
			useFillColorAsStroke: false,
			colorScale: {
				ranges: [
					{ from: 0, to: 15, color: "#EFF3FF", name: "0-15" },
					{ from: 16, to: 30, color: "#84A6FF", name: "16-30" },
					{ from: 31, to: 45, color: "#5987FF", name: "31-45" },
				]
			}
		}
	},
	series: [
		generateDayData('شنب'),
		generateDayData('یکش'),
		generateDayData('دوش'),
		generateDayData('سه'),
		generateDayData('چها'),
		generateDayData('پنج'),
		generateDayData('جمع')
	],
	stroke: {
		colors: ['var(--bs-body-bg)']
	},
	xaxis: {
		labels: { show: false },
		axisBorder: { show: false },
		axisTicks: { show: false }
	},
	yaxis: {
		tickAmount: 5,
		labels: {
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '12px',
			},
			formatter: function (value) {
				return value;
			}
		},
	},
	legend: {
		position: 'top',
		horizontalAlign: 'left',
		offsetY: 15,
		markers: {
			size: 5,
            shape: 'circle',
            radius: 10,
			width: 10,
			height: 10,
		},
		labels: {
			colors: 'var(--bs-body-color)',
			fontFamily: 'var(--bs-body-font-family)',
			fontSize: '12px',
        }
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return val + " فروش ها";
			}
		}
	}
}
const chartDailySalesStates = document.querySelector("#chartDailySalesStates");
if (typeof chartDailySalesStates !== undefined && chartDailySalesStates !== null) {
    const chartInit = new ApexCharts(chartDailySalesStates, chartDailySalesStatesConfig);
	chartInit.render();
}





const chartStocksPricesConfig = {
	series: [{
		data: [
			{
				x: new Date(1538778600000),
				y: [6629.81, 6650.5, 6623.04, 6633.33]
			},
			{
				x: new Date(1538780400000),
				y: [6632.01, 6643.59, 6620, 6630.11]
			},
			{
				x: new Date(1538782200000),
				y: [6630.71, 6648.95, 6623.34, 6635.65]
			},
			{
				x: new Date(1538784000000),
				y: [6635.65, 6651, 6629.67, 6638.24]
			},
			{
				x: new Date(1538785800000),
				y: [6638.24, 6640, 6620, 6624.47]
			},
			{
				x: new Date(1538787600000),
				y: [6624.53, 6636.03, 6621.68, 6624.31]
			},
			{
				x: new Date(1538789400000),
				y: [6624.61, 6632.2, 6617, 6626.02]
			},
			{
				x: new Date(1538791200000),
				y: [6627, 6627.62, 6584.22, 6603.02]
			},
			{
				x: new Date(1538793000000),
				y: [6605, 6608.03, 6598.95, 6604.01]
			},
			{
				x: new Date(1538794800000),
				y: [6604.5, 6614.4, 6602.26, 6608.02]
			},
			{
				x: new Date(1538796600000),
				y: [6608.02, 6610.68, 6601.99, 6608.91]
			},
			{
				x: new Date(1538798400000),
				y: [6608.91, 6618.99, 6608.01, 6612]
			},
			{
				x: new Date(1538800200000),
				y: [6612, 6615.13, 6605.09, 6612]
			},
			{
				x: new Date(1538802000000),
				y: [6612, 6624.12, 6608.43, 6622.95]
			},
			{
				x: new Date(1538803800000),
				y: [6623.91, 6623.91, 6615, 6615.67]
			},
			{
				x: new Date(1538805600000),
				y: [6618.69, 6618.74, 6610, 6610.4]
			},
			{
				x: new Date(1538807400000),
				y: [6611, 6622.78, 6610.4, 6614.9]
			},
			{
				x: new Date(1538809200000),
				y: [6614.9, 6626.2, 6613.33, 6623.45]
			},
			{
				x: new Date(1538811000000),
				y: [6623.48, 6627, 6618.38, 6620.35]
			},
			{
				x: new Date(1538812800000),
				y: [6619.43, 6620.35, 6610.05, 6615.53]
			},
			{
				x: new Date(1538814600000),
				y: [6615.53, 6617.93, 6610, 6615.19]
			},
			{
				x: new Date(1538816400000),
				y: [6615.19, 6621.6, 6608.2, 6620]
			},
		]
	}],
	chart: {
		type: 'candlestick',
		height: 320,
		toolbar: { show: false }
	},
	xaxis: {
		type: 'datetime',
		axisBorder: {
			color: 'var(--bs-border-color)',
		},
		labels: {
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '12px',
			},
		},
	},
	plotOptions: {
		candlestick: {
			colors: {
				upward: '#22B07E',
				downward: '#FF401C'
			},
			wick: {
				useFillColor: true
			}
		}
	},
	grid: {
		borderColor: 'var(--bs-border-color)',
		strokeDashArray: 5,
		xaxis: {
			lines: {
				show: false
			}
		},
		yaxis: {
			lines: {
				show: true,
			}
		}
	},
	yaxis: {
		tickAmount: 6,
		labels: {
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '12px',
			},
		},
		tooltip: {
			enabled: true
		}
	}
}
const chartStocksPrices = document.querySelector("#chartStocksPrices");
if (typeof chartStocksPrices !== undefined && chartStocksPrices !== null) {
    const chartInit = new ApexCharts(chartStocksPrices, chartStocksPricesConfig);
	chartInit.render();
}