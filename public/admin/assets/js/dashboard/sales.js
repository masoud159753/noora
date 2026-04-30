if ($('#dt_RecentSales').length) {
	const dt_RecentSales = $('#dt_RecentSales').DataTable({
		searching: true,
		pageLength: 5,
		select: false,
		lengthChange: false,
		info: true,
		paging: true,
		language: {
			search: "",
			searchPlaceholder: 'جستجو',
			paginate: {
				previous: "<i class='fi fi-rr-angle-right'></i>",
				next: "<i class='fi fi-rr-angle-left'></i>",
				first: "<i class='fi fi-rr-angle-double-right'></i>",
				last: "<i class='fi fi-rr-angle-double-left'></i>"
			},
		},
		initComplete: function () {
			const dtSearch = $('#dt_RecentSales_wrapper .dt-search').detach();
			$('#dt_RecentSales_Search').append(dtSearch);
			$('#dt_RecentSales_Search .dt-search').prepend('<i class="fi fi-rr-search"></i>');
			$('#dt_RecentSales_Search .dt-search label').remove();
			$('#dt_RecentSales_wrapper > .row.mt-2.justify-content-between').first().remove();
		},
		columnDefs: [{
			targets: [0],
			orderable: false,
		}]
	});
}

if ($('#dt_TopSellingItems').length) {
	const dt_TopSellingItems = $('#dt_TopSellingItems').DataTable({
		searching: true,
		pageLength: 5,
		select: false,
		lengthChange: false,
		info: true,
		paging: true,
		language: {
			search: "",
			searchPlaceholder: 'جستجو',
			paginate: {
				previous: "<i class='fi fi-rr-angle-right'></i>",
				next: "<i class='fi fi-rr-angle-left'></i>",
				first: "<i class='fi fi-rr-angle-double-right'></i>",
				last: "<i class='fi fi-rr-angle-double-left'></i>"
			},
		},
		initComplete: function () {
			const dtSearch = $('#dt_TopSellingItems_wrapper .dt-search').detach();
			$('#dt_TopSellingItems_Search').append(dtSearch);
			$('#dt_TopSellingItems_Search .dt-search').prepend('<i class="fi fi-rr-search"></i>');
			$('#dt_TopSellingItems_Search .dt-search label').remove();
			$('#dt_TopSellingItems_wrapper > .row.mt-2.justify-content-between').first().remove();
		},
		columnDefs: [{
			targets: [0],
			orderable: false,
		}]
	});
}



const SalesChartConfig = {
	series: [
		{
			name: 'درآمد',
			data: [3500, 5000, 4200, 5500, 5000, 6200, 4800, 6500, 5800, 7200, 6600, 7500]
		},
		{
			name: "مخارج",
			data: [2500, 3100, 2900, 3700, 3300, 4100, 3600, 3900, 4200, 4000, 4600, 4300]
		}
	],
	chart: {
		height: 320,
		type: 'area',
		zoom: { enabled: false },
		toolbar: { show: false },
	},
	colors: [
		"var(--bs-primary)",
		"var(--bs-danger)"
	],
	fill: {
		type: ["gradient", "gradient"],
		gradient: {
			shade: 'light',
			type: "vertical",
			shadeIntensity: 0.1,
			gradientToColors: ["var(--bs-primary)"],
			inverseColors: false,
			opacityFrom: 0.08,
			opacityTo: 0.01,
			stops: [20, 100]
		},
		gradient: {
			shade: 'light',
			type: "vertical",
			shadeIntensity: 0.1,
			gradientToColors: ["var(--bs-danger)"],
			inverseColors: false,
			opacityFrom: 0.1,
			opacityTo: 0.01,
			stops: [20, 100]
		}
	},
	dataLabels: { enabled: false },
	stroke: {
		width: [2, 2],
		curve: 'smooth',
		dashArray: [0, 0]
	},
	markers: {
		size: 0,
		colors: ['#FFFFFF'],
		strokeColors: 'var(--bs-info)',
		strokeWidth: 2,
		hover: {
			size: 6
		}
	},
	yaxis: {
		min: 0,
		max: 8000,
		tickAmount: 5,
		labels: {
			formatter: function (value) {
				return "$" + (value / 100) + "K";
			},
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontWeight: '500',
				fontFamily: 'var(--bs-body-font-family)'
			}
		}
	},
	xaxis: {
		categories: ['فرو', 'ارد', 'خرد', 'تیر', 'مرد', 'شهر', 'مهر', 'آبا', 'آذر', 'دی', 'بهم', 'اسف'],
		axisBorder: { color: 'var(--bs-border-color)' },
		axisTicks: { show: false },
		labels: {
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontWeight: '500',
				fontFamily: 'var(--bs-body-font-family)'
			}
		}
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return "$ " + val + "K";
			}
		}
	},
	grid: {
		borderColor: 'var(--bs-border-color)',
		strokeDashArray: 5,
		xaxis: { lines: { show: false } },
		yaxis: { lines: { show: true } }
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
const SalesChart = document.querySelector("#SalesChart");
if (SalesChart) {
	var chartTabsInit = new ApexCharts(SalesChart, SalesChartConfig);
	chartTabsInit.render();

	document.querySelector("#todayRevenueTab").addEventListener("click", () => {
		chartTabsInit.updateOptions({
			xaxis: {
				categories: ['2 AM', '4 AM', '6 AM', '8 AM', '10 AM', '12 PM', '2 PM', '4 PM', '6 PM', '8 PM', '10 PM', '12 AM']
			},
			series: [
				{ 
					data: [500, 700, 650, 800, 900, 950, 880, 920, 970, 1020, 1100, 1200]
				},
				{
					data: [300, 450, 400, 500, 480, 530, 490, 510, 560, 580, 600, 650]
				}
			]
		});
	});
	document.querySelector("#weekRevenueTab").addEventListener("click", () => {
		chartTabsInit.updateOptions({
			xaxis: {
				categories: ['یکش', 'دوش', 'سه', 'چها', 'پنج', 'جمع', 'شنب']
			},
			series: [
				{
					data: [4200, 5200, 4800, 6100, 7000, 6400, 7200]
				},
				{
					data: [3100, 3700, 3400, 4000, 4600, 4200, 3900]
				}
			]
		});
	});
	document.querySelector("#monthRevenueTab").addEventListener("click", () => {
		chartTabsInit.updateOptions({
			xaxis: {
				categories: ['فرو', 'ارد', 'خرد', 'تیر', 'مرد', 'شهر', 'مهر', 'آبا', 'آذر', 'دی', 'بهم', 'اسف']
			},
			series: [
				{ 
					data: [3500, 5000, 4200, 5500, 5000, 6200, 4800, 6500, 5800, 7200, 6600, 7500]
				},
				{
					data: [2500, 3100, 2900, 3700, 3300, 4100, 3600, 3900, 4200, 4000, 4600, 4300]
				}
			]
		});
	});
}



const VisitorsChartConfig = {
	series: [
		{
			name: 'این ماه',
			data: [4500, 2050, 3100, 4800, 1800, 2500]
		},
		{
			name: 'ماه قبل',
			data: [4040, 2050, 4200, 2800, 1800, 2050]
		}
	],
	chart: {
		height: 295,
		type: 'bar',
		toolbar: { show: false },
		animations: {
			enabled: true,
			easing: 'easeinout',
			speed: 800,
		}
	},
	colors: ['var(--bs-primary)', 'var(--bs-light)'],
	fill: {
		type: ["gradient"],
		gradient: {
			shade: 'light',
			type: "vertical",
			shadeIntensity: 0.1,
			gradientToColors: ["var(--bs-info)"],
			inverseColors: false,
			opacityFrom: 1,
			opacityTo: 0.6,
			stops: [20, 100]
		}
	},
	dataLabels: { enabled: false },
	stroke: {
		width: 0,
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: '75%',
			borderRadius: 4,
			distributed: false,
		}
	},
	grid: {
		borderColor: 'var(--bs-border-color)',
		strokeDashArray: 5,
		xaxis: { lines: { show: false } },
		yaxis: { lines: { show: true } }
	},
	tooltip: {
		theme: 'light',
		y: {
			formatter: function (val) {
				return val + " بازدیدکننده";
			}
		}
	},
	xaxis: {
		categories: [
			['موبایل'],
			['دسکتاپ'],
			['تبلت'],
			['آیپد پرو'],
			['آیفون'],
			['بقیه']
		],
		axisBorder: { color: 'var(--bs-border-color)' },
		axisTicks: { show: false },
		labels: {
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontWeight: 500,
				fontFamily: 'var(--bs-body-font-family)'
			}
		}
	},
	yaxis: { show: false },
};
const VisitorsChart = document.querySelector("#VisitorsChart");
if (VisitorsChart !== null) {
	const chartInit = new ApexCharts(VisitorsChart, VisitorsChartConfig);
	chartInit.render();
}



const SalesGrowthChartConfig = {
	series: [
		{
			name: '',
			data: [1000, 2050, 3100, 4800, 4800, 1800, 4500]
		}
	],
	chart: {
		height: 280,
		type: 'area',
		toolbar: { show: false },
		animations: {
			enabled: true,
			easing: 'easeinout',
			speed: 800,
		}
	},
	colors: ['var(--bs-primary)'],
	fill: {
		type: ["gradient"],
		gradient: {
			shade: 'light',
			type: "vertical",
			shadeIntensity: 0.1,
			gradientToColors: ["var(--bs-info)"],
			inverseColors: false,
			opacityFrom: 0.2,
			opacityTo: 0.06,
			stops: [20, 100]
		}
	},
	dataLabels: { enabled: false },
	stroke: {
		curve: 'smooth',
		width: 2,
		colors: ['var(--bs-info)']
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: '75%',
			borderRadius: 4,
			distributed: false,
		}
	},
	grid: {
		borderColor: 'var(--bs-border-color)',
		strokeDashArray: 5,
		xaxis: { lines: { show: false } },
		yaxis: { lines: { show: true } }
	},
	tooltip: {
		y: {
			formatter: function (val) {
				return "$ " + val + "K";
			}
		}
	},
	xaxis: {
		categories: [
			'یکش', 'دوش', 'سه', 'چها', 'پنج', 'جمع', 'شنب'
		],
		axisBorder: { color: 'var(--bs-border-color)' },
		axisTicks: { show: false },
		labels: {
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontWeight: 500,
				fontFamily: 'var(--bs-body-font-family)'
			}
		}
	},
	yaxis: {
		min: 0,
		max: 6000,
		tickAmount: 4,
		labels: {
			formatter: function (value) {
				return "$" + (value / 100) + "K";
			},
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontWeight: 500,
				fontFamily: 'var(--bs-body-font-family)'
			}
		}
	},
};
const SalesGrowthChart = document.querySelector("#SalesGrowthChart");
if (SalesGrowthChart !== null) {
	const chartInit = new ApexCharts(SalesGrowthChart, SalesGrowthChartConfig);
	chartInit.render();
}



const MonthlyTargetChartConfig = {
	series: [75],
	chart: {
		type: 'radialBar',
		offsetY: 0,
		height: 350,
		sparkline: { enabled: true }
	},
	plotOptions: {
		radialBar: {
			startAngle: -95,
			endAngle: 95,
			track: {
				background: "rgba(var(--bs-primary-rgb), 0.6)",
				strokeWidth: '10%',
				margin: 25
			},
			dataLabels: {
				name: { show: false },
				value: {
					show: true,
					offsetY: -35,
					fontSize: '28px',
					fontFamily: 'var(--bs-body-font-family)',
					fontWeight: 600,
					color: 'var(--bs-dark)',
					formatter: function (val) {
						const totalEarning = 75.7;
						return `${totalEarning}%`;
					}
				},
			}
		}
	},
	grid: {
		padding: {
			top: 0,
			bottom: 0,
			left: 0,
			right: 0
		}
	},
	fill: {
		colors: ['var(--bs-primary)']
	}
}
const MonthlyTargetChart = document.querySelector("#MonthlyTargetChart");
if (typeof MonthlyTargetChart !== undefined && MonthlyTargetChart !== null) {
	const chartInit = new ApexCharts(MonthlyTargetChart, MonthlyTargetChartConfig);
	chartInit.render();
}