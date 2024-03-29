@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <!-- Form Presensi Jabatan -->
        <div class="col-lg-6">
            <div class="card" style="background-color: rgba(173, 216, 230, 0.5); backdrop-filter: blur(10px);">
                <div class="card-body">
                    <h5 class="card-title">Form Presensi Jabatan</h5>
                    <form action="{{ route('submit.presensi') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select" id="jabatan" name="jabatan">
                                <option selected disabled>Pilih Jabatan</option>
                                <option value="Manager">Manager</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Presensi</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Daftar Pekerja Online -->
        <div class="col-lg-6">
            <div class="card" style="background-color: rgba(173, 216, 230, 0.5); backdrop-filter: blur(10px);">
                <div class="card-body">
                    <div class="flex items-center justify-between mb-4">
                        <h5 class="text-xl font-bold leading-none">Online Workers</h5>
                        <a href="#" class="text-sm font-medium text-blue-600 hover:underline">View all</a>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium truncate">Neil Sims</p>
                                        <div class="inline-flex items-center text-base font-semibold text-green-500">Online</div>
                                    </div>
                                </div>
                            </li>
                            <li class="py-3 sm:py-4">
                                <div class="flex items-center">
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-medium truncate">Michael Gough</p>
                                        <div class="inline-flex items-center text-base font-semibold text-green-500">Online</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
