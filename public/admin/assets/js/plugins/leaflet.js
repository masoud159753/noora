// Basic World Map
if (document.querySelector("#mapBasicWorld")) {
	const map1 = L.map('mapBasicWorld').setView([51.505, -0.09], 3);
	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '© OpenStreetMap'
	}).addTo(map1);
	L.marker([51.505, -0.09]).addTo(map1).bindPopup("London");
}


// Map Overlays
if (document.querySelector("#mapOverlays")) {
	const mapOverlays = L.map('mapOverlays').setView([51.505, -0.09], 13);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(mapOverlays);

	const marker = L.marker([51.5, -0.09]).addTo(mapOverlays);

	const circle = L.circle([51.508, -0.11], {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5,
		radius: 500
	}).addTo(mapOverlays);

	const polygon = L.polygon([
		[51.509, -0.08],
		[51.503, -0.06],
		[51.51, -0.047]
	]).addTo(mapOverlays);
}


// Layers Control
if (document.querySelector("#mapLayersControl")) {
	const cities = L.layerGroup();
	const mLittleton = L.marker([39.61, -105.02]).bindPopup('This is Littleton, CO.').addTo(cities);
	const mDenver = L.marker([39.74, -104.99]).bindPopup('This is Denver, CO.').addTo(cities);
	const mAurora = L.marker([39.73, -104.8]).bindPopup('This is Aurora, CO.').addTo(cities);
	const mGolden = L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.').addTo(cities);
	const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	});

	const osmHOT = L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>'
	});

	const mapLayersControl = L.map('mapLayersControl', {
		center: [39.73, -104.99],
		zoom: 10,
		layers: [osm, cities]
	});

	const baseLayers = {
		'OpenStreetMap': osm,
		'OpenStreetMap.HOT': osmHOT
	};

	const overlays = {
		'Cities': cities
	};

	const layerControl = L.control.layers(baseLayers, overlays).addTo(mapLayersControl);

	const crownHill = L.marker([39.75, -105.09]).bindPopup('This is Crown Hill Park.');
	const rubyHill = L.marker([39.68, -105.00]).bindPopup('This is Ruby Hill Park.');

	const parks = L.layerGroup([crownHill, rubyHill]);

	const openTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
	});
	layerControl.addBaseLayer(openTopoMap, 'OpenTopoMap');
	layerControl.addOverlay(parks, 'Parks');
}


// Markers With Custom Icons
if (document.querySelector("#mapMarkersCustom")) {
	const mapMarkersCustom = L.map('mapMarkersCustom').setView([51.5, -0.09], 13);

	L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(mapMarkersCustom);

	const LeafIcon = L.Icon.extend({
		options: {
			shadowUrl: 'assets/libs/leaflet/images/leaf-shadow.png',
			iconSize:     [38, 95],
			shadowSize:   [50, 64],
			iconAnchor:   [22, 94],
			shadowAnchor: [4, 62],
			popupAnchor:  [-3, -76]
		}
	});

	const greenIcon = new LeafIcon({iconUrl: 'assets/libs/leaflet/images/leaf-green.png'});
	const redIcon = new LeafIcon({iconUrl: 'assets/libs/leaflet/images/leaf-red.png'});
	const orangeIcon = new LeafIcon({iconUrl: 'assets/libs/leaflet/images/leaf-orange.png'});

	const mGreen = L.marker([51.5, -0.09], {icon: greenIcon}).bindPopup('I am a green leaf.').addTo(mapMarkersCustom);
	const mRed = L.marker([51.495, -0.083], {icon: redIcon}).bindPopup('I am a red leaf.').addTo(mapMarkersCustom);
	const mOrange = L.marker([51.49, -0.1], {icon: orangeIcon}).bindPopup('I am an orange leaf.').addTo(mapMarkersCustom);
}


// Interactive Choropleth Map
if (document.querySelector("#mapInteractiveChoropleth")) {
	const mapInteractiveChoropleth = L.map('mapInteractiveChoropleth').setView([37.8, -96], 4);

	const tilesChoropleth = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(mapInteractiveChoropleth);

	// control that shows state info on hover
	const info = L.control();

	info.onAdd = function (mapInteractiveChoropleth) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};

	info.update = function (props) {
		const contents = props ? `<b>${props.name}</b><br />${props.density} people / mi<sup>2</sup>` : 'Hover over a state';
		this._div.innerHTML = `<h6 class="mb-0">US Population Density</h6>${contents}`;
	};

	info.addTo(mapInteractiveChoropleth);


	// get color depending on population density value
	function getColor(d) {
		return d > 1000 ? '#800026' :
			d > 500  ? '#BD0026' :
			d > 200  ? '#E31A1C' :
			d > 100  ? '#FC4E2A' :
			d > 50   ? '#FD8D3C' :
			d > 20   ? '#FEB24C' :
			d > 10   ? '#FED976' : '#FFEDA0';
	}

	function style(feature) {
		return {
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.7,
			fillColor: getColor(feature.properties.density)
		};
	}

	function highlightFeature(e) {
		const layer = e.target;

		layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});

		layer.bringToFront();

		info.update(layer.feature.properties);
	}

	/* global statesData */
	const geojson = L.geoJson(statesData, {
		style,
		onEachFeature
	}).addTo(mapInteractiveChoropleth);

	function resetHighlight(e) {
		geojson.resetStyle(e.target);
		info.update();
	}

	function zoomToFeature(e) {
		mapInteractiveChoropleth.fitBounds(e.target.getBounds());
	}

	function onEachFeature(feature, layer) {
		layer.on({
			mouseover: highlightFeature,
			mouseout: resetHighlight,
			click: zoomToFeature
		});
	}

	mapInteractiveChoropleth.attributionControl.addAttribution('Population data &copy; <a href="http://census.gov/">US Census Bureau</a>');


	const legend = L.control({position: 'bottomright'});

	legend.onAdd = function (mapInteractiveChoropleth) {

		const div = L.DomUtil.create('div', 'info legend');
		const grades = [0, 10, 20, 50, 100, 200, 500, 1000];
		const labels = [];
		let from, to;

		for (let i = 0; i < grades.length; i++) {
			from = grades[i];
			to = grades[i + 1];

			labels.push(`<i style="background:${getColor(from + 1)}"></i> ${from}${to ? `&ndash;${to}` : '+'}`);
		}

		div.innerHTML = labels.join('<br>');
		return div;
	};

	legend.addTo(mapInteractiveChoropleth);
}