@extends('Admin.backend_master')
@section('title') Cupon @endsection
@section('order') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
  <!--======== Page Breadcrumb=========-->
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="{{url('/admin/home')}}">Dashboard</a>
    <span class="breadcrumb-item active">Category</span>
  </nav>
  <div class="sl-pagebody">
    <div class="row">
      <div class="col-md-10 m-auto">
        <div class="card">
          <!--======== Card header =========-->
          <div class="card-header text-center bg-dark">
           <strong class="text-danger h3">All Orders</strong>
         </div>
         <div class="card-body">
          <!--======== If session hs message =========-->
          @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>{{Session::get('message')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           @endif
            <div class="table-wrapper">
              <!--======== Category DataTable =========-->
              <table id="datatable1" class="table display responsive nowrap table-vordered table-hover">
                <thead>
                  <tr>
                    <th class="text-center">S.No</th>
                    <th class="text-center">Invoice No</th>
                    <th class="text-center">Payment Type</th>
                    <th class="text-center">Subtotal</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!--======== Show All Category One by One =========-->
                  @foreach ($orders as $key=> $order)
                  <tr class="text-center">
                    <td>{{$key + 1}}</td>
                    <td>#{{$order->invoice_no}}</td>
                    <td>{{$order->payment_type}}</td>
                    <td>{{$order->subtotal}}</td>
                    <td>{{$order->total}}</td>
                    <td>
                    <a href="{{url('/admin/order/view/'.$order->id)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i>&nbsp;&nbsp;view</a>
                    </td>
                  </tr>
                  @endforeach
  
                </tbody>
              </table>
            </div><!-- table-wrapper -->
         </div>
        </div><!-- card -->
      </div>
    </div>
  
  </div>
</div>
@endsection