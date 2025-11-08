@extends('layouts.app')

@section('title', 'Home')

@push('styles')
<style>
    .heading { font-size: 32px; font-weight: 600; margin-bottom: 28px; }
    .grid-franchise { display: grid; grid-template-columns: repeat(4, minmax(0,1fr)); gap:0; }
    .img-block img { width:100%; height:100%; object-fit:cover; display:block; }
    .franchise-card { padding:28px; min-height:250px; display:flex; flex-direction:column; justify-content:space-between; }
    .franchise-title { font-size:20px; font-weight:600; margin-bottom:6px; }
    .franchise-subtitle { font-size:13px; margin-bottom:14px; }
    .franchise-desc { font-size:13px; line-height:1.4; margin-bottom:14px; }
    .social { display:flex; gap:12px; font-size:14px; }
    .social a { color:#333; }
    .total-box { text-align:center; margin-top:24px; font-size:14px; }
    @media (max-width:1100px){ .grid-franchise{ grid-template-columns:repeat(2, minmax(0,1fr)); } }
    @media (max-width:640px){ .grid-franchise{ grid-template-columns:1fr; } }
</style>
@endpush

@section('content')
    <h1 class="heading">
        Selamat Datang di --{{ $programmer1['nama'] }} NIM {{ $programmer1['nim'] }}-- Group
    </h1>

    <div class="grid-franchise">
        {{-- 1. gambar sambal --}}
        <div class="img-block">
            <img src="{{ asset('images/sambal.jpeg') }}" alt="Special Sambal">
        </div>

        {{-- 2. card dari franchises[0] --}}
        <div class="franchise-card" style="background: {{ $franchises[0]['warna'] }}">
            <div>
                <div class="franchise-title">{{ $franchises[0]['judul'] }}</div>
                <div class="franchise-subtitle">{{ $franchises[0]['subjudul'] }}</div>
                <div class="franchise-desc">{{ $franchises[0]['deskripsi'] }}</div>
            </div>
            @include('components.social')
        </div>

        {{-- 3. card dari franchises[1] --}}
        <div class="franchise-card" style="background: {{ $franchises[1]['warna'] }}">
            <div>
                <div class="franchise-title">{{ $franchises[1]['judul'] }}</div>
                <div class="franchise-subtitle">{{ $franchises[1]['subjudul'] }}</div>
                <div class="franchise-desc">{{ $franchises[1]['deskripsi'] }}</div>
            </div>
            @include('components.social')
        </div>

        {{-- 4. gambar sate pak pong --}}
        <div class="img-block">
            <img src="{{ asset('images/satepakpong.jpg.jpeg') }}" alt="Sate Pak Pong">
        </div>

        {{-- 5. card gudeg --}}
        <div class="franchise-card" style="background: {{ $franchises[2]['warna'] }}">
            <div>
                <div class="franchise-title">{{ $franchises[2]['judul'] }}</div>
                <div class="franchise-subtitle">{{ $franchises[2]['subjudul'] }}</div>
                <div class="franchise-desc">{{ $franchises[2]['deskripsi'] }}</div>
            </div>
            @include('components.social')
        </div>

        {{-- 6. gambar gudeg --}}
        <div class="img-block">
            <img src="{{ asset('images/gudeg.jpg') }}" alt="Gudeg">
        </div>

        {{-- 7. gambar sushi --}}
        <div class="img-block">
            <img src="{{ asset('images/sushi.jpg') }}" alt="Sushi Cerita">
        </div>

        {{-- 8. card sushi --}}
        <div class="franchise-card" style="background: {{ $franchises[3]['warna'] }}">
            <div>
                <div class="franchise-title">{{ $franchises[3]['judul'] }}</div>
                <div class="franchise-subtitle">{{ $franchises[3]['subjudul'] }}</div>
                <div class="franchise-desc">{{ $franchises[3]['deskripsi'] }}</div>
            </div>
            @include('components.social')
        </div>
    </div>

    <div class="total-box">
        Total Franchise: {{ $totalFranchise }}
    </div>
@endsection
