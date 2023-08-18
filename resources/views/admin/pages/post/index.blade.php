@extends('admin.layouts.app')
@section('main-section')
			
                <div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Posts</h4>
								</div>
								<div class="card-body">
                                    
                                    @include('validate')


                                    <table class="table table-striped">
                                        <thead> 
                                                <tr>
                                                <td>#</td>
                                                <td>Title</td>
                                                <td>category</td>
                                                <td>Content</td>
                                                <td>photo</td>
                                                <td>Created at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      

                                        @forelse ($post as $item)
                                        <tr>
                                            <td>{{$loop ->index + 1}}</td>
                                            <td>{{$item -> title}}</td>
                                            <td>
                                                
                                                        
                                                            {{$item -> category_id}}
                                                          
                                            </td>
                                            <td>{!! Str::of(htmlspecialchars_decode($item -> content)) -> words(8) !!}</td>
                                            <td>
                                                <img style="width: 60px; height: 60px; object-fit: cover;" src="{{ url('img/post/' . $item -> photo ) }}" alt="">
                                            </td>
                                            <td>{{$item -> created_at -> diffForHumans()}}</td>
                                            <td>
                                                <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                                <a class="btn btn-sm btn-warning" href="{{ route('post.edit', $item -> id)}}"><i class="fe fe-edit"></i></a>
                                                <form onclick="return confirm('Are you sure to delete this')" action="{{ route('post.destroy', $item ->      id ) }}" class="d-inline delete-form" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                       </tr> 
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <p>No Data Found</p>
                                            </td>
                                        </tr>
                                       
                                        @endforelse
                                           
                                     
                                        </tbody>
                                    </table>
								
								</div>
							</div>
						</div>
						<div class="col-md-4">

                            @if( $type === 'add')
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add new Data</h4>
								</div>
								<div class="card-body">


									<form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
										<div class="form-group">
											<label>Title</label>
											<input name="title" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Content</label>
											<textarea name="content" rows="4" cols="50"></textarea >  
                                        </div>
                                 
                                        <div class="form-group">
											<label>Categores</label>  
                    							<select name="cats" id="">
                                                            <option value="">Select Caregory</option>
                                                   @foreach ($cats as $cat)
                                                          <option value="{{ $cat -> id}}">{{ $cat -> name}}</option>
                                                    @endforeach
                                                </select>                   
										</div>   
                                        <div class="form-group">
											<label>Photo</label>
                                            <br>
										    <input name="photo" type="file">
                                        </div>

										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
                            @endif
                            
                            @if( $type === 'edit')
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Update staff Data</h4>
								</div>
								<div class="card-body">

									<form action="{{ route('post.update', $posts-> id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
										<div class="form-group">
											<label>Name</label>
											<input name="title" value="{{ $posts -> title}}" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
											<label>Profile Description</label>
											<textarea name="content" rows="4" cols="50">{{ $posts -> content}}</textarea >  
                                        </div>
                                        <div class="form-group">
											<label>Categores</label>  
                    							<select name="cats" id="">
                                                    <option value=""> Select Category</option>
                                                   @foreach ($cats as $cat)
                                                          <option value="{{ $cat -> id}}" {{$posts->category_id == $cat->id ? 'selected':''}}>
                                                            {{ $cat -> name}}
                                                        </option>
                                                    @endforeach
                                                </select>                   
										</div>  
                                        <div class="form-group">
											<label>Photo</label>
                                            <br>
                                            <img style="width: 60px; height: 60px; object-fit: cover;" src="{{ url('img/post/' . $posts -> photo ) }}" alt="">
										    <input name="photo" type="file">
                                        </div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Update</button>
										</div>
									</form>
								</div>
							</div>
                            @endif


						</div>
					</div>

               
                
       
        
	<!-- /Page Wrapper -->

@endsection
