<div class="container">
    
<div class="form-group input-group-sm">
    <div class="row">
        <div class="col-4"><input type="text" placeholder="First Name" name="lastname" class="form-control" value="{{old('lastname')}}" required></div>
        <div class="col-4"><input type="text" placeholder="Last Name" name="firstname" class="form-control" value="{{old('firstname')}}" required></div>
        <div class="col-4"><input type="text" placeholder="Middle Name" name="middlename" class="form-control" value="{{old('middlename')}}" ></div>
    </div>
    <div class="row pt-2">
        <div class="col-4"> <small class="ml-3">Gender</small><input type="text"  class="form-control" value="{{$applicant->gender}}" required disabled></div>
        <div class="col-4"> <small class="ml-3">Index Number</small><input type="text" class="form-control" value="{{ $applicant->index_number}}" required disabled></div>
        <div class="col-4"> <small class="ml-3">Program</small><input type="text"  class="form-control" value="{{ $applicant->program}}" disabled></div>
    </div>
    <div class="row py-2">
        <div class="col-4"><input type="date" placeholder="Dath Of Birth" name="dob" class="form-control" value="{{old('dob')}}" required>
        <small class="mx-2">Date of Birth</small></div>
        <div class="col-4"><input type="text" placeholder="Place of Birth" name="placeofbirth" class="form-control" value="{{old('placeofbirth')}}" required></div>
        <div class="col-4">
            <select name="country_id" id="" class="form-control py-2" required>  
                <option value="">Nationality</option>
                @foreach ($countries as $item)
                <option value="{{$item->id}}">{{$item->countryname}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-4"><input type="text" placeholder="Social Security Number" name="ssn" class="form-control" value="{{old('ssn')}}" ></div>
        <div class="col-4"><select  class="form-control py-2" required name="entry" id="" required>
            <option value="">Entry Level</option>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
            <option value="400">400</option>
            </select></div>
        <div class="col-4"><select  class="form-control py-2" required  name="current" id="" required>
            <option value="">Current Level</option>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="300">300</option>
            <option value="400">400</option>
            </select></div>
    </div>
    <div class="row py-2">
        <div class="col-4"><input type="text" placeholder="Home Address /  Telephone" name="address_telephone" class="form-control" value="{{old('address_telephone')}}" required>
       </div>
        <div class="col-4"><input type="number" placeholder="Amount Owing" name="owe" class="form-control" value="{{old('owe')}}" required></div>
        <div class="col-4">
            <select name="studymode" id="" class="form-control py-2" required>  
                <option value="">Study Mode</option>
                <option value="Morning">Morning</option>
                <option value="Evening">Evening</option>
                <option value="Weekend">Weekend</option>
            </select>
        </div>
    </div>
    <div class="row py-2">

        <div class="col-4"><input type="text" placeholder="Date" name="date1" class="form-control" value="{{$date->format('m,d,Y') ?? old('date1')}}" required readonly></div>
        <div class="col-4"><input type="text" placeholder="Guardian  Name" name="guardian_name" class="form-control" value="{{old('guardian_name')}}" required></div>
        <div class="col-4">
            <select name="guardian_nationality" id="" class="form-control py-2" required>  
                <option value="">Gaurdian Nationality</option>
                @foreach ($countries as $item)
                <option value="{{$item->id}}">{{$item->countryname}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-4"><input type="text" placeholder="Gaurdian Occupatioin and Rank" name="occupation_rank" class="form-control" value="{{old('occupation_rank')}}" required></div>
        <div class="col-4"><input type="text" placeholder="Guardian Address" name="guardian_address_telephone" class="form-control" value="{{old('guardian_address_telephone')}}" required></div>
        <div class="col-4"><input type="text" placeholder="Guardian  Telephone" name="middlename" class="form-control" value="{{old('middlename')}}" ></div>
    </div>
</div>
</div>