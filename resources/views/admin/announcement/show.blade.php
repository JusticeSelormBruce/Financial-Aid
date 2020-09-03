<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm " data-toggle="modal"
        data-target="#exampleModalLongdel{{$list->id}}">
    <span class=" text-capitalize ">Read More</span>
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModalLongdel{{$list->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitledel{{$list->id}}"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                   
                        <h5 class="modal-title text-dark card-text" id="exampleModalLongTitledel{{$list->id}}">  ({{$list->title}}) </h5>
                   
                    <div class="row">
                        <div class="ml-auto mx-5  small">  <a type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">Cancel</span>
                        </a></div>
                    </div>
                 
                
                

            </div>
            <div class="modal-body" style="font-size: small!important;">

                <div class="jumbotron py-3">
                    <div class="row py-3">
                        <div class="mr-auto mx-2">Created By: <span class="mx-2">{{$list->user->name}}</span></div>
                    </div>
                    <div>
                        <img src="{{Storage::url($list->attachment)}}" alt="attachment" class="card-img-top" style="height: 50vh!important;">
                    </div>
                    <div class="card-text mx-2 pt-3 text-dark">
                       {{$list->body}}+
                    </div>
                </div>
            </div>
            <div class="model-footer">
                <div class="row alert-secondary alert py-1 mx-3">
                    <div class="ml-auto mx-4">Created On: <span class="mx-2">{{$list->created_at}}</span></div>
                </div>
            </div>

        </div>
    </div>
</div>

