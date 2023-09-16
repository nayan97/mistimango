@extends('frontend.layouts.app')
@section('main')
<main class="main">
            <!-- Start of Page Header -->
    
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li>Blog Single</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table>
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>User name</th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach ($users as $data )
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->phone->name}}</td>
                                </tr>  
                            @endforeach
                        <tbody>
                    </table>
                </div>
            </div>
          </div>
            <!-- End of Page Content -->
</main>

@endsection