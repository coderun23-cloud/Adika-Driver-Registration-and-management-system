<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <style>
    .h1{
        text-align: center;
        font-size: 35px;
        font-weight: bolder;
        padding: 20px;

    }

  .table-container {
    width: 100%;
    overflow-x: auto;
    padding-top: 50px;
    padding-left: 32px;
    margin-bottom: 50px;
    
   
}



#customers {
    width: 100%;
    border-collapse: collapse;
    border-left:  1px solid #000000;
  
}

#customers th, #customers td {
    padding: 10px 18px;
    text-align: left;
    border-bottom: 2px solid #000000;
}

#customers th {
    background-color: #aaaaaa;
    font-weight: bold;
    color: #000000;
}

 
   </style>
  </head>
  <body>
  @include('admin.header')
 
      <!-- Sidebar Navigation-->
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
    
      <div class="page-content" style="background-color: white;">
        <div class="container-fluid">
          @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif
      @if (session('alert'))
      <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
    @endif
      <h1 class="h1"> Driver Approval Site</h1>
            <div class="table-container">
                <div class="table">
  
                    <table id="customers">
                      <tr>
                        <th>n<span style="text-decoration: underline;">o</span></th>
                        <th>Vehicle Name</th>
                        <th>Driver's Name</th>
                        <th>Status</th>
                        <th>Accepted</th>
                        <th>Rejected</th>
                
                      </tr>
                      @foreach ($data as $datas )
                      <tr>
                          <td>{{$datas->id}}</td>
                          <td>{{$datas->vehicle_name}}</td>
                          <td>{{$datas->driver_name}}</td>                          
                          <td>
                            @if ($datas->status == 'approved')
                            <span style="color: skyblue;">{{$datas->status}}</span>
                                
                            @endif
                            @if ($datas->status == 'rejected')
                            <span style="color: red;">{{$datas->status}}</span>
                                
                            @endif
                        
                            @if($datas->status == 'Applied')
                            <span style="color: white;">{{$datas->status}}</span>
                                
                            @endif
                
                
                        </td>
                      <td><a href="{{url('approve_request',$datas->id)}}">Approve</a></td>
                      <td><a  href="{{url('reject_request',$datas->id)}}">Reject</a></td>
                
                        
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
