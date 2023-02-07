<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Introduceti un fffprodus nou</h2>
  <br>
  <form action = "add" method = "post" class="form-group" style="width:70%; margin-left:15%;" >

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group">Nume:</label>
    <input type="text" class="form-control" placeholder="nume" name="fnume"><br>
    <label>Descriere:</label>
    <input type="text" class="form-control" placeholder="descriere" name="descriere">
  <label>Pret:</label>
  
  <input type="numer" class="form-control" placeholder="pret" name="pret"><br>

    <button type="submit"  value = "Add produs" class="btn btn-primary">Submit</button>
   
  </form>
  
</div>

</body>
</html>