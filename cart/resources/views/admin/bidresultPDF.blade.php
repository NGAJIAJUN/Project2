<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bid Result Report</title>
</head>

<style>
#pdf{
    font-family:Arial;
    border-collapse: collapse;
    width:100%;
  }

  #pdf td, #pdf th{
   border:1px solid #ddd;
   padding:8px;
  }
  #pdf tr:nth-child(even){
      background-color: #fff;
  }
  #pdf th{
      padding-top:12px;
      padding-bottom: 12px;
      text-align:left;
      background-color: #4CAF50;
      color:white;
  }
</style>

<body>
     
<table id="pdf">
    <tr>
        
        <th>design_id </th>
        <th>project_id</th>
        <th>Bid Amount</th>
        <th>Comment</th>
</tr>
       @foreach($bids as $bid) 
       
       <tr>  
		<td>{{$bid->design_id}}</td>
        <td> {{$bid->project_id}}</td>
		<td>RM{{$bid->bidamount}}</td>
        <td>{{$bid->comment}}</td>
        </tr>
     
        @endforeach
     
</table>  
   
</body>
</html>