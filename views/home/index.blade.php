				<div class="container">
                	<div class="inner-column row">
                        <div id="center_column" class="col-lg-12 col-xs-12">
                            <div class="product-list col-xs-12">
                                <div class="top-list">
                                    <h2 class="title">Produk Kami</h2>
                                    <div class="clr"></div>
                                </div>
                                <div class="row">
                                    <ul class="grid">
                                    @foreach(list_product(null) as $produk)
                                        <li class="col-xs-6 col-sm-3">
                                            @if(is_outstok($produk))
                                            <div class="badge-black" style="right: 30px;top: 5px; z-index: 1;"><span>KOSONG</span></div>
                                            @else
                                                @if(is_terlaris($produk))
                                                <div class="badge-red" style="right: 30px;top: 5px;"><span>HOT</span></div>
                                                @elseif(is_produkbaru($produk))
                                                <div class="badge-green" style="right: 30px;top: 5px;"><span>BARU</span></div>
                                                @endif
                                            @endif
                                            <div class="image-container">
                                                <a href="{{product_url($produk)}}">
                                                    {{HTML::image(product_image_url($produk->gambar1), 'produk', array('class'=>'img-responsive','style'=>'height:263px; margin: 0 auto;'))}}
                                                </a>
                                            </div>
                                            <h5 class="product-name">{{short_description($produk->nama, 20)}}</h5>
                                            <span class="price">{{price($produk->hargaJual)}}</span>
                                            <a class="view" href="{{product_url($produk)}}">Lihat</a>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div> <!--.center_column-->
                    </div><!--.row-->	
                    <div class="small-banner">
                    @foreach(horizontal_banner() as $banner)	
                        <a href="{{url($banner->url)}}">
                        	{{HTML::image(banner_image_url($banner->gambar), 'banner', array('width'=>'1168', 'height'=>'200', "class"=>"img-responsive"))}}
                    	</a>
                	@endforeach	
                    </div>
                </div>