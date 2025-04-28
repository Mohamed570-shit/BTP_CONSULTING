@extends('layouts.admin')

@section('title', 'إضافة قسم جديد')

@section('content')
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-white py-3">
            <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i> إضافة قسم جديد</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.management.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">الاسم</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">الوصف</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="icon" class="form-label">الأيقونة (Font Awesome)</label>
                    <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" value="{{ old('icon') }}" placeholder="مثال: fa-building">
                    @error('icon')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">أدخل اسم الأيقونة من Font Awesome (مثال: fa-building)</small>
                </div>

                <div class="mb-3">
                    <label for="order" class="form-label">الترتيب</label>
                    <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order" value="{{ old('order', 0) }}" required>
                    @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="active" name="active" value="1" {{ old('active') ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">نشط</label>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.management.index') }}" class="btn btn-secondary">إلغاء</a>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>
    </div>
@endsection
