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
                                        <ul class="sidebars">
                                            @foreach($side_menu->anak as $submenu)
                                            @if($submenu->parent == $side_menu->id)
                                            <li>
                                                <a href="{{category_url($submenu)}}" class="submenus">{{$submenu->nama}}</a>
                                                @if($submenu->anak->count() != 0)
                                                <ul class="sidebars">
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
                                                {{HTML::image(product_image_url($best->gambar1,'thumb'),$best->nama,array('width'=>'81','height'=>'auto','title'=>$best->nama))}}
                                            </div>
                                            <p class="product-name">{{short_description($best->nama,25)}}</p>
                                            <p class="price">{{price($best->hargaJual)}}</p>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="btn-more">
                                	<a href="{{URL::to('produk')}}">produk lainnya</a>
                                </div>
                            </div>
                            <div id="advertising" class="block">
                                @foreach(vertical_banner() as $banner)    
                                <div class="img-block">
                                    <a href="{{URL::to($banner->url)}}">
                                        {{HTML::image(banner_image_url($banner->gambar), 'Info Promo', array('width'=>'272','height'=>'auto',"class"=>"img-responsive"))}}
                                    </a>
                                </div>
                                @endforeach 
                            </div>
                            {{ Theme::partial('subscribe') }}
                        </div>
                        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
                            <div class="contact-us">
                                <h2 class="title">Testimonial</h2>
                                <div class="contact-desc">
                                    @foreach(list_testimonial() as $key=>$value)
                                    <article class="col-lg-12" style="margin-bottom:10px">
                                        <h4><strong>{{$value->nama}}</strong></h4>
                                        <p>
                                            <small><i class="fa fa-calendar"></i> {{date("d M Y", strtotime($value->updated_at))}}</small>
                                        </p>
                                        {{short_description($value->isi,400)}}
                                        <br><hr>
                                    </article>
                                    @endforeach
                                </div>
                                <div class="col-lg-12 col-xs-12">
                                    {{list_testimonial()->links()}}
                                </div>
                                <form class="col-lg-12 col-xs-12 contact-form" action="{{url('testimoni')}}" method="post">
                                    <h3>Kirim Testimonial</h3>
                                    <p class="form-group">
                                        <input class="form-control" placeholder="Nama" type="text" name="nama" required>
                                    </p>
                                    <p class="form-group">
                                        <textarea class="form-control" placeholder="Pesan" name="testimonial" required></textarea>
                                    </p>
                                    <button class="btn btn-send" type="submit">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div>
                        @foreach(horizontal_banner() as $banner)    
                        <a href="{{URL::to($banner->url)}}">
                            {{HTML::image(banner_image_url($banner->gambar), 'Info Promo', array('width'=>'1168', 'height'=>'200', "class"=>"img-responsive"))}}
                        </a>
                        @endforeach 
                    </div>
                </div>