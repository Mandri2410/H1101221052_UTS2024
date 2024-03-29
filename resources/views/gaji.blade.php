@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="card" style="background-color: rgba(173, 216, 230, 0.5); backdrop-filter: blur(10px);">
                <div class="card-body">
                    <form action="{{ route('submit.gaji') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan">
                        </div>
                        <div class="mb-3">
                            <label for="gaji" class="form-label">Gaji</label>
                            <input type="text" class="form-control" id="gaji" name="gaji">
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan" class="form-label">Pendidikan</label>
                            <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card" style="background-color: rgba(173, 216, 230, 0.5); backdrop-filter: blur(10px);">
                <div class="card-body">
                    <h5 class="card-title">Informasi Gaji</h5>
                    <p>Gaji karyawan didasarkan pada beberapa faktor, termasuk jabatan, pengalaman, dan pendidikan</p>
                    <ul>
                        <li><strong>Manager:</strong> Rp 10.000.000 - Rp 20.000.000 per bulan</li>
                        <li><strong>Supervisor:</strong> Rp 7.000.000 - Rp 15.000.000 per bulan</li>
                        <li><strong>Staff:</strong> Rp 5.000.000 - Rp 10.000.000 per bulan</li>
                    </ul>
                    <p>Kami juga menawarkan bonus kinerja dan tunjangan lainnya berdasarkan kinerja dan kontribusi karyawan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
