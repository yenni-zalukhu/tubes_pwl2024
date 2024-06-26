<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .table_deg {
            border:  2px solid white;
            margin: auto;
            width: 100%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg
        {
            background-color: rgb(148, 218, 238);
            padding: 15px;
        }

        tr
        {
            border: 3px solid whitesmoke;
        }

        td
        {
            padding: 10px;
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

            <table class="table_deg">
                <tr>
                    <th class = "th_deg">Room Title</th>
                    <th class = "th_deg">Description</th>
                    <th class = "th_deg">Price</th>
                    <th class = "th_deg">Wifi</th>
                    <th class = "th_deg">Room Type</th>
                    <th class = "th_deg">Image</th>
                    <th class = "th_deg">Delete</th>
                    <th class = "th_deg">Update</th>
                </tr>

                @foreach($data as $data)
                <tr>
                    <td>{{$data->room_title}}</td>
                    <td>{!! Str::limit($data->description, 150) !!}</td>
                    <td>Rp{{$data->price}}</td>
                    <td>{{$data->wifi}}</td>
                    <td>{{$data->room_type}}</td>
                    <td>
                        <img  width="100" src="room/{{$data->image}}">
                    </td>
                    <td>
                      <a onclick="confirmation (event)" class="btn btn-danger" href="{{url('room_delete', $data->id)}}">Delete</a>
                    </td>

                    <td>
                      <a class="btn btn-warning" href="{{url('room_update', $data->id)}}">Update</a>
                    </td>
                </tr>

                @endforeach
            </table>

          </div>
        </div>
    </div>

      @include('admin.footer')
      {{-- Javascript Sweet Alert --}}
      <script type="text/javascript">

      function confirmation(ev)
      {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');

        console.log(urlToRedirect);

        swal({
          title: "Are You Sure To Delete This?",
          text : "This Delete Will Be Permanent",
          icon : "warning",
          buttons: true,
          dangerMode: true,
        })

        .then((willCancel)=>{
          if(willCancel)
          {
            window.location.href = urlToRedirect;
          }

        })
      }

      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>