<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
      .collapse list-unstyled {
    transition: max-height 1.0s ease-in-out;
}
    </style>
  </head>
  <body>
    @include('admin.header')
      <!-- Sidebar Navigation -->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <center>

            <h1 style="font-size: 40px; font-weight: bolder; color: white;">
                Gallary
            </h1>

            <div class="row">

          

            @foreach($gallary as $gallary)

            <div class="col-md-4">


            <img style="height: 200px!important; width: 300px!important;" src="/gallary/{{$gallary->image}}">
                <a class="btn btn-danger" href="{{url('delete_gallary',$gallary->id)}}">Delete Image</a>

        </div>

            @endforeach

        </div>

            <form action="{{url('upload_gallary')}}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding: 30px;">
                    <label style="color: white; font-weight: bold:">Upload Image</label>
                    <input type="file" name="image" required>
               
                   
                    <input class="btn btn-primary" type="submit" name="Add Image">
                </div>
                9
            </form>

        </center>

            </div>
        </div>
    </div>


      @include('admin.footer')
  </body>
</html>