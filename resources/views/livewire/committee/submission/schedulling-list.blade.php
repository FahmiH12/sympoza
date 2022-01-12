
<h2>Conferences accepting submissions </h2>
<br> Halaman ini digunakan untuk menambahkan Jadwal <b>Add Schedule in this Page</b> to create one.


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
      <th scope="col">Area</th>
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
    @foreach($forms as $data)
    <tr>
      <th scope="row">
        {{$data['id']}}
      </th>
      <td>
        {{$data['topik_conference']}}
      </td>
      <td>
        {{$data['nama_conference']}}
      </td>
      <td>
        {{$data['nama_paper']}}
      </td>
      <td>
        {{$data['link_conference']}}
      </td>
      <td>{{$data['tempat']}}, {{$data['waktu']}}</td>
      <td>{{$data['deadline']}}</td>
      <td>
          <button style="background-color:blue; color:white; border:0; padding:5px 10px; border-radius:5px;">Edit</button>
          <button style="background-color:red; color:white; border:0; padding:5px 10px; border-radius:5px;">Delete</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

