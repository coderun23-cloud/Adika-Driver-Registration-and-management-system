<div class="page-content" style="background-color: rgb(255, 255, 255);color:black;">
    <div class="page-header">
      <div class="container-fluid">
      
      </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
      <div class="container-fluid">
        <h1 style=" margin-top:30px; font-weight:bolder; text-align:center;margin-bottom:100px;font-size: 50px;">Adika Driver Registration Site Admin Panel</h1>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block"style="background-color: white;border:3px solid gray;">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-user-1"></i></div><strong>Total Users</strong>
                </div>
                <div class="number dashtext-1">{{$data}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block" style="background-color: white; border:3px solid gray;">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-contract"></i></div><strong>Total Sales Officer</strong>
                </div>
                <div class="number dashtext-2">{{$sales}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block" style="background-color: white;border:3px solid gray;">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-user-1"></i></div><strong>Total Registered Drivers</strong>
                </div>
                <div class="number dashtext-3">{{$driver}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6" >
            <div class="statistic-block block"style="background-color: white;border:3px solid gray;">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-user-1"></i></div><strong>Total Approved Drivers</strong>
                </div>
                <div class="number dashtext-4">{{$approve}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block" style="background-color: white;border:3px solid gray;">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-user-1"></i></div><strong>Total Rejected Drivers</strong>
                </div>
                <div class="number dashtext-1">{{$reject}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block" style="background-color: white;border:3px solid gray;">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-user-1"></i></div><strong>Number of vehicle types</strong>
                </div>
                <div class="number dashtext-1">{{$category}}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    </section>