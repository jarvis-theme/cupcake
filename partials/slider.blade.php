            <section id="p-slide">
            	<div class="container">
                    <div id="da-slider" class="da-slider slideshow">
                    @foreach (slideshow() as $val)        
                        <div class="da-slide">
                            <div class="da-img" id="slide-img">
                                {{HTML::image(slide_image_url($val->gambar), 'slide')}}
                            </div>
                        </div>
                    @endforeach 
                    </div>
                </div>
            </section>
            <section id="p-carousel" class="hidden-xs">
                <div class="container">
                    <div id="single-product" class="owl-carousel owl-theme">
                        @foreach(best_seller(15) as $produk) 
                        <div class="item">
                            <div class="image-container">
                                <a href="{{product_url($produk)}}">
                                    {{HTML::image(product_image_url($produk->gambar1,'thumb'), 'produk', array('width'=>'auto', 'height'=>'114'))}}
                                </a>
                            </div>
                            <h5 class="product-name">{{short_description($produk->nama, 15)}}</h5>
                            <span class="price">{{price($produk->hargaJual)}}</span>
                        </div>
                        @endforeach 
                    </div>
                </div>
            </section>