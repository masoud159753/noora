const tagifyInput = document.querySelectorAll('.tagify-input');
if (tagifyInput.length) {
	tagifyInput.forEach((el) => {
		new Tagify(el, {
			placeholder: "چیزی بنویسید..."
		});
	});
}



const tagifyUsersList = document.querySelector('.tagify-users-list');
if (tagifyUsersList) {
	function escapeHTML(s) {
		return typeof s === 'string' ? s
			.replace(/&/g, "&amp;")
			.replace(/</g, "&lt;")
			.replace(/>/g, "&gt;")
			.replace(/"/g, "&quot;")
			.replace(/`|'/g, "&#039;")
			: s;
	}

	function validateEmail(email) {
		return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
	}

	function parseFullValue(value) {
		const parts = value.split(/<(.*?)>/g);
		const name = parts[0].trim();
		const email = parts[1]?.replace(/<(.*?)>/g, '').trim();
		return { name, email };
	}

	function tagTemplate(tagData) {
		return `
			<tag title="${escapeHTML(tagData.email)}"
				contenteditable='false'
				spellcheck='false'
				tabIndex="-1"
				class="tagify__tag ${tagData.class || ""}"
				${this.getAttributes(tagData)}>
				<x title='Remove' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
				<div>
					<div class='tagify__tag__avatar-wrap'>
						<img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
					</div>
					<span class='tagify__tag-text'>${escapeHTML(tagData.name)}</span>
				</div>
			</tag>
		`;
	}

	function suggestionItemTemplate(tagData) {
		return `
			<div ${this.getAttributes(tagData)}
				class='tagify__dropdown__item ${tagData.class || ""}'
				tabindex="0"
				role="option">
				${tagData.avatar ? `
					<div class='tagify__dropdown__item__avatar-wrap'>
						<img onerror="this.style.visibility='hidden'" src="${tagData.avatar}">
					</div>` : ''
		}
				<strong>${escapeHTML(tagData.name)}</strong>
				<span>${escapeHTML(tagData.email)}</span>
			</div>
		`;
	}

	// Initialize Tagify
	const tagify = new Tagify(tagifyUsersList, {
		tagTextProp: 'name',
		skipInvalid: true,
		dropdown: {
			closeOnSelect: false,
			enabled: 0,
			classname: 'users-list',
			searchKeys: ['name', 'email']
		},
		templates: {
			tag: tagTemplate,
			dropdownItem: suggestionItemTemplate
		},
		whitelist: [
			{ value: 1, name: "نسترن سلطانی", avatar: "assets/images/avatar/avatar1.webp", email: "sophia@example.com" },
			{ value: 2, name: "امیرارسلان رهنما", avatar: "assets/images/avatar/avatar2.webp", email: "emma@example.com" },
			{ value: 3, name: "شیرین رضایی", avatar: "assets/images/avatar/avatar3.webp", email: "olivia@example.com" },
			{ value: 4, name: "باربد باباخانی", avatar: "assets/images/avatar/avatar4.webp", email: "avalewis@example.com" },
			{ value: 5, name: "مهسا رهنما", avatar: "assets/images/avatar/avatar5.webp", email: "isabella@example.com" },
		],

		transformTag(tagData) {
			const { name, email } = parseFullValue(tagData.name);
			tagData.name = name;
			tagData.email = email || tagData.email;
		},

		validate({ name, email }) {
			if (!email && name) {
				const parsed = parseFullValue(name);
				name = parsed.name;
				email = parsed.email;
			}
			if (!name) return "Missing name";
			if (!validateEmail(email)) return "Invalid email";
			return true;
		}
	});

	// Remove dropdown header
	// No dropdownHeader or dropdown.createListHTML is used
	
	// Optional: show name <email> while editing
	tagify.on('edit:start', ({ detail: { tag, data } }) => {
		tagify.setTagTextNode(tag, `${data.name} <${data.email}>`);
	});
}




const tagifyAdvanceOptions = document.querySelector('.tagify-advance-options');
if (tagifyAdvanceOptions) {
	// Step 1: Bootstrap color classes (CSS variable names)
	const bootstrapColors = [
		'--bs-primary',
		'--bs-success',
		'--bs-danger',
		'--bs-warning',
		'--bs-info',
		'--bs-secondary',
		'--bs-dark',
	];

	let colorIndex = 0;  // Used to rotate through Bootstrap colors

	// Step 2: Assign Bootstrap color to each tag
	function transformTagWithBootstrapColor(tagData) {
		const colorVar = bootstrapColors[colorIndex % bootstrapColors.length];
		tagData.style = `--tag-bg: var(${colorVar})`;
		tagData.class = 'tag-color';

		// Optional: Replace sensitive words
		if (tagData.value.toLowerCase() === 'shit') {
			tagData.value = 's✲✲t';
		}

		colorIndex++;  // Move to next color for the next tag
	}

	// Step 3: Select input element
	const input = document.querySelector('.tagify-advance-options');

	if (input) {
		const tagify = new Tagify(input, {
			pattern: /^.{0,20}$/,     // max 20 chars
			delimiters: ",| ",        // new tag on comma or space
			trim: false,
			keepInvalidTags: true,
			editTags: {
				clicks: 2,
				keepInvalid: false
			},
			maxTags: 6,
			blacklist: ["foo", "bar", "baz"],
			whitelist: [
				"احسان رفیعی",
				"William Johnson",
				"Benjamin Martinez",
				"احسان حسینی",
				"Matthew Taylor",
				"David Wilson",
				"Anthony Thomas",
				"Christopher Moore",
				"امیرارسلان رهنما"
			],
			transformTag: transformTagWithBootstrapColor,
			backspace: "edit",
			placeholder: "چیزی بنویسید",
			dropdown: {
				enabled: 1,           // show suggestions after 1 character
				fuzzySearch: false,
				position: 'text',
				caseSensitive: true,
			},
			templates: {
				dropdownItemNoMatch: function(data) {
					return `هیچ پیشنهاد پیدا نشد: ${data.value}`
				}
			}
		});

		// Update placeholder dynamically based on tag count
		function updatePlaceholderByTagsCount() {
			const count = tagify.value.length;
			let placeholderText = "";

			if (count > 0) {
				// اگر تگی وجود داشت، تعداد را به فارسی بنویس
				placeholderText = `${count} تگ اضافه شده`;
			} else {
				// اگر خالی بود
				placeholderText = "هیچ تگی اضافه نشده";
			}

			tagify.setPlaceholder(placeholderText);
		}

		tagify.on('change', updatePlaceholderByTagsCount);
		updatePlaceholderByTagsCount();

		// Tag click logic: change color on single click
		let clickDebounce;
		tagify.on('click', function (e) {
			const { tag: tagElm, data: tagData } = e.detail;
			clearTimeout(clickDebounce);
			clickDebounce = setTimeout(() => {
				const colorVar = bootstrapColors[colorIndex % bootstrapColors.length];
				tagData.style = `--tag-bg: var(${colorVar})`;
				colorIndex++;
				tagify.replaceTag(tagElm, tagData);
			}, 200);
		});

		// Prevent color change on double-click (for editing)
		tagify.on('dblclick', function () {
			clearTimeout(clickDebounce);
		});

		// Optional: Log add & invalid events
		tagify.on('add', e => console.log("Added tag:", e.detail));
		tagify.on('invalid', e => console.log("Invalid tag:", e.detail));
	}
}