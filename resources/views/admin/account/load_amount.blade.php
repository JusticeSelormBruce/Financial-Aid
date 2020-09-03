<!-- Button trigger modal -->
<button type="button" class="btn btn-light btn-sm" data-toggle="modal"
        data-target="#exampleModalLongdel">
    <span class=" text-capitalize ">Credit Applicants Account</span>
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModalLongdel" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitledel"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark card-text" id="exampleModalLongTitledel">
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">Cancel</span>
                </button>
            </div>
            <div class="modal-body mt-5" style="font-size: small!important;">
                <form action="/admin/credit-applicant-aacount" method="POST">
                @csrf
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <div class="row">
                        <div class="col-2"><input type="text"  class="form-control" value="GHC" readonly></div>
                        <div class="col-10"><input type="number" name="amount" required class="form-control"></div>
                    </div>
                    <div>
                        {{$errors->first('amount')}}
                    </div>
                </div>
                <div class="row">
                    <div class="mx-auto">
                        <button class="btn btn-primary" type="submit"><span class="mx-5">Disperse Funds</span></button>
                    </div>
                </div>
                </form>
            </div>


        </div>
    </div>
</div>

