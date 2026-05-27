<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <h6 class="card-title">
                حساب جدید
            </h6>
        </div>



        <div class="card-body">
            <form>

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
                <br>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"  for="inputEmail3">
                        نام حساب
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" wire:model="name" id="inputEmail3" type="text">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"  for="inputPassword3">
                        مقدار
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" wire:model="balance" id="inputPassword3" type="text">
                    </div>
                </div>

                <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="inputState2">
                            نوع حساب
                        </label>
                        <div class="col-sm-10">
                            <select class="form-select" id="inputState2" wire:model="type">
                                <option selected="selected" value="cash">
                                    نقدی
                                </option>
                                <option value="bank">
                                    حساب بانکی
                                </option>
                                <option value="wallet">
                                    کیف پول
                                </option>
                            </select>
                        </div>
                </div>

                <button wire:click="save" class="btn btn-primary waves-effect waves-light" type="button">
                    ذخیره
                </button>
            </form>
        </div>
    </div>
</div>
