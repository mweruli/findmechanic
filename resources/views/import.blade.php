<html>
    <head>
    <title>test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>

    <body>
        <div class="content">
        <div class="card text-center">
            <div class="card-header">
              Featured
            </div>
            <form action="{{ route('employe.import') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="formFile" class="form-label">import</label>
                    <input class="form-control" name= "fileupload" type="file" id="formFile">
                  </div>
                  <button type="submit" class="btn btn-primary">Primary</button>
            </div>
        </form>
          </div>
        </div>
    </body>
</html>
