<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
   @include('admin.css')

  </head>
  <body>
  @include('admin.header')
 
      <!-- Sidebar Navigation-->
   @include('admin.sidebar')
   <div class="page-content" style="background-color: rgb(255, 255, 255);">
       
    <div class="container-fluid">
      <a style="margin: 20px;" class="btn btn-danger" href="{{url('add_kpi')}}">go back</a>
      <h2 style="text-align: center; font-size:2.4rem;color:black;" class="h2">Update KPI</h2>
     <div class="div_center">
   
    
      <form action="{{url('update_kpi',$kpi->id)}}" method="post">
          @csrf
          <label for="">KPI Type </label>
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
            <input type="number" name="kpi_value" class="form-control" required min="1" value="{{$kpi->kpi_value}}">
        </div>
          <input type="submit" value="UPDATE" class="btn btn-info">
      </form>
     </div>
         
      
    </div>
 
</div>

        @include('admin.footer')
  </body>
</html>
