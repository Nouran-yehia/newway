@extends('Dashboard.index')
@section('content')

@if($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p style="color:white;">* {{$error}}</p>
    @endforeach
  </div>
  
@endif
<div>
            <form action="{{route('service.update', $service->id)}}" method="post" enctype="multipart/form-data" id="fo1">
                {{ csrf_field() }}
                <div class="form-group">
                  <label>Parent Service:</label>
                  <select  name="service_id" class="form-control col-4" style="border-radius:20px">
                    <option></option>
                  @foreach($services as $service)
                   <option style="border-radius:10px" value="{{$service->id}}">{{$service->name}}</option>
                  @endforeach
                </select>

              </div>
                    <div class="form-group">
                        <label>Name</label>
                       <input type="text" class="form-control col-4 " value="{{$service->name}}" style="border-radius:20px" name="name">

                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="summary-ckeditor" name="description">{{$service->description}}</textarea>


                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <br>
                            Active
                            <input type="radio" name="active" checked value='1'/>
                            Inactive
                            <input type="radio" name="active" value='0'/>

                        </div>
                    </div>

                    
                 <button style="border-radius:20px"  class="btn btn-primary" type="submit"  onclick="addFunction()"><i class="fas fa-save" > Save</i></button>
        </form>
        <script>
          var start_date = new Date().toISOString().split('T')[0];
        document.getElementsByName("start_date")[0].setAttribute('min', start_date);
        var end_date = new Date().toISOString().split('T')[0];
        document.getElementsByName("end_date")[0].setAttribute('min', end_date);
          function addFunction() {
              event.preventDefault();
              var form = document.getElementById("fo1");
              Swal.fire({
        title: 'Are you sure?',
        text: " work has been saved",

        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, save it!'

      }).then((result) => {
        if (result.value) {
            console.log(form);

          form.submit();
          Swal.fire(
            'SUCCESS',
            'Your work has been saved.',

          )
        }
      })
          }
      </script>

@endsection
