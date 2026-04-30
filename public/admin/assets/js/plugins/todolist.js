$(document).ready(function () {
	
	// Create a new Date object to get the current date and time
	const currentTime = function() {		
		var currentTime = new Date();
		var hours = currentTime.getHours();
		var minutes = currentTime.getMinutes();
		var ampm = hours >= 12 ? 'PM' : 'AM';
		hours = hours % 12;
		hours = hours ? hours : 12;
		minutes = minutes < 10 ? '0' + minutes : minutes;
		var timeString = hours + ':' + minutes + ' ' + ampm;
		return timeString;
	}
	
	jQuery('#todoAdd').on('click', function(){
		const todoInput = $('#todoInput').val().trim();
		const todoPriority = $('#todoPriority').val().trim();

		if (todoInput !== '') {
			const todoItem = `<li class="list-group-item d-flex gap-2 align-items-center todo-item bg-opacity-05 mb-1 ps-3 pe-2 py-2">
				<span class="sortable-handle">
					<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11.9998 3.16667C12.7362 3.16667 13.3332 2.56971 13.3332 1.83333C13.3332 1.09695 12.7362 0.5 11.9998 0.5C11.2635 0.5 10.6665 1.09695 10.6665 1.83333C10.6665 2.56971 11.2635 3.16667 11.9998 3.16667Z" fill="var(--bs-body-color)"></path>
						<path d="M11.9998 9.26237C12.7362 9.26237 13.3332 8.66542 13.3332 7.92904C13.3332 7.19266 12.7362 6.5957 11.9998 6.5957C11.2635 6.5957 10.6665 7.19266 10.6665 7.92904C10.6665 8.66542 11.2635 9.26237 11.9998 9.26237Z" fill="var(--bs-body-color)"></path>
						<path d="M11.9998 15.3571C12.7362 15.3571 13.3332 14.7601 13.3332 14.0238C13.3332 13.2874 12.7362 12.6904 11.9998 12.6904C11.2635 12.6904 10.6665 13.2874 10.6665 14.0238C10.6665 14.7601 11.2635 15.3571 11.9998 15.3571Z" fill="var(--bs-body-color)"></path>
						<path d="M4.7618 3.16667C5.49818 3.16667 6.09513 2.56971 6.09513 1.83333C6.09513 1.09695 5.49818 0.5 4.7618 0.5C4.02542 0.5 3.42847 1.09695 3.42847 1.83333C3.42847 2.56971 4.02542 3.16667 4.7618 3.16667Z" fill="var(--bs-body-color)"></path>
						<path d="M4.7618 9.26237C5.49818 9.26237 6.09513 8.66542 6.09513 7.92904C6.09513 7.19266 5.49818 6.5957 4.7618 6.5957C4.02542 6.5957 3.42847 7.19266 3.42847 7.92904C3.42847 8.66542 4.02542 9.26237 4.7618 9.26237Z" fill="var(--bs-body-color)"></path>
						<path d="M4.7618 15.3571C5.49818 15.3571 6.09513 14.7601 6.09513 14.0238C6.09513 13.2874 5.49818 12.6904 4.7618 12.6904C4.02542 12.6904 3.42847 13.2874 3.42847 14.0238C3.42847 14.7601 4.02542 15.3571 4.7618 15.3571Z" fill="var(--bs-body-color)"></path>
					</svg>
				</span>
				<input class="form-check-input check-${todoPriority}" type="checkbox">
				<span class="form-label mb-0">${todoInput}</span>
				<span class="todo-time text-body">${currentTime()}</span>
				<button type="button" class="btn btn-action-gray rounded-circle btn-sm btn-icon waves-effect waves-light item-delete ms-auto">
					<i class="fi fi-rr-trash"></i>
				</button>
			</li>`;
			jQuery('#todoList').prepend(todoItem);
			jQuery('#todoInput').val('');
		}
	});
	
	function updateTodoStyles($checkbox) {
		const $parent = $checkbox.parent();
		const $label = $checkbox.siblings('.form-label');
		const $time = $checkbox.siblings('.todo-time');

		// Find color class dynamically
		const classes = $checkbox.attr('class').split(/\s+/);
		let colorClass = '';
		let bgClassesName = '';
		
		classes.forEach(cls => {
			if (cls.startsWith('check-')) {
				colorClass = 'text-' + cls.replace('check-', '');
				bgClassesName = 'bg-' + cls.replace('check-', '');
			}
		});
		
		if ($checkbox.prop('checked')) {
			$parent.addClass(bgClassesName);
			$label.addClass('del ' + colorClass);
			$time.addClass('del ' + colorClass);
		} else {
			$parent.removeClass(bgClassesName);
			$label.removeClass('del ' + colorClass);
			$time.removeClass('del ' + colorClass);
		}
	}
	
	// Apply on change (for dynamically added items)
	$('#todoList').on('change', '.form-check-input', function () {
		updateTodoStyles($(this));
	});

	$('#todoList .form-check-input').each(function () {
		updateTodoStyles($(this));
	});
	
	todoListSortable = document.getElementById('todoList'),
	new Sortable(todoListSortable, {
		handle: '.sortable-handle',
		animation: 150
	});
	
	$('#todoList').on('click', '.item-delete', function(){
		$(this).parent().remove();
	});
	
});