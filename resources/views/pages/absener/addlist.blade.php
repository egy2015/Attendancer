
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
                <form action="{{ url('/list/'.$take.'/save') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="audience" class="form-control-label"></label>
                        <input type="text" name="audience" placeholder="Your audience" value="{{ old('audience') }}"
                            class="form-control @error('audience') is-invalid @enderror" />
                        @error('audience') <div class="text-muted">This Data Required</div> @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="idUnique" class="form-control-label"></label>
                        <input type="text" name="idUnique" placeholder="Kind of Accassion / Subject"
                            value="{{ old('idUnique') }}" class="form-control @error('idUnique') is-invalid @enderror" />
                        @error('idUnique') <div class="text-muted">This Data Required</div> @enderror
                    </div>
        
                    <div class="form-group">
                        <label for="AbsenerID" class="form-control-label"></label>
                        <input type="text" name="AbsenerID" placeholder="Class/Classification"
                            value="{{$take}}" class="form-control @error('AbsenerID') is-invalid @enderror" readonly/>
                        @error('AbsenerID') <div class="text-muted">This Data Required</div> @enderror
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