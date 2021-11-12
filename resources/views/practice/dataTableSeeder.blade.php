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
  <h2>Information Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
       
       
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
      <tr>
        <td>{{ $user->user_contacts->name }}</td>
       
        <td>{{ $user->user_contacts->password }}</td>
      </tr>
       @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
