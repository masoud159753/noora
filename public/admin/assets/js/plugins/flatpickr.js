const flatpickrBasic = document.querySelector("#flatpickr_basic");	
if (flatpickrBasic) {
	flatpickr(flatpickrBasic, {
		dateFormat: "Y-m-d H:i",
		disableMobile: true 
	});
}


const flatpickrDateTime = document.querySelector("#flatpickr_datetime");
if (flatpickrDateTime) {
	flatpickr(flatpickrDateTime, {
		dateFormat: "Y-m-d H:i",
		enableTime: true,
		disableMobile: true 
	});
}


const flatpickrTime = document.querySelector("#flatpickr_time");
if (flatpickrTime) {
	flatpickr(flatpickrTime, {
		noCalendar: true,
		enableTime: true,
		disableMobile: true 
	});
}


const flatpickrRange = document.querySelector("#flatpickr_range");	
if (flatpickrRange) {
	flatpickr(flatpickrRange, {
		mode: 'range'
	});
}


const flatpickrMultipleDates = document.querySelector("#flatpickr_multiple_dates");	
if (flatpickrMultipleDates) {
	flatpickr(flatpickrMultipleDates, {
		mode: 'multiple',
	});
}


const flatpickrLocalization = document.querySelector("#flatpickr_localization");
if (flatpickrLocalization) {
	flatpickr(flatpickrLocalization, {
		enableTime: true,
		dateFormat: "Y-m-d H:i",	
		locale: "fr",
		disableMobile: true 
	});
}


const flatpickrInline = document.querySelector("#flatpickr_inline");
if (flatpickrInline) {
	flatpickr(flatpickrInline, {
		enableTime: true,
		dateFormat: "Y-m-d H:i",
		inline: true,
	});
}


const flatpickrWeeknumbers = document.querySelector("#flatpickr_weeknumbers");
if (flatpickrWeeknumbers) {
	flatpickr(flatpickrWeeknumbers, {
		weekNumbers: true,
		enableTime: true,
		dateFormat: "Y-m-d H:i",
	});
}