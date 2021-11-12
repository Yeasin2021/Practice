


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/ckeditor/samples/js/sample.js')}}"></script>
    
    <link rel="stylesheet" href="{{asset('ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('ckeditor/samples/css/samples.css')}}">
    @toastr_css

    <title>Mail</title>
  </head>
  <body>
    
  <div class="row pt-5">
    <div class="col-8 offset-2">
        <div class="card">
            <div class="card-body">
                <form action="{{route('mail-sending')}}" method="post" enctype="matipart/data">
                 @csrf
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputTitle"  placeholder="Enter title" name="title" />
                        
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">To Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="mail"/>
                        
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group" >
                        <textarea name="body" id="editor" style="height: 600px;"></textarea>
                        
                    </div>
                        
                    </div>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                        
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>



    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script>
	initSample();
    </script>
    @jquery
    @toastr_js
    @toastr_render
  </body>
</html>