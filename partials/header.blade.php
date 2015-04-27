            <div style=" display: block;background: #ff7d68;">
                <div class="container" style="padding-bottom:5px">
                    <div class="pull-right">
                        @if( !is_login() )
                        <span style="color:#fff">
                            <small>
                            {{HTML::link('member', 'Log in', array('style'=>'color: #fff'))}} | {{HTML::link('member/create', 'Register', array('style'=>'color: #fff'))}}
                            </small>
                        </span>
                        @else
                        <span style="color:#fff">
                            <small>
                            Selamat datang, <a href="{{URL::to('member')}}" style="color:#fff;">{{user()->nama}}</a> | {{HTML::link('logout', 'Log out', array('style'=>'color: #fff'))}}
                            </small>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <header>
            	<div class="top-head">
                	<div class="container">
                    	<div class="row desktop-only">
                            <div id="top_testimonial" class="col-xs-12 col-sm-4">
                                <?php 
                                    $last_testi = Testimonial::where('visibility', '=', '1')->orderby(DB::raw('RAND()'))->where('akunId','=',Session::get('akunid'))->paginate(1);
                                ?>
                                @foreach($last_testi as $value)
                                <p>{{short_description($value->isi, 94)}} <br><span>~{{$value->nama}}</span></p>
                                @endforeach
                            </div>
                            <div id="logo" class="col-xs-12 col-sm-4">
                                @if(@getimagesize(URL::to(getPrefixDomain().'/galeri/'.$toko->logo)))
                                <a href="{{ URL::to('home') }}">
                                    {{HTML::image(logo_image_url(), 'Logo', array('width'=>'310', 'height'=>'108'))}}
                                </a>
                                @else
                                <h3 style="margin:42px 0;">
                                    <strong>
                                        <a href="{{URL::to('home')}}" style="color: #ff7d68;">{{ short_description(Theme::place('title'),16) }}</a>
                                    </strong>
                                </h3>
                                @endif
                            </div>
                            <div id="shopping-cart" class="col-xs-12 col-sm-4">
                                <div class="cart-block">
                                    {{shopping_cart()}}
                                </div>
                            </div>
                        </div>
                        <div class="row mobile-only">
                        	<div id="logo" class="col-xs-12">
                                @if(@getimagesize(URL::to( logo_image_url() )))
                                <a href="{{URL::to('home')}}">
                                    {{HTML::image(logo_image_url(), 'Logo', array('width'=>'310', 'height'=>'108'))}}
                                </a>
                                @else
                                <a style="text-decoration:none" href="{{URL::to('home')}}">
                                    <h1 style="color: #ff7d68;">{{ short_description(Theme::place('title'),30) }}</h1>
                                </a>
                                @endif
                            </div>
                            <div id="top_testimonial" class="col-xs-6">
                                <?php 
                                    $last_testi = Testimonial::where('visibility', '=', '1')->orderby(DB::raw('RAND()'))->where('akunId','=',Session::get('akunid'))->paginate(1);
                                ?>
                                @foreach($last_testi as $value)
                                <p>{{short_description($value->isi, 94)}} <br><span>~{{$value->nama}}</span></p>
                                @endforeach
                            </div>
                            <div id="shopping-cart" class="col-xs-6">
                                <div class="cart-block">
                                    {{shopping_cart()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--.top-head-->
                <!-- Search Navbar - START -->
                <nav id="menu" class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand mobile-only" href="#">MENU</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        @foreach($mainMenu as $key=>$link)
                            @if($link->halaman=='1')
                                <li><a href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
                            @elseif($link->halaman=='2')
                                <li><a href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
                            @elseif($link->url=='1')
                                <li><a href={{"'".URL::to('http://'.strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
                            @else
                                <li><a href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
                            @endif
                        @endforeach
                        </ul>
                        <div class="col-sm-3 col-md-3 pull-right search-form">
                            <form class="navbar-form" role="search" action="{{URL::to('search')}}" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="search" id="search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>        
                    </div>
                </nav>
                
                <!-- Search Navbar - END -->
			</header>