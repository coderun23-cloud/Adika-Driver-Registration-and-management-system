<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <style>
    .table-container {
      width: 100%;
      overflow-x: auto;
      padding-top: 50px;
      padding-left: 32px;
      
     
  }
  
  
  
  #customers {
      width: 100%;
      border-collapse: collapse;
      border-left:  1px solid #000000;
  }
  
  #customers th, #customers td {
      padding: 20px 22px;
      text-align: left;
      border-bottom: 2px solid #000000;
  }
  
  #customers th {
      background-color: #aaaaaa;
      font-weight: bold;
      color: #000000;
  }
  .h1{
        text-align: center;
        font-size: 35px;
        font-weight: bolder;
        padding: 20px;

    }
   </style>
  </head>
  <body>
  @include('admin.header')
 
      <!-- Sidebar Navigation-->
   @include('admin.sidebar')
   <div class="page-content" style="background-color: white;">
    <div class="container-fluid">
        <div class="table-container">
          @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
            <div class="table">
                <h1 class="h1">Total Sales Officers</h1>
                <table id="customers">
                  <tr>
                    <th>no</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Action</th>
                    <th>Detail</th>
                  </tr>
                  @foreach ($data as $datas )
                  <tr>
                      <td>{{$num++}}</td>
                      <td>{{$datas->name}}</td>
                      <td>{{$datas->email}}</td>
                  
                      <td>
                      <a onclick="return confirm('Are you sure to delete this')"  href="{{url('delete_user',$datas->id)}}">DELETE</a></td>
                      <td><a href="{{url('view_detail',$datas->id)}}">View Details</a></td>
                  </tr>
                  @endforeach
                </table>
        {{$data->links()}}
              </div>
         </div>
    </div>
   </div>
        @include('admin.footer')
  </body>
</html>
