<div class="row-fluid" style="margin-top: 20px;">
    <div class="span3 hidden-phone">
        <div class="sidebar">
            {{pluginSidePowerup()}}
            <section>
                @foreach(getBanner(1) as $item)
                <div><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
                @endforeach
            </section>
            <section>
                <h5>Hubungi Kami</h5>
                {{ymyahoo($shop->ym)}}
                <br><br>

                @if($shop->telepon)
                <address class="row-fluid">
                    <div class="pull-left clabel" style="padding-right: 15px; border-right: 1px dotted rgb(221, 221, 221);"><i style="font-size: 1.5em" class="fa fa-mobile"></i></div>
                    <div class="pull-left cdata" style="padding-left: 5px;"> {{$shop->telepon}}</div>
                </address>
                @endif
                @if($shop->hp)
                <address class="row-fluid">
                    <div class="pull-left clabel" style="padding-right: 12px; border-right: 1px dotted rgb(221, 221, 221);"><i class="fa fa-phone-square"></i>
                    </div>
                    <div class="pull-left cdata" style="padding-left: 5px;"> {{$shop->hp}}</div>
                </address>
                @endif

                @if($shop->email)
                <address class="row-fluid">
                    <div class="pull-left" style="padding-right: 10px; border-right: 1px dotted rgb(221, 221, 221);"><i class="fa fa-envelope"></i></div>
                    <div class="pull-left" style="padding-left: 5px;"><a class="navi-blog" href="mailto:{{$shop->email}}" target="_top">{{$shop->email}}</a></div>
                </address>
                @endif
                @if($shop->bb)
                <address class="row-fluid">
                    <div class="pull-left clabel" style="padding-right: 5px; border-right: 1px dotted rgb(221, 221, 221);">
                        <img src="{{URL::to('img/bbm.png')}}" style="width: 20px;">
                    </div>
                    <div class="pull-left cdata" style="padding-left: 5px;">{{$shop->bb}}</div>
                </address>
                @endif
            </section>

            <section>
                <h5>Testimonial</h5>
                <span>
                    <ul>
                        @foreach ($testimo as $items)
                            <li><a href="#">{{$items->isi}}</a><br /><small>oleh <strong>{{$items->nama}}</strong></small></li>
                        @endforeach
                    </ul>
                    <strong style="float:right"><a href="{{URL::to('testimoni')}}">More..</a></strong>
                </span>
            </section>                            

        </div>
    </div>

    <div class="span9">
        <div class="row-fluid">

            <div class="tab-content sideline">
                @foreach($produk as $key=>$myproduk)
                <article style="height: 262px;position:relative;">
                    <span style="float: left; position: relative; top: 10px; left: 20px;" class="badge badge-inverse">{{jadiRupiah($myproduk->hargaJual)}}</span>    
                    {{is_terlaris($myproduk)}}
                    {{is_produkbaru($myproduk)}}
                    {{is_outstok($myproduk)}}
                    <div class="view thumb-prod">
                        <img style="margin:auto; height: 180px;" src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" alt="" class="img1" />
                        <div class="mask">
                            <p>{{shortDescription($myproduk->deskripsi,100)}}</p>
                            <a href="{{slugProduk($myproduk)}}" class="buy">Beli</a>

                        </div>
                    </div>
                    <p><a href="{{slugProduk($myproduk)}}">{{$myproduk->nama}}</a></p>
                </article>
                @endforeach
            </div>
        </div>

    </div>

</div>