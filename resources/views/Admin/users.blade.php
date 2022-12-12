<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
        @include("admin.navbar")
      <!-- partial -->

          <!-- partial:partials/_footer.html -->
        <div style="position: relative; top: 60px; right: -150px">
        <table bgcolor="grey" border="3px">
        <tr>
        <th style="padding: 30px">Name</th>
        <th style="padding: 30px">Email</th>
        <th style="padding: 30px">Actions</th>
        </tr>

        @foreach($data as $data)
        <tr align="center">
        <th>{{$data->name}}</th>
        <th >{{$data->email}}</th>

        @if($data->usertype=="0")
        <th ><a href="{{url('/deleteuser', $data->id)}}">Delete</a></th>
        @else
        <td>Not Allowed</td>

        @endif
        </tr>

        @endforeach
        </table>


        </div>
      </div>
    @include("admin.adminscript");

  </body>
</html>

</body>
</html>





