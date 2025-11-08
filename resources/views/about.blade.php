@extends('layouts.app')

@section('title', 'About Us')

@push('styles')
<style>
    .about-title {
        text-align: center;
        font-size: 32px;
        font-weight: 600;
        margin-bottom: 28px;
    }

    .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto auto;
        width: 100%;
        background: #f7f9fb;
    }

    .about-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .about-box {
        padding: 60px 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .bg-blue {
        background: #c9f1fb;
    }

    .bg-green {
        background: #d6e8df;
    }

    .programmer-name {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .programmer-nim {
        font-size: 13px;
        margin-bottom: 18px;
    }

    .programmer-desc {
        font-size: 13px;
        margin-bottom: 20px;
    }

    .social {
        display: flex;
        gap: 14px;
        font-size: 14px;
    }

    .social a {
        width: 34px;
        height: 34px;
        border: 1px solid #9aa3aa;
        border-radius: 50%;
        display: grid;
        place-items: center;
        color: #4b5a63;
    }

    .back-btn-wrap {
        text-align: center;
        margin-top: 26px;
    }

    .back-btn {
        background: #0d6efd;
        color: #fff;
        border: none;
        border-radius: 999px;
        padding: 10px 28px;
        font-size: 13px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
    }

    @media (max-width: 900px) {
        .about-grid {
            grid-template-columns: 1fr;
        }
        .about-box {
            padding: 32px 20px;
        }
    }
</style>
@endpush

@section('content')
    <h1 class="about-title">About Us</h1>

    <div class="about-grid">
        {{-- kiri atas: foto programmer 1 --}}
        <div class="about-img">
            <img src="{{ asset($programmer1['foto']) }}" alt="{{ $programmer1['nama'] }}">
        </div>

        {{-- kanan atas: detail programmer 1 --}}
        <div class="about-box bg-blue">
            <div class="programmer-name">{{ $programmer1['nama'] }}</div>
            <div class="programmer-nim">{{ $programmer1['nim'] }}</div>
            <div class="programmer-desc">{{ $programmer1['deskripsi'] }}</div>
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        {{-- kiri bawah: detail programmer 2 --}}
        <div class="about-box bg-green">
            <div class="programmer-name">{{ $programmer2['nama'] }}</div>
            <div class="programmer-nim">{{ $programmer2['nim'] }}</div>
            <div class="programmer-desc">{{ $programmer2['deskripsi'] }}</div>
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        {{-- kanan bawah: foto programmer 2 --}}
        <div class="about-img">
            <img src="{{ asset($programmer2['foto']) }}" alt="{{ $programmer2['nama'] }}">
        </div>
    </div>

    <div class="back-btn-wrap">
        <a href="{{ route('home') }}" class="back-btn">
            <i class="fas fa-arrow-left"></i> Back to Home
        </a>
    </div>
@endsection
