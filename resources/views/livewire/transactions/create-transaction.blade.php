<div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">
                        ثبت تراکنش
                    </h6>
                </div>
                <div class="card-body">

                    <form class="row">
                    @foreach($errors->all() as $error)

                        <div aria-label="Closed Deals" class="progress progress-danger progress-overlap mb-1" role="progressbar">
                            <div class="progress-label">
                                {{$error}}
                            </div>
                        </div>
                    @endforeach

                    @if(session('success'))
                        <div aria-label="Prospects" class="progress progress-success progress-overlap mb-1" role="progressbar">
                            <div class="progress-label">
                                {{session('success')}}
                            </div>

                            <div class="progress-bar" style="width: 100%">
                            </div>
                        </div>
                    @endif

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="inputAddress">
                                نوع تراکنش
                            </label>

                            <select class="form-select" id="inputState2" wire:model="trans_type">
                                <option selected="selected" value="income">
                                    درآمد - income
                                </option>
                                <option value="expense">
                                       هزینه - expense
                                </option>
                                <option value="transfer">
                                     انتقال  - transfer
                                </option>
                            </select>

                        </div>



                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="inputNumber">
                                مبلغ
                            </label>
                            <input class="form-control numberInput" id="inputNumber" type="text" wire:model="amount">
                        </div>

                        <div class="col-md-6 mb-3">
                                <label class="form-label" for="flatpickr_datetime">
                                    تاریخ
                                </label>

                                <input type="text" wire:model="time" class="form-control p-date-only pwt-datepicker-input-element" placeholder="انتخاب تاریخ و زمان">

                            </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="flatpickr_datetime">
                                زمان
                            </label>

                            <input type="text" wire:model="time" class="form-control p-time-only pwt-datepicker-input-element" placeholder="انتخاب تاریخ و زمان">

                        </div>

                        <div class="row tagify-row from-account-row">

                        <div class="col-lg-12 mb-3">
                            <label class="form-label">
                                 حساب
                            </label>
                            <div wire:ignore>
                            <input wire:model="account_id" class="form-control" id="accounts_id" value="" tabindex="-1">
                            </div>
                        </div>

                    </div>

                        <div class="row tagify-row to-account-row">

                            <div class="col-lg-12 mb-4">
                                <label class="form-label">
                                     حساب مقصد
                                </label>
                                <div wire:ignore>
                                    <input wire:model="to_account_id" class="form-control" id="to_accounts_id" value="" tabindex="-1">
                                </div>
                            </div>

                        </div>

                        <div class="col-12">
                            <button wire:click="save" class="btn btn-primary waves-effect waves-light" type="button">
                                ثبت تراکنش
                            </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>



        <div class="col-lg-12">
            <div class="card overflow-hidden">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h6 class="card-title mb-0">
                        لیست حساب
                    </h6>
                </div>
                <div class="card-body p-0 pb-2">
                    <div id="dt_basic_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                        <div class="row mt-2 justify-content-between mx-2 py-2">
                            <div class="d-md-flex justify-content-between align-items-center dt-layout-start col-md-auto me-auto">
                                <div class="dt-length">
                                    <select aria-controls="dt_basic" class="form-select form-select-sm" id="dt-length-0">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                    <label for="dt-length-0">   در هرصفحه   </label>
                                </div>
                            </div>
                            <div class="d-md-flex justify-content-between align-items-center dt-layout-end col-md-auto ms-auto">
                                <div class="dt-search">
                                    <input type="search" class="form-control form-control-sm" id="dt-search-0" placeholder="جستجو" aria-controls="dt_basic">
                                    <label for="dt-search-0"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 justify-content-between dt-layout-table">
                            <div class="d-md-flex justify-content-between align-items-center col-12 dt-layout-full col-md">
                                <table class="table display dataTable" id="dt_basic" aria-describedby="dt_basic_info" style="width: 100%;">
                                    <colgroup>
                                        <col data-dt-column="0" style="width: 244.641px;">
                                        <col data-dt-column="1" style="width: 183.469px;">
                                        <col data-dt-column="2" style="width: 244.641px;">
                                        <col data-dt-column="3" style="width: 183.469px;">
                                        <col data-dt-column="4" style="width: 183.469px;">
                                        <col data-dt-column="5" style="width: 183.469px;">
                                        <col data-dt-column="6" style="width: 136.969px;">
                                        <col data-dt-column="7" style="width: 93.875px;">
                                    </colgroup>

                                    <thead class="table-light">

                                        <tr>

                                            <th class="minw-200px dt-orderable-asc dt-orderable-desc dt-ordering-asc" data-dt-column="0" rowspan="1" colspan="1" aria-sort="ascending">
                                                <div class="dt-column-header">
                                                    <span class="dt-column-title">
                                                     نام
                                                    </span>

                                                    <span class="dt-column-order" role="button" aria-label="
                                                     نام
                                                    : Activate to invert sorting" tabindex="0">

                                                    </span>
                                                </div>
                                            </th>

                                            <th class="minw-150px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1">
                                                <div class="dt-column-header">
                                                    <span class="dt-column-title">
                                                     نوع ترک
                                                    </span>
                                                    <span class="dt-column-order" role="button" aria-label="
                                                     نوع ترک
                                                    : Activate to sort" tabindex="0">

                                                    </span>
                                                </div>
                                            </th>

                                            <th class="minw-200px dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1">
                                                <div class="dt-column-header">
                                                    <span class="dt-column-title">
                                                     بخش
                                                    </span>
                                                    <span class="dt-column-order" role="button" aria-label="
                         بخش
                        : Activate to sort" tabindex="0"></span></div></th>


                                        </tr>

                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td class="sorting_1">
                                            <div class="d-flex align-items-center mw-175px">
{{--                                                <div class="avatar avatar-xxs rounded-circle">--}}
{{--                                                    <img alt="" src="./assets/images/avatar/avatar9.webp">--}}
{{--                                                </div>--}}
                                                <div class="ms-2 me-auto">
                                                    آرام کاکاوند
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                         <span class="text-warning">
                                          مرخصی استعلاجی
                                         </span>
                                        </td>
                                        <td>
                                            مهندس QA
                                        </td>
                                        <td>
                                            1 روز
                                        </td>
                                        <td>
                                            ۲۶ مهر ۱۴۰۴
                                        </td>
                                        <td>
                                            ۲۶ مهر ۱۴۰۴
                                        </td>
                                        <td>
                                            <div class="dropdown select-status">
                                                <button class="btn btn-sm dropdown-toggle waves-effect waves-light btn-subtle-primary" data-bs-toggle="dropdown" type="button" aria-expanded="false">تصویب شد</button>
                                                <ul class="dropdown-menu dropdown-menu-end" style="">
                                                    <li>
                                                        <a class="dropdown-item" data-class="btn-outline-light" href="javascript:void(0);">
                                                            در انتظار
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" data-class="btn-subtle-primary" href="javascript:void(0);" data-selected="true">
                                                            تصویب شد
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" data-class="btn-subtle-secondary" href="javascript:void(0);">
                                                            رد شد
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" data-class="btn-subtle-success" href="javascript:void(0);">
                                                            جدید
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group float-end">
                                                <button class="btn btn-white btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button" aria-expanded="false">
                                                    <i class="fi fi-rr-menu-dots">
                                                    </i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end" style="">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            ویرایش کنید
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            حذف کنید
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>


                                    </tbody>
                                    <tfoot></tfoot></table></div></div><div class="row mt-2 justify-content-between"><div class="d-md-flex justify-content-between align-items-center dt-layout-start col-md-auto me-auto"><div class="dt-info" aria-live="polite" id="dt_basic_info" role="status">نمایش 1 تا 10 از 15 </div></div><div class="d-md-flex justify-content-between align-items-center dt-layout-end col-md-auto ms-auto"><div class="dt-paging"><nav aria-label="pagination"><ul class="pagination"><li class="dt-paging-button page-item disabled"><button class="page-link first" role="link" type="button" aria-controls="dt_basic" aria-disabled="true" aria-label="First" data-dt-idx="first" tabindex="-1"><i class="fi fi-rr-angle-double-right"></i></button></li><li class="dt-paging-button page-item disabled"><button class="page-link previous" role="link" type="button" aria-controls="dt_basic" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1"><i class="fi fi-rr-angle-right"></i></button></li><li class="dt-paging-button page-item active"><button class="page-link" role="link" type="button" aria-controls="dt_basic" aria-current="page" data-dt-idx="0">1</button></li><li class="dt-paging-button page-item"><button class="page-link" role="link" type="button" aria-controls="dt_basic" data-dt-idx="1">2</button></li><li class="dt-paging-button page-item"><button class="page-link next" role="link" type="button" aria-controls="dt_basic" aria-label="Next" data-dt-idx="next"><i class="fi fi-rr-angle-left"></i></button></li><li class="dt-paging-button page-item"><button class="page-link last" role="link" type="button" aria-controls="dt_basic" aria-label="Last" data-dt-idx="last"><i class="fi fi-rr-angle-double-left"></i></button></li></ul></nav></div></div></div><div class="dt-autosize" style="width: 100%; height: 0px;"></div></div>
                </div>
            </div>
        </div>


    @section('js')

        <script>
            const input = document.getElementById("inputNumber");

            input.addEventListener("keypress", function (e) {
                // Allow only digits (0–9)
                if (!/[0-9]/.test(e.key)) {
                    e.preventDefault();
                }
            });

            input.addEventListener("input", function (e) {
                let value = e.target.value.replace(/,/g, ""); // remove existing commas

                if (!isNaN(value) && value !== "") {
                    e.target.value = Number(value).toLocaleString();
                } else {
                    e.target.value = value;
                }
            });
        </script>


        <script src="./admin/assets/libs/tagify/tagify.js">
        </script>

        <script>

            const tagifyUsersList = document.querySelector('#accounts_id');
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

				<strong>${escapeHTML(tagData.name)}</strong>
				<span>${escapeHTML(tagData.email)}</span>
			</div>
		`;
                }

                // Initialize Tagify
                const tagify = new Tagify(tagifyUsersList, {
                    tagTextProp: 'name',
                    skipInvalid: true,
                    maxTags: 1,
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
                    // فقط ID داخل input ذخیره بشه
                    originalInputValueFormat: values =>
                        values[0]?.value || ''
                    ,
                    whitelist: [
                      @foreach($accounts as $item)
                        { value: {{$item->id}}, name: "{{$item->name}}", avatar: "assets/images/avatar/avatar1.webp", email: "{{$item->type.' - '.number_format($item->balance,0)}}" },
                      @endforeach
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
                        // if (!validateEmail(email)) return "Invalid email";
                        return true;
                    }
                });

                tagify.on('change', () => {
                    @this.set('account_id', tagify.value[0]?.value || null);
                });

                // Remove dropdown header
                // No dropdownHeader or dropdown.createListHTML is used

                // Optional: show name <email> while editing
                tagify.on('edit:start', ({ detail: { tag, data } }) => {
                    tagify.setTagTextNode(tag, `${data.name} <${data.email}>`);
                });
            }

        </script>


        <script>

            const tagifyUsersListTo = document.querySelector('#to_accounts_id');
            if (tagifyUsersListTo) {



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

				<strong>${escapeHTML(tagData.name)}</strong>
				<span>${escapeHTML(tagData.email)}</span>
			</div>
		`;
                }

                // Initialize Tagify
                const tagify = new Tagify(tagifyUsersListTo, {
                    tagTextProp: 'name',
                    skipInvalid: true,
                    maxTags: 1,
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
                    // فقط ID داخل input ذخیره بشه
                    originalInputValueFormat: values =>
                        values[0]?.value || ''
                    ,
                    whitelist: [
                        @foreach($accounts as $item)
                        { value: {{$item->id}}, name: "{{$item->name}}", avatar: "assets/images/avatar/avatar1.webp", email: "{{$item->type.' - '.number_format($item->balance,0)}}" },
                        @endforeach
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
                        // if (!validateEmail(email)) return "Invalid email";
                        return true;
                    }
                });

                tagify.on('change', () => {
                @this.set('to_account_id', tagify.value[0]?.value || null);
                });

                // Remove dropdown header
                // No dropdownHeader or dropdown.createListHTML is used

                // Optional: show name <email> while editing
                tagify.on('edit:start', ({ detail: { tag, data } }) => {
                    tagify.setTagTextNode(tag, `${data.name} <${data.email}>`);
                });
            }






        </script>

        <script>
            $(document).ready(function (){


                $('#inputState2').change(function (){
                    $('.to-account-row').hide();
                    $('.from-account-row label').text('حساب');
                    $('.from-account-row input').attr('wire:model','account_id');

                    if($(this).prop('value')=="transfer") {
                        $('.to-account-row').show();
                        $('.from-account-row label').text('حساب مبدا');
                        $('.from-account-row input').attr('wire:model', 'from_account_id');
                    }

                });
            });

        </script>

    @endsection


</div>
