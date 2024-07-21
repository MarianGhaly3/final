
@extends('admin/layouts.main')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage Beverage</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Beverages</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Beverage Date</th>
                          <th>Title</th>
                          <th>Published</th>
                          <th>Special</th>
                          <th>Category</th>
                          <th>Image</th>

                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>

                      <tbody>

                      @foreach ($beverages as $beverage)
                        <tr>
                          <th>{{ $beverage->created_at	 }}</th>
                          <td>{{ $beverage->beverageName }}</td>
                          <td>{{ $beverage->published == 1 ? 'Yes' : 'No'  }}</td>
                          <td>{{ $beverage->special == 1 ? 'Yes' : 'No'  }}</td>
                          <td>{{ $beverage->category->category }}</td>
                          <td><img src="{{ asset('assets/admin/images/'. $beverage->image ) }}" width="70px" ></td>

                          <td><a href="{{ route('editBeverage', $beverage->id) }}" ><img src=" {{ asset('assets/admin/images/edit.png') }}" alt="Edit"></a></td>

                          <td>
                            <form action="{{ route('deleteBeverage') }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <input type="hidden" value="{{$beverage->id}}" name="id">
                              <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this record ?')">
                            </form>
                          </td>

                        </tr>
                      @endforeach
                      
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection