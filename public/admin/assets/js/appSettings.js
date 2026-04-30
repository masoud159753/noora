// App settings default
let appSettings = {
	appTheme: 'light',
	appSidebar: 'full',
	appColor: 'blue',
};

// Update settings
function setAppSettings(newSettings = {}) {
	appSettings = {
		...appSettings,
		...newSettings
	};
	applySettings();
}

// Apply settings to DOM
function applySettings() {
	document.documentElement.setAttribute("data-bs-theme", appSettings.appTheme);

	if (window.innerWidth >= 1480) {
		document.documentElement.setAttribute("data-app-sidebar", appSettings.appSidebar);
	}

	document.documentElement.setAttribute("data-color-theme", appSettings.appColor);
}

// Initialize
document.addEventListener("DOMContentLoaded", applySettings);
window.setAppSettings = setAppSettings;