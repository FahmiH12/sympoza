<div>
    <br>
    @if($papers->isNotEmpty())
        <div class="table-responsive users-table">
            <table class="table table-striped table-sm data-table">
                <thead class="thead">
                    <tr>
                        <th width="30%">Title</th>
                        <th class="text-center" width="10%">Status</th>
                        <th class="text-center" width="5%">Edit</th>
                        <th class="text-center" width="5%">Authors</th>
                        <th class="text-center" width="5%">Withdraw</th>
                        <th class="text-center" width="5%">Copyright</th>
                        <th class="text-center" width="5%">Review</th>
                        <th class="text-center" width="5%">Final</th>
                    </tr>
                </thead>
                <tbody id="users-table">
                    @foreach($papers as $paper)
                        <tr>
                            <td>
                                {{$paper->title}}
                            </td>
                            <td class="text-center">
                                status
                            </td>
                            <td class="text-center">
                                <button class="btn btn-xs">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-xs">
                                    <i class="fas fa-user-edit"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-xs">
                                    <i class="fas fa-minus-circle" style="color: red"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-xs">
                                    <i class="far fa-copyright"></i>
                                </button>

                            </td>
                            <td class="text-center">
                                <button class="btn btn-xs">
                                    <i class="far fa-file"></i>
                                </button>
                            </td class="text-center">
                            <td class="text-center">
                                <button class="btn btn-xs">
                                    <i class="far fa-file-alt"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @else
        <h2>Conferences accepting submissions </h2>
        <br> Halaman ini digunakan untuk menambahkan Jadwal <b>Add Schedule in this Page</b> to create one.
    @endif

<br> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Add Schedule</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Judul:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tgl/bln/thn:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Pesan:</label>
          <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Upload</span>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
        </div>
      </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<br>
<br>

<b>Name of conference or journal</b>
<div class="col-md-4">
    <input type="text" class="form-control pencarian"  placeholder="Name conference or journal" id="textbox"><br>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Conference</th>
      <th scope="col">Name</th>
      <th scope="col">Home page, Details</th>
      <th scope="col">Where & When</th>
      <th scope="col">Latest Deadline</th>
      <th scope="col">Submit</th>
      <th style="text-align:center;" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Azis</td>
      <td>Ot</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
          <button style="background-color:blue; color:white; border:0; padding:5px 10px; border-radius:5px;">Edit</button>
          <button style="background-color:red; color:white; border:0; padding:5px 10px; border-radius:5px;">Delete</button>
        </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jihad</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>Jacob</td>
      <td><button style="background-color:blue; color:white; border:0; padding:5px 10px; border-radius:5px;">Edit</button>
          <button style="background-color:red; color:white; border:0; padding:5px 10px; border-radius:5px;">Delete</button>
        </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>Larry</td>
      <td><button style="background-color:blue; color:white; border:0; padding:5px 10px; border-radius:5px;">Edit</button>
          <button style="background-color:red; color:white; border:0; padding:5px 10px; border-radius:5px;">Delete</button>
        </td>
    </tr>
  </tbody>
</table>
