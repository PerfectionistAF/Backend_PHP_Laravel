<!---REMOVE HTML BLOCK AND EXTEND ADMIN LAYOUT INSTEAD--->

@extends('admin.layout')
@section('title', 'All Customers')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage <small>Users</small></h3>
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
                    <h2>List of Users</h2>
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
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Edit</th>
                        <th>Show</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                        <tbody>

                    @foreach ($customers as $val)
                    
                    <tr>
                        <td> 
                            {{$val->customer_name}}
                        </td>
                        <td>
                            {{$val->email}}
                        </td>
                        <td><!---retreive id to update customer then add routes to web.php--->
                            <a href="/customers-edit/{{$val->id}}">
                                <img src="{{asset('./images/edit.png')}}" alt="Edit">
                            </a>
                        </td>
                        <td><!---retreive id to update customer then add routes to web.php--->
                            <a href="/customers-show/{{$val->id}}" style="color:blue">Show</a>
                        </td>
                        <td>
                            <a href="/customers-delete/{{$val->id}}" style="color:blue">Delete</a>
                        </td>
                        <td>
                            <form action="{{route('customers-delete', [$val->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{$val->id}}">
                                <input type="submit" value="Delete Customer">
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

        <!--</table>
        <br>
        <a href="{{route('customers-create')}}"><button style="margin: 10px;"><h2 style="color:red">    ADD CUSTOMER</h2></button></a>--->
   
    <!--</body>-->
<!--<html>-->

