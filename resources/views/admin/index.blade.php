@extends('admin.main')

@section('content')
<main class="app-wrapper">
    <div class="container-fluid">
        <div class="app-page-head d-flex align-items-center justify-content-between">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <i class="fi fi-rr-home">
                            </i>
                            صفحه اصلی
                        </a>
                    </li>
                    <li aria-current="page" class="breadcrumb-item active">
                        داشبورد
                    </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-xxl-6 col-lg-8">
                <div class="row">
                    <div class="col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between border-0 pb-0">
                                <div class="clearfix">
                                    <h6>
                                        مجموع مخاطبین
                                    </h6>
                                </div>
                                <div class="btn-group">
                                    <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                        <i class="fi fi-bs-menu-dots">
                                        </i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
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
                            </div>
                            <div class="card-body py-0 d-flex align-items-start justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <h2 class="mb-0">
                                        5,758
                                    </h2>
                                    <span class="badge badge-sm bg-success-subtle text-success">
			 +2.57%
			</span>
                                </div>
                                <div class="mb-n4 mt-n3" id="chartContacts">
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0 mt-n1">
                                <div class="border-top pb-2">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0">
                                        در مقایسه با ماه گذشته: 1195
                                    </p>
                                    <a class="btn-link" href="javascript:void(0);">
                                        <svg fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg);">
                                            <path d="M3.33301 9.375C2.98783 9.375 2.70801 9.65483 2.70801 10C2.70801 10.3452 2.98783 10.625 3.33301 10.625V9.375ZM3.33301 10.625H16.6663V9.375H3.33301V10.625Z" fill="var(--bs-primary)" opacity="0.5">
                                            </path>
                                            <path d="M11.667 5L16.667 10L11.667 15" stroke="var(--bs-primary)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-md-6">
                        <div class="card overflow-hidden">
                            <div class="card-header d-flex align-items-center justify-content-between border-0 pb-0">
                                <div class="clearfix">
                                    <h6>
                                        تجزیه و تحلیل پیشرو
                                    </h6>
                                </div>
                                <div class="btn-group">
                                    <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                        <i class="fi fi-bs-menu-dots">
                                        </i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
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
                            </div>
                            <div class="card-body pt-0">
                                <div class="d-flex align-items-center gap-2">
                                    <h2 class="mb-0">
                                        70
                                    </h2>
                                    <span class="badge badge-sm bg-danger-subtle text-danger">
			 -2.57%
			</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 p-0">
                                <div class="my-n3 mx-n1" id="chartLeadAnalytics">
                                </div>
                                <div class="position-absolute bottom-0 translate-middle start-50 text-center text-1xs w-100">
                                    در مقایسه با ماه گذشته
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h6 class="mb-0">
                                            بررسی اجمالی وظایف
                                        </h6>
                                        <span class="text-2xs">
			  وظایف انجام شد
			  <span class="text-primary fw-semibold">
			   25
			  </span>
			 </span>
                                    </div>
                                    <div aria-label="Default striped example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress progress-sm" role="progressbar">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 70%">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-grid text-1xs">
                                        <div class="d-flex gap-1 align-items-center py-1 mx-1">
                                            <i class="fa fa-square text-primary text-opacity-10 me-1">
                                            </i>
                                            پیگیری ها
                                        </div>
                                        <div class="d-flex gap-1 align-items-center py-1 mx-1">
                                            <i class="fa fa-square text-primary text-opacity-25 me-1">
                                            </i>
                                            در حال انجام است
                                        </div>
                                        <div class="d-flex gap-1 align-items-center py-1 mx-1">
                                            <i class="fa fa-square text-primary text-opacity-50 me-1">
                                            </i>
                                            در انتظار
                                        </div>
                                    </div>
                                    <div class="maxw-100px ratio ratio-1x1">
                                        <canvas id="chartTasksOverview">
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between border-0 pb-0">
                                <div class="clearfix">
                                    <h6>
                                        معاملات فعال
                                    </h6>
                                </div>
                                <div class="btn-group">
                                    <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                        <i class="fi fi-bs-menu-dots">
                                        </i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
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
                            </div>
                            <div class="card-body pt-0">
                                <div class="d-flex align-items-center gap-2">
                                    <h2 class="mb-0">
                                        1,249
                                    </h2>
                                    <span class="badge badge-sm bg-success-subtle text-success">
			 +2.57%
			</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 pt-0">
                                <div class="border-top pb-2">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0">
                                        در مقایسه با ماه گذشته: 1195
                                    </p>
                                    <a class="btn-link" href="javascript:void(0);">
                                        <svg fill="none" height="20" viewbox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg);">
                                            <path d="M3.33301 9.375C2.98783 9.375 2.70801 9.65483 2.70801 10C2.70801 10.3452 2.98783 10.625 3.33301 10.625V9.375ZM3.33301 10.625H16.6663V9.375H3.33301V10.625Z" fill="var(--bs-primary)" opacity="0.5">
                                            </path>
                                            <path d="M11.667 5L16.667 10L11.667 15" stroke="var(--bs-primary)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header d-flex flex-wrap gap-2 align-items-center justify-content-between border-0 pb-2">
                                <h6 class="card-title mb-0">
                                    درآمد
                                </h6>
                                <div class="d-flex flex-wrap gap-2">
                                    <ul class="nav nav-pills nav-pills-custom nav-fill p-1 bg-light rounded-5" id="chartRevenueTabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button aria-selected="false" class="nav-link rounded-5" data-bs-toggle="tab" id="todayRevenueTab" role="tab" type="button">
                                                امروز
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button aria-selected="false" class="nav-link rounded-5" data-bs-toggle="tab" id="weekRevenueTab" role="tab" type="button">
                                                هفته
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button aria-selected="true" class="nav-link active rounded-5" data-bs-toggle="tab" id="monthRevenueTab" role="tab" type="button">
                                                ماه
                                            </button>
                                        </li>
                                    </ul>
                                    <button class="btn btn-light rounded-circle btn-icon waves-effect waves-light flatpickr-date" type="button">
                                        <i class="fi fi-rr-calendar">
                                        </i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body py-0">
                                <div class="d-flex gap-2 align-items-center">
                                    <h2 class="mb-0">
			 <span class="text-body">
			  $</span>2,56,054.<span class="text-primary">50</span>
                                    </h2>
                                    <span>
			 20% در مقایسه با ماه گذشته
			</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 px-1 py-0">
                                <div class="revenue-chart" id="chartRevenue">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between border-0 pb-0">
                                <h6 class="card-title mb-0">
                                    منابع ترافیک
                                </h6>
                                <div class="btn-group">
                                    <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                        <i class="fi fi-bs-menu-dots">
                                        </i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
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
                            </div>
                            <div class="card-body pt-0">
                                <div class="chart-rounded my-1" id="chartTrafficSources">
                                </div>
                                <div class="d-grid gap-1">
                                    <div class="d-flex gap-1 align-items-center py-1 mx-1">
                                        <i class="fa fa-square text-primary text-opacity-10 me-1">
                                        </i>
                                        جستجوی ارگانیک
                                        <strong class="text-dark fw-semibold ms-auto">
                                            41.50%
                                        </strong>
                                    </div>
                                    <div class="d-flex gap-1 align-items-center py-1 mx-1">
                                        <i class="fa fa-square text-primary text-opacity-25 me-1">
                                        </i>
                                        ترافیک مستقیم
                                        <strong class="text-dark fw-semibold ms-auto">
                                            27%
                                        </strong>
                                    </div>
                                    <div class="d-flex gap-1 align-items-center py-1 mx-1">
                                        <i class="fa fa-square text-primary text-opacity-50 me-1">
                                        </i>
                                        ترافیک ارجاعی
                                        <strong class="text-dark fw-semibold ms-auto">
                                            18%
                                        </strong>
                                    </div>
                                    <div class="d-flex gap-1 align-items-center py-1 py-1 mx-1">
                                        <i class="fa fa-square text-primary text-opacity-75 me-1">
                                        </i>
                                        سوشال مدیا
                                        <strong class="text-dark fw-semibold ms-auto">
                                            10.30%
                                        </strong>
                                    </div>
                                    <div class="d-flex gap-1 align-items-center py-1 mx-1">
                                        <i class="fa fa-square text-primary me-1">
                                        </i>
                                        ترافیک ایمیل
                                        <strong class="text-dark fw-semibold ms-auto">
                                            3.20%
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-primary bg-opacity-05 py-2 d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">
                                    گزارش سالانه
                                </h6>
                                <button class="btn btn-sm btn-white waves-effect text-primary fw-semibold" type="button">
                                    <svg class="me-1" fill="none" height="18" viewbox="0 0 20 20" width="18" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.5 12.5C2.5 14.857 2.5 16.0355 3.23223 16.7677C3.96447 17.5 5.14297 17.5 7.5 17.5H12.5C14.857 17.5 16.0355 17.5 16.7677 16.7677C17.5 16.0355 17.5 14.857 17.5 12.5" opacity="0.5" stroke="var(--bs-primary)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        </path>
                                        <path d="M10.0003 2.5V13.3333M10.0003 13.3333L13.3337 9.6875M10.0003 13.3333L6.66699 9.6875" stroke="var(--bs-primary)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        </path>
                                    </svg>
                                    نام و نمایه
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between border-0 pb-0">
                                <h6 class="card-title mb-0">
                                    نرخ نگهداری
                                </h6>
                                <div class="btn-group">
                                    <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                        <i class="fi fi-bs-menu-dots">
                                        </i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
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
                            </div>
                            <div class="card-body pb-0 pt-0">
                                <div class="d-flex gap-2 align-items-center">
                                    <h2 class="mb-0">
                                        92%
                                    </h2>
                                    <span>
			 + 15٪ در مقایسه با ماه گذشته
			</span>
                                </div>
                            </div>
                            <div class="card-footer border-0 pb-0 pt-1 px-1">
                                <div class="retention-chart mt-n1" id="chartRetentionRate">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <div class="card overflow-hidden bg-primary border-0 ovarlay-primary-gradient" style="background-image: url(assets/images/wind.gif); background-position: center; background-size: cover;">
                            <div class="card-header pb-0 border-0 d-flex align-items-center justify-content-between z-1 position-relative">
                                <h6 class="card-title mb-0 text-white">
                                    کل درآمد
                                </h6>
                                <div class="btn-group">
                                    <button aria-expanded="false" class="btn btn-sm btn-icon text-white waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                        <i class="fi fi-bs-menu-dots">
                                        </i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
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
                            </div>
                            <div class="card-body pt-0 border-light border-bottom border-opacity-10">
                                <div class="mb-5 mt-n3 z-n1 position-relative">
                                    <div id="statusChart">
                                    </div>
                                    <div class="text-white mt-n5 text-center">
                                        673 سفارش
                                    </div>
                                </div>
                                <div class="px-4 mb-3 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start gap-2">
                                        <div class="py-1">
                                            <i class="text-white fa-solid fa-square">
                                            </i>
                                        </div>
                                        <div class="clearfix">
                                            <h3 class="mb-0 text-white">
                                                2.78 m
                                            </h3>
                                            <p class="text-white text-opacity-50 mb-0">
                                                245 وانت
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start gap-2">
                                        <div class="p-1">
                                            <i class="text-white text-opacity-50 fa-solid fa-square">
                                            </i>
                                        </div>
                                        <div class="clearfix">
                                            <h3 class="mb-0 text-white">
                                                $65,823
                                            </h3>
                                            <p class="text-white text-opacity-50 mb-0">
                                                120 ارسال
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0">
                                <h6 class="card-title mb-3 text-white">
                                    وضعیت سفارشات
                                </h6>
                                <div class="progress-stacked bg-transparent mb-4">
                                    <div aria-label="Segment one" aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress bg-transparent" role="progressbar" style="width: 70%">
                                        <div class="progress-bar bg-white">
                                        </div>
                                    </div>
                                    <div aria-label="Segment two" aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" class="progress bg-transparent" role="progressbar" style="width: 25%">
                                        <div class="progress-bar bg-white bg-opacity-50">
                                        </div>
                                    </div>
                                    <div aria-label="Segment three" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress bg-transparent" role="progressbar" style="width: 5%">
                                        <div class="progress-bar bg-white bg-opacity-25">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="text-white fa-solid fa-square">
                                        </i>
                                        <h6 class="fw-light text-white mb-0">
                                            پرداخت شده است
                                        </h6>
                                    </div>
                                    <strong class="text-white fw-semibold">
                                        70%
                                    </strong>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="text-white text-opacity-50 fa-solid fa-square">
                                        </i>
                                        <h6 class="fw-light text-white mb-0">
                                            لغو شد
                                        </h6>
                                    </div>
                                    <strong class="text-white fw-semibold">
                                        25%
                                    </strong>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="text-white text-opacity-25 fa-solid fa-square">
                                        </i>
                                        <h6 class="fw-light text-white mb-0">
                                            برگشت‌خورده
                                        </h6>
                                    </div>
                                    <strong class="text-white fw-semibold">
                                        5%
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between border-0 pb-0">
                                <h6 class="card-title mb-0">
                                    سفارش بر اساس زمان
                                </h6>
                                <div class="btn-group">
                                    <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                        <i class="fi fi-bs-menu-dots">
                                        </i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
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
                            </div>
                            <div class="card-body p-0">
                                <div class="mt-n3 mb-n1" id="chartOrderByTime">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex align-items-center justify-content-between border-0 pb-0">
                        <h6 class="card-title">
                            جلسات آتی
                        </h6>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-icon btn-action-primary waves-effect" type="button">
                                <i class="fi fi-rr-plus text-2xs">
                                </i>
                            </button>
                            <div class="btn-group">
                                <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                    <i class="fi fi-bs-menu-dots">
                                    </i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
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
                        </div>
                    </div>
                    <div class="card-body gradient-layer" data-simplebar="" style="height: 325px;">
                        <div class="p-3 bg-light bg-opacity-50 mb-2 rounded">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="mb-0 text-sm">
                                    تیم ایستادن
                                </h6>
                                <div class="clearfix d-flex align-items-center">
                                    <div class="btn-group">
                                        <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-bs-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                                </div>
                            </div>
                            <div class="text-1xs d-flex gap-1 align-items-center">
                                <img alt="" src="./admin/assets/images/icons/google-meet.svg"/>
                                <span>
			در Google Meet
		   </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
		   <span class="badge bg-white text-black">
			بازاریابی
		   </span>
                                <span class="text-primary text-2xs fw-semibold d-flex align-items-center">
			<i class="fi fi-rr-clock-three me-1">
			</i>
			06:00 - 07:00
		   </span>
                            </div>
                        </div>
                        <div class="p-3 bg-light bg-opacity-50 mb-2 rounded">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="mb-0 text-sm">
                                    جلسه همه دست ها
                                </h6>
                                <div class="clearfix d-flex align-items-center">
                                    <div class="btn-group">
                                        <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-bs-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                                </div>
                            </div>
                            <div class="text-1xs d-flex gap-1 align-items-center">
                                <img alt="" src="./admin/assets/images/icons/google-meet.svg"/>
                                <span>
			در Google Meet
		   </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
		   <span class="badge bg-white text-black">
			مدیر
		   </span>
                                <span class="text-primary text-2xs fw-semibold d-flex align-items-center">
			<i class="fi fi-rr-clock-three me-1">
			</i>
			06:00 - 07:00
		   </span>
                            </div>
                        </div>
                        <div class="p-3 bg-light bg-opacity-50 mb-2 rounded">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="mb-0 text-sm">
                                    عمومی
                                </h6>
                                <div class="clearfix d-flex align-items-center">
                                    <div class="btn-group">
                                        <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-bs-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                                </div>
                            </div>
                            <div class="text-1xs d-flex gap-1 align-items-center">
                                <img alt="" src="./admin/assets/images/icons/google-meet.svg"/>
                                <span>
			در Google Meet
		   </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
		   <span class="badge bg-white text-black">
			منابع انسانی
		   </span>
                                <span class="text-primary text-2xs fw-semibold d-flex align-items-center">
			<i class="fi fi-rr-clock-three me-1">
			</i>
			06:00 - 07:00
		   </span>
                            </div>
                        </div>
                        <div class="p-3 bg-light bg-opacity-50 mb-2 rounded">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="mb-0 text-sm">
                                    تیم ایستادن
                                </h6>
                                <div class="clearfix d-flex align-items-center">
                                    <div class="btn-group">
                                        <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-bs-menu-dots">
                                            </i>
                                            <i class="fi fi-bs-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                                </div>
                            </div>
                            <div class="text-1xs d-flex gap-1 align-items-center">
                                <img alt="" src="./admin/assets/images/icons/google-meet.svg"/>
                                <span>
			در Google Meet
		   </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
		   <span class="badge bg-white text-black">
			بازاریابی
		   </span>
                                <span class="text-primary text-2xs fw-semibold d-flex align-items-center">
			<i class="fi fi-rr-clock-three me-1">
			</i>
			06:00 - 07:00
		   </span>
                            </div>
                        </div>
                        <div class="p-3 bg-light bg-opacity-50 mb-2 rounded">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="mb-0 text-sm">
                                    جلسه همه دست ها
                                </h6>
                                <div class="clearfix d-flex align-items-center">
                                    <div class="btn-group">
                                        <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-bs-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                                </div>
                            </div>
                            <div class="text-1xs d-flex gap-1 align-items-center">
                                <img alt="" src="./admin/assets/images/icons/google-meet.svg"/>
                                <span>
			در Google Meet
		   </span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
		   <span class="badge bg-white text-black">
			مدیر
		   </span>
                                <span class="text-primary text-2xs fw-semibold d-flex align-items-center">
			<i class="fi fi-rr-clock-three me-1">
			</i>
			06:00 - 07:00
		   </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex align-items-center justify-content-between border-0 pb-2">
                        <h6 class="card-title mb-0">
                            بررسی اجمالی معاملات
                        </h6>
                        <div class="d-flex gap-2 align-items-center">
		  <span>
		   + 15٪ در مقایسه با ماه گذشته
		  </span>
                            <div class="btn-group ms-2">
                                <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                    <i class="fi fi-bs-menu-dots">
                                    </i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
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
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border border-1 py-3 px-3 rounded-2">
                                    <div class="avatar avatar-sm bg-light rounded-circle me-2">
                                        <i class="fi fi-rr-check-double text-md">
                                        </i>
                                    </div>
                                    <div class="clearfix">
                                        <h6 class="text-body mb-0 text-1xs">
                                            معاملات بسته
                                        </h6>
                                        <div class="d-flex align-items-end">
                                            <h4 class="mb-0">
                                                27
                                            </h4>
                                            <span class="text-success text-1xs ms-1">
			   +10 تخفیف
			  </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border border-1 py-3 px-3 rounded-2">
                                    <div class="avatar avatar-sm bg-light rounded-circle me-2">
                                        <i class="fi fi-rr-clock-five text-md">
                                        </i>
                                    </div>
                                    <div class="clearfix">
                                        <h6 class="text-body mb-0 text-1xs">
                                            ارزش خط لوله
                                        </h6>
                                        <div class="d-flex align-items-end">
                                            <h4 class="mb-0">
                                                5.2 m
                                            </h4>
                                            <span class="text-success text-1xs ms-1">
			   + 270 K دلار
			  </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border-0 p-0">
                        <div class="my-n3 mx-n1" id="chartDealsOverview">
                        </div>
                        <div class="bg-white d-inline-block position-absolute bottom-0 px-3 py-2 rounded-5 shadow-sm translate-middle start-50">
		  <span class="text-info fw-semibold">
		   نرخ تبدیل
		  </span>
                            <span class="text-dark fw-bold">
		   16%
		  </span>
                            <span class="text-danger fw-bold">
		   -2%
		  </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-lg-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between border-0 pb-0">
                        <h6 class="card-title">
                            نمای کلی فرآیند فروش
                        </h6>
                        <div class="btn-group">
                            <button aria-expanded="false" class="btn btn-action-primary btn-sm btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                <i class="fi fi-bs-menu-dots">
                                </i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
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
                    </div>
                    <div class="card-body pt-2">
                        <div class="d-flex gap-2 align-items-center mb-5">
                            <h2 class="mb-0">
		   <span class="text-body">
			$</span>2,56,054.<span class="text-primary">50</span>
                            </h2>
                            <span>
		   20% در مقایسه با ماه گذشته
		  </span>
                        </div>
                        <div aria-label="Leads" class="progress progress-primary progress-overlap mb-1" role="progressbar">
                            <div class="progress-label">
                                منجر می شود
                            </div>
                            <div class="progress-value">
                                120
                            </div>
                            <div class="progress-bar" style="width: 85%">
                            </div>
                        </div>
                        <div aria-label="Prospects" class="progress progress-success progress-overlap mb-1" role="progressbar">
                            <div class="progress-label">
                                چشم انداز
                            </div>
                            <div class="progress-value">
                                85
                            </div>
                            <div class="progress-bar" style="width: 60%">
                            </div>
                        </div>
                        <div aria-label="Opportunities" class="progress progress-info progress-overlap mb-1" role="progressbar">
                            <div class="progress-label">
                                فرصت ها
                            </div>
                            <div class="progress-value">
                                40
                            </div>
                            <div class="progress-bar" style="width: 40%">
                            </div>
                        </div>
                        <div aria-label="Closed Deals" class="progress progress-danger progress-overlap mb-1" role="progressbar">
                            <div class="progress-label">
                                معاملات بسته
                            </div>
                            <div class="progress-value">
                                20
                            </div>
                            <div class="progress-bar" style="width: 25%">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-primary bg-opacity-05 py-2 d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">
                            گزارش سالانه
                        </h6>
                        <button class="btn btn-sm btn-white waves-effect text-primary fw-semibold" type="button">
                            <i class="fi fi-rr-plus text-2xs me-1">
                            </i>
                            نام و نمایه
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8">
                <div class="card overflow-hidden">
                    <div class="card-header d-flex flex-wrap gap-3 align-items-center justify-content-between border-0 pb-0">
                        <h6 class="card-title mb-0">
                            مشتریان جدید
                        </h6>
                        <div class="d-flex flex-wrap gap-2">
                            <div id="dt_NewCustomers_Search">
                            </div>
                            <button class="btn btn-sm btn-light waves-effect" type="button">
                                <i class="fi fi-rr-plus text-2xs me-1">
                                </i>
                                افزودن جدید
                            </button>
                        </div>
                    </div>
                    <div class="card-body px-1 pt-2 pb-2">
                        <table class="table table-sm display table-row-rounded data-row-checkbox" id="dt_NewCustomers">
                            <thead class="table-light">
                            <tr>
                                <th class="pe-0">
                                    <div class="form-check">
                                        <input class="form-check-input" data-row-checkbox="" type="checkbox"/>
                                    </div>
                                </th>
                                <th class="minw-200px">
                                    نام
                                </th>
                                <th class="minw-150px">
                                    تلفن
                                </th>
                                <th class="minw-150px">
                                    ایمیل
                                </th>
                                <th class="minw-125px">
                                    روزها
                                </th>
                                <th>
                                    وضعیت
                                </th>
                                <th>
                                    اقدام
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check p-0 w-auto d-inline-block mb-0 mb-n1">
                                        <input class="form-check-input m-0" data-checkbox="" type="checkbox"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xxs rounded-circle me-2">
                                            <img alt="" src="./admin/assets/images/avatar/avatar1.webp"/>
                                        </div>
                                        امیرارسلان رهنما
                                    </div>
                                </td>
                                <td>
                                    09010010011
                                </td>
                                <td>
                                    johndoe1@example.com
                                </td>
                                <td>
                                    02:19 بعد از ظهر
                                </td>
                                <td>
			 <span class="badge badge-lg bg-primary-subtle text-primary">
			  فعال
			 </span>
                                </td>
                                <td>
                                    <div class="btn-group float-end">
                                        <button aria-expanded="false" class="btn btn-subtle-primary btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-rr-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check p-0 w-auto d-inline-block mb-0 mb-n1">
                                        <input class="form-check-input m-0" data-checkbox="" type="checkbox"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xxs rounded-circle me-2">
                                            <img alt="" src="./admin/assets/images/avatar/avatar2.webp"/>
                                        </div>
                                        باربد باباخانی
                                    </div>
                                </td>
                                <td>
                                    09010010012
                                </td>
                                <td>
                                    janedoe2@example.com
                                </td>
                                <td>
                                    نیمه روز اول
                                </td>
                                <td>
			 <span class="badge badge-lg bg-primary-subtle text-primary">
			  فعال
			 </span>
                                </td>
                                <td>
                                    <div class="btn-group float-end">
                                        <button aria-expanded="false" class="btn btn-subtle-primary btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-rr-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check p-0 w-auto d-inline-block mb-0 mb-n1">
                                        <input class="form-check-input m-0" data-checkbox="" type="checkbox"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xxs rounded-circle me-2">
                                            <img alt="" src="./admin/assets/images/avatar/avatar3.webp"/>
                                        </div>
                                        مهسا رهنما
                                    </div>
                                </td>
                                <td>
                                    09010010013
                                </td>
                                <td>
                                    testuser3@example.com
                                </td>
                                <td>
                                    4 روز
                                </td>
                                <td>
			 <span class="badge badge-lg bg-success-subtle text-success">
			  در انتظار
			 </span>
                                </td>
                                <td>
                                    <div class="btn-group float-end">
                                        <button aria-expanded="false" class="btn btn-subtle-primary btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-rr-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check p-0 w-auto d-inline-block mb-0 mb-n1">
                                        <input class="form-check-input m-0" data-checkbox="" type="checkbox"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xxs rounded-circle me-2">
                                            <img alt="" src="./admin/assets/images/avatar/avatar4.webp"/>
                                        </div>
                                        احسان رفیعی
                                    </div>
                                </td>
                                <td>
                                    09010010014
                                </td>
                                <td>
                                    randomuser4@example.com
                                </td>
                                <td>
                                    نیمه روز دوم
                                </td>
                                <td>
			 <span class="badge badge-lg bg-primary-subtle text-primary">
			  فعال
			 </span>
                                </td>
                                <td>
                                    <div class="btn-group float-end">
                                        <button aria-expanded="false" class="btn btn-subtle-primary btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-rr-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check p-0 w-auto d-inline-block mb-0 mb-n1">
                                        <input class="form-check-input m-0" data-checkbox="" type="checkbox"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xxs rounded-circle me-2">
                                            <img alt="" src="./admin/assets/images/avatar/avatar5.webp"/>
                                        </div>
                                        دانیال دهدشتی
                                    </div>
                                </td>
                                <td>
                                    09010010015
                                </td>
                                <td>
                                    demoaccount5@example.com
                                </td>
                                <td>
                                    مدیر فروش
                                </td>
                                <td>
			 <span class="badge badge-lg bg-success-subtle text-success">
			  در انتظار
			 </span>
                                </td>
                                <td>
                                    <div class="btn-group float-end">
                                        <button aria-expanded="false" class="btn btn-subtle-primary btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-rr-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check p-0 w-auto d-inline-block mb-0 mb-n1">
                                        <input class="form-check-input m-0" data-checkbox="" type="checkbox"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xxs rounded-circle me-2">
                                            <img alt="" src="./admin/assets/images/avatar/avatar1.webp"/>
                                        </div>
                                        باربد باباخانی
                                    </div>
                                </td>
                                <td>
                                    09010010016
                                </td>
                                <td>
                                    samplemail6@example.com
                                </td>
                                <td>
                                    مدیر فروش
                                </td>
                                <td>
			 <span class="badge badge-lg bg-success-subtle text-success">
			  در انتظار
			 </span>
                                </td>
                                <td>
                                    <div class="btn-group float-end">
                                        <button aria-expanded="false" class="btn btn-subtle-primary btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-rr-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check p-0 w-auto d-inline-block mb-0 mb-n1">
                                        <input class="form-check-input m-0" data-checkbox="" type="checkbox"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xxs rounded-circle me-2">
                                            <img alt="" src="./admin/assets/images/avatar/avatar2.webp"/>
                                        </div>
                                        باربد باباخانی
                                    </div>
                                </td>
                                <td>
                                    09010010012
                                </td>
                                <td>
                                    janedoe2@example.com
                                </td>
                                <td>
                                    نیمه روز اول
                                </td>
                                <td>
			 <span class="badge badge-lg bg-primary-subtle text-primary">
			  فعال
			 </span>
                                </td>
                                <td>
                                    <div class="btn-group float-end">
                                        <button aria-expanded="false" class="btn btn-subtle-primary btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-rr-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check p-0 w-auto d-inline-block mb-0 mb-n1">
                                        <input class="form-check-input m-0" data-checkbox="" type="checkbox"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xxs rounded-circle me-2">
                                            <img alt="" src="./admin/assets/images/avatar/avatar3.webp"/>
                                        </div>
                                        مهسا رهنما
                                    </div>
                                </td>
                                <td>
                                    09010010013
                                </td>
                                <td>
                                    testuser3@example.com
                                </td>
                                <td>
                                    4 روز
                                </td>
                                <td>
			 <span class="badge badge-lg bg-success-subtle text-success">
			  در انتظار
			 </span>
                                </td>
                                <td>
                                    <div class="btn-group float-end">
                                        <button aria-expanded="false" class="btn btn-subtle-primary btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-rr-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check p-0 w-auto d-inline-block mb-0 mb-n1">
                                        <input class="form-check-input m-0" data-checkbox="" type="checkbox"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xxs rounded-circle me-2">
                                            <img alt="" src="./admin/assets/images/avatar/avatar4.webp"/>
                                        </div>
                                        احسان رفیعی
                                    </div>
                                </td>
                                <td>
                                    09010010014
                                </td>
                                <td>
                                    randomuser4@example.com
                                </td>
                                <td>
                                    نیمه روز دوم
                                </td>
                                <td>
			 <span class="badge badge-lg bg-primary-subtle text-primary">
			  فعال
			 </span>
                                </td>
                                <td>
                                    <div class="btn-group float-end">
                                        <button aria-expanded="false" class="btn btn-subtle-primary btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-rr-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check p-0 w-auto d-inline-block mb-0 mb-n1">
                                        <input class="form-check-input m-0" data-checkbox="" type="checkbox"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xxs rounded-circle me-2">
                                            <img alt="" src="./admin/assets/images/avatar/avatar2.webp"/>
                                        </div>
                                        باربد باباخانی
                                    </div>
                                </td>
                                <td>
                                    09010010012
                                </td>
                                <td>
                                    janedoe2@example.com
                                </td>
                                <td>
                                    نیمه روز اول
                                </td>
                                <td>
			 <span class="badge badge-lg bg-primary-subtle text-primary">
			  فعال
			 </span>
                                </td>
                                <td>
                                    <div class="btn-group float-end">
                                        <button aria-expanded="false" class="btn btn-subtle-primary btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-rr-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check p-0 w-auto d-inline-block mb-0 mb-n1">
                                        <input class="form-check-input m-0" data-checkbox="" type="checkbox"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xxs rounded-circle me-2">
                                            <img alt="" src="./admin/assets/images/avatar/avatar3.webp"/>
                                        </div>
                                        مهسا رهنما
                                    </div>
                                </td>
                                <td>
                                    09010010013
                                </td>
                                <td>
                                    testuser3@example.com
                                </td>
                                <td>
                                    4 روز
                                </td>
                                <td>
			 <span class="badge badge-lg bg-success-subtle text-success">
			  در انتظار
			 </span>
                                </td>
                                <td>
                                    <div class="btn-group float-end">
                                        <button aria-expanded="false" class="btn btn-subtle-primary btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-rr-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                            <tr>
                                <td class="pe-0">
                                    <div class="form-check p-0 w-auto d-inline-block mb-0 mb-n1">
                                        <input class="form-check-input m-0" data-checkbox="" type="checkbox"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xxs rounded-circle me-2">
                                            <img alt="" src="./admin/assets/images/avatar/avatar4.webp"/>
                                        </div>
                                        احسان رفیعی
                                    </div>
                                </td>
                                <td>
                                    09010010014
                                </td>
                                <td>
                                    randomuser4@example.com
                                </td>
                                <td>
                                    نیمه روز دوم
                                </td>
                                <td>
			 <span class="badge badge-lg bg-primary-subtle text-primary">
			  فعال
			 </span>
                                </td>
                                <td>
                                    <div class="btn-group float-end">
                                        <button aria-expanded="false" class="btn btn-subtle-primary btn-sm btn-shadow btn-icon waves-effect dropdown-toggle" data-bs-toggle="dropdown" type="button">
                                            <i class="fi fi-rr-menu-dots">
                                            </i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
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
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between border-0 pb-0">
                        <h6 class="card-title mb-0">
                            تسک ها
                        </h6>
                        <div class="clearfix">
                            <a class="btn-link" href="javascript:void(0);">
                                مشاهده همه
                            </a>
                            <button class="btn btn-sm btn-light waves-effect ms-3" data-bs-target="#todoTaskModal" data-bs-toggle="modal" type="button">
                                <i class="fi fi-rr-plus text-2xs me-1">
                                </i>
                                وظیفه جدید
                            </button>
                        </div>
                    </div>
                    <div class="card-body pb-1 px-2 pt-3 overflow-auto" data-simplebar="" style="height: 385px;">
                        <ul class="list-group list-group-smooth list-group-unlined todo-nav" id="todoList">
                            <li class="list-group-item d-flex gap-2 align-items-center todo-item bg-opacity-05 mb-1 ps-3 pe-2 py-2">
		   <span class="sortable-handle">
			<svg fill="none" height="17" viewbox="0 0 16 17" width="16" xmlns="http://www.w3.org/2000/svg">
			 <path d="M11.9998 3.16667C12.7362 3.16667 13.3332 2.56971 13.3332 1.83333C13.3332 1.09695 12.7362 0.5 11.9998 0.5C11.2635 0.5 10.6665 1.09695 10.6665 1.83333C10.6665 2.56971 11.2635 3.16667 11.9998 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 9.26237C12.7362 9.26237 13.3332 8.66542 13.3332 7.92904C13.3332 7.19266 12.7362 6.5957 11.9998 6.5957C11.2635 6.5957 10.6665 7.19266 10.6665 7.92904C10.6665 8.66542 11.2635 9.26237 11.9998 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 15.3571C12.7362 15.3571 13.3332 14.7601 13.3332 14.0238C13.3332 13.2874 12.7362 12.6904 11.9998 12.6904C11.2635 12.6904 10.6665 13.2874 10.6665 14.0238C10.6665 14.7601 11.2635 15.3571 11.9998 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 3.16667C5.49818 3.16667 6.09513 2.56971 6.09513 1.83333C6.09513 1.09695 5.49818 0.5 4.7618 0.5C4.02542 0.5 3.42847 1.09695 3.42847 1.83333C3.42847 2.56971 4.02542 3.16667 4.7618 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 9.26237C5.49818 9.26237 6.09513 8.66542 6.09513 7.92904C6.09513 7.19266 5.49818 6.5957 4.7618 6.5957C4.02542 6.5957 3.42847 7.19266 3.42847 7.92904C3.42847 8.66542 4.02542 9.26237 4.7618 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 15.3571C5.49818 15.3571 6.09513 14.7601 6.09513 14.0238C6.09513 13.2874 5.49818 12.6904 4.7618 12.6904C4.02542 12.6904 3.42847 13.2874 3.42847 14.0238C3.42847 14.7601 4.02542 15.3571 4.7618 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			</svg>
		   </span>
                                <input class="form-check-input todo-checkbox check-dark" type="checkbox"/>
                                <span class="form-label mb-0">
			تهیه گزارش مالی ماهانه
		   </span>
                                <span class="todo-time text-body">
			04:25 بعد از ظهر
		   </span>
                                <button class="btn btn-action-gray rounded-circle btn-sm btn-icon waves-effect waves-light item-delete ms-auto" type="button">
                                    <i class="fi fi-rr-trash">
                                    </i>
                                </button>
                            </li>
                            <li class="list-group-item d-flex gap-2 align-items-center todo-item bg-opacity-05 mb-1 ps-3 pe-2 py-2">
		   <span class="sortable-handle">
			<svg fill="none" height="17" viewbox="0 0 16 17" width="16" xmlns="http://www.w3.org/2000/svg">
			 <path d="M11.9998 3.16667C12.7362 3.16667 13.3332 2.56971 13.3332 1.83333C13.3332 1.09695 12.7362 0.5 11.9998 0.5C11.2635 0.5 10.6665 1.09695 10.6665 1.83333C10.6665 2.56971 11.2635 3.16667 11.9998 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 9.26237C12.7362 9.26237 13.3332 8.66542 13.3332 7.92904C13.3332 7.19266 12.7362 6.5957 11.9998 6.5957C11.2635 6.5957 10.6665 7.19266 10.6665 7.92904C10.6665 8.66542 11.2635 9.26237 11.9998 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 15.3571C12.7362 15.3571 13.3332 14.7601 13.3332 14.0238C13.3332 13.2874 12.7362 12.6904 11.9998 12.6904C11.2635 12.6904 10.6665 13.2874 10.6665 14.0238C10.6665 14.7601 11.2635 15.3571 11.9998 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 3.16667C5.49818 3.16667 6.09513 2.56971 6.09513 1.83333C6.09513 1.09695 5.49818 0.5 4.7618 0.5C4.02542 0.5 3.42847 1.09695 3.42847 1.83333C3.42847 2.56971 4.02542 3.16667 4.7618 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 9.26237C5.49818 9.26237 6.09513 8.66542 6.09513 7.92904C6.09513 7.19266 5.49818 6.5957 4.7618 6.5957C4.02542 6.5957 3.42847 7.19266 3.42847 7.92904C3.42847 8.66542 4.02542 9.26237 4.7618 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 15.3571C5.49818 15.3571 6.09513 14.7601 6.09513 14.0238C6.09513 13.2874 5.49818 12.6904 4.7618 12.6904C4.02542 12.6904 3.42847 13.2874 3.42847 14.0238C3.42847 14.7601 4.02542 15.3571 4.7618 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			</svg>
		   </span>
                                <input checked="" class="form-check-input todo-checkbox check-dark" type="checkbox"/>
                                <span class="form-label mb-0">
			استراتژی بازاریابی جدید را توسعه دهید
		   </span>
                                <span class="todo-time text-body">
			04:25 بعد از ظهر
		   </span>
                                <button class="btn btn-action-gray rounded-circle btn-sm btn-icon waves-effect waves-light item-delete ms-auto" type="button">
                                    <i class="fi fi-rr-trash">
                                    </i>
                                </button>
                            </li>
                            <li class="list-group-item d-flex gap-2 align-items-center todo-item bg-opacity-05 mb-1 ps-3 pe-2 py-2">
		   <span class="sortable-handle">
			<svg fill="none" height="17" viewbox="0 0 16 17" width="16" xmlns="http://www.w3.org/2000/svg">
			 <path d="M11.9998 3.16667C12.7362 3.16667 13.3332 2.56971 13.3332 1.83333C13.3332 1.09695 12.7362 0.5 11.9998 0.5C11.2635 0.5 10.6665 1.09695 10.6665 1.83333C10.6665 2.56971 11.2635 3.16667 11.9998 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 9.26237C12.7362 9.26237 13.3332 8.66542 13.3332 7.92904C13.3332 7.19266 12.7362 6.5957 11.9998 6.5957C11.2635 6.5957 10.6665 7.19266 10.6665 7.92904C10.6665 8.66542 11.2635 9.26237 11.9998 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 15.3571C12.7362 15.3571 13.3332 14.7601 13.3332 14.0238C13.3332 13.2874 12.7362 12.6904 11.9998 12.6904C11.2635 12.6904 10.6665 13.2874 10.6665 14.0238C10.6665 14.7601 11.2635 15.3571 11.9998 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 3.16667C5.49818 3.16667 6.09513 2.56971 6.09513 1.83333C6.09513 1.09695 5.49818 0.5 4.7618 0.5C4.02542 0.5 3.42847 1.09695 3.42847 1.83333C3.42847 2.56971 4.02542 3.16667 4.7618 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 9.26237C5.49818 9.26237 6.09513 8.66542 6.09513 7.92904C6.09513 7.19266 5.49818 6.5957 4.7618 6.5957C4.02542 6.5957 3.42847 7.19266 3.42847 7.92904C3.42847 8.66542 4.02542 9.26237 4.7618 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 15.3571C5.49818 15.3571 6.09513 14.7601 6.09513 14.0238C6.09513 13.2874 5.49818 12.6904 4.7618 12.6904C4.02542 12.6904 3.42847 13.2874 3.42847 14.0238C3.42847 14.7601 4.02542 15.3571 4.7618 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			</svg>
		   </span>
                                <input class="form-check-input todo-checkbox check-dark" type="checkbox"/>
                                <span class="form-label mb-0">
			به ایمیل های مشتریان پاسخ دهید
		   </span>
                                <span class="todo-time text-body">
			04:25 بعد از ظهر
		   </span>
                                <button class="btn btn-action-gray rounded-circle btn-sm btn-icon waves-effect waves-light item-delete ms-auto" type="button">
                                    <i class="fi fi-rr-trash">
                                    </i>
                                </button>
                            </li>
                            <li class="list-group-item d-flex gap-2 align-items-center todo-item bg-opacity-05 mb-1 ps-3 pe-2 py-2">
		   <span class="sortable-handle">
			<svg fill="none" height="17" viewbox="0 0 16 17" width="16" xmlns="http://www.w3.org/2000/svg">
			 <path d="M11.9998 3.16667C12.7362 3.16667 13.3332 2.56971 13.3332 1.83333C13.3332 1.09695 12.7362 0.5 11.9998 0.5C11.2635 0.5 10.6665 1.09695 10.6665 1.83333C10.6665 2.56971 11.2635 3.16667 11.9998 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 9.26237C12.7362 9.26237 13.3332 8.66542 13.3332 7.92904C13.3332 7.19266 12.7362 6.5957 11.9998 6.5957C11.2635 6.5957 10.6665 7.19266 10.6665 7.92904C10.6665 8.66542 11.2635 9.26237 11.9998 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 15.3571C12.7362 15.3571 13.3332 14.7601 13.3332 14.0238C13.3332 13.2874 12.7362 12.6904 11.9998 12.6904C11.2635 12.6904 10.6665 13.2874 10.6665 14.0238C10.6665 14.7601 11.2635 15.3571 11.9998 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 3.16667C5.49818 3.16667 6.09513 2.56971 6.09513 1.83333C6.09513 1.09695 5.49818 0.5 4.7618 0.5C4.02542 0.5 3.42847 1.09695 3.42847 1.83333C3.42847 2.56971 4.02542 3.16667 4.7618 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 9.26237C5.49818 9.26237 6.09513 8.66542 6.09513 7.92904C6.09513 7.19266 5.49818 6.5957 4.7618 6.5957C4.02542 6.5957 3.42847 7.19266 3.42847 7.92904C3.42847 8.66542 4.02542 9.26237 4.7618 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 15.3571C5.49818 15.3571 6.09513 14.7601 6.09513 14.0238C6.09513 13.2874 5.49818 12.6904 4.7618 12.6904C4.02542 12.6904 3.42847 13.2874 3.42847 14.0238C3.42847 14.7601 4.02542 15.3571 4.7618 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			</svg>
		   </span>
                                <input class="form-check-input todo-checkbox check-dark" type="checkbox"/>
                                <span class="form-label mb-0">
			محتوای وب سایت را به روز کنید
		   </span>
                                <span class="todo-time text-body">
			04:25 بعد از ظهر
		   </span>
                                <button class="btn btn-action-gray rounded-circle btn-sm btn-icon waves-effect waves-light item-delete ms-auto" type="button">
                                    <i class="fi fi-rr-trash">
                                    </i>
                                </button>
                            </li>
                            <li class="list-group-item d-flex gap-2 align-items-center todo-item bg-opacity-05 mb-1 ps-3 pe-2 py-2">
		   <span class="sortable-handle">
			<svg fill="none" height="17" viewbox="0 0 16 17" width="16" xmlns="http://www.w3.org/2000/svg">
			 <path d="M11.9998 3.16667C12.7362 3.16667 13.3332 2.56971 13.3332 1.83333C13.3332 1.09695 12.7362 0.5 11.9998 0.5C11.2635 0.5 10.6665 1.09695 10.6665 1.83333C10.6665 2.56971 11.2635 3.16667 11.9998 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 9.26237C12.7362 9.26237 13.3332 8.66542 13.3332 7.92904C13.3332 7.19266 12.7362 6.5957 11.9998 6.5957C11.2635 6.5957 10.6665 7.19266 10.6665 7.92904C10.6665 8.66542 11.2635 9.26237 11.9998 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 15.3571C12.7362 15.3571 13.3332 14.7601 13.3332 14.0238C13.3332 13.2874 12.7362 12.6904 11.9998 12.6904C11.2635 12.6904 10.6665 13.2874 10.6665 14.0238C10.6665 14.7601 11.2635 15.3571 11.9998 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 3.16667C5.49818 3.16667 6.09513 2.56971 6.09513 1.83333C6.09513 1.09695 5.49818 0.5 4.7618 0.5C4.02542 0.5 3.42847 1.09695 3.42847 1.83333C3.42847 2.56971 4.02542 3.16667 4.7618 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 9.26237C5.49818 9.26237 6.09513 8.66542 6.09513 7.92904C6.09513 7.19266 5.49818 6.5957 4.7618 6.5957C4.02542 6.5957 3.42847 7.19266 3.42847 7.92904C3.42847 8.66542 4.02542 9.26237 4.7618 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 15.3571C5.49818 15.3571 6.09513 14.7601 6.09513 14.0238C6.09513 13.2874 5.49818 12.6904 4.7618 12.6904C4.02542 12.6904 3.42847 13.2874 3.42847 14.0238C3.42847 14.7601 4.02542 15.3571 4.7618 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			</svg>
		   </span>
                                <input checked="" class="form-check-input todo-checkbox check-primary" type="checkbox"/>
                                <span class="form-label mb-0">
			بررسی عملکرد کارکنان
		   </span>
                                <span class="todo-time text-body text-body">
			04:25 بعد از ظهر
		   </span>
                                <button class="btn btn-action-gray rounded-circle btn-sm btn-icon waves-effect waves-light item-delete ms-auto" type="button">
                                    <i class="fi fi-rr-trash">
                                    </i>
                                </button>
                            </li>
                            <li class="list-group-item d-flex gap-2 align-items-center todo-item bg-opacity-05 mb-1 ps-3 pe-2 py-2">
		   <span class="sortable-handle">
			<svg fill="none" height="17" viewbox="0 0 16 17" width="16" xmlns="http://www.w3.org/2000/svg">
			 <path d="M11.9998 3.16667C12.7362 3.16667 13.3332 2.56971 13.3332 1.83333C13.3332 1.09695 12.7362 0.5 11.9998 0.5C11.2635 0.5 10.6665 1.09695 10.6665 1.83333C10.6665 2.56971 11.2635 3.16667 11.9998 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 9.26237C12.7362 9.26237 13.3332 8.66542 13.3332 7.92904C13.3332 7.19266 12.7362 6.5957 11.9998 6.5957C11.2635 6.5957 10.6665 7.19266 10.6665 7.92904C10.6665 8.66542 11.2635 9.26237 11.9998 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 15.3571C12.7362 15.3571 13.3332 14.7601 13.3332 14.0238C13.3332 13.2874 12.7362 12.6904 11.9998 12.6904C11.2635 12.6904 10.6665 13.2874 10.6665 14.0238C10.6665 14.7601 11.2635 15.3571 11.9998 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 3.16667C5.49818 3.16667 6.09513 2.56971 6.09513 1.83333C6.09513 1.09695 5.49818 0.5 4.7618 0.5C4.02542 0.5 3.42847 1.09695 3.42847 1.83333C3.42847 2.56971 4.02542 3.16667 4.7618 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 9.26237C5.49818 9.26237 6.09513 8.66542 6.09513 7.92904C6.09513 7.19266 5.49818 6.5957 4.7618 6.5957C4.02542 6.5957 3.42847 7.19266 3.42847 7.92904C3.42847 8.66542 4.02542 9.26237 4.7618 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 15.3571C5.49818 15.3571 6.09513 14.7601 6.09513 14.0238C6.09513 13.2874 5.49818 12.6904 4.7618 12.6904C4.02542 12.6904 3.42847 13.2874 3.42847 14.0238C3.42847 14.7601 4.02542 15.3571 4.7618 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			</svg>
		   </span>
                                <input checked="" class="form-check-input todo-checkbox check-success" type="checkbox"/>
                                <span class="form-label mb-0">
			به ایمیل های مشتریان پاسخ دهید
		   </span>
                                <span class="todo-time text-body">
			04:25 بعد از ظهر
		   </span>
                                <button class="btn btn-action-gray rounded-circle btn-sm btn-icon waves-effect waves-light item-delete ms-auto" type="button">
                                    <i class="fi fi-rr-trash">
                                    </i>
                                </button>
                            </li>
                            <li class="list-group-item d-flex gap-2 align-items-center todo-item bg-opacity-05 mb-1 ps-3 pe-2 py-2">
		   <span class="sortable-handle">
			<svg fill="none" height="17" viewbox="0 0 16 17" width="16" xmlns="http://www.w3.org/2000/svg">
			 <path d="M11.9998 3.16667C12.7362 3.16667 13.3332 2.56971 13.3332 1.83333C13.3332 1.09695 12.7362 0.5 11.9998 0.5C11.2635 0.5 10.6665 1.09695 10.6665 1.83333C10.6665 2.56971 11.2635 3.16667 11.9998 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 9.26237C12.7362 9.26237 13.3332 8.66542 13.3332 7.92904C13.3332 7.19266 12.7362 6.5957 11.9998 6.5957C11.2635 6.5957 10.6665 7.19266 10.6665 7.92904C10.6665 8.66542 11.2635 9.26237 11.9998 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M11.9998 15.3571C12.7362 15.3571 13.3332 14.7601 13.3332 14.0238C13.3332 13.2874 12.7362 12.6904 11.9998 12.6904C11.2635 12.6904 10.6665 13.2874 10.6665 14.0238C10.6665 14.7601 11.2635 15.3571 11.9998 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 3.16667C5.49818 3.16667 6.09513 2.56971 6.09513 1.83333C6.09513 1.09695 5.49818 0.5 4.7618 0.5C4.02542 0.5 3.42847 1.09695 3.42847 1.83333C3.42847 2.56971 4.02542 3.16667 4.7618 3.16667Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 9.26237C5.49818 9.26237 6.09513 8.66542 6.09513 7.92904C6.09513 7.19266 5.49818 6.5957 4.7618 6.5957C4.02542 6.5957 3.42847 7.19266 3.42847 7.92904C3.42847 8.66542 4.02542 9.26237 4.7618 9.26237Z" fill="var(--bs-body-color)">
			 </path>
			 <path d="M4.7618 15.3571C5.49818 15.3571 6.09513 14.7601 6.09513 14.0238C6.09513 13.2874 5.49818 12.6904 4.7618 12.6904C4.02542 12.6904 3.42847 13.2874 3.42847 14.0238C3.42847 14.7601 4.02542 15.3571 4.7618 15.3571Z" fill="var(--bs-body-color)">
			 </path>
			</svg>
		   </span>
                                <input checked="" class="form-check-input todo-checkbox check-warning" type="checkbox"/>
                                <span class="form-label mb-0">
			به ایمیل های مشتریان پاسخ دهید
		   </span>
                                <span class="todo-time text-body">
			04:25 بعد از ظهر
		   </span>
                                <button class="btn btn-action-gray rounded-circle btn-sm btn-icon waves-effect waves-light item-delete ms-auto" type="button">
                                    <i class="fi fi-rr-trash">
                                    </i>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div aria-hidden="true" class="modal fade" id="todoTaskModal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header py-3">
                                    <h5 class="modal-title">
                                        کار جدید اضافه کنید
                                    </h5>
                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="taskForm">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <input class="form-control" id="todoInput" placeholder="یک کار جدید اضافه کنید" type="text"/>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <select class="form-select" id="todoPriority">
                                                    <option value="primary">
                                                        پیش فرض
                                                    </option>
                                                    <option value="success">
                                                        تکمیل شد
                                                    </option>
                                                    <option value="danger">
                                                        اولویت بالا
                                                    </option>
                                                    <option value="info">
                                                        اطلاعات
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-12 text-end">
                                                <button class="btn btn-light waves-effect waves-light me-2" data-bs-dismiss="modal" type="button">
                                                    بستن
                                                </button>
                                                <button class="btn btn-primary waves-effect waves-light" data-bs-dismiss="modal" id="todoAdd" type="button">
                                                    اضافه کردن تسک
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
