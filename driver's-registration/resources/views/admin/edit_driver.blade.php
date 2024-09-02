<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
   @include('admin.css')
   <style>

.form-container {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 1200px;
}

.form-title {
    font-size: 40px;
    margin-bottom: 20px;
    color: #000000;
    font-weight: bolder;
}

.form {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.form-group {
    flex: 1 1 calc(25% - 15px);
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-size: 24px;
    margin-bottom: 5px;
    color: #000000;
    font-weight: bolder;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 20px;
}

.gender-group {
    flex: 1 1 100%;
    display: flex;
    flex-direction: column;
}

.gender-group label {
    display: flex;
    align-items: center;
    margin: 5px 0;
}

.gender-group input[type="radio"] {
    margin-right: 5px;
}

.submit-btn {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 20px;
    margin-top: 15px;
    align-self: flex-start;
}

.submit-btn:hover {
    background-color: #0056b3;
}
</style>
  </head>
  <body>
  @include('admin.header')
 
      <!-- Sidebar Navigation-->
   @include('admin.sidebar')
   <div class="page-content" style="background-color: white;">
    <div class="container-fluid">
        <a class="btn btn-danger" href="/driver_record">go back</a>
        <div class="form-container">
           
            <h2 class="form-title">Driver's Update Site</h2>
            <form action="{{url('update_driver',$data->id)}}" method="post" class="form">
                @csrf
                <div class="form-group">
                    <label for="no">No</label>
                    <input type="number" id="no" name="no" value="{{$data->id}}" required>
                </div>
                <div class="form-group">
                    <label for="vehicle_name">Vehicle Name</label>
                    <input type="text" id="vehicle_name" name="vname" value="{{$data->vehicle_name}}" required>
                </div>
                <div class="form-group">
                    <label for="vehicle_type">Vehicle Type</label>
                    <input type="text" id="vehicle_type" name="vtype" value="{{$data->vehicle_type}}" required>
                </div>
                <div class="form-group">
                    <label for="plate_number">Plate Number</label>
                    <input type="text" id="plate_number" name="pnum" value="{{$data->plate_number}}" required>
                </div>
                <div class="form-group">
                    <label for="driver_name">Driver's Name</label>
                    <input type="text" id="driver_name" name="dname" value="{{$data->driver_name}}" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="tel" id="phone_number" name="phonenumb" value="{{$data->driver_phone_number}}" required>
                </div>
                <div  class="form-group">
                    <label for="phone_number">Sales Officer id</label>
                    <input type="tel" id="phone_number" name="user_id" value="{{$data->user_id}}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{$data->driver_email}}" required>
                </div>
              
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
   </div>
        @include('admin.footer')
  </body>
</html>
