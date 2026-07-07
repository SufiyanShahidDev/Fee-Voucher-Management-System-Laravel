@extends('layouts.app')

@section('content')

<style>
    .voucher-wrapper {
        /* background: linear-gradient(135deg, #008080, #00b3b3); */
        background-color: #008080;
        padding: 40px 15px;
        min-height: 62.4vh;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .card {
        background: #fff;
        max-width: 900px;
        margin: auto;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .title {
        text-align: center;
        font-weight: bold;
        font-size: 20px;
        margin-bottom: 25px;
        color: #008080;
        position: relative;
    }

    .title::after {
        content: "";
        display: block;
        width: 80px;
        height: 3px;
        background: #008080;
        margin: 8px auto 0;
        border-radius: 5px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    label {
        font-size: 13px;
        margin-bottom: 5px;
        color: #333;
    }

    input,
    select {
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 14px;
        transition: 0.2s;
    }

    input:focus,
    select:focus {
        border-color: #008080;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 128, 128, 0.3);
    }

    .full-width {
        grid-column: span 2;
    }

    .btn-custom {
        margin-top: 20px;
        width: 100%;
        padding: 12px;
        background: linear-gradient(90deg, #008080, #00cccc);
        border: none;
        color: white;
        font-size: 15px;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-custom:hover {
        opacity: 0.9;
    }

    @media(max-width: 600px) {
        .full-width {
            grid-column: span 1;
        }
    }
</style>

<div class="voucher-wrapper">
    <div class="card">
        <div class="title">GENERATE YOUR VOUCHER</div>


        @if(session('success'))

        <script>
            alert("{{session('success')}}")
        </script>

        @endif

        <form method="post" action="/voucher">
            @csrf

            <div class="form-grid">

                <div class="form-group">
                    <label>Student ID</label>
                    <input type="text" name="studentid" placeholder="Enter Student ID" required>
                </div>

                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="fullname" placeholder="Enter Full Name" required>
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="number" placeholder="Enter Phone Number">
                </div>

                <div class="form-group full-width">
                    <label>Address</label>
                    <input type="text" name="address" placeholder="Enter Address">
                </div>

                <div class="form-group">
                    <label>Date</label>
                    <input type="date" name="date" required>
                </div>

                <div class="form-group">
                    <label>Payment Method</label>
                    <select name="paymentmethod" required>
                        <option value="cash">Cash</option>
                        <option value="online">Online</option>
                        <option value="cheque">Card</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Transaction ID / Cheque / Cash</label>
                    <input type="text" name="paymentid" placeholder="Enter Transaction ID" required>
                </div>

                <div class="form-group">
                    <label>Amount</label>
                    <input type="number" name="amount" placeholder="Enter Amount" required>
                </div>

            </div>

            <button class="btn-custom" type="submit">Generate Voucher</button>
        </form>
    </div>
</div>

@endsection