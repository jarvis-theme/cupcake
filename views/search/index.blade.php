                <div class="container">
                	<div class="inner-column row">
                        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
                            <div id="categories" class="block sidey">
                            	<ul class="block-content nav">
                                @foreach(list_category() as $side_menu)
                                    @if($side_menu->parent == '0')
                                    <li>
                                        <a href="{{category_url($side_menu)}}">{{$side_menu->nama}}<!-- <span class="arrow-right"></span> --></a>
                                        @if($side_menu->anak->count() != 0)
                                        <ul style="padding-left: 20px;">
                                            @foreach($side_menu->anak as $submenu)
                                            @if($submenu->parent == $side_menu->id)
                                            <li>
                                                <a href="{{category_url($submenu)}}" style="background-color:transparent">{{$submenu->nama}}</a>
                                                @if($submenu->anak->count() != 0)
                                                <ul style="padding-left: 20px;">
                                                    @foreach($submenu->anak as $submenu2)
                                                    @if($submenu2->parent == $submenu->id)
                                                    <li>
                                                        <a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                            @endif
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endif
                                @endforeach
                                </ul>
                            </div>
                            <div id="best-seller" class="block">
                            	<div class="title"><h2>Best Sellling</h2></div>
                            	<ul class="block-content">
                                    @foreach(best_seller() as $best)
                                    <li>
                                    	<a href="{{product_url($best)}}">
                                        	<div class="img-block">
                                                {{HTML::image(product_image_url($best->gambar1),'produk',array('width'=>'81','height'=>'auto'))}}
                                            </div>
                                            <p class="product-name">{{$best->nama}}</p>
                                            <p class="price">{{price($best->hargaJual)}}</p>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="btn-more">
                                	<a href="{{url('produk')}}">view more</a>
                                </div>
                            </div>
                            <div id="advertising" class="block">
                                @foreach(vertical_banner() as $banner)    
                                <div class="img-block">
                                    <a href="{{url($banner->url)}}">
                                        {{HTML::image(banner_image_url($banner->gambar), 'banner', array('width'=>'272','height'=>'auto',"class"=>"img-responsive"))}}
                                    </a>
                                </div>
                                @endforeach 
                            </div>
                            {{ Theme::partial('subscribe') }}
                        </div><!--#left_sidebar-->
                        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
                            <div class="product-list col-xs-12">
                                <div class="top-list ">
                                    <div class="col-xs-12 col-lg-6 col-sm-6">
                                        <h2 class="title">Hasil Pencarian</h2>
                                    </div>
                                    <div class="clr"></div>
                                </div>
                                @if($jumlahCari != 0)
                                    @if(count($hasilpro) > 0)
                                    <div class="row">
                                        <ul class="grid">
                                        @foreach($hasilpro as $produks)
                                            <li class="col-xs-6 col-sm-4">
                                                <div class="image-container">
                                                    <a href="{{product_url($produks)}}">
                                                        {{HTML::image(product_image_url($produks->gambar1),'produk',array('class'=>'img-responsive','style'=>'height: 252px;width: auto;margin: 0 auto;'))}}
                                                    </a>
                                                </div>
                                                <h5 class="product-name">
                                                    <a href="{{product_url($produks)}}">
                                                    {{short_description($produks->nama, 25)}}
                                                    </a>
                                                </h5>
                                                <span class="price">{{price($produks->hargaJual)}}</span>
                                                <a class="view" href="{{product_url($produks)}}">Lihat</a>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    @if(count($hasilhal) > 0 || count($hasilblog) > 0)
                                    <div class="row">
                                        @foreach($hasilhal as $hal)
                                        <article class="col-lg-12" style="margin-bottom:10px">
                                            <h3 style="margin-bottom: 3px;">
                                                <strong><a href="{{url('halaman/'.$hal->slug)}}">
                                                {{$hal->judul}}</a></strong>
                                            </h3>
                                            <p>
                                                {{short_description($hal->isi,300)}}<br>
                                                <a href="{{url('halaman/'.$hal->slug)}}" class="theme">Baca Selengkapnya →</a>
                                            </p>
                                        </article>
                                        @endforeach
                                        @foreach($hasilblog as $blog_result)  
                                        <article class="col-lg-12" style="margin-bottom:10px">
                                            <h3 style="margin-bottom: 3px;">
                                                <strong><a href="{{blog_url($blog_result)}}">{{$blog_result->judul}}</a></strong>
                                            </h3>
                                            <p style="margin-bottom: 15px;">
                                                <small><i class="fa fa-calendar"></i> {{waktuTgl($blog_result->updated_at)}}</small>&nbsp;&nbsp;
                                                <span class="date-post"><i class="fa fa-tags"></i> <a href="{{blog_category_url(@$blog_result->kategori)}}">{{@$blog_result->kategori->nama}}</a></span>
                                            </p>
                                            <p>
                                                {{short_description($blog_result->isi,300)}}<br>
                                                <a href="{{blog_url($blog_result)}}" class="theme">Baca Selengkapnya →</a>
                                            </p>
                                            <hr>
                                        </article>
                                        @endforeach 
                                    </div>
                                    @endif
                            	{{--$produk->links()--}}
                                @else
                                <article class="text-center">
                                    <i>Hasil pencarian tidak ditemukan</i>
                                </article>
                                @endif
                            </div>
                        </div> <!--.center_column-->
                    </div><!--.inner-column-->	
                    <div>
                        @foreach(horizontal_banner() as $banner)    
                        <a href="{{url($banner->url)}}">
                            {{HTML::image(banner_image_url($banner->gambar), 'banner', array('width'=>'1168', 'height'=>'200', "class"=>"img-responsive"))}}
                        </a>
                        @endforeach 
                    </div>
                </div>