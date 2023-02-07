<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
</head>
<body>
    <form action = "productData" method = "post" class="form-group" style="width:70%; margin-left:15%;">
    <div class="container">
        <table>
<tr>

    <td><b>Nume</b></td>
    <td><b>Descriere</b></td>
    <td><b>Pret</b></td>

</tr>
<tbody> @foreach ($productData as $pd)
   

    <tr>
        <td>{{$pd->nume}}</td>
    <td>{{$pd->descriere}}</td>
    <td>{{$pd->pret}}</td>
    </tr>
@endforeach
</tbody>

        </table>

    </form>
</body>
</html>