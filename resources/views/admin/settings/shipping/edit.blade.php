@extends('layouts.admin')
@section('title', 'إعدادات التوصيل')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="mb-2 content-header-left col-md-6 col-12">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                            <li class="breadcrumb-item active">إعدادات التوصيل</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">تعديل وسيلة التوصيل</h4>
                            </div>

                            @include('admin.includes.alerts.success')
                            @include('admin.includes.alerts.errors')

                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form" action="{{ route('admin.update.settings.shipping', $shippingMethod->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <input type="hidden" name="id" value="{{ $shippingMethod->id }}">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mt-1 form-group">
                                                    <input type="checkbox"
                                                    value=""
                                               
                                                    id="switcheryColor4"
                                                    class="switchery"
                                                    data-color="success"
                                                    {{ $shippingMethod->is_active ? 'checked' : '' }}>
                                                    <label for="switcheryColor4" class="ml-2 card-title">مفعل/غير مفعب</label>
                                                    @error('active')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-home"></i> تعديل بيانات التوصيل</h4>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>طريقة التوصيل</label>
                                                        <input type="text" name="method" class="form-control"
                                                            value="{{ $shippingMethod->plan_value }}"
                                                            placeholder="ادخل اسم الطريقة">
                                                        @error('method')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>قيمة التوصيل</label>
                                                        <input type="number" name="method_value" class="form-control"
                                                            value="{{ old('method_value', $shippingMethod->value) }}"
                                                            placeholder="ادخل قيمة التوصيل">
                                                        @error('method_value')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button type="button" class="mr-1 btn btn-warning" onclick="history.back();">
                                                <i class="ft-x"></i> تراجع
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> حفظ
                                            </button>
                                        </div>
                                    </form>
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card-content -->
                        </div> <!-- /.card -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </section>
        </div> <!-- /.content-body -->
    </div> <!-- /.content-wrapper -->
</div> <!-- /.app-content -->
@endsection
