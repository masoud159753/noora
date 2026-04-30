// ۱. مبدل تاریخ (بدون تغییر)
function shamsiToMiladi(jy, jm, jd) {
    let gy, gm, gd;
    jy += 1595;
    let days = -355668 + (365 * jy) + (Math.floor(jy / 33) * 8) + Math.floor(((jy % 33) + 3) / 4) + jd + ((jm < 7) ? (jm - 1) * 31 : ((jm - 7) * 30) + 186);
    gy = 400 * Math.floor(days / 146097);
    days %= 146097;
    if (days > 36524) {
        gy += 100 * Math.floor(--days / 36524);
        days %= 36524;
        if (days >= 365) days++;
    }
    gy += 4 * Math.floor(days / 1461);
    days %= 1461;
    if (days > 365) {
        gy += Math.floor((days - 1) / 365);
        days = (days - 1) % 365;
    }
    let sal_a = [0, 31, ((gy % 4 === 0 && gy % 100 !== 0) || (gy % 400 === 0)) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    for (gm = 0; gm < 13 && days >= sal_a[gm]; gm++) days -= sal_a[gm];
    return { gy: gy, gm: gm, gd: days + 1 };
}

const myColors = {
    primary: '#5955D1', success: '#009966', warning: '#F5A70E', danger: '#F83636', info: '#00CFE8'
};

document.addEventListener('DOMContentLoaded', function() {
    // ۲. بخش درگ اند دراپ (احیا شده)
    const containerEl = document.getElementById('external-events');
    if (containerEl && typeof FullCalendar !== 'undefined') {
        new FullCalendar.Draggable(containerEl, {
            itemSelector: '.fc-event',
            eventData: function(eventEl) {
                let label = 'primary';
                if (eventEl.classList.contains('bg-danger-subtle')) label = 'danger';
                else if (eventEl.classList.contains('bg-success-subtle')) label = 'success';
                else if (eventEl.classList.contains('bg-warning-subtle')) label = 'warning';
                else if (eventEl.classList.contains('bg-info-subtle')) label = 'info';

                return {
                    title: eventEl.innerText.trim(),
                    backgroundColor: myColors[label],
                    borderColor: myColors[label],
                    allDay: false // اجازه نمایش ساعت هنگام درگ
                };
            }
        });
    }

    const calendarEl = document.getElementById('calendar');
    let calendar;

    // ۳. راه اندازی تقویم
    if (calendarEl) {
        calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'fa', 
            direction: 'rtl', 
            firstDay: 6,
            
            // --- بخش دکمه‌ها و متون فارسی ---
            buttonText: {
                today: 'امروز',
                month: 'ماه',
                week: 'هفته',
                day: 'روز',
                list: 'برنامه'
            },
            allDayText: 'تمام‌روز', // تغییر متن all-day به فارسی
            // ------------------------------

            editable: true, 
            droppable: true,
            headerToolbar: { 
                left: 'prev,next today', 
                center: 'title', 
                right: 'dayGridMonth,timeGridWeek,timeGridDay' 
            },
            eventDidMount: function(info) {
                info.el.style.backgroundColor = info.event.backgroundColor;
                info.el.style.borderColor = info.event.backgroundColor;
                info.el.style.color = '#fff';
            },
            eventClick: function(info) {
                const event = info.event;
                const props = event.extendedProps;
                document.getElementById('eventTitle').innerText = event.title;
                const opt = { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit' };
                document.getElementById('eventStart').innerText = event.start.toLocaleString('fa-IR', opt);
                document.getElementById('eventEnd').innerText = event.end ? event.end.toLocaleString('fa-IR', opt) : '---';
                document.getElementById('eventLocation').innerText = props.location || 'ثبت نشده';
                document.getElementById('eventDescription').innerText = props.description || 'توضیحاتی وجود ندارد';
                new bootstrap.Modal(document.getElementById('eventDetailsModal')).show();
            }
        });
        calendar.render();
    }

    // فعال‌سازی دستی برای اطمینان از رندر شدن ساعت
        document.querySelectorAll('[data-jdp]').forEach(input => {
            input.addEventListener('focus', function() {
                jalaliDatepicker.updateOptions({
                    time: true,
                    date: true,
                    hasSecond: false,
                    persianDigits: false,
                    container: "body"
                });
            });
        });

        // اجرای اولیه برای شناسایی اینپوت‌ها
        if (typeof jalaliDatepicker !== 'undefined') {
            jalaliDatepicker.startWatch();
        }

    // ۵. ثبت فرم
    const eventForm = document.getElementById('eventForm');
    if (eventForm) {
        eventForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const titleValue = document.getElementById('title').value;
            const labelValue = document.getElementById('label').value;
            const locationValue = document.getElementById('location').value;
            const descValue = document.getElementById('description').value;
            const startStr = document.getElementById('eventStartDate').value;
            const endStr = document.getElementById('eventEndDate').value;

            // تابع تبدیل رشته دیت‌پیکر به ISO برای FullCalendar
            const formatISO = (shamsiStr) => {
                if (!shamsiStr) return null;
                const parts = shamsiStr.trim().split(/\s+/); 
                const datePart = parts[0].split(/[/-]/);
                const timePart = (parts[1]) ? parts[1].split(':') : ["00", "00"];
                
                const g = shamsiToMiladi(parseInt(datePart[0]), parseInt(datePart[1]), parseInt(datePart[2]));
                
                return `${g.gy}-${String(g.gm).padStart(2, '0')}-${String(g.gd).padStart(2, '0')}T${String(timePart[0]).padStart(2,'0')}:${String(timePart[1]).padStart(2,'0')}:00`;
            };

            const startISO = formatISO(startStr);
            const endISO = formatISO(endStr);

            if (titleValue && startISO) {
                calendar.addEvent({
                    title: titleValue,
                    start: startISO,
                    end: endISO,
                    backgroundColor: myColors[labelValue],
                    borderColor: myColors[labelValue],
                    allDay: false, // اجباری برای نمایش ساعت در باکس ایونت
                    extendedProps: {
                        location: locationValue,
                        description: descValue
                    }
                });
                bootstrap.Modal.getInstance(document.getElementById('modalAddEvent')).hide();
                eventForm.reset();
            }
        });
    }
});