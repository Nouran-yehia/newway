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
            <form action="{{url('city/create')}}" method="post" enctype="multipart/form-data" id="fo1">
                {{ csrf_field() }}
                <div class="form-group">
                  <label>Country_name:</label>
                  <select  name="country_id" class="form-control col-4" style="border-radius:20px">
                    <option></option>
                  @foreach($services as $country)
                   <option style="border-radius:10px" value="{{$country->id}}">{{$country->name}}</option>
                  @endforeach
                </select>

              </div>
                    <div class="form-group">
                        <label>City_Name_EN:</label>
                       <input type="text" class="form-control col-4 " style="border-radius:20px" name="name_en">

                    </div>
                 <div class="form-group">
                        <label>City_Name_AR:</label>
                       <input type="text" class="form-control col-4 " style="border-radius:20px"  name="name_ar" >

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
