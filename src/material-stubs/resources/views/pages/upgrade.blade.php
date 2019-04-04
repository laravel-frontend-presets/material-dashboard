@extends('layouts.app', ['activePage' => 'upgade', 'titlePage' => __('Upgrade to PRO')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Material Dashboard PRO</h4>
            <p class="card-category">Are you looking for more components? Please check our Premium Version of Material Dashboard.</p>
          </div>
          <div class="card-body">
            <div class="table-responsive table-upgrade">
              <table class="table">
                <thead>
                  <tr>
                    <th></th>
                    <th class="text-center">Free</th>
                    <th class="text-center">PRO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><h3 class="text-primary">Laravel</h3></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                  </tr>
                  <tr>
                    <td>Login, Register, Forgot password pages</td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>User profile</td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>Users management</td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>User roles management </td>
                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>Items management </td>
                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>Categories management, Tags management </td>
                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>Wysiwyg, image upload, date picker inputs</td>
                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>Radio button, checkbox, toggle inputs</td>
                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td><h3 class="text-primary">Frontend</h3></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                  </tr>
                  <tr>
                    <td>Components</td>
                    <td class="text-center">60</td>
                    <td class="text-center">200</td>
                  </tr>
                  <tr>
                    <td>Plugins</td>
                    <td class="text-center">2</td>
                    <td class="text-center">15</td>
                  </tr>
                  <tr>
                    <td>Example Pages</td>
                    <td class="text-center">3</td>
                    <td class="text-center">27</td>
                  </tr>
                  <tr>
                    <td>Login, Register, Pricing, Lock Pages</td>
                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>DataTables, VectorMap, SweetAlert, Wizard, jQueryValidation, FullCalendar etc...</td>
                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td>Mini Sidebar</td>
                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td><h3 class="text-primary">Premium Support</h3></td>
                    <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                    <td class="text-center"><i class="fa fa-check text-success"></i></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td class="text-center">Free</td>
                    <td class="text-center">Just $149</td>
                  </tr>
                  <tr>
                    <td class="text-center"></td>
                    <td class="text-center">
                      <a href="#" class="btn btn-round btn-fill btn-default disabled">Current Version</a>
                    </td>
                    <td class="text-center">
                      <a target="_blank" href="javascript:void(0)" aria-disabled="true" class="btn btn-round btn-fill btn-info">Coming soon</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection