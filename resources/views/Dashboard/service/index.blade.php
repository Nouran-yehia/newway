
@extends('Dashboard.index')


@section('content')
<br>

  <!-- Start Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper pt-3"> -->
    <!-- Main content -->
    <!-- <section class="content"> -->
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="border-bottom p-3 d-flex align-items-center justify-content-between">
                    
                    <a href="{{url('city/create')}}" class="btn btn-primary">Add New City</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>city_name</th>
                        <th>country_name</th>
                      
                        
                    </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($cities as $city)
                        <tr>
                            <td>{{$city->id}}</td>
                            <td>
                              {{$city->name}}
                          </td>
                            <td>
                                {{$city->country->name}}
                            </td>
                            
                            
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
                </div>
              </div>
            </div>
        </div>
      </div>
      

@endsection

@section('js')

<script src="{{ asset('dashboard/plugins/sweetalert2/sweetalert2.min.js') }}" ></script>



@endsection
