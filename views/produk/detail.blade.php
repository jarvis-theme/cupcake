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
                                    @foreach(best_seller(4) as $best)
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
                                	<a href="{{url('produk')}}">view more</a>
                                </div>
                            </div>
                            <div id="advertising" class="block">
                                @foreach(vertical_banner() as $banners)
                            	<div class="img-block">
                            		<a href="{{url($banners->url)}}">
                                        {{HTML::image(banner_image_url($banners->gambar),'banner',array('width'=>'272','height'=>'391','class'=>'img-responsive'))}}
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            {{ Theme::partial('subscribe') }}   
                        </div><!--#left_sidebar-->
                        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
                            <form action="#" id="addorder">
                            	<div class="product-details">
                                	<div class="row">
                                    	<div id="prod-left" class="col-lg-6 col-xs-12 col-sm-6">
                                        	<div class="big-image">
                                                {{HTML::image(product_image_url($produk->gambar1),'produk',array('width'=>'419','height'=>'563'))}}
                                                <a class="zoom fancybox" href="{{product_image_url($produk->gambar1)}}" title="{{$produk->nama}}">&nbsp;</a>
                                            </div>
                                            <div id="thumb-view">
                                            	<ul id="thumb-list" class="owl-carousel owl-theme">
                                                    @if($produk->gambar1 != '')
                                                    <li class="item">
                                                        <a class="zoom fancybox" href="{{product_image_url($produk->gambar1)}}" title="{{$produk->nama}}">
                                                        {{HTML::image(product_image_url($produk->gambar1,'medium'),'gambar1',array('width'=>'130', 'height'=>'174'))}}
                                                        </a>
                                                    </li>
                                                    @endif
                                                    @if($produk->gambar2 != '')
                                                    <li class="item">
                                                        <a class="zoom fancybox" href="{{product_image_url($produk->gambar2)}}" title="{{$produk->nama}}">
                                                        {{HTML::image(product_image_url($produk->gambar2,'medium'),'gambar2',array('width'=>'130', 'height'=>'174'))}}
                                                        </a>
                                                    </li>
                                                    @endif
                                                    @if($produk->gambar3 != '')
                                                    <li class="item">
                                                        <a class="zoom fancybox" href="{{product_image_url($produk->gambar3)}}" title="{{$produk->nama}}">
                                                        {{HTML::image(product_image_url($produk->gambar3,'medium'),'gambar3',array('width'=>'130', 'height'=>'174'))}}
                                                        </a>
                                                    </li>
                                                    @endif
                                                    @if($produk->gambar4 != '')
                                                    <li class="item">
                                                        <a class="zoom fancybox" href="{{product_image_url($produk->gambar4)}}" title="{{$produk->nama}}">
                                                        {{HTML::image(product_image_url($produk->gambar4,'medium'),'gambar4',array('width'=>'130', 'height'=>'174'))}}
                                                        </a>
                                                    </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="prod-right" class="col-lg-6 col-xs-12 col-sm-6">
                                        	<h2 class="name-title">{{$produk->nama}}</h2>
                                            <span class="price">
                                            @if($produk->hargaCoret != 0)
                                            <s>{{price($produk->hargaCoret)}}</s>&nbsp;&nbsp;
                                            @endif
                                            {{price($produk->hargaJual)}}
                                            </span>
                                            <div class="img-rating">
                                                {{sosialShare(url(product_url($produk)))}}
                                            </div>
                                            <div class="desc-prod">
                                            	<p class="title">Deskripsi Produk</p>
                                                <p>{{$produk->deskripsi}}</p>
                                                <div class="clr"></div>
                                            </div>
                                            <div class="avail-info">
                                                @if($produk->stok > 0)
                                            	<i class="fa fa-check" style="color:#5cb85c; margin-right:5px;"></i><span>Tersedia, Stok {{$produk->stok}} item</span>
                                                @else
                                                <i class="fa fa-times" style="color:#d9534f; margin-right:5px;"></i><span>Habis</span>
                                                @endif
                                            </div>
                                            <div class="attribute">
                                            	<fieldset class="attribute_fieldset">
                                                	<div class="attribute_list">
                                                        @if($opsiproduk->count() > 0)                 
                                                        <div class="size-list">
                                                            <div class="form-group">
                                                                <label class="col-sm-4 control-label">Opsi :</label>
                                                                <div class="col-sm-5">
                                                                    <select class="form-control attribute_select" name="opsiproduk">
                                                                        <option value="">-- Pilih Opsi --</option>
                                                                        @foreach ($opsiproduk as $key => $opsi)
                                                                        <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
                                                                            {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="quantity">
                                                        	<div class="form-group">
                                                                <label class="col-sm-4 control-label">Quantity :</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control" name="qty" value="1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="clr"></div>
                                    </div><!--.row-->
                                    <div class="btm-details">
                                    	<div class="col-lg-7 col-md-7">
                                            @foreach(list_banks() as $banks)    
                                            {{HTML::image(bank_logo($banks),'bank')}}
                                            @endforeach 
                                            @foreach(list_payments() as $pay)
                                                @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                                                <img src="{{url('img/bank/ipaymu.jpg')}}" alt="ipaymu" />
                                                @endif
                                            @endforeach
                                            @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                                            <img src="{{url('img/bank/doku.jpg')}}" alt="doku myshortcart" />
                                            @endif
                                        </div>
                                        <div class="col-lg-5 col-md-5">
                                        	<button class="btn addtocart" type="submit"><i class="cart"></i>Add to cart</button>
                                            <a class="btn checkout" href="{{url('checkout')}}">Checkout</a>
                                        </div>
                                        <div class="clr"></div>
                                    </div>
                                </div><!--.product-details-->
                            </form>
                            @if(count($produklain) > 0)
                            <div id="related-product" class="product-list">
                                <h2 class="title">Produk Lainnya</h2>
                                <div class="row">
                                    <ul class="grid">
                                        @foreach($produklain  as $related)
                                        <li class="col-xs-6 col-sm-3">
                                            @if(is_outstok($related))
                                            <div class="badge-black" style="right: 30px;top: 5px;"><span>KOSONG</span></div>
                                            @endif
                                            @if(is_terlaris($related))
                                            <div class="badge-red" style="right: 30px;top: 5px;"><span>HOT</span></div>
                                            @endif
                                            @if(is_produkbaru($related))
                                            <div class="badge-green" style="right: 30px;top: 5px;"><span>BARU</span></div>
                                            @endif
                                            <div class="image-container">
                                                <a href="{{product_url($related)}}">
                                                {{HTML::image(product_image_url($related->gambar1),'produk',array('class'=>'img-responsive','style'=>'height:189px'))}}
                                                </a>
                                            </div>
                                            <h5 class="product-name">{{short_description($related->nama, 18)}}</h5>
                                            <span class="price">{{price($related->hargaJual)}}</span>
                                            <a class="view" href="{{product_url($related)}}">Lihat</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div><!--.product-list-->
                            @endif
                            <div class="row col-xs-12" id="comment-product">
                                <hr>
                                {{pluginTrustklik()}}
                            </div>
                        </div> <!--.center_column-->
                    </div><!--.inner-column-->
                </div>