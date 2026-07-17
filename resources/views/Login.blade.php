@extends('dashboard')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-sm mt-4" style="width: 100%; max-width: 450px;">
        <div class="card-header table-light text-center py-3">
            <h4 class="mb-0 fw-bold">Login</h4>
        </div>
        <div class="card-body p-4">
            <form method="post" action="{{ route('login') }}">
                @csrf
                
                <!-- Email Input -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="" placeholder="Email" required>
                </div>

                <!-- Password Input -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="" placeholder="password" required>
                </div>

                <!-- Buttons Action -->
                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-primary w-50">Login</button>
                    <button type="reset" class="btn btn-outline-secondary w-50">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection