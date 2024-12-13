@extends('navbar.navbar')

@section('content')
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1>About Us</h1>
            <p>Universitas Bina Nusantara (BINUS) Alam Sutera</p>
            <p>Alamat: Jl. Jalur Sutera Bar. No.Kav. 21, RT.001/RW.004, Panunggangan, Kec. Pinang, Kota Tangerang, Banten 15143</p>
            <p>Telepon: 0804 169 6969</p>
            <p>Email: infobinus@binus.edu</p>
            <p>Jika ingin mengetahui tentang beasiswa lebih lanjut, silahkan menghubungi kontak yang tersedia</p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('assets/binus (2).png')}}" class="img-fluid rounded" alt="About Us">
        </div>
    </div>
</div>
@endsection
