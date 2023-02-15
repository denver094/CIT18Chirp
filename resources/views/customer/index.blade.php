<html>
<style>
 table {
  font-family: sans-serif;
  border-collapse: collapse;
  width: 80%;
  margin-left:20git0px;
  border-radius: 25px;
}
th{
    font-family: Courier New;
    font-size:20px;

    
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h1{
    text-align:center;
    text-shadow:2px 2px yellow;
}
</style>

<body>
    <h1>CUSTOMERS</h1>

<table>

  <tr>
  <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact Number</th>
    <th>Address</th>

  </tr>
  @foreach ($customers as $customer)
  <tr>
  <td>{{$customer->id}} </td>
    <td>{{$customer->firstName}} {{$customer->lastName}}</td>
    <td>{{$customer->email}} </td>
    <td>{{$customer->contactNumber}}</td>
    <td>{{$customer->address}}</td>
   
    </tr>
    @endforeach
</table>


</body>
</html>