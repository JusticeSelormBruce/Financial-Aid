

<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm w-100" data-toggle="modal" data-target="#exampleModalLong">
    <span class=" mx-3"> Add Registed Student List for this semester</span>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle "></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="jumbotron">
                    <form action="/upload-student-list" method="POST" enctype="multipart/form-data">
                    @csrf

                     <div class="form-group input-group-sm">
                        <label for="name">Class List (.xcel)</label>
                        <br>
                     <label for=""> <input type="file" name="file">Upload File</label>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                          <button class="btn btn-dark btn-sm" type="submit">  <span class="mx-5">Save</span></button>
                        </div>
                    </div>
                </form>
                  </div>
              </div>

          </div>
      </div>
  </div>

