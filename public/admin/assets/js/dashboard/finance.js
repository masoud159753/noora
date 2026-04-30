const summeryChartConfig = {
	series: [
		{
			name: "درآمد",
            data: [300000, 80000, 300000, 300000, 290000, 210000, 350000, 500000, 380000]
		},
		{
			name: 'مخارج',
            data: [0, 200000, 350000, 180000, 190000, 400000, 400000, 280000, 220000]
		}
	],
	chart: {
		height: 300,
		type: 'line',
		zoom: {
            enabled: false
		},
		toolbar:{
			show: false
		},
	},
	colors:[
		"var(--bs-secondary)",
		"var(--bs-primary)"
	],
	dataLabels: {
		enabled: false
	},
	stroke: {
		width: [2, 2],
		curve: 'smooth',
		dashArray: [8, 0]
	},
	markers: {
		size: 0,
		hover: {
			sizeOffset: 6
		}
	},
	yaxis: {
        min: 500000,
        max: 0,
        tickAmount: 5,
		labels: {
			formatter: function (value) {
				return (value / 1000) + "K";
			},
			style: {
				colors: 'var(--bs-body-color)',
				fontSize: '13px',
				fontFamily: 'YekanBakh'
			}
		}
    },
	xaxis: {
		categories: ['فرو', 'ارد', 'خرد', 'مرد', 'شهر', 'مهر', 'آبا', 'آذر'],
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
				fontFamily: 'YekanBakh'
			}
		}
	},
	tooltip: {
		y: [
            {
				title: {
					formatter: function (val) {
						return val + " هر فصل"
					}
				}
            },
            {
				title: {
					formatter: function (val) {
						return val;
					}
				}
            }
		]
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
            strokeWidth: 0,
        },
		labels: {
			colors: 'var(--bs-body-color)',
			fontSize: '12px',
			fontWeight: '600',
			fontFamily: 'YekanBakh',
		},
	}
}
const summeryChart = document.querySelector("#summeryChart");
if (typeof summeryChart !== undefined && summeryChart !== null) {
    const chartInit = new ApexCharts(summeryChart, summeryChartConfig);
	chartInit.render();
}



function expenseChartConfig() {
	const centerTextPlugin = {
		afterDraw(chart) {
			const { ctx, chartArea: { left, right, top, bottom } } = chart;
			const centerX = (left + right) / 2;
			const centerY = (top + bottom) / 2;

			// Calculate total dynamically
			const dataset = chart.data.datasets[0];
			const total = dataset.data.reduce((acc, val) => acc + val, 0);

			ctx.save();
			ctx.textAlign = 'center';
			ctx.textBaseline = 'middle';

			// Total value
			ctx.font = 'bold 26px sans-serif';
			ctx.fillStyle = '#000';
			ctx.fillText(total, centerX, centerY - 5);

			// Label below
			ctx.font = '14px sans-serif';
			ctx.fillStyle = '#999';
			ctx.fillText('منابع', centerX, centerY + 18);

			ctx.restore();
		}
	};

	const canvas = document.getElementById('expenseChart');
	if (!canvas) return;
	const ctx = canvas.getContext('2d');

	new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: ['حقوق‌ها', 'اجاره', 'نرم افزار', 'مارکتینگ'],
			datasets: [{
				data: [800, 600, 400, 200],
				backgroundColor: ['#5955D1', '#ACAAE8', '#d1d0f7', '#DEDDF6'],
				borderRadius: 3,
				spacing: 0,
				hoverOffset: 5,
				borderWidth: 3,
				borderColor: '#fff',
				hoverBorderColor: '#fff'
			}]
		},
		options: {
			cutout: '65%',
			devicePixelRatio: 2,
			layout: {
				padding: 0
			},
			plugins: {
				legend: {
					display: false
				},
				tooltip: {
					callbacks: {
						label: context => `${context.label}: ${context.formattedValue}`
					}
				}
			}
		},
		plugins: [centerTextPlugin]

	});
}
document.addEventListener('DOMContentLoaded', expenseChartConfig);



if ($('#dt_RecentTransactions').length) {
	const dt_RecentTransactions = $('#dt_RecentTransactions').DataTable({
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
			var dtSearch = $('#dt_RecentTransactions_wrapper .dt-search').detach();
			$('#dt_RecentTransactions_Search').append(dtSearch);
			$('#dt_RecentTransactions_Search .dt-search').prepend('<i class="fi fi-rr-search"></i>');
			$('#dt_RecentTransactions_Search .dt-search label').remove();
			$('#dt_RecentTransactions_wrapper > .row.mt-2.justify-content-between').first().remove();
		},
		columnDefs: [{
			targets: [0],
			orderable: false,
		}]
	});
}



const monthlyStatusChartConfig = {
	series: [70],
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
				background: "rgba(var(--bs-white-rgb), 0.3)",
				strokeWidth: '100%',
				margin: 25
			},
			dataLabels: {
				name: { show: false },
				value: {
					show: true,
					offsetY: -35,
					fontSize: '28px',
					fontFamily: 'YekanBakh',
					fontWeight: 600,
					color: 'var(--bs-white)',
					formatter: function(val) {
						const totalEarning = 75;
						return `${totalEarning}K`;
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
		colors: ['var(--bs-white)']
	}
}
const monthlyStatusChart = document.querySelector("#monthlyStatusChart");
if (typeof monthlyStatusChart !== undefined && monthlyStatusChart !== null) {
    const chartInit = new ApexCharts(monthlyStatusChart, monthlyStatusChartConfig);
	chartInit.render();
}