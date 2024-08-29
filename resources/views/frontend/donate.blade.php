@extends('layouts/frontend_master')

@push('custom_css')
<style>
    #donation {
        padding: 50px 0;
        background-color: #f8f9fa;
    }
    .donation-form {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .donation-form h2 {
        margin-bottom: 30px;
        color: #333;
    }
    .amount-options {
        margin-bottom: 20px;
    }
    .amount-option {
        margin-right: 10px;
    }
    .input-group-text{
      height: 100%;
    }
    #custom_amount{
      height: 100%;
    }
</style>
@endpush

@section('content')

<section id="donation">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="donation-form">
                    <h2 class="text-center mb-4">Make a Donation</h2>
                    <form action="{{ route('donation.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Phone or Email</label>
                            <input type="text" class="form-control" id="contact" name="contact" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <div class="amount-options">
                                <div class="btn-group" role="group" aria-label="Amount options">
                                    <input type="radio" class="btn-check amount-option" name="amount" id="amount100" value="100" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="amount100">৳100</label>

                                    <input type="radio" class="btn-check amount-option" name="amount" id="amount500" value="500" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="amount500">৳500</label>

                                    <input type="radio" class="btn-check amount-option" name="amount" id="amount1000" value="1000" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="amount1000">৳1000</label>
                                    <input type="radio" class="btn-check amount-option" name="amount" id="amount1500" value="1500" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="amount1500">৳1500</label>
                                    <input type="radio" class="btn-check amount-option" name="amount" id="amount2000" value="2000" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="amount2000">৳2000</label>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">৳</span>
                                <input type="number" class="form-control" id="custom_amount" name="custom_amount" placeholder="Custom amount">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Donate Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('custom_js')
<script>
    $(document).ready(function() {
        // Validate Bangladesh phone number
        $.validator.addMethod("bdPhone", function(value, element) {
            return this.optional(element) || /^(?:\+88|88)?(01[3-9]\d{8})$/.test(value);
        }, "Please enter a valid Bangladesh phone number");

        // Form validation
        $("form").validate({
            rules: {
                name: "required",
                contact: {
                    required: true,
                    bdPhone: true
                },
                amount: "required"
            },
            messages: {
                name: "Please enter your name",
                contact: {
                    required: "Please enter your phone number or email",
                    bdPhone: "Please enter a valid Bangladesh phone number"
                },
                amount: "Please select or enter an amount"
            },
            errorElement: "div",
            errorPlacement: function(error, element) {
                error.addClass("invalid-feedback");
                error.insertAfter(element);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });

        // Handle custom amount input
        $("#custom_amount").on("input", function() {
            $(".amount-option").prop("checked", false);
        });

        $(".amount-option").on("change", function() {
            $("#custom_amount").val("");
        });
    });
</script>
@endpush
