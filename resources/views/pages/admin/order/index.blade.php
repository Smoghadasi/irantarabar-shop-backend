@extends('layouts.dashboard')

@section('title')
    index orders
@endsection

@section('content')
    <div class="card">
        <div class="card-header heading-color">
        </div>
        <div class="card-body">
            <!-- Content Row -->
            <div class="row">

                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                        <h5 class="font-weight-bold mb-3 mb-md-0">لیست سفارشات ({{ $orders->total() }})</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>نام کاربر</th>
                                    <th>وضعیت</th>
                                    <th>مبلغ</th>
                                    <th>نوع پرداخت</th>
                                    <th>وضعیت پرداخت</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $key => $order)
                                    <tr>
                                        <th>
                                            {{ $orders->firstItem() + $key }}
                                        </th>
                                        <th>
                                            {{ $order->user->name == null ? 'کاربر' : $order->user->name }}
                                        </th>
                                        <th>
                                            {{ $order->status }}
                                        </th>
                                        <th>
                                            {{ number_format($order->total_amount) }}
                                        </th>
                                        <th>
                                            {{ $order->payment_type }}
                                        </th>
                                        <th>
                                            {{ $order->payment_status }}
                                        </th>
                                        <th>
                                            <a class="btn btn-sm btn-outline-success"
                                                href="{{ route('admin.order.show', ['order' => $order->id]) }}">نمایش</a>
                                            <a class="btn btn-sm btn-outline-info mr-3"
                                                href="{{ route('admin.order.edit', ['order' => $order->id]) }}">ویرایش</a>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        {{ $orders->render() }}
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
