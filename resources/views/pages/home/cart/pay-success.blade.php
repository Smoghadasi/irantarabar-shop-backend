@extends('layouts.app')
@section('content')
<!-- start main content -->

<div class="content">
    <div class="container-fluid">

        <style>
            .line-step-box.complete:nth-child(3)::before {
                width: 100%;
            }
            .line-step-box.complete:nth-child(2)::before {
                width: 100%;
            }
            .line-step-box.complete:nth-child(1)::before {
                width: 100%;
            }
        </style>

        <div class="line-step-container d-sm-block d-none">
            <div class="line-step">
                <div class="line-step-boxs">
                    <div class="line-step-box complete">
                        <a href="">
                            <p>سبد خرید</p>
                            <div class="icon">
                                1
                            </div>
                        </a>
                    </div>
                    <div class="line-step-box complete">
                        <a href="">
                            <p>جزییات پرداخت</p>
                            <div class="icon">
                                2
                            </div>
                        </a>
                    </div>
                    <div class="line-step-box complete">
                        <a href="">
                            <p>تکمیل سفارش</p>
                            <div class="icon">
                                3
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart-product-item">
            <div class="container-fluid">

                <div class="alert bg-white shadow-box">


                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <div class="payment">
                                <div class="text-center">
                                    <img src="assets/img/success-payment.svg" alt="">
                                    <h6 class="mt-3 text-success fs-5 fw-bold">پرداخت شما موفق بود!</h6>
                                </div>
                                <div class="payment-detail">
                                    <div class="payment-detail-item">
                                        <h6 class="text-muted h5 fw-light">تاریخ و زمان</h6>
                                        <h5>20 آذر 1402 ساعت 21:28</h5>
                                    </div>
                                    <div class="payment-detail-item">
                                        <h6 class="text-muted h5 fw-light">وضعیت</h6>
                                        <h5 class="success-label">پرداخت موفق</h5>
                                    </div>
                                    <div class="payment-detail-item">
                                        <h6 class="text-muted h5 fw-light">شماره پیگیری</h6>
                                        <h5>5269531</h5>
                                    </div>
                                    <div class="payment-detail-item">
                                        <h6 class="text-muted h5 fw-light">نوع عملیات</h6>
                                        <h5>پرداخت اعتباری</h5>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="" class="mt-5 fw-bold fs-5 span-primary bg-transparent rounded-0 d-inline-block">رفتن به پنل کاربری</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>
</div>

<!-- end main content -->
@endsection
