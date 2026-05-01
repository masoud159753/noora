
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
		<p>
		 برای ایجاد ادمین امن خود ثبت نام کنید.
		</p>
	   </div>
	   <form action="{{route('register')}}" method="post">
           {{csrf_field()}}

		<div class="mb-4">
		 <label class="form-label" for="registerName">
		  نام
		 </label>
		 <input class="form-control" id="registerName" placeholder="نام کامل" type="text" name="name" >
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
		</div>
		<div class="mb-4">
		 <label class="form-label" for="registerEmail">
		  شماره موبایل
		 </label>
		 <input class="form-control" id="registerEmail" placeholder="0912......" type="number" name="mobile">
            @error('mobile')
            <div class="text-danger">{{ $message }}</div>
            @enderror
		</div>
		<div class="mb-4">
		 <label class="form-label" for="registerPassword">
		  رمز عبور
		 </label>
		 <div class="password-wrapper">
		  <input class="form-control password-input" id="registerPassword" placeholder="********" type="password" name="password">

             @error('password')
             <div class="text-danger">{{ $message }}</div>
             @enderror

           <button aria-label="Show password" aria-pressed="false" class="toggle-password" id="togglePassword" title="Show password" type="button">
		   <i aria-hidden="true" class="close fi fi-rr-eye-crossed">
		   </i>
		   <i aria-hidden="true" class="open fi fi-rr-eye">
		   </i>
		  </button>
		 </div>
		</div>
		<div class="mb-4">
		 <div class="form-check mb-0">
		  <input class="form-check-input" required id="termsConditions" name="terms" type="checkbox"/>
		  <label class="form-check-label" for="termsConditions">
		   موافقم با
		   <a href="javascript:void(0);">
		قوانین و مقررات استفاده از نرم افزار
		   </a>
		  </label>
		 </div>
		</div>
		<div class="mb-3">
		 <button class="btn btn-primary waves-effect waves-light w-100" type="submit" value="Submit">
		  ثبت نام کنید
		 </button>
		</div>
		<p class="mb-5 text-center">
		 حسابی دارید؟
		 <a href="./demo/authentication/login.html">
		  اینجا لاگین
		 </a>
		</p>
		<div class="border-bottom position-relative my-4 text-center">
		 <span class="px-3 position-absolute translate-middle top-50 start-50 bg-body">
		  یا ادامه با
		 </span>
		</div>
		<button class="btn btn-light waves-effect waves-light w-100" type="submit">
		 <img alt="" class="me-1" src="./admin/assets/images/icons/google.svg"/>
		 با گوگل لاگین
		</button>
	   </form>
	  </div>
	 </div>
	</div>
   </div>
  </div>

<script>
const input = document.getElementById("termsConditions");

input.addEventListener("invalid", function () {
  input.setCustomValidity("قوانین و مقررات را تایید نمایید");
});

input.addEventListener("input", function () {
  input.setCustomValidity(""); // reset message when user types
});
</script>
@endsection
