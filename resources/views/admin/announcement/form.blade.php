<style>
    .avatar {
        height: 100px !important;
        width: 100px !important;
    }
</style>
<div class="jumbotron py-1">
    <div class="mx-5">
        <div class="row no-gutters py-2">
            <div class="col-lg-2 col-md-4 col-sm-12">
                <label for="title">Title:</label>
            </div>
            <div class="col-lg-10 col-md-8 col-sm-12 input-group-sm">
                <input type="text" class="form-control" required name="title"
                       value="{{old('title') ?? $data->title ?? ''}}">
            </div>
        </div>
        <div class="row no-gutters py-2">
            <div class="col-lg-2 col-md-4 col-sm-12">
                <label for="body">Body:</label>
            </div>
            <div class="col-lg-10 col-md-8 col-sm-12 input-group-sm">
                <textarea name="body" id="" cols="30" rows="10" class="form-control"
                          required> {{old('body') ?? $data->body ?? ''}}</textarea>
            </div>
        </div>
        <div class="row no-gutters py-2">
            <div class="col-lg-2 col-md-4 col-sm-12">
                <label for="attachment">Attachment</label>
            </div>
            @if( Route::current()->getName() == 'announcement.edit')
                <div class="col-lg-10 col-md-10 col-sm-12 input-group-sm">
                    <div class="row">
                        <div>
                            <img src="{{Storage::url($data ->attachment ?? '')}}" alt="attachment" class="card-img-top"
                                 style="height: 50vh!important;">
                        </div>
                    </div>
                    @else
                        <div class="col-lg-4 col-md-4 col-sm-12 input-group-sm">
                            <input type="file" name="attachment" @if(Route::current()->getName() == 'announcement.edit') required @endif
                                   onchange="document.getElementById('value').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 input-group-sm">
                            <img class="avatar img-raised img-fluid" id="value"/>
                        </div>
                    @endif
                </div>


        </div>

    </div>
</div>
