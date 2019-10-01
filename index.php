<html>
  <head>
    <title>Timedoor Challenge - Level 8</title>
    <?php include('template/style.php') ?>
    <?php include('template/script.php') ?>
  </head>

  <body class="bg-lgray">
    <header>
      <?php include('template/header.php')?>
    </header>
    <main>
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 bg-white p-30 box">
              <div class="text-center">
                <h1 class="text-green mb-30"><b>Level 8 Challenge</b></h1>
              </div>
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control">
                <p class="small text-danger mt-5">*Your name must be 3 to 16 characters long</p>
              </div>
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control">
              </div>
              <div class="form-group">
                <label>Body</label>
                <textarea rows="5" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label>Choose image from your computer :</label>
                <div class="input-group">
                  <input type="text" class="form-control upload-form" value="No file chosen" readonly>
                  <span class="input-group-btn">
                    <span class="btn btn-default btn-file">
                      <i class="fa fa-folder-open"></i>&nbsp;Browse <input type="file" name="image" multiple>
                    </span>
                  </span>
                </div>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control">
              </div>
              <div class="mt-30 mb-30">
                <button class="btn btn-primary">Submit</button>
              </div>
              <div class="post">
                <div class="clearfix">
                  <div class="pull-left">
                    <h2 class="mb-5 text-green"><b>Here is your title</b></h2>
                  </div>
                  <div class="pull-right text-right">
                    <p class="text-lgray">05-05-2019<br/><span class="small">14:00</span></p>
                  </div>
                </div>
                <h4 class="mb-20">Yutaka Tokunaga <span class="text-id">-</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet, risus nec suscipit luctus, tortor nibh scelerisque est, nec suscipit justo odio id arcu. Nulla nec sagittis ante, non luctus nulla. Sed imperdiet ullamcorper tortor, ac vulputate mauris. In pulvinar metus eget imperdiet ullamcorper. Vivamus a dolor tempor diam sollicitudin interdum.</p>
                <div class="img-box my-10">
                  <img class="img-responsive img-post" src="http://via.placeholder.com/500x500" alt="image">
                </div>
                <form class="form-inline mt-50">
                  <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Password</label>
                    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                  </div>
                  <a type="submit" class="btn btn-default mb-2" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil p-3"></i></a>
                  <a type="submit" class="btn btn-danger mb-2" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash p-3"></i></a>
                </form>
              </div>
              <div class="post">
                <div class="clearfix">
                  <div class="pull-left">
                    <h2 class="mb-5 text-green"><b>Here is your title</b></h2>
                  </div>
                  <div class="pull-right text-right">
                    <p class="text-lgray">05-05-2019<br/><span class="small">14:00</span></p>
                  </div>
                </div>
                <h4 class="mb-20">Yutaka Tokunaga <span class="text-id">1234</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet, risus nec suscipit luctus, tortor nibh scelerisque est, nec suscipit justo odio id arcu. Nulla nec sagittis ante, non luctus nulla. Sed imperdiet ullamcorper tortor, ac vulputate mauris. In pulvinar metus eget imperdiet ullamcorper. Vivamus a dolor tempor diam sollicitudin interdum.</p>
                <div class="img-box my-15">
                  <img class="img-responsive img-post" src="http://via.placeholder.com/1200x500" alt="image">
                </div>
              </div>
              <div class="text-center mt-30">
                <nav>
                  <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">&lsaquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&rsaquo;</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <footer>
      <?php include('template/footer.php') ?>
    </footer>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" value="Yutaka Tokunaga">
            </div>
            <div class="form-group">
              <label>Title</label>
              <input type="text" class="form-control" value="Here is your title">
              <p class="small text-danger mt-5">*Your title must be 3 to 16 characters long</p>
            </div>
            <div class="form-group">
              <label>Body</label>
              <textarea rows="5" class="form-control">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet, risus nec suscipit luctus, tortor nibh scelerisque est, nec suscipit justo odio id arcu. Nulla nec sagittis ante, non luctus nulla. Sed imperdiet ullamcorper tortor, ac vulputate mauris. In pulvinar metus eget imperdiet ullamcorper. Vivamus a dolor tempor diam sollicitudin interdum.</textarea>
            </div>
            <div class="form-group row">
              <div class="col-md-4">
                <img class="img-responsive" alt="" src="https://via.placeholder.com/500x500">
              </div>
              <div class="col-md-8 pl-0">
                <label>Choose image from your computer :</label>
                <div class="input-group">
                  <input type="text" class="form-control upload-form" value="No file chosen" readonly>
                  <span class="input-group-btn">
                    <span class="btn btn-default btn-file">
                      <i class="fa fa-folder-open"></i>&nbsp;Browse <input type="file" name="image" multiple>
                    </span>
                  </span>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox">Delete image
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Delete Data</h4>
          </div>
          <div class="modal-body pad-20">
            <p>Are you sure want to delete this item?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      // INPUT TYPE FILE
      $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
      });

      $(document).ready( function() {
        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
            input.val(log);
          } else {
            if( log ) alert(log);
          }
        });
      });
    </script>
  </body>
</html>