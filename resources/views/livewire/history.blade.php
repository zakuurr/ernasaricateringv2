<div>
    <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="row">
                <div class="col-md-12">
                    @if(session()->has('msg'))
                    <div class="alert alert-danger">
                        {{session('msg')}}
                    </div>
                    @endif
                </div>
            </div>

          </div>
        </div>
      </div>
</div>
