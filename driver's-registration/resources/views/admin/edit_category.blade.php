<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">

   @include('admin.css')
   <style>
    .div_center{
      margin: auto;
      text-align: center;
      margin-top: 100px;
    }
    
   </style>
  </head>
  <body>
  @include('admin.header')
   @include('admin.sidebar')
      <div class="page-content" style="background-color: rgb(255, 255, 255);">
       
          <div class="container-fluid">
            <a style="margin: 20px;" class="btn btn-danger" href="{{url('category_page')}}">go back</a>
            <h2 style="text-align: center; font-size:2.4rem;color:black;" class="h2">Update Vechile Type</h2>
           <div class="div_center">
         
          
            <form action="{{url('update_category',$data->id)}}" method="post">
                @csrf
                <label for="">Vechile Type Name</label>
                <input type="text" name="cat_name" value="{{$data->cat_title}}" id="" required><br><br>
                <input type="submit" value="UPDATE" class="btn btn-info">
            </form>
           </div>
               
            
          </div>
       
      </div>
        @include('admin.footer')
  </body>
</html>