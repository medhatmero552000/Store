@extends('layouts.admin')
@section('title','Dashboard | Home')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <!-- كارت BTC -->
                    <div class="mb-4 col-xl-3 col-md-6 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="pb-0 card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                        </div>
                                        <div class="pl-2 col-5">
                                            <h4>إجمالى المبيعات</h4>
                                            {{-- <h6 class="text-muted">Bitcoin</h6> --}}
                                        </div>
                                        {{-- <div class="text-right col-5">
                                            <h4>$9,980</h4>
                                            <h6 class="success darken-4">31% <i class="la la-arrow-up"></i></h6>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- كارت ETH -->
                    <div class="mb-4 col-xl-3 col-md-6 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="pb-0 card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc ETH info font-large-2" title="ETH"></i></h1>
                                        </div>
                                        <div class="pl-2 col-5">
                                            <h4>إجمالى الطلبات</h4>
                                            {{-- <h6 class="text-muted">Ethereum</h6> --}}
                                        </div>
                                        {{-- <div class="text-right col-5">
                                            <h4>$1,230</h4>
                                            <h6 class="danger darken-4">-5% <i class="la la-arrow-down"></i></h6>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- كارت XRP -->
                    <div class="mb-4 col-xl-3 col-md-6 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="pb-0 card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc XRP primary font-large-2" title="XRP"></i></h1>
                                        </div>
                                        <div class="pl-2 col-5">
                                            <h4>عدد المنتجات</h4>
                                            {{-- <h6 class="text-muted">Ripple</h6> --}}
                                        </div>
                                        {{-- <div class="text-right col-5">
                                            <h4>$0.52</h4>
                                            <h6 class="success darken-4">12% <i class="la la-arrow-up"></i></h6>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="xrp-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- كارت LTC (تم التعديل عليه) -->
                    <div class="mb-4 col-xl-3 col-md-6 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="pb-0 card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc LTC success font-large-2" title="LTC"></i></h1>
                                        </div>
                                        <div class="pl-2 col-5">
                                            <h4>عدد العملاء</h4>
                                            {{-- <h6 class="text-muted">Litecoin</h6> --}}
                                        </div>
                                        {{-- <div class="text-right col-5">
                                            <h4>$210</h4>
                                            <h6 class="danger darken-4">-3% <i class="la la-arrow-down"></i></h6>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="ltc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!-- Candlestick Multi Level Control Chart -->

                <!-- Sell Orders & Buy Order -->
                <div class="row match-height">
                    <!-- أحدث الطلبات -->
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">أحدث الطلبات</h4>
                                <div class="heading-elements">
                                    <p class="mb-0 text-muted">إجمالى الطلبات: 6542.56585</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-de">
                                        <thead>
                                            <tr>
                                                <th>رقم الطلب</th>
                                                <th>العميل</th>
                                                <th>حالة الطلب</th>
                                                <th>السعر (ج.م)</th>
                                                <th>الإجمالى</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-success bg-lighten-4">
                                                <td>10583</td>
                                                <td>مدحت أحمد</td>
                                                <td>منتهى</td>
                                                <td>3500</td>
                                                <td>3500</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- أخر التقييمات -->
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">أخر التقييمات</h4>
                                <div class="heading-elements">
                                    <p class="mb-0 text-muted">Total USD available: 9065930.43</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-de">
                                        <thead>
                                            <tr>
                                                <th>العميل</th>
                                                <th>المنتج</th>
                                                <th>التقييم</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-danger bg-lighten-4">
                                                <td>مدحت أحمد</td>
                                                <td>ساعة يد</td>
                                                <td>5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--/ Sell Orders & Buy Order -->
                <!-- Active Orders -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Active Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <td>
                                        <button class="btn btn-sm round btn-danger btn-glow"><i class="la la-close font-medium-1"></i> Cancel all</button>
                                    </td>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-de">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Amount BTC</th>
                                            <th>BTC Remaining</th>
                                            <th>Price</th>
                                            <th>USD</th>
                                            <th>Fee (%)</th>
                                            <th>Cancel</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td>11900.12</td>
                                            <td>$ 6979.78</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:50:50</td>
                                            <td class="danger">Sell</td>
                                            <td><i class="cc BTC-alt"></i> 1.38647</td>
                                            <td><i class="cc BTC-alt"></i> 0.38647</td>
                                            <td>11905.09</td>
                                            <td>$ 4600.97</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:49:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.45879</td>
                                            <td><i class="cc BTC-alt"></i> 0.45879</td>
                                            <td>11901.85</td>
                                            <td>$ 5460.44</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.89877</td>
                                            <td><i class="cc BTC-alt"></i> 0.89877</td>
                                            <td>11899.25</td>
                                            <td>$ 10694.6</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="danger">Sell</td>
                                            <td><i class="cc BTC-alt"></i> 0.45712</td>
                                            <td><i class="cc BTC-alt"></i> 0.45712</td>
                                            <td>11908.58</td>
                                            <td>$ 5443.65</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td>11900.12</td>
                                            <td>$ 6979.78</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Active Orders -->
            </div>
        </div>
    </div>
@endsection
