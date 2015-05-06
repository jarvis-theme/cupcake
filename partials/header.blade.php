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
                            Selamat datang, <a href="{{url('member')}}" style="color:#fff;">{{user()->nama}}</a> | {{HTML::link('logout', 'Log out', array('style'=>'color: #fff'))}}
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
                                @foreach(random_testimonial(1) as $value)
                                <p>{{short_description($value->isi, 94)}} <br><span>~{{$value->nama}}</span></p>
                                @endforeach
                            </div>
                            <div id="logo" class="col-xs-12 col-sm-4">
                                @if(@getimagesize( url(logo_image_url()) ))
                                <a href="{{ url('home') }}">
                                    {{HTML::image(logo_image_url(), 'Logo', array('width'=>'310', 'height'=>'108'))}}
                                </a>
                                @else
                                <h3 style="margin:42px 0;">
                                    <strong>
                                        <a href="{{url('home')}}" style="color: #ff7d68;">{{ short_description(Theme::place('title'),16) }}</a>
                                    </strong>
                                </h3>
                                @endif
                            </div>
                            <div id="shopping-cart" class="col-xs-12 col-sm-4">
                                <div class="cart-block" id="shoppingcartplace">
                                    {{shopping_cart()}}
                                </div>
                            </div>
                        </div>
                        <div class="row mobile-only">
                        	<div id="logo" class="col-xs-12">
                                @if(@getimagesize(url( logo_image_url() )))
                                <a href="{{url('home')}}">
                                    {{HTML::image(logo_image_url(), 'Logo', array('width'=>'310', 'height'=>'108'))}}
                                </a>
                                @else
                                <a style="text-decoration:none" href="{{url('home')}}">
                                    <h1 style="color: #ff7d68;">{{ short_description(Theme::place('title'),30) }}</h1>
                                </a>
                                @endif
                            </div>
                            @if(count(random_testimonial(1)) > 0)
                            <div id="top_testimonial" class="col-xs-6">
                                @foreach(random_testimonial(1) as $value)
                                <p>{{short_description($value->isi, 94)}} <br><span>~{{$value->nama}}</span></p>
                                @endforeach
                            </div>
                            <div id="shopping-cart" class="col-xs-6">
                                <div class="cart-block">
                                    {{shopping_cart()}}
                                </div>
                            </div>
                            @else
                            <div id="shopping-cart" class="col-xs-12">
                                <div class="cart-block pull-left">
                                    {{shopping_cart()}}
                                </div>
                            </div>
                            @endif
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
                                <li><a href='{{url("halaman/".strtolower($link->linkTo))}}'>{{$link->nama}}</a></li>
                            @elseif($link->halaman=='2')
                                <li><a href='{{url("blog/".strtolower($link->linkTo))}}'>{{$link->nama}}</a></li>
                            @elseif($link->url=='1')
                                <li><a href='{{url("http://".strtolower($link->linkTo))}}'>{{$link->nama}}</a></li>
                            @else
                                <li><a href='{{url(strtolower($link->linkTo))}}'>{{$link->nama}}</a></li>
                            @endif
                        @endforeach
                        </ul>
                        <div class="col-sm-3 col-md-3 pull-right search-form">
                            <form class="navbar-form" role="search" action="{{url('search')}}" method="post">
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