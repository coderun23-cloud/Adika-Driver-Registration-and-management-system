<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
<style>
  .container {
    margin: 0 auto;
    padding: 20px;
    max-width: 1200px;
}

/* Header styling */
h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #333;
}

.kpi-summary  h4 {
    font-size: 1.8rem;
    margin-bottom: 45px;
    color: #000000;
    font-weight: bold;
}

/* KPI Summary Table */
.kpi-summary {
    margin-bottom: 30px;
}
.container a{
  margin-bottom: 35px;
}

</style>
  </head>
  <body>
  @include('admin.header')
 
      <!-- Sidebar Navigation-->
   @include('admin.sidebar')
   <div class="page-content" style="background-color: white;">
    <div class="container-fluid">
      <div class="container">
       
<a class="btn btn-danger" href="{{url('add_kpi')}}">go back</a>
        <div class="kpi-summary">
            <h4>Sales Officer Achievements</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sales Officer</th>
                        <th>KPI Type</th>
                        <th>Date</th>
                        <th>Achieved</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kpis as $kpi)
                        <tr>
                            <td>{{ $kpi->user ? $kpi->user->name : 'Unknown User' }}</td>
                            <td>{{ ucfirst($kpi->kpi_type) }}</td>
                            <td>{{ $kpi->created_at->format('Y-m-d') }}</td>
                            <td>{{ $kpi->kpi_value }}</td> <!-- Ensure you have this field in your kpi table -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
   </div>

        @include('admin.footer')
  </body>
</html>
