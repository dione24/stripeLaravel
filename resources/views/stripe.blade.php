@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Choisir un plan:</div>
                <div class="card-body">
                    <div class="row">
                        <script async src="https://js.stripe.com/v3/pricing-table.js"></script>
                        <stripe-pricing-table pricing-table-id="prctbl_1MrNWUFnmqYSR7bLlDx8Yfcc"
                            publishable-key="pk_test_51JSkt1FnmqYSR7bLVCSV1vpMzMnXmo4jMhDsmR6U8arCqchunc2iGYBMj7c3W4Wd152E7xSQCAux9AdeoJ4e3KlD00nJjBaUyY">
                        </stripe-pricing-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection