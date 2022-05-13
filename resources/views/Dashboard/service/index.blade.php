
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
                    
                    <a href="{{url('service/create')}}" class="btn btn-primary">Add New Service</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>service name</th>
                        <th>parent name</th>
                        <th>Actions</th>
                      
                        
                    </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($services as $service)
                        <tr id="this-{{$service->id}}">
                            <td>{{$service->id}}</td>
                            <td>
                              {{$service->name}}
                          </td>
                          <td></td>
                          <td>
                          <a href="{{ route('service.edit', $service->id) }}" class="btn btn-xs btn-info">Edit</a>
                          <button class="btn btn-danger btn-sm" onclick="deleteService('{{$service->id}}')">
                              <i class="fas fa-trash">
                              </i>
                          </button>
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
      


<script>
   function deleteService(id){
        swal({
          title: `Are you sure you want to delete this item?`,
          text: "If you delete this, it will be gone forever.",         
      })
      .then((willDelete) => {
        console.log(willDelete);

      $.ajax({
       type: 'DELETE',
       url: "{{route('service.index')}}"+ '/' + id,
       data:{
        "_token": "{{ csrf_token() }}"
       },
       dataType: 'JSON',

   });
            $("#this-"+id).css('display','none');
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
          
         
       
            
        
      });
        
   //
    }

    
</script>


@endsection
