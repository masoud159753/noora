if ($('#dt_TeamPerformance').length) {
	const dt_TeamPerformance = $('#dt_TeamPerformance').DataTable({
		searching: true,
		pageLength: 6,
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
			const dtSearch = $('#dt_TeamPerformance_wrapper .dt-search').detach();
			$('#dt_TeamPerformance_Search').append(dtSearch);
			$('#dt_TeamPerformance_Search .dt-search').prepend('<i class="fi fi-rr-search"></i>');
			$('#dt_TeamPerformance_Search .dt-search label').remove();
			$('#dt_TeamPerformance_wrapper > .row.mt-2.justify-content-between').first().remove();
		},
		columnDefs: [{
			targets: [0],
			orderable: false,
		}]
	});
}


const TeamPerformanceChartConfig = {
	chart: {
		type: 'bar',
		height: 285,
		toolbar: {
			show: false
		}
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: '65%',
			borderRadius: 4,     
		}
	},
	dataLabels: {
		enabled: false
	},
	colors: [
		"var(--bs-primary)",
		"var(--bs-success)",
		"var(--bs-warning)"
	],
	stroke: {
		show: true,
		width: 3,
		colors: ['var(--bs-body-bg)']
	},
	series: [
		{
			name: "تیم ۱",
			data: [70, 82, 88, 95, 40, 60]
		},
		{
			name: "تیم ۲",
			data: [60, 72, 78, 85, 75, 92]
		},
		{
			name: "تیم ۳",
			data: [55, 65, 70, 78, 65, 50]
		}
	],
	xaxis: {
		axisBorder: {
			color: 'var(--bs-border-color)'
		},
		axisTicks: {
			show: false
		},
		categories: ["فرو", "ارد", "خرد", "تیر", "مرد", "شهر"],
		labels: {
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontWeight: '500',
				fontFamily: 'var(--bs-body-font-family)'
			}
		}
	},
	yaxis: {
		labels: {
			formatter: (v) => v + "%",
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontWeight: '500',
				fontFamily: 'var(--bs-body-font-family)'
			}
		}
	},
	grid: {
		borderColor: "var(--bs-border-color)",
		strokeDashArray: 4
	},
	legend: {
		position: "bottom",
		horizontalAlign: "center",
		markers: {
			radius: 10
		}
	},
	tooltip: {
		y: { formatter: (v) => v + "%" }
	}
}
const TeamPerformanceChart = document.querySelector("#TeamPerformanceChart");
if (typeof TeamPerformanceChart !== undefined && TeamPerformanceChart !== null) {
	const chartInit = new ApexCharts(TeamPerformanceChart, TeamPerformanceChartConfig);
	chartInit.render();
}



const chartNewTeamConfig = {
	series: [
		{
			name: '',
			data: [120, 350, 120, 300, 450, 250]
		}
	],
	chart: {
		type: 'bar',
		height: 230,
		width: 250,
		toolbar: {
			show: false
		},
		zoom: {
			enabled: false
		},
	},
	plotOptions: {
		bar: {
			horizontal: false,
			columnWidth: '60%',
			barHeight: '100%',
			borderRadius: 2
		}
	},
	colors: ['var(--bs-primary)'],
	dataLabels: {
		enabled: false
	},
	stroke: {
		show: true,
	},
	xaxis: {
		show: true,
		axisBorder: {
			show: false
		},
		axisTicks: {
			show: false
		},
		labels: {
			show: false
		}
	},
	yaxis: {
		show: true,
		labels: {
			show: false
		}
	},
	grid: {
		borderColor: 0,
		xaxis: {
			lines: {
				show: false
			}
		},
		yaxis: {
			lines: {
				show: true
			}
		},
		padding: {
			top: 0,
			bottom: 0,
			left: 0,
			right: 0
		}
	},
	fill: {
		type: "gradient",
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
	tooltip: {
		y: {
			formatter: function (val) {
				return "" + val + " عضو جدید";
			}
		}
	},
	legend: {
		show: false
	}
};
const chartNewTeam = document.querySelector("#chartNewTeam");
if (chartNewTeam) {
	const chartInit = new ApexCharts(chartNewTeam, chartNewTeamConfig);
	chartInit.render();
}