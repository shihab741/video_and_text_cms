@extends('admin.master')

@section('pageTitle')
Add new post | Video and text content management system
@endsection

@section('headerScriptArea1')
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('/') }}admin-panel/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('/') }}admin-panel/plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('/') }}admin-panel/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('/') }}admin-panel/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('/') }}admin-panel/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('/') }}admin-panel/plugins/select2/select2.min.css">
@endsection


@section('headerScriptArea2')
    <!--Custom CSS for image preview -->
    <link href="{{ asset('/') }}admin-panel/image-preview/image-preview.css" rel="stylesheet" type="text/css">

@endsection

@section('body')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div >
          <h1>Add new video or text type post</h1>       
        </div>
        <div  >
           @error('excerpt')
            <span class="invalid-feedback" role="alert">
                <span class="alert alert-danger float-right">{{ $message }}</span>
            </span>
          @enderror         
        </div>


    </section>



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
          <div class="box-header">
              @if(Session::has('message'))
                      <h3>{!! Session::get('message') !!}</h3>
              @endif
          </div>



          <form action="{{route('dashboard.store')}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="box-body">

                <div class="form-group">
                  <label>Title</label> <span>(* Required and it must be unique.)</span>
                  <input type="text" name="title" id="title" required="required" class="form-control" placeholder="Enter post title here...">
                  <span class="text-success" id="res"></span>
                </div>

                <div class="form-group">
                  <label>YouTube video url here</label>
                  <input type="text" name="video_id" class="form-control" placeholder="Enter video url here...">

                  <p class="help-block">
                    <ul>
                      <li>Leave this field blank if you are uploading text type post.</li>
                      <li>For video type post, only enter video url. <em>For example, https://www.youtube.com/watch?v=Mh4f9AYRCZY</em></li>
                      <li><strong>Do not enter iframe code, it may generate error.</strong></li>
                    </ul>
                  </p>
                </div>


                <div class="form-group">
                  <label>Short description</label> <span>(* Required. Checked from backend using Laravel validation.)</span>
                  <textarea class="form-control" rows="3" name="excerpt" placeholder="Enter short description ..."></textarea>

                  @error('excerpt')
                      <span class="invalid-feedback" role="alert">
                          <span>{{ $message }}</span>
                      </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Long description</label>
                    <textarea id="editor1" name="body" rows="10" cols="80"></textarea>                  
                </div>


                <div class="form-group">
                  <label for="exampleInputFile">Post or video thumbnail image</label>
                  <span>(Image is not essential for video post. System will automatically show thumbnail from YouTube.)</span>
                  <input type="file" name="image" class="form-control" id="imageInputFile">
                   <div class="image-preview" id="imagePreview">
                      <img src="" alt="" class="image-preview__image">
                      <span class="image-preview__default-text">Image preview</span>
                  </div>                 
                  <p class="help-block">
                    <ul>
                      <li><strong>Image is not essential for video post.</strong> You can leave this field blank if you are posting YouTube video link. System will automatically show thumbnail from YouTube.</li>
                      <li>You can show your selected image as video thumbnail by uploading an image.</li>
                      <li>Image is required for text post. Otherwise system will show a default image.</li>
                    </ul>
                  </p>
                </div>


                <div class="form-group">
                  <label class="radio-inline">
                      <input type="radio" name="section" id="optionsRadiosInline1" value="1" checked><strong>Section one</strong> 
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="section" id="optionsRadiosInline2" value="2"><strong>Section two</strong>
                  </label>
                </div>

                <div class="form-group">
                  <label class="radio-inline">
                      <input type="radio" name="type" id="optionsRadiosInline1" value="0" checked><strong>Video post</strong> 
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="type" id="optionsRadiosInline2" value="1"><strong>Text post</strong>
                  </label>
                </div>

                <div class="form-group">
                  <label class="radio-inline">
                      <input type="radio" name="status" id="optionsRadiosInline1" value="1" checked><strong>Published</strong> 
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="status" id="optionsRadiosInline2" value="0"><strong>Unpublished</strong>
                  </label>
                </div>


            </div><!-- /.box-body -->

              <div class="box-footer">
                  <button type="submit" id="regBtn" class="btn btn-primary">Submit</button>
              </div>
              
         </form>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection

@section('footerScriptArea')







<script>

  var title = document.getElementById('title');
  title.onblur = function()
  {

    var title = document.getElementById('title').value;
    var xmlHttp = new XMLHttpRequest();
    var serverPage = '{{ asset('/') }}ajax-title-check/?title='+title;
    xmlHttp.open('GET', serverPage);
    xmlHttp.onreadystatechange = function()
    {
      if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
      {
        document.getElementById('res').innerHTML = xmlHttp.responseText;

        if(xmlHttp.responseText == 'Already exists! Submit button is disabled. Please use another title for your post.')
        {
          document.getElementById('regBtn').disabled = true;
        }
        else
        {
          document.getElementById('regBtn').disabled = false;
        }
      }
    }

    xmlHttp.send(null);
  }

</script>







<!-- Select2 -->
<script src="{{ asset('/') }}admin-panel/plugins/select2/select2.full.min.js"></script>

<!-- InputMask -->
<script src="{{ asset('/') }}admin-panel/plugins/input-mask/jquery.inputmask.js"></script>
<script src="{{ asset('/') }}admin-panel/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="{{ asset('/') }}admin-panel/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('/') }}admin-panel/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('/') }}admin-panel/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('/') }}admin-panel/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('/') }}admin-panel/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/') }}admin-panel/plugins/iCheck/icheck.min.js"></script>

<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>

<!-- Image preview -->
<script src="{{ asset('/') }}admin-panel/image-preview/image-preview.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
    CKEDITOR.replace('editor1');
    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

@endsection