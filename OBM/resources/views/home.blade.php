@extends('layouts.app')

@section('content')
<div class="container">
  <section class="row">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12">
          <div class="jumbotron">
          <h1 class="md-8">PROXIMO PARTIDO</h1>
          <div class="row">
            <div class="col-md-4">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                  <img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="height: 100%; max-height: 120px;">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                  <span>Nombre equipo</span>
                </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="container">
                  <img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="height: 100%; max-height: 120px;">
              </div>
            </div>
            <div class="col-md-4">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                  <img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo img img-responsive" style=" margin: 0 auto; height: 100%; max-height: 120px;">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                  <p class="text-center">Nombre equipo</p>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-md-12">
        <div class="card mb-4">
            <h3 class="card-title">Recent Orders</h3>
            <div class="dropdown card-title-btn-container">
              <button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
              <button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
                  <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
                  <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Order #</th>
                    <th>Product</th>
                    <th>Customer</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>0001</td>
                    <td>Product Name 1</td>
                    <td>Customer 1</td>
                    <td>Complete</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </div>
      </div>
    </div>
      <div class="col-md-4 ">
        <div class="card mb-4">
          <div class="card-block">
            <h3 class="card-title">Top Users</h3>
            <h6 class="card-subtitle mb-2 text-muted">Most active this week</h6>
            <div class="user-progress justify-center">
              <div class="col-sm-3 col-md-2" style="padding: 0;">
                <img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
              </div>
              <div class="col-sm-9 col-md-10">
                <h6 class="pt-1">Username 1</h6>
                <div class="progress progress-custom">
                  <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="user-progress justify-center">
              <div class="col-sm-3 col-md-2" style="padding: 0;">
                <img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
              </div>
              <div class="col-sm-9 col-md-10">
                <h6 class="pt-1">Username 2</h6>
                <div class="progress progress-custom">
                  <div class="progress-bar bg-primary" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="user-progress justify-center">
              <div class="col-sm-3 col-md-2" style="padding: 0;">
                <img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
              </div>
              <div class="col-sm-9 col-md-10">
                <h6 class="pt-1">Username 3</h6>
                <div class="progress progress-custom">
                  <div class="progress-bar bg-primary" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            <div id="calendar"></div>
          </div>
        </div>
      </div>
    </div>

        <div class="card mb-4">
          <div class="card-block">
            <h3 class="card-title">Articles</h3>
            <div class="dropdown card-title-btn-container">
              <button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
              <button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
                  <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
                  <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
            </div>
            <h6 class="card-subtitle mb-2 text-muted">Latest news</h6>
            <div class="divider" style="margin-top: 1rem;"></div>
            <div class="articles-container">
              <div class="article border-bottom">
                <div class="col-xs-12">
                  <div class="row">
                    <div class="col-2 date">
                      <div class="large">30</div>
                      <div class="text-muted">Jun</div>
                    </div>
                    <div class="col-10">
                      <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                    </div>
                  </div>
                </div>
                <div class="clear"></div>
              </div><!--End .article-->

              <div class="article">
                <div class="col-xs-12">
                  <div class="row">
                    <div class="col-2 date">
                      <div class="large">30</div>
                      <div class="text-muted">Jun</div>
                    </div>
                    <div class="col-10">
                      <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                    </div>
                  </div>
                </div>
                <div class="clear"></div>
              </div><!--End .article-->

              <div class="article">
                <div class="col-xs-12">
                  <div class="row">
                    <div class="col-2 date">
                      <div class="large">30</div>
                      <div class="text-muted">Jun</div>
                    </div>
                    <div class="col-10">
                      <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                    </div>
                  </div>
                </div>
                <div class="clear"></div>
              </div><!--End .article-->
            </div>
          </div>
        </div>
      </div>

    </div>
    <section class="row">

    </section>
  </div>
</section>

@endsection
