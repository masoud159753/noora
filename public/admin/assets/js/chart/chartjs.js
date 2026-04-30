const bsBodyBG = getComputedStyle(document.documentElement).getPropertyValue('--bs-body-bg').trim();
const bsPrimary = getComputedStyle(document.documentElement).getPropertyValue('--bs-primary').trim();
const bsSecondary = getComputedStyle(document.documentElement).getPropertyValue('--bs-secondary').trim();
const bsBodyColor = getComputedStyle(document.documentElement).getPropertyValue('--bs-body-color').trim();
const bsBorderColor = getComputedStyle(document.documentElement).getPropertyValue('--bs-border-color').trim();
const bsHeadingColor = getComputedStyle(document.documentElement).getPropertyValue('--bs-heading-color').trim();
const bsFontFamily = getComputedStyle(document.documentElement).getPropertyValue('--bs-body-font-family').trim();


function companyPayChartConfig() {
	const centerTextPlugin = {
		id: 'centerTextPlugin',
		afterDraw(chart) {
			const { ctx, chartArea: { left, right, top, bottom } } = chart;
			const centerX = (left + right) / 2;
			const centerY = (top + bottom) / 2;

			const dataset = chart.data.datasets[0];
			const total = dataset.data.reduce((acc, val) => acc + val, 0);

			let displayValue = total;
			let displayLabel = 'تمام داده ها';

			// Check if hovering
			const activeElements = chart.getActiveElements();
			if (activeElements.length > 0) {
				const firstPoint = activeElements[0];
				displayValue = dataset.data[firstPoint.index];
				displayLabel = chart.data.labels[firstPoint.index];
			}

			ctx.save();
			ctx.textAlign = 'center';
			ctx.textBaseline = 'middle';

			// Dynamic value
			ctx.font = 'bold 26px sans-serif';
			ctx.fillStyle = '#000';
			ctx.fillText(displayValue, centerX, centerY - 8);

			// Dynamic label
			ctx.font = '14px sans-serif';
			ctx.fillStyle = '#666';
			ctx.fillText(displayLabel, centerX, centerY + 14);

			ctx.restore();
		}
	};
	
	const canvas = document.getElementById('companyPayChart');
    if (!canvas) return;
	const ctx = canvas.getContext('2d');
	
	new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: ['دستمزد', 'پاداش', 'کمیسیون', 'اضافه‌کاری', 'جبران هزینه',  'سود'],
			datasets: [{
				data: [600, 643, 1608, 884, 2251, 1447],
				backgroundColor: ['#FF401C', '#22B07E', '#02B4FA', '#FF8110', '#316AFF', '#FDBB1F'],
				borderRadius: 30,
				spacing: 0, 
				hoverOffset: 5,
				borderWidth: 2,
				borderColor: '#fff',
				hoverBorderColor: '#fff'
			}]
		},
		options: {
			cutout: '85%',
			devicePixelRatio: 2,
			layout: {
				padding: 10
			},
			plugins: {
				legend: {
					display: false
				},
				tooltip: {
					enabled: false,
					callbacks: {
						label: context => `${context.label}: ${context.formattedValue}`
					}
				}
			}
		},
		plugins: [centerTextPlugin]

	});
}
document.addEventListener('DOMContentLoaded', companyPayChartConfig);





function employeeTypeChartConfig() {
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
			ctx.fillText('کارمند', centerX, centerY + 18);

			ctx.restore();
		}
	};
	
	const canvas = document.getElementById('employeeTypeChart');
    if (!canvas) return;
	const ctx = canvas.getContext('2d');
	
	new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: ['حضوری', 'دورکار', 'ترکیبی'],
			datasets: [{
				data: [600, 200, 200],
				backgroundColor: ['#316AFF', '#FF8110', '#FDBB1F'],
				borderRadius: 10,
				spacing: 0, 
				hoverOffset: 5,
				borderWidth: 5,
				borderColor: '#fff',
				hoverBorderColor: '#fff'
			}]
		},
		options: {
			cutout: '65%',
			devicePixelRatio: 2,
			layout: {
				padding: 20
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
document.addEventListener('DOMContentLoaded', employeeTypeChartConfig);




function performanceAnalysisChartConfig() {
	const canvas = document.getElementById('performanceAnalysisChart');
	if (!canvas) return;
	const ctx = canvas.getContext('2d');
	new Chart(ctx, {
		type: 'radar',
		data: {
			labels: ['سرعت', 'اعتمادپذیری', 'راحتی', 'امنیت', 'کارایی', 'طراحی'],
			datasets: [{
				label: 'محصول ۱',
				data: [65, 59, 90, 81, 56, 55],
				fill: true,
				backgroundColor: 'rgba(13, 110, 253, 0.15)',
				borderColor: 'rgba(13, 110, 253, 1)',
				pointBackgroundColor: 'rgba(13, 110, 253, 1)',
				pointBorderColor: '#fff',
				pointHoverBackgroundColor: '#fff',
				pointHoverBorderColor: 'rgba(13, 110, 253, 1)'
			},
			{
				label: 'محصول دو',
				data: [28, 48, 40, 19, 96, 27],
				fill: true,
				backgroundColor: 'rgba(25, 135, 84, 0.15)',
				borderColor: 'rgba(25, 135, 84, 1)',
				pointBackgroundColor: 'rgba(25, 135, 84, 1)',
				pointBorderColor: '#fff',
				pointHoverBackgroundColor: '#fff',
				pointHoverBorderColor: 'rgba(25, 135, 84, 1)'
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			elements: {
				line: {
					borderWidth: 2
				}
			},
			plugins: {
				legend: {
					display: false,
					labels: {
						color: '#495057',
						font: {
							size: 12,
							weight: '500',
							family: '"YekanBakh", sans-serif'
						},
						padding: 15,
					}
				},
				tooltip: {
					enabled: true,
					backgroundColor: '#fff',
					titleColor: '#212529',
					bodyColor: '#495057',
					borderColor: '#dee2e6',
					borderWidth: 1,
					titleFont: {
						size: 14,
						weight: '500',
						family: '"YekanBakh", sans-serif'
					},
					bodyFont: {
						size: 13,
						family: '"YekanBakh", sans-serif'
					},
					padding: 10
				}
			},
			scales: {
				r: {
					angleLines: {
						color: '#dee2e6'
					},
					grid: {
						color: '#e9ecef'
					},
					pointLabels: {
						color: 'rgba(33, 37, 41, 0.8)',
						font: {
							size: 12,
							weight: '500',
							family: '"YekanBakh", sans-serif'
						},
						padding: 8
					},
					ticks: {
						backdropColor: 'transparent',
						color: '#6c757d',
						stepSize: 20,
						font: {
							size: 12,
							family: '"YekanBakh", sans-serif'
						}
					},
					suggestedMin: 0,
					suggestedMax: 100
				}
			}
		}
	});
}
document.addEventListener('DOMContentLoaded', performanceAnalysisChartConfig);






function barChartConfig() {
	const canvas = document.getElementById('barChart');
	if (!canvas) return;
	const ctx = canvas.getContext('2d');
	new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["یکش", "دوش", "سه", "چها", "پنج", "Sst", "شنب"],
			datasets: [{
				label: 'داده-۱',
				data: [12, 19, 3, 17, 28, 24, 7],
				backgroundColor: bsPrimary
			},
			{
				label: 'داده-۲',
				data: [30, 29, 5, 5, 20, 3, 10],
				backgroundColor: bsSecondary
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			elements: {
				line: {
					borderWidth: 2
				}
			},
			plugins: {
				legend: {
					display: false,
					labels: {
						color: bsBodyColor,
						font: {
							size: 12,
							weight: '500',
							family: bsFontFamily,
						},
						padding: 15,
					}
				},
				tooltip: {
					enabled: true,
					backgroundColor: bsBodyBG,
					titleColor: bsHeadingColor,
					bodyColor: bsBodyColor,
					borderColor: bsBorderColor,
					borderWidth: 1,
					titleFont: {
						size: 14,
						weight: '500',
						family: bsFontFamily,
					},
					bodyFont: {
						size: 13,
						family: bsFontFamily,
					},
					padding: 10
				}
			},
		}
	});
}
document.addEventListener('DOMContentLoaded', barChartConfig);




function lineChartConfig() {
	const canvas = document.getElementById('lineChart');
	if (!canvas) return;
	const ctx = canvas.getContext('2d');
	new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["فرو", "ارد", "خرد", "تیر", "مرد", "شهر", "مهر"],
            datasets: [
                {
                    label: 'مجموع داده ۱',
                    data: [30, 50, 40, 60, 35, 70, 55],
                    borderColor: bsPrimary,
                    backgroundColor: 'rgba(0, 0, 0, 0.01)',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 4,
                    pointBackgroundColor: bsPrimary
                },
                {
                    label: 'مجموع داده ۲',
                    data: [20, 35, 45, 30, 60, 40, 65],
                    borderColor: bsSecondary,
                    backgroundColor: 'rgba(0, 0, 0, 0.02)',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 4,
                    pointBackgroundColor: bsSecondary
                }
            ]
        },
        options: {
            responsive: true,
			maintainAspectRatio: false,
            plugins: {
                legend: { display: true },
                tooltip: {
                    backgroundColor: bsBodyColor,
                    titleColor: bsHeadingColor,
                    bodyColor: bsBodyColor,
                    borderColor: bsBorderColor,
                    borderWidth: 1
                }
            },
            scales: {
                x: {
                    grid: {
						color: '#eee'
					}
                },
                y: {
                    beginAtZero: true,
                    grid: {
						color: '#eee'
					}
                }
            }
        }
    });
}
document.addEventListener('DOMContentLoaded', lineChartConfig);