				<div class="container">
                	<div class="inner-column row">
                        <div id="center_column" class="col-lg-12 col-xs-12">
                            <div class="product-list">
                                <div class="top-list">
                                    <h2 class="title">Produk Terbaru</h2>
                                    <div class="clr"></div>
                                </div>
                                <div class="row">
                                    <ul class="grid">
                                    @foreach(new_product(8) as $produk)
                                        <li class="col-xs-6 col-sm-3">
                                            <div class="image-container">
                                                {{HTML::image(product_image_url($produk->gambar1), 'produk', array('class'=>'img-responsive','style'=>'height:263px; margin: 0 auto;'))}}
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
                        <a href="{{URL::to($banner->url)}}">
                        	{{HTML::image(banner_image_url($banner->gambar), 'banner', array('width'=>'1168', 'height'=>'200', "class"=>"img-responsive"))}}
                    	</a>
                	@endforeach	
                    </div>
                </div>