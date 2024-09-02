<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
   <style>
    .contain {
    max-width: 700px;
    margin: 50px auto;
    padding: 50px;
    background-color: #f7f7f7;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
    
}

/* Form Heading */
.contain h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
    color: #000000;
    font-weight: bolder;
}

/* Form Group */
.form-group {
    margin-bottom: 15px;
}

/* Label Styling */
.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #6e6e6e;
    padding: 10px;
}

/* Input Styling */
.form-group input {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
}

/* Button Styling */
.form-group button {
    width: 40%;
    padding: 10px;
    font-size: 20px;
    
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}

.form-group button:hover {
    background-color: #fb9292;
}

/* Responsive Design */
@media (max-width: 768px) {
    .contain {
        width: 90%;
        margin: 20px auto;
        padding: 15px;
    }
    
    .contain h1 {
        font-size: 20px;
    }

    .form-group input,
    .form-group button {
        font-size: 14px;
        padding: 8px;
    }
}

@media (max-width: 480px) {
    .contain {
        width: 95%;
    }
    
    .contain h1 {
        font-size: 18px;
    }

    .form-group input,
    .form-group button {
        font-size: 12px;
        padding: 6px;
    }
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
            <div class="contain">
                <h1>Sales Officer Registration Form</h1>
                
          @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ session('success') }}
        </div>
        @elseif (session()->has('alert'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
          {{ session()->get('alert') }}
      </div>
          @endif
                <div class="form-container">
                    <form action="{{url('register_user')}}" method="post" class="registration-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" name="name" id="name" placeholder="Enter full name" required>
                        </div>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" placeholder="Enter email" required>
                        </div>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                        <div class="form-group">
                            <label for="pass">Password:</label>
                            <input type="password" name="pass" id="pass" placeholder="Enter password" required>
                        </div>
                        @error('cpass')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                        <div class="form-group">
                            <label for="cpass">Confirm Password:</label>
                            <input type="password" name="cpass" id="cpass" placeholder="Confirm password" required>
                        </div>
                    
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
       </div>
        @include('admin.footer')
  </body>
</html>
