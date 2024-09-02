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
    margin-bottom: 50px;
}

#customers th, #customers td {
    padding: 8px 17px;
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
        font-size: 45px;
        font-weight: bolder;
        padding-bottom: 30px;
        color: #000000;

    }
    input[type="search"]{
  width: 400px;
  border-radius: 30px;
  height: 50px;
  margin-bottom: 3rem;
float: right;
}
input[type="search"]::placeholder{
  padding-left: 8px;
 
  color: rgb(86, 86, 86);

}
.dropdown{
    padding-left: 20px;
  
}
 </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content" style="background-color: white;">
        <div class="container-fluid">
            <div class="table-container">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <h1 class="h1">Total Drivers Record</h1>
    
                <!-- Date Filter Form -->
                <div class="filter-container">
                    <form action="{{ route('drivers.index') }}" method="GET">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="start_date">Start Date </label>
                                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ request()->start_date }}"> 
                            </div>
                            <h1 style="margin-right: 40px;"></h1>
                            <div class="form-group col-md-3">
                                <label for="end_date">End Date</label>
                                <input type="date" name="end_date" id="end_date" class="form-control" value="{{ request()->end_date }}">
                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary mt-4">Filter by Date</button>
                            </div>
                        </div>
                    </form>
    
                    <!-- Status Filter Form -->
                    <form action="{{ route('drivers.index') }}" method="GET">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="status">Driver Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">All</option>
                                    <option value="approved" {{ request()->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="rejected" {{ request()->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary mt-4">Filter by Status</button>
                            </div>
                        </div>
                    </form>
                </div>
    
                <!-- Sort Links -->
                <div class="dropdown">
                    <a href="{{ route('drivers.index', ['sort_by' => 'plate_number', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">Sort by Plate Number</a>
                    <a style="padding-left: 30px;" href="{{ route('drivers.index', ['sort_by' => 'driver_name', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">Sort by Driver Name</a>
                    <a style="margin-left:20px;" class="btn btn-info" href="{{url('driver_record')}}">Reset</a>

                </div>
    
                <!-- Search Box -->
                <div class="search">
                    <form action="{{ route('drivers.index') }}" method="GET">
                        <input style="padding-left: 20px;" class="search" type="search" name="search" value="{{ request()->search }}" placeholder="Search here">
                    </form>
                </div>
                <!-- Table -->
                @if($data->isEmpty())
                    <p style="text-align: center; font-weight: bold; color: red;">No results found for your search.</p>
                @else
                    <div class="table">
                        <table id="customers">
                            <tr>
                                <th>No</th>
                                <th>Vehicle Name</th>
                                <th>Vehicle Type</th>
                                <th>Plate Number</th>
                                <th>Driver's Name</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Registered By</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($data as $datas)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $datas->vehicle_name }}</td>
                                    <td>{{ $datas->vehicle_type }}</td>
                                    <td>{{ $datas->plate_number }}</td>
                                    <td>{{ $datas->driver_name }}</td>
                                    <td>{{ $datas->driver_phone_number }}</td>
                                    <td>{{ $datas->driver_email }}</td>
                                    <td>{{ $datas->gender }}</td>
                                    <td>{{ $datas->user->name }}</td>
                                    <td>{{ $datas->status }}</td>
                                    <td>
                                        <a href="{{ url('edit_driver', $datas->id) }}">UPDATE</a>
                                        <a onclick="return confirm('Are you sure to delete this?')" href="{{ url('delete_driver', $datas->id) }}">DELETE</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $data->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    
    @include('admin.footer')
        
  </body>
</html>
