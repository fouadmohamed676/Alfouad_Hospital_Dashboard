
  @if (session('error'))
  <div class="col-lg-12">
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">نجاح</h4>
        <p class="mb-0">
            {{ session('error') }}
        </p>
    </div>
  </div>
    @endif
        @if (session('fail'))
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">خطاْ</h4>
        <p class="mb-0">
            {{ session('fail') }}
        </p>
    </div>
        @endif
    @if (session('status'))
  <div class="col-lg-12">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">نجاح</h4>
            <p class="mb-0">
                <h2>
                <p> {{ session('status') }}</p>
                </h2>
            </p>
        </div>
    </div>
    @endif



