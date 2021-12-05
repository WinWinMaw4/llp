<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<div class="container">
    <div class="row my-5">
        <div class="col-12">
           <div class="d-flex justify-content-between mb-2">
               <h4>
                   Category List
               </h4>
               <a href="{{route('category.create')}}" class="btn btn-primary">Create New</a>
           </div>
            <table class="table table-bordered">
                <thead></thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Control</th>
                    <th>Created</th>
                </tr>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>
                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('category.destroy',$category->id)}}" method="post" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        {{$category->created_at}}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
