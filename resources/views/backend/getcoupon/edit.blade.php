@extends('layouts.appbackend')

@section('admin_section')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                     <h2>Edit GetCoupon <span class="badge badge-primary">{{ $getcoupon_info->fullname }} </span></h2>
                  </div>
                  <div class="card-body">
        
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('getcoupon.index') }}" class="btn btn-info">GetCoupon View</a></li>
                      </ol>
                    </nav>
        
                   <form  method="post" action = "{{ route('getcoupon.update' , $getcoupon_info->id) }}">
                      @csrf
                      @method('PATCH')
        
        
                      <div class="form-group">
                        <label> Full Name</label>
                        <input type="text" class="form-control" placeholder=" Title" name = "fullname" value = "{{ $getcoupon_info->fullname }}">
                        @error ('fullname')
                          <span class = "text-danger">{{ $message }}</span>
                        @enderror
                      </div>
        
                      <div class="form-group">
                        <label> Email </label>
                        <input type="text" class="form-control" placeholder=" Email" name = "email" value = "{{ $getcoupon_info->email }}">
                        @error ('email')
                          <span class = "text-danger">{{ $message }}</span>
                        @enderror
                      </div>
        
                      <div class="form-group">
                        <label> City</label>
                        <input type="text" class="form-control" placeholder=" City" name = "city" value = "{{ $getcoupon_info->city }}">
                        @error ('city')
                          <span class = "text-danger">{{ $message }}</span>
                        @enderror
                      </div>
        
        
                      <div class="form-group">
                        <label>Hotel Name</label>
                        <select class="form-control" name="hotelname">
                            <option value="{{ $getcoupon_info->hotelname }}">{{ $getcoupon_info->hotelname }}</option>
        
                            <option value="two">Two</option>
                            <option value="three">Three</option>
                            <option value="four">Four</option>
                        </select>
                      </div>
        
                 
                      <button type="submit" class="btn btn-primary">Update Getcoupon </button>
                    </form>
        
        
        
        
                  </div>
             </div>
            </div>
        
          </div>
        
        
    </div>



@endsection