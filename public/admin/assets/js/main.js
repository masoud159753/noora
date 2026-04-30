const initAppToggler = () => {
	
	const appTogglers = document.querySelectorAll(".app-toggler");
	const appMenubars = document.getElementById("appMenubar");

	appTogglers.forEach(toggler => {
		toggler.addEventListener("click", () => {
			toggler.classList.toggle("active");

			if (window.innerWidth >= 1480) {
				const currentValue = document.documentElement.getAttribute("data-app-sidebar");
				document.documentElement.setAttribute(
					"data-app-sidebar",
					currentValue === "full" ? "mini" : "full"
				);
			} else {
				if (appMenubars) {
					appMenubars.classList.toggle("open");
				}
			}
		});
	});

	if (appMenubars) {
		appMenubars.addEventListener("mouseenter", () => {
			if (document.documentElement.getAttribute("data-app-sidebar") === "mini") {
				document.documentElement.setAttribute("data-app-sidebar", "mini-hover");
			}
		});

		appMenubars.addEventListener("mouseleave", () => {
			if (document.documentElement.getAttribute("data-app-sidebar") === "mini-hover") {
				document.documentElement.setAttribute("data-app-sidebar", "mini");
			}
		});
	}
};

const passwordToggle = () => {
	document.querySelectorAll('.toggle-password').forEach(btn => {
		btn.addEventListener('click', () => {
			const input = btn.previousElementSibling;
			const isPassword = input.type === 'password';
			input.type = isPassword ? 'text' : 'password';
			btn.classList.toggle('active', isPassword);
		});
	});
}

const saerchList = () => {
	let listItems = [];

	// JSON load
	$.getJSON("assets/ajax/search.json", function(data) {
		listItems = data.listItems;
	});

	// Search functionality
	$("#searchInput").on("keyup", function() {
		let query = $(this).val().toLowerCase();
		let searchContainer = $("#searchContainer");
		searchContainer.empty();
		searchContainer.hide();
		
		$('#recentlyResults').hide();
		
		if (query.length === 0) {
			searchContainer.hide();
			$('#recentlyResults').show();
			return;
		}

		let matched = listItems.filter(item =>
			item.name.toLowerCase().includes(query) ||
			item.url.toLowerCase().includes(query)
		);

		if (matched.length > 0) {
			let grouped = {};
			matched.forEach(item => {
				if (!grouped[item.category]) grouped[item.category] = [];
				grouped[item.category].push(item);
			});

			for (let cat in grouped) {
				searchContainer.append(
					`<span class="text-uppercase text-2xs fw-semibold text-muted d-block mb-2">${cat}</span>`
				);
				let ul = $("<ul class='list-inline search-list'></ul>");
				grouped[cat].forEach(item => {
					ul.append(
						`<li>
							<a class="search-item" href="${item.url}">
								<i class="${item.icon}"></i> <span>${item.name}</span>
							</a>
						</li>`
					);
				});
				searchContainer.append(ul);
			}
			searchContainer.show();
		} else {
			searchContainer.append(`
				<div class="text-center pb-5 pt-4">
					<div class="avatar avatar-lg bg-danger-subtle shadow-secondary rounded-circle text-danger mb-3 m-auto">
						<i class="fi fi-rr-assessment"></i>
					</div>
					<h5 class="mb-1">No result found</h5>
					<div class="text-muted">Please try again with a different query</div>
				</div>
			`);
			searchContainer.show();
		}
	});
};

const currentYear = () => {
    const elements = document.querySelectorAll('.currentYear');
    const currentYear = new Date().getFullYear();

    elements.forEach(element => {
        element.textContent = currentYear;
    });
};

const setElementHeight = () => {
    const footer = document.querySelector('.footer-wrapper');
	if (footer) {
		const footerHeight = footer ? footer.offsetHeight : 0;
		document.documentElement.style.setProperty('--footer-height', `${footerHeight}px`);
	}
	
	const chatBox = document.querySelector('.chat-wrapper');
	if (chatBox) {
		const chatHeight = chatBox.offsetHeight;
		document.documentElement.style.setProperty('--chat-height', `${chatHeight}px`);
	}
	
};

const initSelectPicker = () => {
	
	document.querySelectorAll('.select-status').forEach(dropdown => {
		const toggleButton = dropdown.querySelector('.dropdown-toggle');
		const items = dropdown.querySelectorAll('.dropdown-item');

		const updateButtonClassAndText = (text, selectedClass) => {
			// Remove btn-* except btn-sm, btn-lg
			toggleButton.classList.forEach(cls => {
				if (/^btn-/.test(cls) && !['btn-sm', 'btn-lg'].includes(cls)) {
					toggleButton.classList.remove(cls);
				}
			});

			if (selectedClass) {
				toggleButton.classList.add(...selectedClass.split(' '));
			}

			toggleButton.textContent = text;
		};

		// Handle default selection on page load
		const selectedItem = dropdown.querySelector('.dropdown-item[data-selected="true"]');
		if (selectedItem) {
			const defaultText = selectedItem.textContent.trim();
			const defaultClass = selectedItem.getAttribute('data-class');
			updateButtonClassAndText(defaultText, defaultClass);
		}

		// Handle selection on click
		items.forEach(item => {
			item.addEventListener('click', (e) => {
				e.preventDefault();
				items.forEach(i => i.removeAttribute('data-selected'));
				item.setAttribute('data-selected', 'true');

				const selectedText = item.textContent.trim();
				const selectedClass = item.getAttribute('data-class');
				updateButtonClassAndText(selectedText, selectedClass);
			});
		});
	});
};

function initSectionCheckboxSync() {
    document.querySelectorAll('.data-row-checkbox').forEach(function(section) {
        const masterCheckbox = section.querySelector('[data-row-checkbox]');
        const checkboxes = section.querySelectorAll('[data-checkbox]');

        if (!masterCheckbox || checkboxes.length === 0) return;

        masterCheckbox.addEventListener('change', function() {
            const checked = this.checked;
            checkboxes.forEach(function(cb) {
                cb.checked = checked;
            });
        });

        checkboxes.forEach(function(cb) {
            cb.addEventListener('change', function() {
                const allChecked = Array.from(checkboxes).every(c => c.checked);
                masterCheckbox.checked = allChecked;
            });
        });
    });
}

function initTooltips() {
	const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
	const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
}

function initPopover() {
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		return new bootstrap.Popover(popoverTriggerEl)
	})
}

function initSidebarMenu() {
	
	jQuery('.app-navbar .menubar > li.menu-arrow > a').next('.menu-inner').slideUp();
	jQuery('.app-navbar .menu-inner > li > a').next('.menu-inner').slideUp();
	
	jQuery('.app-navbar .menubar > li.menu-arrow > a, .app-navbar .menu-inner > li > a').unbind().on('click', function(e){
		if(jQuery(this).hasClass('open')){
			jQuery(this).removeClass('open');
			jQuery(this).parent('li').children('.menu-inner').slideUp();
		}else{
			if (!window.event.ctrlKey) {
				jQuery(this).addClass('open');
			}
			if(jQuery(this).parent('li').children('.menu-inner').length > 0){
				
				e.preventDefault();
				jQuery(this).next('.menu-inner').slideDown();
				jQuery(this).parent('li').siblings('li').find('a:first').removeClass('open');
				jQuery(this).parent('li').siblings('li').children('.menu-inner').slideUp();
			}else{
				jQuery(this).next('.menu-inner').slideUp();
			}
		}
	});
	
	for (var nk = window.location,
		o = $(".app-navbar .menubar a").filter(function(){
		return this.href == nk;
	}).addClass("active").parent().addClass("active").parent().show().siblings('a').addClass("active open").parent().parent().show().siblings('a').addClass("open");;){
		if (!o.is("li")) {
			break;
		}
		o = o.parent().slideDown().parent('li').children('a').addClass("active");
	}
}

function initCheckable() {
    document.querySelectorAll('.checkable-wrapper').forEach(function(wrapper) {
        const checkAll = wrapper.querySelector('.checkable-check-all');
        const checkboxes = wrapper.querySelectorAll('.checkable-check-input');

        // Initialize checked state on load
        checkboxes.forEach(function(checkbox) {
            const item = checkbox.closest('.checkable-item');
            if (checkbox.checked && item) {
                item.classList.add('is-checked');
            }
        });

        // Handle "Select All"
        if (checkAll) {
            checkAll.addEventListener('change', function () {
                const isChecked = this.checked;
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = isChecked;
                    const item = checkbox.closest('.checkable-item');
                    if (item) {
                        item.classList.toggle('is-checked', isChecked);
                    }
                });
            });
        }

        // Handle individual checkbox toggle
        wrapper.addEventListener('change', function (e) {
            if (e.target.matches('.checkable-check-input')) {
                const item = e.target.closest('.checkable-item');
                if (item) {
                    item.classList.toggle('is-checked', e.target.checked);
                }

                // Update "Select All" state
                const allChecked = wrapper.querySelectorAll('.checkable-check-input:not(:checked)').length === 0;
                if (checkAll) {
                    checkAll.checked = allChecked;
                }
            }
        });
    });
}

function initEmailSidebarToggle() {
    const toggler = document.querySelector('.mail-sidebar-toggler');
    const sidebar = document.querySelector('.mail-sidebar');
    const overlay = document.querySelector('.sidebar-mobile-overlay');

    if (toggler && sidebar && overlay) {
        toggler.addEventListener('click', () => {
            sidebar.classList.toggle('open');
            overlay.classList.toggle('show', sidebar.classList.contains('open'));
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.remove('open');
            overlay.classList.remove('show');
        });
    }
}

function initChatSidebarToggle() {
    const toggler = document.querySelector('.chat-sidebar-toggler');
    const sidebar = document.querySelector('.chat-sidebar');
    const overlay = document.querySelector('.sidebar-mobile-overlay');
    const btnClose = document.querySelector('.btn-close');

    if (toggler && sidebar && overlay) {
        toggler.addEventListener('click', () => {
            sidebar.classList.toggle('open');
            overlay.classList.toggle('show', sidebar.classList.contains('open'));
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.remove('open');
            overlay.classList.remove('show');
        });
		
		btnClose.addEventListener('click', () => {
            sidebar.classList.remove('open');
            overlay.classList.remove('show');
        });
    }
}

function initBookmarks() {
    document.addEventListener('click', (e) => {
        const bookmark = e.target.closest('.mail-item-bookmark');
        if (bookmark) {
            bookmark.classList.toggle('active');
        }
    });
}

const ThemeSwitcher = () => {
	'use strict';

	// Cookie helpers
	const getCookie = (name) => {
	  const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
	  return match ? match[2] : null;
	};

	const setCookie = (name, value, days = 365) => {
	  const expires = new Date(Date.now() + days * 864e5).toUTCString();
	  document.cookie = `${name}=${value}; expires=${expires}; path=/`;
	};

	const getStoredTheme = () => getCookie('theme');
	const setStoredTheme = (theme) => setCookie('theme', theme);

	// Preferred theme
	const getPreferredTheme = () => {
	  const storedTheme = getStoredTheme();
	  if (storedTheme) return storedTheme;
	  return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
	};

	// Apply theme
	const setTheme = (theme) => {
	  document.documentElement.setAttribute('data-bs-theme', theme);
	};

	// Page Ready
	$(document).ready(function () {
	  // ðŸ”¹ On load: apply saved/preferred theme
	  const preferredTheme = getPreferredTheme();
	  setTheme(preferredTheme);

	  // ðŸ”¹ Restore active state on button
	  if (preferredTheme === 'dark') {
		$('.theme-btn').addClass('active');
	  } else {
		$('.theme-btn').removeClass('active');
	  }

	  // ðŸ”¹ Click handler
	  $('.theme-btn').on('click', function () {
		$(this).toggleClass('active');

		let currentTheme = document.documentElement.getAttribute('data-bs-theme');
		let newTheme = currentTheme === 'dark' ? 'light' : 'dark';

		setTheme(newTheme);
		setStoredTheme(newTheme);
	  });
	});
};

function initSidebarPanel() {
	document.addEventListener('click', function(e) {
		const toggler = e.target.closest('.sidebar-panel-toggler');
		if (toggler) {
			const panel = document.querySelector('.app-sidebar-panel');
			if (panel) {
				panel.classList.toggle('show');
			}
		}

		const closeBtn = e.target.closest('.sidebar-close');
		if (closeBtn) {
			document.querySelectorAll('.app-sidebar-panel').forEach(panel => {
				panel.classList.remove('show');
			});
		}
	});
}

function initPriceSwitch() {
	const priceSwitch = document.querySelector("#priceSwitchCheck");

	if (priceSwitch) {
		priceSwitch.addEventListener("change", function () {
			const isYearly = this.checked;
			const monthlyPrices = document.querySelectorAll(".price-monthly");
			const yearlyPrices = document.querySelectorAll(".price-yearly");

			monthlyPrices.forEach(price => price.classList.toggle("d-none", isYearly));
			yearlyPrices.forEach(price => price.classList.toggle("d-none", !isYearly));
		});	
	}
}

document.addEventListener("DOMContentLoaded", () => {
    Waves.init();
	initAppToggler();
	passwordToggle();
	saerchList();
	setElementHeight();
	currentYear();
	initSectionCheckboxSync();
	initSelectPicker();
	initTooltips();
	initPopover();
	initCheckable();
	initSidebarMenu();
	initEmailSidebarToggle();
	initChatSidebarToggle();
	initBookmarks();
	ThemeSwitcher();
	initSidebarPanel();
	initPriceSwitch();
});


$(document).ready(function () {
    if (typeof jalaliDatepicker !== 'undefined') {
        
        jalaliDatepicker.startWatch({
            minDate: "attr",
            maxDate: "attr",
            autoHide: true,
            time: false,

            onSelect: function(input, d) {

                const date = d.year + "/" + 
                             String(d.month).padStart(2, '0') + "/" + 
                             String(d.day).padStart(2, '0');
                
                input.value = date;
                

                $(input).trigger('change');
            }
        });

        $(".flatpickr-input").on('focus', function() {
            const inputElement = this;
            setTimeout(() => {
                const picker = document.querySelector('jdp-container');
                if (picker) {
                    picker.style.setProperty('z-index', '999999', 'important');
                }
            }, 10);
        });
    }
});

$(document).ready(function() {
    
    // ۱. تاریخ و زمان
    $(".p-date-time").pDatepicker({
        timePicker: { enabled: true, second: { enabled: false } },
        format: 'YYYY/MM/DD HH:mm'
    });

    // ۲. فقط تاریخ
    $(".p-date-only").pDatepicker({
        timePicker: { enabled: false },
        format: 'YYYY/MM/DD',
        autoClose: true
    });

    // ۳. فقط ماه و سال
    $(".p-month-only").pDatepicker({
        timePicker: { enabled: false },
        format: 'MMMM YYYY',
        autoClose: true,
        viewMode: 'month',
        minViewMode: 'month',
        onlySelectOnDate: false 
    });

    // ۴. فقط زمان
    $(".p-time-only").pDatepicker({
        onlyTimePicker: true,
        timePicker: { enabled: true, second: { enabled: false } },
        format: 'HH:mm',
        autoClose: true
    });

});

// ۵. شروع تقویم هفته
$(document).on('mousedown', '.week-input-target', function() {
    var $input = $(this);

    if ($input.data('calendar-linked') === true) return;

    var checkExist = setInterval(function() {
        var datePickerInstance = $input.data('datepicker');
        
        if (datePickerInstance && datePickerInstance.container) {
            var $calendar = $(datePickerInstance.container.element);
            var calendarId = $calendar.attr('id');

            if (calendarId) {
                $("#" + calendarId).addClass("is-week-mode");
                $input.data('calendar-linked', true);
                
                console.log("اتصال موفق به تقویم اختصاصی: " + calendarId);
                clearInterval(checkExist);
            }
        } else {
            var $visibleCalendar = $(".datepicker-container").not(".pwt-hide");
            if ($visibleCalendar.length > 0) {
                $visibleCalendar.addClass("is-week-mode");
                $input.data('calendar-linked', true);
                clearInterval(checkExist);
            }
        }
    }, 200);

    setTimeout(function() { clearInterval(checkExist); }, 1500);
});


$(document).ready(function() {
    // ۱. تنظیم دیت‌پیکر هفته
    var weekPicker = $(".week-input-target").pDatepicker({
        timePicker: { enabled: false },
        autoClose: false,
        calendar: { showWeekNumbers: true },
        formatter: function(unix) {
            var date = new persianDate(unix);
            return "هفته " + date.format('ww') + "، " + date.format('YYYY');
        }
    });
})

$(document).on('click', '.is-week-mode td:not(.new):not(.old)', function() {
    var $tr = $(this).closest('tr');
    var $container = $(this).closest('.is-week-mode');

    var firstDayUnix = $tr.find('td[data-date]').first().data('date');
    if (firstDayUnix) {
        var date = new persianDate(firstDayUnix);
        var weekString = "هفته " + date.format('ww') + "، " + date.format('YYYY');

        $(".week-input-target:focus").val(weekString);
    }

    setTimeout(function() {
        $container.find('td').removeClass('selected-week');
        $tr.find('td').addClass('selected-week');
    }, 20);
});

$(document).on('mouseenter', '.is-week-mode td:not(.new):not(.old)', function() {
    $(this).closest('tr').find('td').addClass('hover-week');
});

$(document).on('mouseleave', '.is-week-mode td', function() {
    $(this).closest('tr').find('td').removeClass('hover-week');
});
// پایان تقویم هفته

// شروع تقویم رنج
$(document).on('mousedown', '.range-input-target', function() {
    var $input = $(this);

    if ($input.data('calendar-linked') === true) return;

    var checkExist = setInterval(function() {
        var datePickerInstance = $input.data('datepicker');
        
        if (datePickerInstance && datePickerInstance.container) {
            var $calendar = $(datePickerInstance.container.element);
            var calendarId = $calendar.attr('id');

            if (calendarId) {
                // اختصاص کلاس مخصوص رنج
                $("#" + calendarId).addClass("is-range-mode");
                $input.data('calendar-linked', true);
                
                console.log("تقویم رنج متصل شد: " + calendarId);
                clearInterval(checkExist);
            }
        } else {
            var $visibleCalendar = $(".datepicker-container").not(".pwt-hide");
            if ($visibleCalendar.length > 0) {
                $visibleCalendar.addClass("is-range-mode");
                $input.data('calendar-linked', true);
                clearInterval(checkExist);
            }
        }
    }, 200);

    setTimeout(function() { clearInterval(checkExist); }, 1500);
});


$(document).ready(function() {
    // متغیرهایی برای نگه داشتن وضعیت رنج
    var rangeState = {
        start: null,
        end: null
    };

    // مقداردهی اولیه پلاگین
    $(".range-input-target").pDatepicker({
        timePicker: { enabled: false },
        format: 'YYYY/MM/DD',
        autoClose: false,
        onSelect: function(unix) {
            handleDateSelection(unix);
        }
    });

    // تابع اصلی مدیریت انتخاب رنج (هوشمند)
    function handleDateSelection(selectedUnix) {
        var unix = parseInt(selectedUnix);

        // ۱. منطق چرخه انتخاب
        if (!rangeState.start || (rangeState.start && rangeState.end)) {
            // کلیک اول (فرد): شروع جدید
            rangeState.start = unix;
            rangeState.end = null;
        } else {
            // کلیک دوم (زوج): مقایسه و جابه‌جایی هوشمند
            if (unix < rangeState.start) {
                // اگر دومی قبل از اولی بود، جابجا کن (هوشمند)
                rangeState.end = rangeState.start;
                rangeState.start = unix;
            } else {
                rangeState.end = unix;
            }
        }

        updateInputAndStyles();
    }

    // به‌روزرسانی اینپوت و استایل‌های بصری
    function updateInputAndStyles() {
        var startStr = rangeState.start ? new persianDate(rangeState.start).format('YYYY/MM/DD') : "";
        var endStr = rangeState.end ? new persianDate(rangeState.end).format('YYYY/MM/DD') : "";

        var $input = $(".range-input-target:focus").length ? $(".range-input-target:focus") : $(".range-input-target");

        if (rangeState.start && rangeState.end) {
            $input.val(startStr + " تا " + endStr);
        } else if (rangeState.start) {
            $input.val(startStr + " - انتخاب پایان...");
        }

        applyRangeStyles();
    }

    // اعمال کلاس‌ها (حل مشکل رندر مجدد پلاگین)
    function applyRangeStyles() {
        setTimeout(function() {
            var $container = $(".datepicker-container").not(".pwt-hide");
            
            // حذف تمام کلاس‌های قبلی
            $container.find('td').removeClass('range-start-custom range-end-custom range-between-custom');

            // اعمال کلاس مبدأ
            if (rangeState.start) {
                $container.find('td[data-date="' + rangeState.start + '"]').addClass('range-start-custom');
            }

            // اعمال کلاس مقصد و روزهای بین
            if (rangeState.end) {
                $container.find('td[data-date="' + rangeState.end + '"]').addClass('range-end-custom');

                $container.find('td[data-date]').each(function() {
                    var currentUnix = parseInt($(this).attr('data-date'));
                    if (currentUnix > rangeState.start && currentUnix < rangeState.end) {
                        $(this).addClass('range-between-custom');
                    }
                });
            }
        }, 50);
    }

    // حیاتی: اعمال مجدد استایل‌ها وقتی کاربر ماه یا سال را عوض می‌کند
    $(document).on('click', '.pwt-btn-next, .pwt-btn-prev, .month-item, .year-item', function() {
        applyRangeStyles();
    });
});
//پایان تقویم رنج

//شروع تقویم انتخابگر تاریخ های متعدد

$(document).ready(function() {
    // آرایه برای ذخیره تاریخ‌های انتخاب شده
    var selectedDates = [];

    // ۱. تنظیم اولیه تقویم
    $(".p-multiple-date").pDatepicker({
        timePicker: { enabled: false },
        autoClose: false,
        format: 'YYYY/MM/DD',
        onSelect: function(unix) {
            handleMultipleDates(unix);
        }
    });

    // ۲. تابع مدیریت انتخاب‌ها
    function handleMultipleDates(unix) {
        var clickedUnix = parseInt(unix);
        var index = selectedDates.indexOf(clickedUnix);

        if (index > -1) {
            // اگر قبلاً انتخاب شده بود -> حذفش کن
            selectedDates.splice(index, 1);
        } else {
            // اگر جدید است -> چک کن لیمیت ۱۰ تا پر نشده باشد
            if (selectedDates.length < 10) {
                selectedDates.push(clickedUnix);
            } else {
                alert("شما حداکثر مجاز به انتخاب ۱۰ تاریخ هستید.");
            }
        }

        updateMultipleInputAndStyles();
    }

    // ۳. به‌روزرسانی اینپوت و کلاس‌های بصری
    function updateMultipleInputAndStyles() {
        // به‌روزرسانی مقدار اینپوت (تاریخ‌ها را با کاما جدا می‌کنیم)
        var dateStrings = selectedDates.map(function(u) {
            return new persianDate(u).format('YYYY/MM/DD');
        });
        $(".p-multiple-date").val(dateStrings.join("، "));

        applyMultipleStyles();
    }

    // ۴. اعمال کلاس به خانه‌های انتخاب شده
    function applyMultipleStyles() {
        setTimeout(function() {
            var $container = $(".datepicker-container").not(".pwt-hide");
            
            // پاک کردن کلاس‌های قبلی
            $container.find('td').removeClass('selected-multiple');

            // هایلایت کردن تمام تاریخ‌های موجود در آرایه
            selectedDates.forEach(function(unix) {
                $container.find('td[data-date="' + unix + '"]').addClass('selected-multiple');
            });
        }, 50);
    }

    // ۵. حفظ کلاس‌ها هنگام تغییر ماه/سال
    $(document).on('click', '.pwt-btn-next, .pwt-btn-prev, .month-item, .year-item', function() {
        applyMultipleStyles();
    });
});

//پایان تقویم انتخابگر تاریخ متعدد

// شروع تقویم انتخابگر درون خطی
$(document).ready(function() {
    // ۱. انتخاب کانتینر و اینپوت
    const $holder = $('#inline-calendar-holder');
    const $input = $(".inline-input-target");

    // ۲. اجرای پلاگین مستقیم روی DIV (این تضمین می‌کند که تقویم ساخته شود)
    $holder.pDatepicker({
        inline: true,
        autoClose: false,
        timePicker: { 
            enabled: true, 
            second: { enabled: false },
            meridian: { enabled: true }
        },
        format: 'YYYY/MM/DD HH:mm',
        // وقتی تقویم تغییر کرد، مقدار را در اینپوت بریز
        onSelect: function(unix) {
            const dateStr = new persianDate(unix).format('YYYY/MM/DD HH:mm');
            $input.val(dateStr);
        }
    });

    // ۳. پیدا کردن المان ساخته شده و حذف کلاس‌های مخفی‌ساز
    const $datepicker = $holder.find('.datepicker-container');
    
    if ($datepicker.length > 0) {
        $datepicker.removeClass('pwt-hide').show();
        
        // ناظر برای اینکه اگر پلاگین خواست مخفی‌اش کند، جلویش را بگیریم
        const observer = new MutationObserver(() => {
            if ($datepicker.hasClass('pwt-hide') || $datepicker.css('display') === 'none') {
                $datepicker.removeClass('pwt-hide').show();
            }
        });
        observer.observe($datepicker[0], { attributes: true, attributeFilter: ['class', 'style'] });
    } else {
        // اگر هنوز ساخته نشده بود (احتمال کم)، یک بار متد show را صدا بزن
        const dp = $holder.data('datepicker');
        if (dp) dp.show();
    }
});
// پایان تقویم انتخابگر درون خطی




