            <footer>
            	<div class="top-footer">
                	<div class="container">
                    	<div class="row">
                        	<!-- <div id="small-logo" class="col-xs-12 col-sm-2">
                                {{--HTML::image(logo_image_url(), 'Logo', array('width'=>'112','height'=>'113'))--}}
                            </div> -->
                            <div id="about-foot" class="col-xs-12 col-sm-4">
                            	<h4 class="title">Tentang Kami</h4>
                            	<div class="block-content">
                                    <p>{{short_description($aboutUs[1]->isi,400)}}</p>
                                </div>
                            </div>
                            @foreach($tautan as $key=>$menu)
                            @if($key == '1' || $key == '2')
                            <div id="links-foot" class="col-xs-12 col-sm-2">
                                <h4 class="title">{{$menu->nama}}</h4>
                                <div class="block-content">
                                    <ul>
                                    @foreach($quickLink as $link_menu)
                                        @if($menu->id == $link_menu->tautanId)
                                        <li>
                                        @if($link_menu->halaman == '1')
                                            @if($link_menu->linkTo == 'halaman/about-us')
                                            <a href="{{url(strtolower($link_menu->linkTo))}}">{{$link_menu->nama}}</a>
                                            @else
                                            <a href='{{url("halaman/".strtolower($link_menu->linkTo))}}'>{{$link_menu->nama}}</a>
                                            @endif
                                        @elseif($link_menu->halaman == '2')
                                            <a href='{{url("blog/".strtolower($link_menu->linkTo))}}'>{{$link_menu->nama}}</a>

                                        @elseif($link_menu->url == '1')
                                            <a href="{{url(strtolower($link_menu->linkTo))}}">{{$link_menu->nama}}</a>
                                        @else
                                            <a href="{{url(strtolower($link_menu->linkTo))}}">{{$link_menu->nama}}</a>
                                        @endif
                                        </li>
                                        @endif
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @endforeach                            
                            <div id="contact-foot" class="col-xs-12 col-sm-4">
                            	<h4 class="title">Workshop Address</h4>
                            	<div class="block-content">
                                    <p>{{@$kontak->alamat}}</p>
                                    <p><strong>Phone :</strong> {{@$kontak->telepon ? $kontak->telepon.'&nbsp;&nbsp;' : '-&nbsp;&nbsp;'}}  <strong>HP :</strong> {{@$kontak->hp ? $kontak->hp : '-&nbsp;&nbsp;'}}</p>
                                    <ul class="social">
                                        @if($kontak->fb)
                                    	<li><a href="{{url($kontak->fb)}}"><i class="fa fa-facebook"></i></a></li>
                                        @endif
                                        @if($kontak->tw)
                                        <li><a href="{{url($kontak->tw)}}"><i class="fa fa-twitter"></i></a></li>
                                        @endif
                                        @if($kontak->gp)
                                        <li><a href="{{url($kontak->gp)}}"><i class="fa fa-google-plus"></i></a></li>
                                        @endif
                                        @if($kontak->pt)
                                        <li><a href="{{url($kontak->pt)}}"><i class="fa fa-pinterest"></i></a></li>
                                        @endif
                                        @if($kontak->ig)
                                        <li><a href="{{url($kontak->ig)}}"><i class="fa fa-instagram"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                	<div class="container">
                    	<p>&copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. Powered by <a style="text-decoration: none;" target="_blank" href="http://jarvis-store.com">Jarvis Store</a></p>
                    </div>
                </div>
            </footer>