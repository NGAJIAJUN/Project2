
<div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">

                        <thead>
                            <tr>
                                <th>Project ID</th>
                                <th>Client Name</th>
                                <th>Location</th>
                                <th>Budget</th>
                                <th>Uploaded Date</th>
                                <th>Status</th>
                            </tr> 
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr> 
                                <td>{{$project->id}}</td>
                                <td>{{$project->client_name}}</td>
                                <td>{{$project->location}}</td>
                                <td>{{$project->budget}}</td>
                                <td><time datetime="2008-02-14 20:00" >{{Carbon\Carbon::parse($project->created_at)->format('d F Y')}}</time></td>
                                <td>Approved</td>
                            </tr> 
                            @endforeach
                            
                        </tbody>
                    

                    </table>
