				<div class="container">
                	<div class="inner-column row">
                        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
                            <div id="latest-news" class="block">
	                        	<div class="title"><h2>Artikel Terbaru</h2></div>
	                        	<ul class="block-content">
	                        		@foreach(list_blog(5) as $artikel)
	                                <li>
	                                    <h5 class="title-news" style="margin-bottom: 5px;"><a href="{{blog_url($artikel)}}">{{short_description($artikel->judul, 28)}}</a></h5>
	                                    <span class="date-post"><i class="fa fa-calendar"></i> {{date("d F Y", strtotime($artikel->created_at))}}</span>
	                                </li>
	                                @endforeach
	                            </ul>
	                        </div>
                            <div id="latest-news" class="block">
                            	<div class="title"><h2>Kategori</h2></div>
	                        	<ul class="block-content">
                            		@foreach(list_blog_category() as $kat)
                            		<span style="text-decoration: underline;"><a href="{{blog_category_url($kat)}}">{{$kat->nama}}</a></span>&nbsp;&nbsp;
                                    @endforeach	
                                </ul>
                            </div>
                            <div id="advertising" class="block">
                            @foreach(vertical_banner() as $banner)
                            	<div class="img-block">
                            		<a href="{{URL::to($banner->url)}}">
                            			{{HTML::image(banner_image_url($banner->gambar),'banner',array('width'=>'272','height'=>'391','class'=>'img-responsive'))}}
                        			</a>
                                </div>
                            @endforeach
                            </div>
                        </div><!--#left_sidebar-->
                        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
                            <div class="product-list">
                                <div class="top-list">
                                    <h2 class="title">Blog</h2>
                                    <div class="clr"></div>
                                </div>
                                <div class="row">
                                    @foreach(list_blog() as $blog)
                                    <article class="col-lg-12" style="margin-bottom:10px">
							            <h4><strong><a href="{{blog_url($blog)}}">{{$blog->judul}}</a></strong></h4>
							            <p>
							            	<small><i class="fa fa-calendar"></i> {{waktuTgl($blog->updated_at)}}</small>
						            	</p>
							            <p>
							            	{{shortDescription($blog->isi,300)}}<br>
							            	<a href="{{blog_url($blog)}}" class="theme">Baca Selengkapnya →</a>
						            	</p>
							        </article>
                                    @endforeach
                                </div>
                                <div class="pagination">
									{{list_blog()->links()}}
                                </div>
                            </div>
                        </div> <!--.center_column-->
                    </div><!--.inner-column-->
                </div>