            <section id="p-slide">
            	<div class="container">
                    <div id="da-slider" class="da-slider">
                    @foreach ($slideshow as $val)        
                        <div class="da-slide">
                            <!-- <h2>For everybody <br>who Love</h2>
                            <h1>Cupcake</h1>
                            <a href="#" class="da-link">Read more</a> -->
                            <!-- <p>{{ $val->text }}</p> -->
                            <div class="da-img">
                                {{HTML::image(slide_image_url($val->gambar), 'slide banner')}}
                            </div>
                        </div>
                    @endforeach 
                    </div>
                </div>
            </section>
            <section id="p-carousel" class="hidden-xs">
                <div class="container">
                    <div id="single-product" class="owl-carousel owl-theme">
                    @foreach(list_product() as $produk) 
                        <div class="item">
                            <div class="image-container">
                                <a href="{{product_url($produk)}}">
                                    {{HTML::image(product_image_url($produk->gambar1,'medium'), 'produk', array('width'=>'107', 'height'=>'114'))}}
                                </a>
                            </div>
                            <h5 class="product-name">{{short_description($produk->nama, 15)}}</h5>
                            <span class="price">{{price($produk->hargaJual)}}</span>
                        </div>
                    @endforeach 
                    </div>
                </div>
            </section>