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
                            تراکنش ها
                        </li>
                    </ol>
                </nav>
            </div>




                <livewire:transactions.create-transaction />



        </div>
    </main>
@endsection


