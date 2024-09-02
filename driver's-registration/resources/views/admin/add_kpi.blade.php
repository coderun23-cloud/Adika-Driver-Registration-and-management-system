<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
<style>
    .container{
        padding-top: 50px;
    }
    .container h2{
        font-size: 40px;
        font-weight: bold;
        color: black;
    }
    #table{
        margin-top: 50px;
        margin-bottom: 50px;
        width: 80%;
        margin-left: 50px;
    }
</style>
  </head>
  <body>
  @include('admin.header')
 
      <!-- Sidebar Navigation-->
   @include('admin.sidebar')
   <div class="page-content"style="background-color: white;">
       
    <div class="container-fluid">
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a style="float: right;" class="btn btn-info" href="{{url('kpi_achievements')}}">See Sales KPI</a>
            <h2>Add KPI for Sales Officer</h2>
            <form action="{{ url('/setKpi') }}" method="POST">
                @csrf
            
        
                <div class="form-group">
                    <label for="kpi_type">KPI Type:</label>
                    <select name="kpi_type" class="form-control" required>
                        <option value="daily">Daily</option>
                        <option value="weekly">Weekly</option>
                        <option value="monthly">Monthly</option>
                    </select>
                </div>
        
                <div class="form-group">
                    <label for="kpi_value">KPI Value (Number of Registrations):</label>
                    <input type="number" name="kpi_value" class="form-control" required min="1">
                </div>
        
                <div class="form-group">
                    <label for="effective_date">Effective Date:</label>
                    <input type="date" name="effective_date" class="form-control" required>
                </div>
        
                <button type="submit" class="btn btn-primary">Set KPI</button>
            </form>
        </div>
        <table id="table" class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>

                    <th>KPI Type</th>
                    <th>Goal</th>
               
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kpis as  $kpi)
                    <tr>
                        <td>{{ $num++ }}</td>
                      
                        <td>{{$kpi->kpi_type}}</td>
                        <td>{{ $kpi->kpi_value }}</td>
                      
                        <td>
                            <a href="{{ url('/edit_kpi', $kpi->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{url('/delete_kpi', $kpi->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this KPI?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No KPIs found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
   </div>


        @include('admin.footer')
  </body>
</html>
