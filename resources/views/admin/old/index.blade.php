<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/main_styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('open-iconic/font/css/open-iconic-bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}"/> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css"/>
    <link rel="stylesheet" href="{{asset('filepond/filepond.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  </head>
  <body>
    {{-- navbar --}}
    @include('admin.navbar')
    {{-- navbar --}}
    
    {{-- navbar --}}
    @include('admin.sidebar')
    {{-- navbar --}}

    {{-- product details --}}
    
    <!-- Product Details -->
    <div class="content">
        <div class="card m-5">
          <h2 class="card-header text-center">Dashboard Product</h2>
          <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @elseif (session('success'))
                <div class="alert alert-success" role="success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="#" data-toggle="modal" data-target="#add-product-modal" class="btn btn-primary m-1 mb-3" style="float: right;">Create Product <span class="oi oi-plus" title="plus" aria-hidden="true"></span></a>
            <div class="table-responsive">
                <table border="0" id="tableproduct" class="table table-hover" style="border-radius: 10px">
                    <thead>
                        <tr>
                            <td>Product Name</td>
                            <td>Price</td>
                            <td>Image</td>
                            <td>Description</td>
                            <td> </td>
                            <td>Action</td>
                            <td> </td>
                        </tr>                    
                    </thead>
                    <tbody>
                    @foreach ($products as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->price - $data->discount}}</td>
                            {{-- <td>{{$data->image}}</td> --}}
                            <td><img src="{{asset('storage/'.$data->image)}}" width="200px"></td>
                            <td>{{$data->description}}</td>
                            <td><a class="btn btn-success" href="{{route('product.show',$data->id)}}">Show</a></td>
                            <td>
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#edit-product-modal{{$data->id}}">Edit</button>
                                @include('admin.modal.edit-product');
                            </td>
                            <td>
                                <form action="{{route('product.destroy',$data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div> 
    </div>

    {{-- product details --}}

    {{-- modal --}}

    @include('admin.modal.add-product');


    {{-- modal --}}

    {{-- footer --}}

    

    {{-- footer --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
    {{-- <script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script> --}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
    <script type="text/javascript" src="{{asset('filepond/filepond.min.js')}}"></script>
    <script src="{{asset('filepond/filepond.jquery.js')}}"></script>

    <script>
        $(function(){

            // Turn input element into a pond
            $('.my-pond').filepond();

            // Turn input element into a pond with configuration options
            $('.my-pond').filepond({
                allowMultiple: true
            });

            $.fn.filepond.registerPlugin(FilePondPluginFileValidateSize);

            $.fn.filepond.setDefaults({
                maxFileSize: '3MB'
            });

            // Set allowMultiple property to true
            $('.my-pond').filepond('allowMultiple', false);
          
            // Listen for addfile event
            $('.my-pond').on('FilePond:addfile', function(e) {
                console.log('file added event', e);
            });

            // Manually add a file using the addfile method
            $('.my-pond').filepond('addFile', 'index.html').then(function(file){
              console.log('file added', file);
            });
          
            FilePond.setOptions({
                server: './'
            });

          });
    </script>

    <script>
        function edit(name,price,image,description,product_images){
            console.log(name);
        }

        $(document).ready( function () {
            $('#tableproduct').DataTable();
        } );

        $(document).ready( function () {
            $('#tb1').DataTable();
        } );
    </script>
  </body>
</html>