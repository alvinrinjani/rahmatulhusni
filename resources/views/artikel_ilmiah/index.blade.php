<?php
$title = 'Artikel Ilmiah';
?>

@extends('layouts.app')

@section('content')
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
            @foreach ($tulisan as $tls)
                <div class="single-products-catagory clearfix">
                    <a href="shop.html">
                        <img src="img/bg-img/1.jpg" alt="" />
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <p class="dongle">{{ $tls->created_at->format('d M Y') }}</p>
                            <div class="line"></div>
                            <h4 class="handlee">{{ $tls->judul }}</h4>
                            <div class="px-3" style="background-color: pink; opacity: 85%;">
                                <p class="dongle mt-3 text-dark">{{ $tls->excerpt }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
