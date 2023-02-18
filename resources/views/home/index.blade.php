<?php
$title = 'home';
?>

@extends('layouts.app')

@section('content')
    {{-- <div class="shop_sidebar_area">
        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Catagories</h6>

            <!--  Catagories  -->
            <div class="catagories-menu">
                <ul>
                    <li class="active"><a href="#">Chairs</a></li>
                    <li><a href="#">Beds</a></li>
                    <li><a href="#">Accesories</a></li>
                    <li><a href="#">Furniture</a></li>
                    <li><a href="#">Home Deco</a></li>
                    <li><a href="#">Dressings</a></li>
                    <li><a href="#">Tables</a></li>
                </ul>
            </div>
        </div>

        <!-- ##### Single Widget ##### -->
        <div class="widget brands mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Brands</h6>

            <div class="widget-desc">
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="amado" />
                    <label class="form-check-label" for="amado">Amado</label>
                </div>
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="ikea" />
                    <label class="form-check-label" for="ikea">Ikea</label>
                </div>
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="furniture" />
                    <label class="form-check-label" for="furniture">Furniture Inc</label>
                </div>
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="factory" />
                    <label class="form-check-label" for="factory">The factory</label>
                </div>
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="artdeco" />
                    <label class="form-check-label" for="artdeco">Artdeco</label>
                </div>
            </div>
        </div>

        <!-- ##### Single Widget ##### -->
        <div class="widget color mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Color</h6>

            <div class="widget-desc">
                <ul class="d-flex">
                    <li><a href="#" class="color1"></a></li>
                    <li><a href="#" class="color2"></a></li>
                    <li><a href="#" class="color3"></a></li>
                    <li><a href="#" class="color4"></a></li>
                    <li><a href="#" class="color5"></a></li>
                    <li><a href="#" class="color6"></a></li>
                    <li><a href="#" class="color7"></a></li>
                    <li><a href="#" class="color8"></a></li>
                </ul>
            </div>
        </div>

        <!-- ##### Single Widget ##### -->
        <div class="widget price mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Price</h6>

            <div class="widget-desc">
                <div class="slider-range">
                    <div data-min="10" data-max="1000" data-unit="$"
                        class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                        data-value-min="10" data-value-max="1000" data-label-result="">
                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                    </div>
                    <div class="range-price">$10 - $1000</div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="amado_product_area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="product-topbar d-xl-flex align-items-end justify-content-between">

                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="img/product-img/rima1.png" alt="" />
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="img/product-img/rima2.png" alt="" />
                        </div>

                        <!-- Product Description -->
                        <div class="product-description d-flex align-items-center justify-content-between">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price handlee">Rahmatul Husni</p>
                                <a href="product-details.html">
                                    <h6 class="dongle-p text-justify">Lorem ipsum, dolor sit amet consectetur
                                        adipisicing elit. Quidem
                                        dolorem cum facere officiis id exercitationem earum qui incidunt molestias ea a,
                                        sapiente quia corporis possimus saepe vitae pariatur blanditiis aperiam modi porro
                                        enim asperiores? A nobis veritatis temporibus minima asperiores obcaecati repellat
                                        totam numquam fugiat, ex mollitia harum velit consectetur delectus voluptates
                                        recusandae, sequi quo quae quod necessitatibus deserunt consequuntur? Officia est
                                        temporibus pariatur tempora laudantium nobis unde minima at error, ipsam doloremque
                                        minus sit?</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                    <h2 class="handlee-pink">Artikel Terbaru</h2>
                    <hr class="mt-0">
                    <div class="row">
                        <?php for($i = 0; $i < 3; $i++) : ?>
                        <div class="col-4">
                            <a href="">
                                <img src="img/product-img/product6.jpg" alt="">
                                <p class="text-center">Gender & Feminisme dalam Perspektif Islam</p>
                            </a>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
