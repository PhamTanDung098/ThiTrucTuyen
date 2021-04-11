@extends("layouts.app");
@section("title","Category");
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Title</h3>
              <div class="card-tools">
                  <a href="javascript:;" class="btn btn-info btn-sm">Add New</a>
              </div>
            </div>
            <div class="card-body">
              <table class="datatable table table-striped table-bordered table-hover ">
                  <thead class="thead-inverse">
                      <tr>
                          <th>index</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td scope="row"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                          </tr>
                          <tr>
                              <td scope="row"></td>
                              <td></td>
                              <td></td>
                              <td></td>
                          </tr>
                      </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
@endsection