            <section id="p-slide">
            	<div class="container">
                    <div id="da-slider" class="da-slider">
                    @foreach ($slideshow as $val)        
                        <div class="da-slide">
                            <p>{{ $val->text }}</p>
                            <div class="da-img">
                                {{HTML::image(slide_image_url($val->gambar), 'image01')}}
                            </div>
                        </div>
                    @endforeach 
                    </div>
                </div>
            </section>
            <section id="p-carousel">
                <div class="container">
                    <div id="single-product" class="owl-carousel owl-theme">
                    @foreach(home_product(12) as $produk) 
                        <div class="item">
                            <div class="image-container">
                                {{HTML::image(product_image_url($produk->gambar1,'medium'), 'produk', array('width'=>'107', 'height'=>'114'))}}
                            </div>
                            <h5 class="product-name">{{short_description($produk->nama, 15)}}</h5>
                            <span class="price">{{price($produk->hargaJual)}}</span>
                        </div>
                    @endforeach 
                    </div>
                </div>
            </section>