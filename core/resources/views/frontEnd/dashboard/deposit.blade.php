@extends('frontEnd.dashboard.dashboard_master')
@section('title', 'Deposit')
@section('dashboard')
    <style>
        .radio-box,.d-channel,.recomen-amount {
            display: flex;
            align-items: center;
            width: 120px;
            height: 70px;
            margin-top: 7px;
        }

        .radio-box input,.d-channel input, .recomen-amount input {
            display: none;
        }

        .radio-box > label, .d-channel > .dc-label, .recomen-amount > .recom-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            border: 2px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            justify-content: space-between;
            text-align: center;
            position: relative;

        }
        .radio-box > label{background: #efefef;}

        .radio-box input:checked+label {
            border-color: #fdcf09;
            background: #fff;
        }

        .radio-box label .percentage, .d-channel > .dc-label .percentage, .recomen-amount > .recom-label > .percentage {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #007bff;
            color: #fff;
            border-radius: 50%;
            padding: 5px;
            font-size: 12px;
        }


        .d-channel > input:checked+.dc-label {
            border-color: #fdcf09;
        }

        .recomen-amount > .recom-label {
    background-color: rgb(243, 245, 246);
    border-color: rgb(243, 245, 246);
    color: #818181;
    font-weight: 700;
    font-size: 15px;
}
        .recomen-amount input:checked+.recom-label {
            background-color: #fdcf09;
            color: #1a1a1a;
        }

        .radio-box>label>img {
            width: 44px;
            height: 44px;
        }

        .panel-notice {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding: 5px 5px;
            border-radius: 5px;
            background: #fff;
        }

        .right_panel_title {
            color: #000;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .right_panel_desc {
            font-size: 13px;
            line-height: 20px;
            margin-bottom: 10px;
            color: #000;
            font-weight: 400;
        }

        .tooltip-btn {
            background: #000;
            text-decoration: none;
            color: #fff;
            display: block;
            width: 20px;
            height: 20px;
            text-align: center;
            border-radius: 50%;
            font-size: 18px;
            font-weight: 700;
            padding: 0px 0px;
        }

        .tooltip-btn:hover {
            text-decoration: none;
            color: #fff;
        }
    </style>
    <div class="col-md-7">
        <div class="main-panel">
            <div class="row">
                <div class="col">
                    <div class="heading-title">
                        <h4>Deposit</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-auto">
                    <label>Deposit Option <span class="text-danger">*</span></label>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="radio-box">
                                <input type="radio" id="option1" name="deposit_option" value="nagad">
                                <label for="option1"><img
                                        src="{{ URL::asset('assets/frontend/img/logo/deposit-ewallet-nagad.svg') }}"
                                        alt=""> <span class="percentage">+3%</span></label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="radio-box">
                                <input type="radio" id="option2" name="deposit_option" value="rocket">
                                <label for="option2"><img
                                        src="{{ URL::asset('assets/frontend/img/logo/deposit-ewallet-rocket.svg') }}"
                                        alt=""> <span class="percentage">+3%</span></label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="radio-box">
                                <input type="radio" id="option3" name="deposit_option" value="bkash">
                                <label for="option3"><img
                                        src="{{ URL::asset('assets/frontend/img/logo/deposit-ewallet-bkash.svg') }}"
                                        alt=""> <span class="percentage">+3%</span></label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="radio-box">
                                <input type="radio" id="option4" name="deposit_option" value="upay">
                                <label for="option4"><img
                                        src="{{ URL::asset('assets/frontend/img/logo/deposit-ewallet-upay.svg') }}"
                                        alt=""> <span class="percentage">+3%</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Deposit Channel <span class="text-danger">*</span></label>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-channel">
                                <input type="radio" id="option5" name="deposit_channel" value="paytaka">
                                <label for="option5" class="dc-label">PAYTAKA<span class="percentage">+3%</span></label>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="d-channel">
                                <input type="radio" id="option6" name="deposit_channel" value="dpay">
                                <label for="option6" class="dc-label">DPAY <span class="percentage">+3%</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <label>Deposit Amount <span class="text-danger">*</span></label> <a class="tooltip-btn"
                                href="#" data-toggle="tooltip" data-placement="top"
                                title="Deposit minimum amount:400; maximum amount:30,000.00">?</a>
                        </div>
                        <input type="text" name="d_amount" id="d_amount" class="form-control" value="400">
                        @error('d_amount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="recomen-amount">
                        <input type="radio" id="option7" name="recom_amount" value="400">
                        <label for="option7" class="recom-label">400<span class="percentage">+3%</span></label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="recomen-amount">
                        <input type="radio" id="option8" name="recom_amount" value="5000">
                        <label for="option8" class="recom-label">5000 <span class="percentage">+3%</span></label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="recomen-amount">
                        <input type="radio" id="option9" name="recom_amount" value="10000">
                        <label for="option9" class="recom-label">10000 <span class="percentage">+3%</span></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                            <label>Promotion <span class="text-danger">*</span></label>
                        <select class="form-control" name="promotion">
                            <option selected disabled>No Bonus Selected</option>
                            <option>300% Welcome Back Bonus - 300.00%</option>
                            <option>50% Live Casino First Deposit Bonus - 50.00%</option>
                            <option>Sports 100% First Deposit Bonus - 100.00%</option>
                            <option>100% Slots First Deposit Bonus - 100.00%</option>
                            <option>Crash Game 50% First Deposit Bonus - 50.00%</option>
                            <option>Slots 5% Unlimited Deposit Bonus - 5.00%</option>
                            <option>Live Casino 5% Unlimited Deposit Bonus - 5.00%</option>
                            <option>Live Casino Weekly 20% Deposit Bonus - 20.00%</option>
                            <option>Slots 20% Weekly Deposit Bonus - 20.00%</option>
                        </select>
                        @error('d_amount')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-primary">Deposit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 pb-0" style="height: fit-content;">
        <div class="panel-notice">
            <p class="right_panel_title"><b>Important Notice</b></p>
            <p class="right_panel_title">1. Use Official Deposit &amp; Withdrawal Channels Only: </p>
            <p class="right_panel_desc">
                Kindly, deposit or withdraw funds through the designated deposit and withdrawal channels available on our
                website. Avoid using any unofficial or third-party platforms.
            </p>
            <p class="right_panel_title">2. Live Chat Support for Pending Transactions: </p>
            <p class="right_panel_desc">
                If your transaction remains pending for more than 15 minutes, please to reach out to our 24/7 live chat
                support.
                Our dedicated team is ready to assist you promptly and provide real-time updates on your transaction status.
            </p>
            <p class="right_panel_title">3. Caution Regarding Cash-Outs: </p>
            <p class="right_panel_desc">
                Do not directly cash-out to any previous e-wallet you have used for transfers before. Always follow our
                specified procedures to ensure the security and accuracy of your transactions.
            </p>
            <p class="right_panel_title">4. Use Provided E-Wallet Numbers: </p>
            <p class="right_panel_desc">
                When initiating a cash-out, ensure that you only use the e-wallet number provided by our platform. This
                helps us
                process your request efficiently and minimizes the risk of errors.
            </p>
            <p class="right_panel_desc">
                These guidelines are in place to safeguard your financial transactions and protect your account. If you have
                any
                questions or concerns, our customer support team is available 24/7 through live chat to assist you.
            </p>
        </div>
    </div>
@endsection
@push('js')
<script>
    // JavaScript to handle the radio button change event
    document.querySelectorAll('input[name="recom_amount"]').forEach((elem) => {
        elem.addEventListener("change", function(event) {
            document.getElementById('d_amount').value = event.target.value;
        });
    });
</script>
@endpush
