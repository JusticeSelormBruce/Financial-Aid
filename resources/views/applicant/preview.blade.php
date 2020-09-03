@extends('layouts.applicant')
@section('render')

<div class="container-fluid">
    <div class="jumbotron">
      
        <form action="/submit-questionnaire" method="POST">
            @csrf
            <div class="container pt-5">
                <div class="jumbotron py-1">
                    <div class="row">
                        <div class=" h5 alert alert-info w-100 py-0">
                            <div class="row">
                                <div class="mx-auto"><b><u>Preview</u></b></div>
                            </div>
                        </div>
                    </div>
                
                    <div class="card bg-light">
                        @foreach ($survey as $item)
                        <div class=" py-1 mx-2">
                            <b>{{$item->id}}.</b> <span class="mx-2"><b>{{$item->question}}</b></span>
                        </div>
                    
                            @foreach ($item->labels as $list)
                           <div class="row mx-5"> <input type="radio" name="{{$item->name}}" value="{{$list->value}}" 
                            @foreach ($previews as $preview)
                               @if ($list->key == $preview->key)
                                   checked
                                   @else
                                   ''
                               @endif
                           @endforeach
                           ><span class="mx-2">{{$list->label}}</span></div>
                          
                            @endforeach
                           
                        
                        <hr>
                            
                        @endforeach
                       
                    </div>
                    
                   
        
        
                </div>
            </div>
           <div class="row pt-2">
               <div class="mx-auto">
                   <button class="btn btn-primary btn-sm" type="submit"><span class="mx-2">Submit Form</span></button>
               </div>
           </div>
        </form>
       

    </div>
</div>
@endsection

 