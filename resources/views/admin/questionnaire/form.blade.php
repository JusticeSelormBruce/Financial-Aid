
    <div class="container pt-5">
        <div class="jumbotron py-1">
            <div class="row">
                <div class="mx-auto h5 alert alert-info w-100 py-0">
                    <div class="row">
                        <div class="mx-auto"><b><u>Questionnaire for the Survey on Poverty</u></b></div>
                    </div>
                </div>
            </div>
            <div class="alert alert-success py-1">
                <div class="row">
                    <div class="mx-auto">DEMOGRAPHIC SECTION</div>
                </div>
            </div>
            <div class="card bg-light">
                @foreach ($survey as $item)
                <div class=" py-1 mx-2">
                    <b>{{$item->id}}.</b> <span class="mx-2"><b>{{$item->question}}</b></span>
                </div>
            
                    @foreach ($item->labels as $list)
                   <div class="row mx-5"> <input type="radio" name="{{$item->name}}" value="{{$list->key}}"><span class="mx-2">{{$list->label}}</span></div>
                  
                    @endforeach
                   
                
                <hr>
                    
                @endforeach
               
            </div>
            
           


        </div>
    </div>
