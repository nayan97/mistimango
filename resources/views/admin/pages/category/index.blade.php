@extends('admin.layouts.app')
@section('main-section')
			
                <div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h2 class="card-title">Add Post Category</h2>
								</div>
								<div class="card-body">
                                    
                                    <table class="table table-striped">
                                        <thead> 
                                                <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Created at</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                      

                                        @forelse ($cat as $item)
                                        <tr>
                                            <td>{{$loop ->index + 1}}</td>
                                            <td>{{$item -> name}}</td>
                                           
                                            <td>{{$item -> created_at -> diffForHumans()}}</td>
                                            <td>
                                                <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                                <a class="btn btn-sm btn-warning" href="{{ route('category.edit', $item -> id)}}"><i class="fe fe-edit"></i></a>
                                                <form onclick="return confirm('Are you sure to delete this')" action="{{ route('category.destroy', $item ->      id ) }}" class="d-inline delete-form" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button style="background-color:red" class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
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
									<h3 class="card-title">Add new Data</h3>
                                 
								</div>
								<div class="card-body">


                                @include('validate')
									<form action="{{ route('category.store')}}" method="POST">
                                        @csrf
										<div class="form-group">
											<label>Post Category</label>
											<input name="name" type="text" class="form-control">
                                        </div>                                      
									
										<div class="text-right">
											<button style="background-color:#00ccff" type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
                            @endif
                            
                            @if( $type === 'edit')
							<div class="card">
								<div class="card-header">
                                    <div class="text-right">
                                          <a class="text-center btn btn-primary my-2" href="{{ route('category.index')}}">Back</a>
                                    </div>
                                     
									<h4 class="card-title"> Edit Data </h4>
                                    
								</div>
								<div class="card-body">
                                @include('validate')
								<form action="{{ route('category.update', $cats -> id )}}" method="POST">
                                        @csrf
                                        @method('PUT')
										<div class="form-group">
											<label>Name</label>
											<input name="name" value="{{$cats -> name}}" type="text" class="form-control">
                                        </div>
										<div class="text-right">
											<button style="background-color:#00ccff" type="submit" class="btn btn-primary">Update</button>
										</div>
									</form>
								</div>
							</div>
                            @endif


						</div>
					</div>

               
                
       
        
	<!-- /Page Wrapper -->

@endsection
