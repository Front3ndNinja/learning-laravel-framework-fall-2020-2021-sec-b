<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Admin</title>
  </head>
  <body>
    
  <div class="container mt-5">
    <h4 class="mt-5 text-primary">Employee</h4>
    <h4 class="mb-5 d-inline">Welcome, {{session('profile.name')}} </h4>
    
    <div class="float-right h6">
      <a href="/logout" class="text-danger">
        <i class="fas pr-1"></i>Logout
      </a>
    </div>

    @if(count($errors)>0)
      <div class="alert alert-danger p-3" role="alert">
      @foreach($errors->all() as $err)
      {{$err}} <br>
	  	@endforeach
      </div>
	  	@endif

    @if(session('msg'))
      <div class="'alert alert-{{session('type')}} p-3" role="alert">
      {{session('msg')}}
      </div>
	@endif


    <h5 class="mt-5"></h5>
    <a href="{{route('products.employee.create')}}"><i class="fa fa-briefcase h3" aria-hidden="true"></i>Post new job</a>
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Company name</th>
          <th scope="col">Job Title</th>
          <th scope="col">Job Location</th> 
          <th scope="col">Salary</th>           
          <th scope="col">Action</th>          
        </tr>
      </thead>
      <tbody id='table-body'>
        @for($i=0; $i< count($allProducts); $i++)
        <tr>
          <td>{{$allProducts[$i]['id']}}</td>
          <td>{{$allProducts[$i]['name']}}</td>
          <td>{{$allProducts[$i]['jobtitle']}}</td>
          <td>{{$allProducts[$i]['jlocation']}}</td>
          <td>{{$allProducts[$i]['salary']}}</td>
          <td colspan="2">
            <a href="{{route('products.employee.edit', $allProducts[$i]['id'])}}"><i class="fas fa-edit text-warning mr-3"></i></a> |
            <a href="{{route('products.employee.delete', $allProducts[$i]['id'])}}"><i class="fas fa-trash-alt text-danger ml-3"></i></a>
          </td>
        </tr>
        @endfor



       
        
      </tbody>
    </table>
    
    
  </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    
    </body>
</html>
