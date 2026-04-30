if (document.querySelector("#jsVectorMap_World")) {
	const map = new jsVectorMap({
		selector: "#jsVectorMap_World",
		map: "world",
		markers: [
			{
				name: "Russia",
				coords: [61.524, 105.3188],
				style: {
					initial: {
						fill: 'var(--bs-danger)',
						stroke: 'var(--bs-danger)'
					}
				}
			},
			{
				name: "Greenland",
				coords: [71.7069, -42.6043],
				style: {
					initial: {
						fill: 'var(--bs-success)',
						stroke: 'var(--bs-success)'
					}
				}
			},
			{
				name: "Egypt",
				coords: [26.8206, 30.8025],
				style: {
					initial: {
						fill: 'var(--bs-secondary)',
						stroke: 'var(--bs-secondary)'
					}
				}
			},
			{
				name: "Brazil",
				coords: [-14.2350, -51.9253],
				style: {
					initial: {
						fill: 'var(--bs-dark)',
						stroke: 'var(--bs-dark)'
					}
				}
			},
			{
				name: "China",
				coords: [35.8617, 104.1954],
				style: {
					initial: {
						fill: 'var(--bs-secondary)',
						stroke: 'var(--bs-secondary)'
					}
				}
			},
			{
				name: "United States",
				coords: [37.0902, -95.7129],
				style: {
					initial: {
						fill: 'var(--bs-primary)'
					}
				}
			},
			{
				name: "Ukraine",
				coords: [48.379433, 31.16558],
			},
		],
		markerStyle: {
			initial: {
				r: 3,
				fill: 'var(--bs-primary)',
				stroke: 'var(--bs-primary)',
				strokeWidth: 6,
				strokeOpacity: 0.25,
				fillOpacity: 1
			},
			hover: {
				fill: 'var(--bs-primary)',
			}
		},
		regionStyle: {
			initial: {
				fill: 'rgba(var(--bs-dark-rgb), 0.12)'
			},
			hover: {
				fill: 'var(--bs-primary)'
			},
			selected: {
				fill: 'var(--bs-primary)'
			}
		},
		zoomButtons: false,
		zoomOnScroll: false,
		zoomMax: 10,
		zoomMin: 1,
	});
}

if (document.querySelector("#jsVectorMap_Marker")) {
	const mapMarker = new jsVectorMap({
		selector: "#jsVectorMap_Marker",
		map: "world",

		markers: [
			{
				name: "Russia",
				coords: [61.524, 105.3188],
			},
			{
				name: "Greenland",
				coords: [71.7069, -42.6043],
			},
			{
				name: "Egypt",
				coords: [26.8206, 30.8025],
			},
			{
				name: "Brazil",
				coords: [-14.2350, -51.9253],
			},
			{
				name: "China",
				coords: [35.8617, 104.1954],
			},
			{
				name: "United States",
				coords: [37.0902, -95.7129],
			},
			{
				name: "Ukraine",
				coords: [48.379433, 31.16558],
			},
		],
		
		markerStyle: {
			initial: {
				image: 'assets/libs/jsvectormap/pin.png',
				width: 18,
				height: 18
			},
			hover: {
				fill: 'var(--bs-primary)',
			}
		},
		
		regionStyle: {
			initial: {
				fill: 'rgba(var(--bs-dark-rgb), 0.12)'
			},
			hover: {
				fill: 'var(--bs-primary)'
			},
			selected: {
				fill: 'var(--bs-primary)'
			}
		},
	  
		lineStyle: {
			stroke: 'var(--bs-body-color)',
			strokeDasharray: '6 3 6',
			animation: true,
			curvature: -0.5,
		},
		
		zoomButtons: false,
		zoomOnScroll: false,
		zoomMax: 10,
		zoomMin: 1,
	  
	});
}

if (document.querySelector("#jsVectorMap_Lines")) {
	const mapLines = new jsVectorMap({
		selector: "#jsVectorMap_Lines",
		map: "world",
		markers: [
			{
				name: "Russia",
				coords: [61.524, 105.3188],
				style: {
					initial: {
						fill: 'var(--bs-primary)'
					}
				}
			},
			{
				name: "Greenland",
				coords: [71.7069, -42.6043],
				style: {
					initial: {
						fill: 'var(--bs-primary)'
					}
				}
			},
			{
				name: "Egypt",
				coords: [26.8206, 30.8025],
				style: {
					initial: {
						fill: 'var(--bs-secondary)',
						stroke: 'var(--bs-secondary)'
					}
				}
			},
			{
				name: "Brazil",
				coords: [-14.2350, -51.9253],
				style: {
					initial: {
						fill: 'var(--bs-secondary)',
						stroke: 'var(--bs-secondary)'
					}
				}
			},
			{
				name: "China",
				coords: [35.8617, 104.1954],
				style: {
					initial: {
						fill: 'var(--bs-secondary)',
						stroke: 'var(--bs-secondary)'
					}
				}
			},
			{
				name: "United States",
				coords: [37.0902, -95.7129],
				style: {
					initial: {
						fill: 'var(--bs-primary)'
					}
				}
			},
			{
				name: "Ukraine",
				coords: [48.379433, 31.16558],
				style: {
					initial: {
						fill: 'var(--bs-secondary)',
						stroke: 'var(--bs-secondary)'
					}
				}
			},
		],
		markerStyle: {
			initial: {
				r: 3,
				fill: 'var(--bs-primary)',
				stroke: 'var(--bs-primary)',
				strokeWidth: 6,
				strokeOpacity: 0.25,
				fillOpacity: 1
			},
			hover: {
				fill: 'var(--bs-primary)',
			}
		},
		regionStyle: {
			initial: {
				fill: 'rgba(var(--bs-dark-rgb), 0.12)'
			},
			hover: {
				fill: 'var(--bs-primary)'
			},
			selected: {
				fill: 'var(--bs-primary)'
			}
		},
		lines: [
			{ from: 'Russia', to: 'Greenland' },
			{ from: 'Russia', to: 'United States' },
			{ from: 'Brazil', to: 'Ukraine' },
			{ from: 'Brazil', to: 'Egypt' },
			{ from: 'Brazil', to: 'China' },
		],
		
		lineStyle: {
			stroke: 'var(--bs-body-color)',
			strokeDasharray: '6 3 6',
			animation: true,
			curvature: -0.5,
		},
		
		zoomButtons: false,
		zoomOnScroll: false,
		zoomMax: 10,
		zoomMin: 1,
	  
	});
}

if (document.querySelector("#jsVectorMap_Region")) {
	const mapRegion = new jsVectorMap({
		selector: "#jsVectorMap_Region",
		map: "world",

		regionStyle: {
			initial: {
				fill: 'rgba(var(--bs-dark-rgb), 0.12)'
			},
			hover: {
				fill: 'var(--bs-primary)'
			},
			selected: {
				fill: 'var(--bs-danger)'
			},
			selectedHover: {
				fill: 'var(--bs-danger)'
			},
		},
		selectedRegions: ['BR', 'RU'],
		
		zoomButtons: false,
		zoomOnScroll: false,
		zoomMax: 10,
		zoomMin: 1,
	  
	});
}