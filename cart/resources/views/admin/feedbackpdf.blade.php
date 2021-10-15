
<div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">

                        <thead>
                            <tr>
                                <th>Project ID</th>
                                <th>Client Name</th>
                                <th>Rating</th>
                                <th>Review</th>
                                <th>Rated Date</th>
                               
                            </tr> 
                        </thead>
                        <tbody>
                        @foreach($myassigns as $myassign)
                            <tr> 
                               <td>{{$myassign->id}}</td>
                                <td>{{$myassign->client_name}}</td>
                                <td>{{$myassign->rating}}/5 Rated</td>
                                <td>{{$myassign->review}}</td>
                                <td><time datetime="2008-02-14 20:00" >{{Carbon\Carbon::parse($myassign->created_at)->format('d F Y')}}</time></td>
                                
                            </tr> 
                            @endforeach
                            
                        </tbody>
                    

                    </table>
