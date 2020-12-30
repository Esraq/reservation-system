<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2><center><b>Reservation System</b></center></h2>

  @if (session()->has('success'))

  <div class="alert alert-success">
      <i>Thanks for registration</i><br>
  </div>
  @endif

  <table id="myTable" border="5">
    <tr class="header">
      <th style="width:10%;"><center>Name</center></th>
      <th style="width:10%;"><center>Email</center></th>
      <th style="width:10%;"><center>Phone</center></th>
      <th style="width:10%;"><center>Seats</center></th>

      <th style="width:20%;"><center>Address</center></th>
      <th style="width:20%;"><center>View</center></th>


    </tr>
    @foreach($items as $item)
    <tr>
      <td><center>{{$item->name}}</center></td>
      <td><center>{{$item->email}}</center></td>
      <td><center>{{$item->phone}}</center></td>
      <td><center>{{$item->seats}}</center></td>

      <td><center>{{$item->address}}</center></td>

      <td>


                           <center>

                           <a href="/confirmation/{{$item->email}}/{{$item->name}}/{{$item->phone}}/{{$item->seats}}/{{$item->address}}">Approve</a>

                              </center>

                              </td>








      </td>
    </tr>
    @endforeach
  </table>



</div>

</body>
</html>
