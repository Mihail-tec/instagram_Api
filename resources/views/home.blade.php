<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   <title>instagramm_api</title>
</head>

<body>
   <div class="container">


      <form method="GET" action="/username">
         <input type="text" id="username" name="username" placeholder="Enter Username" value="{{ old('username') }}">
         <button type="submit">Search</button>
      </form>

      <div>
         <div>Instagram Feed</div>
         <div class="panel-body">
            <table class="table table-bordered">
               <thead>
                  <th>No</th>
                  <th width="200px;">Id</th>
                  <th>Code</th>
                  <th>Image</th>
                  <th>Location</th>
                  <th>Total Likes</th>
                  <th>Total Comments</th>
               </thead>
               <tbody>
                  @if(!empty($items))
                  @foreach($items as $key => $item)
                  <tr>
                     <td>{{ ++$key }}</td>
                     <td>{{ $item['id'] }}</td>
                     <td>{{ $item['code'] }}</td>
                     <td><img src="{{ $item['images']['standard_resolution']['url'] }}" style="width:100px;"></td>
                     <td>{{ isset($item['location']['name']) ? $item['location']['name'] : '' }}</td>
                     <td>{{ $item['likes']['count'] }}</td>
                     <td>{{ $item['comments']['count'] }}</td>
                     <td>
                        <a href="/{username}/user_post/{id}">show more</a>
                     </td>
                  </tr>
                  @endforeach
                  @else
                  <tr>
                     <td colspan="4">There are no data.</td>
                  </tr>
                  @endif
               </tbody>
            </table>
         </div>
      </div>


   </div>

</body>

</html>