@extends('layouts.appbackend')

@section('contact')
 active
@endsection

@section('admin_section')
@notifyCss

<div class="row">
    <div class="col-md-12">
         <div class="card">
             <div class="card-header">
                <h2>Contact View</h2>
                <hr>
                <h6>Total : {{ $contacts_totals }}</h6>
             </div>
             <div class="card-body">

                <x:notify-messages />
                @notifyJs
               

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
                         <th>Messages</th>
                         <th>Action</th>
                       </tr>
                     </thead>

                     <tbody>
                       <tbody>
                           @forelse($contacts_all as $contact)
                           <tr>
                             <td>{{ $loop->index + 1 }}</td>
                             <td>{{ Str::limit($contact->fullname , 15) }}</td>
                             <td>
                                 <span class="badge badge-success">{{ $contact->email }}</span>
                             </td>

                             <td>{{ $contact->messages }}</td>

                             <td>
                               <div class="btn-group" role="group" aria-label="Basic example">
                                 <a href = "{{ route('contact.edit',$contact->id) }}" type="button" class="btn btn-info">Edit</a> ||
                                 <form action="{{ route('contact.destroy' , $contact->id) }}" method="post">
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