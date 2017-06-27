@extends('layouts.default')
@section('content')
<!-- Content  -->
<div id="pageTitle">
    <div class="container">
        <!-- Breadcrumbs Block -->
        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Gallery</li>
            </ul>
        </div>
        <!-- //Breadcrumbs Block -->
        <h1>Gallery</h1>
    </div>
</div>
<div id="pageContent">
    <!-- Block -->
    <div class="block">
        <div class="container">
            <!-- Filters -->
            <div class="filters-by-category">
                <ul class="option-set" data-option-key="filter">
                    <li><a href="#filter" data-option-value="*" class="selected">All</a></li>
                    <li><a href="#filter" data-option-value=".category1" class="">Car Maintenance</a></li>
                    <li><a href="#filter" data-option-value=".category2" class="">Vehicle Repair</a></li>
                    <li><a href="#filter" data-option-value=".category3" class="">Other</a></li>
                </ul>
            </div>
            <!-- //end Filters -->
            <div class="gallery gallery-isotope" id="gallery">
                <div class="gallery-item category3">
                    <div class="gallery-item-image">
                        <img src="/assets/images/gallery/gallery-img-thumb-01.jpg" alt="" />
                        <a class="hover" href="/assets/images/gallery/gallery-img-01.jpg">
                            <span class="view">
                                <span class="icon icon-search"></span>
                            </span>
                            <span class="tags">
                                <span class="pull-left">Oil Change</span>
                                <span class="pull-right"><i class="icon icon-favorite"></i>21</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="gallery-item category2">
                    <div class="gallery-item-image">
                        <img src="/assets/images/gallery/gallery-img-thumb-02.jpg" alt="" />
                        <a class="hover" href="/assets/images/gallery/gallery-img-02.jpg">
                            <span class="view">
                                <span class="icon icon-search"></span>
                            </span>
                            <span class="tags">
                                <span class="pull-left">Vehicle Repair</span>
                                <span class="pull-right"><i class="icon icon-favorite"></i>21</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="gallery-item category1">
                    <div class="gallery-item-image">
                        <img src="/assets/images/gallery/gallery-img-thumb-03.jpg" alt="" />
                        <a class="hover" href="/assets/images/gallery/gallery-img-03.jpg">
                            <span class="view">
                                <span class="icon icon-search"></span>
                            </span>
                            <span class="tags">
                                <span class="pull-left">Car Maintenance</span>
                                <span class="pull-right"><i class="icon icon-favorite"></i>21</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="gallery-item category1">
                    <div class="gallery-item-image">
                        <img src="/assets/images/gallery/gallery-img-thumb-04.jpg" alt="" />
                        <a class="hover" href="/assets/images/gallery/gallery-img-04.jpg">
                            <span class="view">
                                <span class="icon icon-search"></span>
                            </span>
                            <span class="tags">
                                <span class="pull-left">Car Maintenance</span>
                                <span class="pull-right"><i class="icon icon-favorite"></i>21</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="gallery-item category2">
                    <div class="gallery-item-image">
                        <img src="/assets/images/gallery/gallery-img-thumb-05.jpg" alt="" />
                        <a class="hover" href="/assets/images/gallery/gallery-img-05.jpg">
                            <span class="view">
                                <span class="icon icon-search"></span>
                            </span>
                            <span class="tags">
                                <span class="pull-left">Vehicle Repair</span>
                                <span class="pull-right"><i class="icon icon-favorite"></i>21</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="gallery-item category2">
                    <div class="gallery-item-image">
                        <img src="/assets/images/gallery/gallery-img-thumb-06.jpg" alt="" />
                        <a class="hover" href="/assets/images/gallery/gallery-img-06.jpg">
                            <span class="view">
                                <span class="icon icon-search"></span>
                            </span>
                            <span class="tags">
                                <span class="pull-left">Vehicle Repair</span>
                                <span class="pull-right"><i class="icon icon-favorite"></i>21</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="gallery-item category3">
                    <div class="gallery-item-image">
                        <img src="/assets/images/gallery/gallery-img-thumb-07.jpg" alt="" />
                        <a class="hover" href="/assets/images/gallery/gallery-img-07.jpg">
                            <span class="view">
                                <span class="icon icon-search"></span>
                            </span>
                            <span class="tags">
                                <span class="pull-left">Car Maintenance</span>
                                <span class="pull-right"><i class="icon icon-favorite"></i>21</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="gallery-item category1">
                    <div class="gallery-item-image">
                        <img src="/assets/images/gallery/gallery-img-thumb-08.jpg" alt="" />
                        <a class="hover" href="/assets/images/gallery/gallery-img-08.jpg">
                            <span class="view">
                                <span class="icon icon-search"></span>
                            </span>
                            <span class="tags">
                                <span class="pull-left">Vehicle Repair</span>
                                <span class="pull-right"><i class="icon icon-favorite"></i>21</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="gallery-item category3">
                    <div class="gallery-item-image">
                        <img src="/assets/images/gallery/gallery-img-thumb-09.jpg" alt="" />
                        <a class="hover" href="/assets/images/gallery/gallery-img-09.jpg">
                            <span class="view">
                                <span class="icon icon-search"></span>
                            </span>
                            <span class="tags">
                                <span class="pull-left">Auto Diagnostic</span>
                                <span class="pull-right"><i class="icon icon-favorite"></i>21</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Block -->
</div>
<!-- // Content  -->
@endsection