
@extends('admin.authentication.main')

@section('title','ثبت نام در حسابداری نورا - noora');


@section('content')
  <div class="page-layout">
   <div class="auth-wrapper min-vh-100 px-2">
	<div class="row g-0 min-vh-100">
	 <div class="col-xl-5 col-lg-6 ms-auto px-sm-4 align-self-center py-4 d-none d-lg-block">
	  <img alt="" class="img-fluid" src="./admin/assets/images/auth/vector2.svg"/>
	 </div>
	 <div class="col-xl-5 col-lg-6 ms-auto px-sm-4 align-self-center py-4">
	  <div class="card card-body p-4 p-sm-5 maxw-450px m-auto rounded-4">
	   <div class="mb-4 text-center">
		<a aria-label="NexLink logo" href="./index.html">
		 <img alt="NexLink logo" class="visible-light" src="./admin/assets/images/logo.svg"/>
		</a>
	   </div>
	   <div class="text-center mb-4">
		<h5 class="mb-1">
		 به حسابداری Noora خوش آمدید
		</h5>
	   </div>

	   <form action="{{route('checkcode')}}" method="post">
           {{csrf_field()}}


		<div class="mb-4">
		 <label class="form-label" for="registerEmail">
		  کد دریافتی را وارد کنید
		 </label>
		 <input class="form-control check-code-input" id="registerEmail" required
                placeholder="" type="number" maxlength="5" name="code"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
            @error('mobile')
            <div class="text-danger">{{ $message }}</div>
            @enderror

			@if(session('error'))
            <div class="text-danger">{{session('error')}}</div>
            @enderror
		</div>
		<div class="mb-4">

		 <div class="password-wrapper">

             @error('code')
             <div class="text-danger">{{ $message }}</div>
             @enderror

		 </div>
		</div>
		<div class="mb-4">
		 <div class=" mb-0">
		  <label class="form-check-label" for="termsConditions">
		   برای تایید شماره تلفن ، کدی برایتان ارسال کردیم کد را وارد نمایید.
		  </label>
		 </div>
		</div>
		<div class="mb-3">
		 <button class="btn btn-primary waves-effect waves-light w-100" type="submit" value="Submit">
		  تایید
		 </button>
		</div>
		<p class="mb-5 text-center">
		 کد  را دریافت نکردید؟
		 <a href="./demo/authentication/login.html">
		  ارسال مجدد
		 </a>
		</p>

	   </form>
	  </div>
	 </div>
	</div>
   </div>
  </div>

<script>
document.querySelectorAll('[required]').forEach(function(input) {
  input.addEventListener("invalid", function () {
    this.setCustomValidity("تکمیل این گزینه الزامیست !");
  });

  input.addEventListener("input", function () {
    this.setCustomValidity("");
  });
});
</script>

@endsection
