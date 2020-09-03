<!-- Button trigger modal -->
<button type="button" class="btn text-danger  btn-sm " data-toggle="modal"
        data-target="#exampleModalLongdel{{$list->id}}delete">
    <span class=" text-capitalize ">delete</span>
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModalLongdel{{$list->id}}delete" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitledel{{$list->id}}delete"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark card-text" id="exampleModalLongTitledel{{$list->id}}delete">
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">Cancel</span>
                </button>
            </div>
            <div class="modal-body" style="font-size: small!important;">
                <div class="jumbotron py-3">
                   <div class="row">
                       <div class="col-12">
                           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                               <div class="row">
                                   <div class="mx-auto">
                                       <a href="{{route('announcement.delete',['id'=>$list->id])}}" style="text-decoration: none!important;color: white">Delete</a>
                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>
                </div>
            </div>

        </div>
    </div>
</div>

