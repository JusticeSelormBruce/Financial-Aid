<!-- Button trigger modal -->
<button type="button" class="btn text-light   btn-primary " data-toggle="modal"
        data-target="#exampleModalLongdel{{$data->id}}">
   <span class="text-capitalize"> Change Attachment</span>
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModalLongdel{{$data->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitledel{{$data->id}}"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark card-text" id="exampleModalLongTitledel{{$data->id}}"> Change Attachment
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"  class="h5">Cancel</span>
                </button>
            </div>
            <div class="modal-body" style="font-size: small!important;">
                <div class="jumbotron py-3">
                    <form action="{{route('attachment.update')}}" method="post" enctype="multipart/form-data" >

                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="input-group-sm">
                            <input type="file" name="attachment" required
                                   onchange="document.getElementById('value').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class=" input-group-sm pt-3">
                            <img class=" w-100 h-100 img-raised img-fluid" id="value"/>
                        </div>

                        <div class="row ">
                            <div class="mx-auto">
                                <button class="btn btn-success btn-sm" type="submit">   <span class="mx-5">Change Attachment</span></button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>
</div>

