@extends('admin.master')

@section('pageTitle')
Dashboard | Video and text content management system
@endsection

@section('headerScriptArea2')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/') }}admin-panel/plugins/datatables/dataTables.bootstrap.css">

    <!--Custom CSS for image preview -->
    <link href="{{ asset('/') }}admin-panel/image-preview/image-preview.css" rel="stylesheet" type="text/css">

@endsection

@section('body')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
          <h1>All posts</h1>
    </section>





    <!-- Main content -->
    <section class="content">

          <div class="box">
            <div class="box-header">

                @if(Session::has('message'))
                        <h3>{!! Session::get('message') !!}</h3>
                @endif


            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Serial no.</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Publication status</th>
                  <th>Section</th>
                  <th>Type</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                       @php($i = 1)
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $i++ }}</td>                               
                                <td>{{ $post->title }}</td>
                                <td>
                                  @if($post->image == NULL)
                                    @if($post->video_id == NULL)
                                      <img src="{{ asset('/') }}uploads/default/default-thumb.jpg" width="75px" height="75px">
                                    @else
                                      <img src="http://i3.ytimg.com/vi/{{$post->video_id}}/hqdefault.jpg" width="75px" height="75px">
                                    @endif
                                  @else
                                    <img src="{{ asset('/') }}uploads/post-images/{{$post->image}}" width="75px" height="75px">
                                  @endif
                                </td>

                                <td>
                                  {{ $post->status == 1 ? 'Published' : 'Not published' }}

                                    {{-- Publish / Unpublish button --}}
                                    @if($post->status == 1)
                                        <a href="{{route('unpublish-post', ['id' => $post->id])}}" class="btn btn-warning" title="Unpublish"><span><i class="fa fa-arrow-down"></i></span></a>
                                    @else
                                        <a href="{{route('publish-post', ['id' => $post->id])}}" class="btn btn-primary" title="Publish"><span><i class="fa fa-arrow-up"></i></span></a>
                                    @endif

                                </td>

                                <td>
                                  {{ $post->section == 1 ? 'Section one' : 'Section two' }}

                                    {{-- Move from one section to another --}}
                                    @if($post->section == 1)
                                        <a href="{{route('to-section-two', ['id' => $post->id])}}" class="btn btn-warning" title="Move to section two"><span><i class="glyphicon glyphicon-circle-arrow-right"></i></span></a>
                                    @else
                                        <a href="{{route('to-section-one', ['id' => $post->id])}}" class="btn btn-primary" title="Move to section one"><span><i class="glyphicon glyphicon-circle-arrow-left"></i></span></a>
                                    @endif
                                </td>
                                
                                <td>{{ $post->type == 1 ? 'Text post' : 'Video post' }}</td>
                                                           
                                <td>


 
     
                                    {{-- Delete button --}}
                                    <form action="{{ route('dashboard.destroy', $post->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" onclick="return confirm('Are you sure want to delete this?');" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Serial no.</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Publication status</th>
                  <th>Section</th>
                  <th>Type</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>





@endsection

@section('footerScriptArea')

<!-- DataTables -->
  <script src="{{ asset('/') }}admin-panel/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('/') }}admin-panel/plugins/datatables/dataTables.bootstrap.min.js"></script>

    <!-- Image preview -->
    <script src="{{ asset('/') }}admin-panel/image-preview/image-preview.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();

  });
</script>

@endsection