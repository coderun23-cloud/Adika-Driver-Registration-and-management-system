<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
   @include('admin.css')
   <style>
     /* Container styles */
     .details-container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            margin: 25px auto;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 400px;
        }

        .details-container h3 {
            margin-top: 0;
            font-size: 30px;
            color: #000000;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .details-container p {
            font-size: 20px;
            color: #555;
            line-height: 1.6;
            padding: 5px;
        }

        .details-container p strong {
            color: #000000;
        }
        .page-content a{
            margin: 30px;
        }
   </style>
  </head>
  <body>
  @include('admin.header')
   @include('admin.sidebar')
   <div class="page-content" style="background-color: white;">
    <a class="btn btn-danger" href="/salesofficer">go back</a>
    <div class="container-fluid">
        <div class="details-container">
            <h3>Sales Officer Details</h3>
            <p><strong>Sales Officer ID:</strong> {{$data->id}}</p>
            <p><strong>Sales Officer Name:</strong> {{$data->name}}</p>
            <p><strong>Sales Officer Email:</strong>{{$data->email}}</p>
            <p><strong>Number of Registered Drivers</strong> {{$count}}</p>
            <p><strong>Number of Approved Drivers</strong>{{$approve}}</p>
            <p><strong>Number of Rejected Drivers</strong>{{$reject}}</p>

        </div>
    </div>
   </div>
        @include('admin.footer')
  </body>
</html>
