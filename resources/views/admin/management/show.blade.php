@extends('layouts.admin')

@section('title', 'تفاصيل القسم')

@section('content')
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="fas fa-building me-2"></i> تفاصيل القسم: {{ $management->name }}</h5>
            <div>
                <a href="{{ route('admin.management.edit', $management->id) }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-edit me-1"></i> تعديل
                </a>
                <a href="{{ route('admin.management.index') }}" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left me-1"></i> العودة
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px;">الاسم</th>
                            <td>{{ $management->name }}</td>
                        </tr>
                        <tr>
                            <th>الوصف</th>
                            <td>{{ $management->description }}</td>
                        </tr>
                        <tr>
                            <th>الأيقونة</th>
                            <td><i class="fas {{ $management->icon }} fa-2x"></i> ({{ $management->icon }})</td>
                        </tr>
                        <tr>
                            <th>الترتيب</th>
                            <td>{{ $management->order }}</td>
                        </tr>
                        <tr>
                            <th>الحالة</th>
                            <td>
                                @if($management->active)
                                    <span class="badge bg-success">نشط</span>
                                @else
                                    <span class="badge bg-danger">غير نشط</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>تاريخ الإنشاء</th>
                            <td>{{ $management->created_at->format('Y-m-d H:i') }}</td>
                        </tr>
                        <tr>
                            <th>آخر تحديث</th>
                            <td>{{ $management->updated_at->format('Y-m-d H:i') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
