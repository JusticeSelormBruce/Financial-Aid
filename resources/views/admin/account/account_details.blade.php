<!-- Button trigger modal -->
<button type="button" class="btn text-primary   " data-toggle="modal"
        data-target="#exampleModalLongdelcredit">
    <span class=" text-capitalize ">Account Details</span>
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModalLongdelcredit" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLongTitledelcredit"
     aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark card-text" id="exampleModalLongTitledelcredit">
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">Cancel</span>
                </button>
            </div>
            <div class="modal-body mt-5" style="font-size: small!important;">
                    <div class="jumbotron">
                        <table class="table-striped" id="table_id">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Loaded By:</th>
                                    <th>Amount</th>
                                    <th>Date Time and Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($funds as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->amount}}</td>
                                    <td>{{$item->created_at}}</td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
                    <div class="modal-footer">
                        <div class="row mx-5">
                            <div class="mx-auto"><b>Total Credited Funds:</b> <span class="mx-2">[{{$funds->sum('amount')}}]</span><b>Grand Total</b> <span class="mx-2"></span>{{$grandTotal}}</div>
                        </div>
                    </div>

        </div>
    </div>
</div>

