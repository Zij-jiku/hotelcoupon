@extends('layouts.appbackend')

@section('admin_section')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                     <h2>Edit Contact : <span class="badge badge-primary">{{ $contact_info->fullname }} </span> </h2>
                  </div>
                  <div class="card-body">
        
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('contact.index') }}" class="btn btn-info">Contact View</a></li>
                      </ol>
                    </nav>
        
                   <form  method="post" action = "{{ route('contact.update' , $contact_info->id) }}">
                      @csrf
                      @method('PATCH')
        
        
                      <div class="form-group">
                        <label> Full Name</label>
                        <input type="text" class="form-control" placeholder=" Title" name = "fullname" value = "{{ $contact_info->fullname }}">
                        @error ('fullname')
                          <span class = "text-danger">{{ $message }}</span>
                        @enderror
                      </div>
        
                      <div class="form-group">
                        <label> Email </label>
                        <input type="text" class="form-control" placeholder=" Email" name = "email" value = "{{ $contact_info->email }}">
                        @error ('email')
                          <span class = "text-danger">{{ $message }}</span>
                        @enderror
                      </div>
        
                      <div class="form-group">
                        <label> Messages</label>
                        <textarea type="text" class="form-control" name="messages" id="" rows="4">{{ $contact_info->messages }}</textarea>
                        @error ('messages')
                          <span class = "text-danger">{{ $message }}</span>
                        @enderror
                      </div>
        
        
                     
        
                 
                      <button type="submit" class="btn btn-primary">Update contact </button>
                    </form>

                  </div>
             </div>
            </div>
        
          </div>
        
        
    </div>



@endsection