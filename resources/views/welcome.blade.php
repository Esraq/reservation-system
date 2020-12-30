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


  <form action = "/reservation" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="email">Phone:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter phone" name="phone">
      </div>
    <div class="form-group">
      <label for="pwd">Number of seats:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter seats" name="seats">
    </div>
    <div class="form-group">
        <label for="pwd">Address:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter address" name="address">
      </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
