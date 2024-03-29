@extends('layout.main')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="card" style="background-color: rgba(173, 216, 230, 0.5); backdrop-filter: blur(10px);">
                <div class="card-body">
                    <h5 class="card-title">Form Jabatan</h5>
                    <form action="{{ route('submit.presensi') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <select class="form-select" id="jabatan" name="jabatan">
                                <option selected disabled>Pilih Jabatan</option>
                                <option value="Manager">Manager</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Staff">Staff</option>
                                <!-- Tambahkan opsi jabatan lainnya jika diperlukan -->
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card" style="background-color: rgba(173, 216, 230, 0.5); backdrop-filter: blur(10px);">
                <div class="card-body">
                    <h5 class="card-title">Informasi Jabatan</h5>
                    <p>Jabatan yang Anda pilih akan menentukan tanggung jawab dan tugas yang Anda emban. Pastikan Anda memilih jabatan yang sesuai dengan keahlian dan minat Anda.</p>
                    <p>Manager: Bertanggung jawab atas manajemen keseluruhan tim dan proyek.</p>
                    <p>Supervisor: Bertanggung jawab untuk mengawasi dan mengkoordinasikan pekerjaan tim.</p>
                    <p>Staff: Bertanggung jawab atas tugas operasional dan melaksanakan instruksi dari supervisor atau manajer.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
