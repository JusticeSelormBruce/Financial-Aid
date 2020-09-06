<style>
    .line {
        background-color: #cce5ff;

    }

    hr {
        margin: 0.3rem;
    }

    .bg {
        background-color: white;
    }

    div {
        font-family: -apple-system;
        font-size: 11px !important;
    }

</style>
<div class="">
    <h3>Personal Information</h3>
    <div class="row py-2">
        <div class="mx-auto">
            <div class="row">
                <img src="{{Storage::url($student->avatar)}}"
                    style="height: 100px!important; width: 100px!important; border-image: initial" alt=""
                    class="avatar">

            </div>
        </div>
    </div>


    <div class="row line py-2 text-uppercase">
        <div class="col-3">Title</div>
        <div class="col-3">Surname</div>
        <div class="col-3">First Name</div>
        <div class="col-3">Middle Name</div>
    </div>
    <div class="row py-2 bg text-uppercase">
        <div class="col-3">
            @if ($student->registed->gender  == 'Male')
                Mr.
            @else
                Mrs.
            @endif
        </div>
        <div class="col-3">{{ $student->lastname }}</div>
        <div class="col-3">{{ $student->firstname }}</div>
        <div class="col-3">{{ $student->middlename }}</div>
    </div>
    <div class="row line py-2 text-uppercase">
        <div class="col-3">Sex</div>
        <div class="col-3">Date of Birth</div>
        <div class="col-3">Place Of Birth</div>
        <div class="col-3">SSNIT</div>
    </div>
    <div class="row py-2 bg text-uppercase">
        <div class="col-3">{{ $student->registed->gender }}</div>
        <div class="col-3">{{ $student->dob }}</div>
        <div class="col-3">{{ $student->placeofbirth }}</div>
        <div class="col-3">{{ $student->ssn }}</div>
    </div>
    <div class="row line py-2 text-uppercase">
        <div class="col-3">Entry Level</div>
        <div class="col-3">Current Level</div>
        <div class="col-3">Study Mode</div>
        <div class="col-3">Telephone</div>
    </div>
    <div class="row py-2 bg text-uppercase">
        <div class="col-3">{{ $student->entry }}</div>
        <div class="col-3">{{ $student->current }}</div>
        <div class="col-3">{{ $student->studymode }}</div>
        <div class="col-3">{{ $student->address_telephone }}</div>
    </div>
    <div class="row line py-2 text-uppercase">
        <div class="col-3">Amount Owing</div>
        <div class="col-3">Date</div>
        <div class="col-3">Name of Guardian</div>
        <div class="col-3">Guardian Nationality</div>
    </div>
    <div class="row py-2 bg text-uppercase">
        <div class="col-3">ghc <span class="mr-2"></span>{{ $student->owe }}</div>
        <div class="col-3">{{ $student->date1 }}</div>
        <div class="col-3">{{ $student->guardian_name }}</div>
        <div class="col-3">{{ $student->country->countryname }}</div>
    </div>
    <div class="row line py-2 text-uppercase">
        <div class="col-3">Guardian  Occupation and Rank</div>
        <div class="col-3">Guardian Address</div>
        <div class="col-3">Guardian Phone</div>
        <div class="col-3">Date</div>
    </div>
    <div class="row py-2 bg text-uppercase">
        <div class="col-3">{{ $student->occupation_rank }}</div>
        <div class="col-3">{{ $student->guardian_address_telephone }}</div>
        <div class="col-3">{{ $student->guardian_telephone }}</div>
        <div class="col-3">{{ $student->date2 }}</div>
    </div>
   

</div>
