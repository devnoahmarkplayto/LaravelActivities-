

<div class="container" style="position:absolute;
    left:-100;
    
    margin-left:auto;
    margin-right:auto;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
           
            <br><br><br><br>
            

                <a class="btn button btn-info" href="/post/create">Create New</a>
                    <table class="table" >
                        <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Title </th>
                                    <th> Description </th>
                                    <th> Image </th>
                                  
                                </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $data)
                              <tr>
                                    <td> {{ $data->id }} </td>
                                    <td> {{ $data->title }} </td>
                                    <td> {{ $data->description }} </td>
                                    <td><img src="{{asset('storage/img/'.$data->img.'')}}"> </td>                              
                                    <td> <a  href="/post/{{$data->id}}" class="btn btn-info"> View </a> </td>
                                    <td> <a  href="/post/{{$data->id}}/edit" class="btn btn-warning"> Edit </a> </td>
                                    <td> 
                                    <form action="{{ route('post.destroy', $data->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete </button>

                                    </form>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                
            
        </div>
    </div>
</div>