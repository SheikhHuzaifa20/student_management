<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1 class="text-center">All Students Record</h1>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</button>
</div>

    <table class="table table-bordered table-striped my-4">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>Batch</th>
                <th>faculty</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Huzaifa</td>
                <td>2308b</td>
                <td>Muddsair</td>
                <td class="d-flex gap-1"><button class="btn btn-primary">Edit</button><button class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Arham</td>
                <td>2308b</td>
                <td>Muddsair</td>
                <td class="d-flex gap-1"><button class="btn btn-primary">Edit</button><button class="btn btn-danger">Delete</button></td>
            </tr>
        </tbody>
    </table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
        <div class="my-2">
            <input type="text" name="Name" placeholder="Name" class="form-control">
        </div>
        <div class="my-2">
            <input type="text" name="Batch" placeholder="Batch" class="form-control">
        </div>
        <div class="my-2">
            <input type=" text" name="Faculty" placeholder="Faculty" class="form-control">
        </div>
        <div class="my-2 d-flex justify-content-center">
            <button class="btn btn-primary">Add Student</button>
        </div>
        </form>

      </div>
      
    </div>
  </div>
</div>


</div>
