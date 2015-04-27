                <div class="container">
                	<div class="inner-column row">
                        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
                            <div id="categories" class="block sidey">
                            	<ul class="block-content nav">
                                @foreach(category_menu() as $side_menu)
                                    @if($side_menu->parent == '0')
                                    <li>
                                        <a href="{{category_url($side_menu)}}">{{$side_menu->nama}}<!-- <span class="arrow-right"></span> --></a>
                                        @if($side_menu->anak->count() != 0)
                                        <ul style="padding: 0px 20px;">
                                            @foreach($side_menu->anak as $submenu)
                                            @if($submenu->parent == $side_menu->id)
                                            <li>
                                                <a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
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
                            	<div class="title"><h2>Produk Terlaris</h2></div>
                            	<ul class="block-content">
                                    @foreach(best_seller() as $best)
                                    <li>
                                    	<a href="{{product_url($best)}}">
                                        	<div class="img-block">
                                                {{HTML::image(product_image_url($best->gambar1),'produk',array('width'=>'81','height'=>'64'))}}
                                            </div>
                                            <p class="product-name">{{$best->nama}}</p>
                                            <p class="price">{{price($best->hargaJual)}}</p>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="btn-more">
                                	<a href="{{URL::to('produk')}}">view more</a>
                                </div>
                            </div>
                            <div id="latest-news" class="block">
                            	<div class="title"><h2>Artikel Terbaru</h2></div>
                            	<ul class="block-content">
                                    @foreach(list_blog(2) as $blogs)
                                    <li>
                                        <h5 class="title-news">{{$blogs->judul}}</h5>
                                        <p>{{short_description($blogs->isi, 150)}}<a class="read-more" href="{{blog_url($blogs)}}">Read More</a></p>
                                        <span class="date-post">{{date("F d, Y", strtotime($blogs->created_at))}}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="advertising" class="block">
                            @foreach(vertical_banner() as $banner)    
                                <div class="img-block">
                                    <a href="{{URL::to($banner->url)}}">
                                        {{HTML::image(banner_image_url($banner->gambar), 'banner', array('width'=>'1168', 'height'=>'200', "class"=>"img-responsive"))}}
                                    </a>
                                </div>
                            @endforeach 
                            </div>
                            {{ Theme::partial('subscribe') }}
                        </div><!--#left_sidebar-->
                        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
                            <div class="product-list col-xs-12">
                                <div class="top-list">
                                    <h2 class="title">Produk Kami</h2>
                                    <ul class="btn-thumb">
                                        <li>Sort by :</li>
                                        <li>
                                            <a class="btn-grid" id="grid" href="{{buatLink(URL::current(),array('view'=>'grid'))}}" title="View Grid">View Grid</a>
                                        </li>
                                        <li><a class="btn-list" id="list" href="{{buatLink(URL::current(),array('view'=>'list'))}}" title="View List">View List</a></li>
                                    </ul>
                                    <div class="clr"></div>
                                </div>
                                <div class="row">
                                @if($view == '' || $view == 'grid')
                                    <ul class="grid">
                                    @foreach(list_product(12, @$category) as $myproduk)
                                        <li class="col-xs-6 col-sm-4">
                                            <div class="image-container">
                                                {{HTML::image(product_image_url($myproduk->gambar1),'produk',array('class'=>'img-responsive','style'=>'height:263px; margin: 0px auto;'))}}
                                            </div>
                                            <h5 class="product-name">{{short_description($myproduk->nama,11)}}</h5>
                                            <span class="price">{{price($myproduk->hargaJual)}}</span>
                                            <a class="view" href="{{product_url($myproduk)}}">Lihat</a><br>
                                        </li>
                                    @endforeach
                                    </ul>
                                @elseif($view == 'list')
                                    <ul class="list">
                                    @foreach(list_product(12, @$category) as $myproduk)
                                        <li class="col-xs-12">
                                            <div class="image-container col-xs-12 col-md-3" style="padding: 0;">
                                                {{HTML::image(product_image_url($myproduk->gambar1),'produk',array('class'=>'img-responsive','style'=>'height:150px;max-width: 150px;'))}}
                                            </div>
                                            <h5 class="product-name">{{short_description($myproduk->nama,73)}}</h5>
                                            <p>{{short_description($myproduk->deskripsi, 77)}}</p>
                                            <span class="price">{{price($myproduk->hargaJual)}}</span>
                                            <a class="view pull-left" href="{{product_url($myproduk)}}">Lihat</a>
                                            <br><br><br>
                                        </li>
                                    @endforeach
                                    </ul>
                                @endif
                                </div>
                                <div class="pagination">
                                    {{list_product(6, @$category)->links()}}
                                </div>
                            </div>
                        </div> <!--.center_column-->
                    </div><!--.inner-column-->	
                    <div>
                    @foreach(horizontal_banner() as $banner)    
                        <a href="{{URL::to($banner->url)}}">
                            {{HTML::image(banner_image_url($banner->gambar), 'banner', array('width'=>'1168', 'height'=>'200', "class"=>"img-responsive"))}}
                        </a>
                    @endforeach 
                    </div>
                </div>