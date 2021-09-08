
@extends('layout.template')
@section('content')     

    <div class=”row align-items-center”>
        <div class=”col-6”>
           <div class=”card card-block”>
            <div class="mt-5 d-flex justify-content-center text-center"><h1>Fill Data Below</h1></div>
           </div>
        </div>
        <div class="col-6">
           <div class="card card-inverse card-danger">
            <div class="card-body ">
                <form action="{{ route('showQR') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-control-label"></label>
                        <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror" />
                        @error('name') <div class="text-muted">This Data Required</div> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="att" class="form-control-label"></label>
                        <input type="text" name="att" placeholder="Kind of Accassion / Subject"
                            value="{{ old('att') }}" class="form-control @error('att') is-invalid @enderror" />
                        @error('att') <div class="text-muted">This Data Required</div> @enderror
                    </div>
        
                    <div class="form-group">
                        <label for="class" class="form-control-label"></label>
                        <input type="text" name="class" placeholder="Class/Classification"
                            value="{{ old('class') }}" class="form-control @error('class') is-invalid @enderror" />
                        @error('class') <div class="text-muted">This Data Required</div> @enderror
                    </div>
        
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">
                            Confirm
                        </button>
                    </div>
                </form>
            </div>
           </div>
        </div>
      </div>


@endsection