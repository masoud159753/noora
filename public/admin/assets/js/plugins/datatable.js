if ($('#dt_basic').length) {
	const dt_basic = $('#dt_basic').DataTable({		
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
		initComplete: function() {
			$('#dt_basic_wrapper > .row.mt-2.justify-content-between').first().addClass('mx-2 py-2');
		},
	});	
}

if ($('#dt_ComplexHeaders').length) {
	const dt_basic = $('#dt_ComplexHeaders').DataTable({
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
		initComplete: function() {
			$('#dt_ComplexHeaders_wrapper > .row.mt-2.justify-content-between').first().addClass('mx-2 py-2');
		},
	});
}

if ($('#dt_AjaxData').length) {
	const dt_basic = $('#dt_AjaxData').DataTable({		
		ajax: './assets/ajax/arrays.txt',
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
		initComplete: function() {
			$('#dt_AjaxData_wrapper > .row.mt-2.justify-content-between').first().addClass('mx-2 py-2');
		},
	});
}

if ($('#dt_ExtraDetailed').length) {
	// Formatting function for row details - modify as you need
	function format(d) {
		// `d` is the original data object for the row
		return (
			'<dl>' +
			'<dt>نام و نام خوانوادگی</dt>' +
			'<dd>' +
			d.name +
			'</dd>' +
			'<dt>شماره داخلی</dt>' +
			'<dd>' +
			d.extn +
			'</dd>' +
			'<dt>اطلاعات بیشتر</dt>' +
			'<dd>و هر جزئیات بیشتری در اینجا (تصاویر و غیره)…</dd>' +
			'</dl>'
		);
	}
	
	let table = new DataTable('#dt_ExtraDetailed', {
		ajax: './assets/ajax/objects.txt',
		columns: [
			{
				className: 'dt-control',
				orderable: false,
				data: null,
				defaultContent: ''
			},
			{ data: 'name' },
			{ data: 'position' },
			{ data: 'office' },
			{ data: 'salary' }
		],
		order: [[1, 'asc']],
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
		initComplete: function() {
			$('#dt_ExtraDetailed_wrapper > .row.mt-2.justify-content-between').first().addClass('mx-2 py-2');
		},
	});
	
	// Add event listener for opening and closing details
	table.on('click', 'tbody td.dt-control', function (e) {
		let tr = e.target.closest('tr');
		let row = table.row(tr);
	 
		if (row.child.isShown()) {
			// This row is already open - close it
			row.child.hide();
		}
		else {
			// Open this row
			row.child(format(row.data())).show();
		}
	});
}

if ($('#dt_ScrollVertical').length) {
	const dt_basic = $('#dt_ScrollVertical').DataTable({		
		paging: false,
		scrollCollapse: true,
		scrollY: '50vh',
		language: {
			search: "",
			searchPlaceholder: 'جستجو',
			paginate: {
				previous: "<i class='fi fi-rr-angle-left'></i>",
				next: "<i class='fi fi-rr-angle-right'></i>",
				first: "<i class='fi fi-rr-angle-double-left'></i>",
				last: "<i class='fi fi-rr-angle-double-right'></i>"
			},
		},
		initComplete: function() {
			var dtSearch = $('#dt_ScrollVertical_wrapper .dt-search').detach();
			$('#dt_ScrollVertical_Search').append(dtSearch);
			$('#dt_ScrollVertical_Search .dt-search').prepend('<i class="fi fi-rr-search"></i>');
			$('#dt_ScrollVertical_Search .dt-search label').remove();
			$('#dt_ScrollVertical_wrapper > .row.mt-2.justify-content-between').first().remove();
		},
	});	
}