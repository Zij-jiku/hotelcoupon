@extends('layouts.appbackend')

@section('getcoupon')
 active
@endsection

@section('admin_section')

<div class="row">
    <div class="col-md-12">
         <div class="card">
             <div class="card-header">
                <h2>GetCoupon View</h2>
                <hr>

                <h6>Total : {{ $getcoupons_totals }}</h6>
             </div>
             <div class="card-body">
               

                @if(session()->has('delete_status'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{ session()->get('delete_status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                 @endif

                @if(session()->has('udpate_status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session()->get('udpate_status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

               
                   <table class="table text-center" id = "data_tables_3">
                     <thead>
                       <tr>
                         <th>SL No.</th>
                         <th>Full Name</th>
                         <th>Email</th>
                         <th>City</th>
                         <th>Hotel Name</th>
                         <th>Action</th>
                       </tr>
                     </thead>

                     <tbody>
                       <tbody>
                           @forelse($getcoupons_all as $getcoupon)
                           <tr>
                             <td>{{ $loop->index + 1 }}</td>
                             <td>{{ Str::limit($getcoupon->fullname , 15) }}</td>
                             <td>
                                 <span class="badge badge-success">{{ $getcoupon->email }}</span>
                             </td>
                             <td>{{ $getcoupon->city }}</td>
                             <td>{{ $getcoupon->hotelname }}</td>

                             <td>
                               <div class="btn-group" role="group" aria-label="Basic example">
                                 <a href = "{{ route('getcoupon.edit',$getcoupon->id) }}" type="button" class="btn btn-info">Edit</a> ||
                                 <form action="{{ route('getcoupon.destroy' , $getcoupon->id) }}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" class="btn btn-danger">Delete</button>
                                 </form>
                               </div>
                             </td>
                           </tr>
                           @empty
                             <tr>
                               <td class = "text-danger text-center" colspan="50">No Data Available</td>
                             </tr>
                         @endforelse

                         </tbody>
                     </tbody>
                   </table>

             </div>
         </div>
    </div>
 </div>
@endsection