<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ev.css">
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="container">
          <div class="d-flex align-items-center justify-content-between mt-5">
            <div>
               <b></b>
            </div>
            <button type="button" name="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#add">Add</button>
          </div>
          <table class="table table-bordered mt-3">
              <thead>
                <tr style="background-color: whitesmoke;">
                  <th scope="col">Name</th>
                  <th scope="col">Work</th>
                  <th scope="col">Salary</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Bintang</td>
                  <td>Frontend Dev</td>
                  <td> Rp 10000000</td>
                  <td><i class="far fa-trash-alt mx-2 text-danger"></i><i class="far fa-edit mx-2 text-info" data-toggle="modal" data-target="#edit-modal" ></i></td>
                </tr>
                <tr>
                  <td>Tasya</td>
                  <td>Backend Dev</td>
                  <td> Rp 12000000</td>
                  <td><i class="far fa-trash-alt mx-2 text-danger"></i><i class="far fa-edit mx-2 text-info" data-toggle="modal" data-target="#edit-modal" ></i></td>
                </tr>
              </tbody>
        </table>
        </div>

        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="form-tambah">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name...">
                    <input type="hidden" name="action" value="add">
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="work">
                      <option>Work...</option>
                      <option value="1">Frontend Dev</option>
                      <option value="2">Backend Dev</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="salary">
                      <option>Salary...</option>
                      <option value="1">10.000.000</option>
                      <option value="2">12.000.000</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-warning text-white" id="tambah">Add</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <i class="fas fa-check-circle m-3 text-success" id="check"></i>
                <div class="m-3">Berhasil Mengubah Data</div>
                <div class="btn btn-success text-white" id="ok">OK</div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="form-edit">
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name...">
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" name="id" id="id">
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="work" name="work">
                      <option>Work...</option>
                      <option value="1">Frontend Dev</option>
                      <option value="2">Backend Dev</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="salary" name="salary">
                      <option>Salary...</option>
                      <option value="1">10.000.000</option>
                      <option value="2">12.000.000</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-warning text-white" id="edit">edit</button>
              </div>
            </div>
          </div>
        </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src='js/ev.js'></script>
  </body>
</html>
