@if(Session::has('msg2'))
<div class="success" id='message' style='display:none'>
    Terima kasih, pesan anda sudah terkirim.
</div>
@endif
@if(Session::has('msg3'))
<div class="success" id='message' style='display:none'>
    Maaf, pesan anda belum terkirim.
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
    Terjadi kesalahan dalam menyimpan data.<br><br>
    <ul>
        @foreach($errors->all() as $message)
        <li>-{{ $message }}</li><br>
        @endforeach
    </ul>
</div>
@endif

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
                                        <ul style="padding-left: 20px;">
                                            @foreach($side_menu->anak as $submenu)
                                            @if($submenu->parent == $side_menu->id)
                                            <li>
                                                <a href="{{category_url($submenu)}}" style="background-color:transparent">{{$submenu->nama}}</a>
                                                @if($submenu->anak->count() != 0)
                                                <ul style="padding-left: 20px;">
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
                            <div id="latest-news" class="block">
                                <div class="title"><h2>Artikel Terbaru</h2></div>
                                <ul class="block-content">
                                    @foreach(list_blog(2) as $artikel)
                                    <li>
                                        <h5 class="title-news" style="margin-bottom: 5px;">{{short_description($artikel->judul, 28)}}</h5>
                                        <p>{{short_description($artikel->isi, 150)}} <a class="read-more" href="{{blog_url($artikel)}}">Read More</a></p>
                                        <span class="date-post"><i class="fa fa-calendar"></i> {{date("d F Y", strtotime($artikel->created_at))}}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="advertising" class="block">
                                @foreach(vertical_banner() as $banners)
                                <div class="img-block">
                                    <a href="{{url($banners->url)}}">
                                        {{HTML::image(banner_image_url($banners->gambar),'banner',array('width'=>'272','height'=>'auto','class'=>'img-responsive'))}}
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            {{ Theme::partial('subscribe') }}
                        </div><!--#left_sidebar-->
                        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
                            <div class="contact-us">
                                <h2 class="title">Contact Us</h2>
                                <div class="contact-desc">
                                    <p><strong>Shop Address :</strong> {{$kontak->alamat}}</p>
                                    <span><i class="phone"></i> {{$kontak->telepon ? $kontak->telepon : '-'}}</span>
                                    <span><i class="bbm"></i> {{$kontak->bb ? $kontak->bb : '-'}}</span>
                                    <span><i class="mail"></i> {{$kontak->email}}</span>
                                    <div class="clr"></div>
                                </div>
                                <form class="contact-form" action="{{url('kontak')}}" method="post">
                                    <p class="form-group">
                                        <input class="form-control" placeholder="Name" name="namaKontak" type="text" required>
                                    </p>
                                    <p class="form-group">
                                        <input class="form-control" placeholder="Email Address" name="emailKontak" type="text" required>
                                    </p>
                                    <p class="form-group">
                                        <textarea class="form-control" placeholder="Message" name="messageKontak" required></textarea>
                                    </p>
                                    <button class="btn-send">Send</button>
                                </form>
                            </div>
                            <div class="maps">
                                <h2 class="title">Google Maps</h2>
                                @if($kontak->lat!='0' || $kontak->lng!='0')
                                    <iframe style="float:right;width:100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
                                @else
                                    <iframe style="float:right;width:100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq=gegerkalong+hil&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                                @endif
                            </div>
                        </div> <!--.center_column-->
                    </div><!--.inner-column-->
                </div>