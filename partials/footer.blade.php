﻿    <footer class="data-content">
        <div class="row-fluid main-footer">
            <div class="span3" style="height: auto;">
                <div class="footer-menu">
                    <h2 class="title">GET IN TOUCH</h2>
                    <p style="text-align: left; color: #bbb;"><i class="fa fa-map-marker" style="width: 15px; text-align: center;"></i><span class="divide"></span>{{ $kontak->alamat }}</p>
                    <p style="text-align: left; color: #bbb;"><i class="fa fa-phone-square" style="width: 15px; text-align: center;"></i><span class="divide"></span>{{ $kontak->telepon }}</p>
                    <p class="email" style="text-align: left; color: #bbb;"><i class="fa fa-envelope" style="width: 15px; text-align: center;"></i><span class="divide"></span><a href="mailto:{{$kontak->email}}">{{$kontak->email}}</a></p>
                </div>
            </div>
            <div class="span3" style="height: auto;">
                <div class="footer-menu">
                    <h2 class="title">FOLLOW US</h2>
                    <ul>
                        <li class="sosmed"><a href="{{ URL::to($kontak->fb) }}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                        <li class="sosmed"><a href="{{ URL::to($kontak->tw) }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="sosmed"><a href="{{ URL::to($kontak->gp) }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>

            @foreach($tautan as $key=>$group)
                @if($key=='3' || $key=='7')
                <div class="span3" style="min-height: 25%; margin-left: 0px;">
                    <div class="footer-menu">
                        <h2 class="title">{{ strtoupper($group->nama) }}</h2>                    
                        <ul>
                        @foreach($quickLink as $key=>$link)                        
                            @if($group->id==$link->tautanId)
                            <li>
                            @if($link->halaman=='1')
                                <a href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                            @elseif($link->halaman=='2')
                                <a href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                            @elseif($link->url=='1')
                                <a href="http://{{strtolower($link->linkTo)}}">{{$link->nama}}</a>
                            @else
                                <a href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                            @endif
                            </li>
                            @endif
                        @endforeach
                        </ul>                    
                    </div>
                </div>
                @elseif($key!=2)
                <div class="span3" style="min-height: 25%;">
                    <div class="footer-menu">                    
                        <h2 class="title">{{ strtoupper($group->nama) }}</h2>                        
                        <ul>
                        @foreach($quickLink as $key=>$link) 
                            @if($group->id==$link->tautanId)
                            <li>
                                @if($link->halaman=='1')
                                    <a href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                @elseif($link->halaman=='2')
                                    <a href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                @elseif($link->url=='1')
                                    <a href="http://{{strtolower($link->linkTo)}}">{{$link->nama}}</a>
                                @else
                                    <a href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a>
                                @endif
                            </li>
                            @endif
                        @endforeach
                        </ul>                        
                    </div>
                </div>
                @endif
            @endforeach            
        </div>
        <div class="row-fluid">
            <div class="span6">
                <p class="copyright">Copyright © {{date('Y')}} {{ Theme::place('title') }}. All Rights Reserved. Powered by <a href="http://jarvis-store.com" target="_blank">Jarvis Store</a></p>
            </div>
            <div class="span6">
                <p class="bank">
                @foreach($bank as $value)
                    <img style="" src="{{URL::to('img/'.$value->bankdefault->logo)}}" alt="logo bank" />
                @endforeach
                </p>
            </div>
        </div>
    </footer>