<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
   @include('admin.css')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <style>
    .center{
        text-align: center;
        margin: auto;
     
    }
    .cat_label{
        font-size: 30px;
        font-weight: bold;
        padding: 30px;
        color: rgb(0, 0, 0);
    }
    .table{
        margin: auto;
        width: 80%;
        text-align: center;
        margin-top: 50px;
        border: 1px solid rgb(255, 255, 255);
        margin-bottom: 50px;
        background-color: lightgrey;
    }
    .table th{
        background-color: rgb(74, 74, 74);
        padding: 10px;
        color: rgb(255, 255, 255);
    }
    tr{
        border: 2px solid white;
        padding: 15px;
    }
   </style>
  </head>
  <body>
  @include('admin.header') 
      <!-- Sidebar Navigation-->
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content"style="background-color: white;">
       
          <div class="container-fluid">
            <div class="center">
                <div>
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    </div>
                     
                    @endif
                </div>

                <h1 class="cat_label">Add Vechile Type</h1>
                <form action="{{url('add_category')}}" method="post" >
                    @csrf
                   <span style="padding-right:15px;">
                    <label for="">Vechile Type Name</label>
                    <input style="width:400px;" type="text" name="category" id="" placeholder="enter a vechile type" required>
                   </span>
                    <input class="btn btn-primary" type="submit" value="Add Category">
                </form>
                <div>
                    <table class="table">
                        <tr>
                            <th>Vechile Type Name</th>
                            <th>Action</th>
                           
                        </tr>
                        @foreach ( $data as $data )
                        <tr>
                            <td>
                                {{$data->cat_title}}
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{url('edit_category',$data->id)}}">Update</a>
                                <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('cat_delete',$data->id)}}">Delete</a></td>
                            
                        </tr>
                        @endforeach
                      
                    </table>
                </div>
            </div>
        
        </div>
      </div>
        @include('admin.footer')
        
  </body>
</html>