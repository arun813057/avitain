@extends('layouts.app')

@section('title')
    @lang('title.LIBER_spec')
@stop

@section('content')

    <main class="top-nav-padding">

        @include('partials.product-navbar')

        <section>

            <div class="nav-product-wrap">
                <div class="container px-0">
                    <nav class="nav nav-pills nav-product-spec justify-content-center">
                        <a class="col text-center nav-link active" data-toggle="tab" href="#spec-3" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">(12.5-inch) @if( !$HAVE_LIBER_12) / @lang('site.coming_soon') @endif</div></div>
                            <img class="hidden-sm-down" src="/images/liber/12/pink.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li style="background-color: #DE9299" class="active" data-image="/images/liber/12/pink.png"></li>
                                <li style="background-color: #55665B" data-image="/images/liber/12/green.png"></li>
                                <li style="background-color: #2F5896" data-image="/images/liber/12/blue.png"></li>
                                <li style="background-color: #74AACA" data-image="/images/liber/12/cyan.png"></li>
                                <li style="background-color: #BAA1B9" data-image="/images/liber/12/purple.png"></li>
                            </ul>
                        </a>
                        <a class="col text-center nav-link" data-toggle="tab" href="#spec-1" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">(13.3-inch)</div></div>
                            <img class="hidden-sm-down" src="/images/liber/13/lightpurple.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4 ">
                                <li style="background-color: #c5c2d9" class="active" data-image="/images/liber/13/lightpurple.png"></li>
                                <li style="background-color: #6c55a4" data-image="/images/liber/13/purple.png"></li>
                                <li style="background-color: #3173b6" data-image="/images/liber/13/blue.png"></li>
                                <li style="background-color: #81b9db" data-image="/images/liber/13/lightblue.png"></li>
                                <li style="background-color: #cf346d" data-image="/images/liber/13/pink.png"></li>
                                <li style="background-color: #7fb041" data-image="/images/liber/13/green.png"></li>
                                <li style="background-color: #e1d059" data-image="/images/liber/13/yellow.png"></li>
                                <li style="background-color: #f58847" data-image="/images/liber/13/orange.png"></li>
                                <li style="background-color: #e9a1a8" data-image="/images/liber/13/lightpink.png"></li>
                                <li style="background-color: #dcdde2" data-image="/images/liber/13/white.png"></li>
                                <li style="background-color: #bea98d" data-image="/images/liber/13/gold.png"></li>
                                <li style="background-color: #1b1b1d" data-image="/images/liber/13/black.png"></li>
                                <li style="background-color: #c1c0b8" data-image="/images/liber/13/lightsilver.png"></li>
                                <li style="background-color: #7d7e82" data-image="/images/liber/13/silver.png"></li>
                            </ul>
                        </a>
                        <a class="col text-center nav-link" data-toggle="tab" href="#spec-2" role="tab">
                            <div class="spec-item-name mb-4"><div class="d-sm-block">AVITA LIBER</div><div class="d-sm-block">(14-inch)</div></div>
                            <img class="hidden-sm-down" src="/images/liber/14/lightpurple.png">
                            <ul class="list-unstyled spec-color-list d-flex flex-wrap align-items-center justify-content-center mt-4">
                                <li style="background-color: #c5c2d9" class="active" data-image="/images/liber/14/lightpurple.png"></li>
                                <li style="background-color: #6c55a4" data-image="/images/liber/14/purple.png"></li>
                                <li style="background-color: #3173b6" data-image="/images/liber/14/blue.png"></li>
                                <li style="background-color: #81b9db" data-image="/images/liber/14/lightblue.png"></li>
                                <li style="background-color: #cf346d" data-image="/images/liber/14/pink.png"></li>
                                <li style="background-color: #7fb041" data-image="/images/liber/14/green.png"></li>
                                <li style="background-color: #e1d059" data-image="/images/liber/14/yellow.png"></li>
                                <li style="background-color: #f58847" data-image="/images/liber/14/orange.png"></li>
                                <li style="background-color: #e9a1a8" data-image="/images/liber/14/lightpink.png"></li>
                                <li style="background-color: #dcdde2" data-image="/images/liber/14/white.png"></li>
                                <li style="background-color: #bea98d" data-image="/images/liber/14/gold.png"></li>
                                <li style="background-color: #1b1b1d" data-image="/images/liber/14/black.png"></li>
                                <li style="background-color: #c1c0b8" data-image="/images/liber/14/lightsilver.png"></li>
                                <li style="background-color: #7d7e82" data-image="/images/liber/14/silver.png"></li>
                            </ul>
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="spec-3" role="tabpanel">
                    <div class="container">
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Sistem Operasi</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CPU</div>
                                <div>Dari Generasi ke-7 Intel® Core<sup>TM</sup> i5-7Y54 Processor</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Display</div>
                                <div>12.5" FHD (1920x1080) IPS</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>8GB DDR3</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Grafis</div>
                                <div>Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Penyimpanan</div>
                                <div>256GB SSD SATA M.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Camera Terintegrasi</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Audio</div>
                                <div>1W x 2 Stereo Speaker, Internal Dual Array Digital Mic</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Keyboard</div>
                                <div>Island-type Keyboard (with Backlit)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Nirkabel</div>
                                <div>IEEE 802.11 ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                                <div>Bluetooth v4.2</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                <div>USB 3.0 Type-C x 1 (PD 2.0 charging, Display out), 3.5mm Headphone Jack x 1, DC in x 1</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Dimesi</div>
                                <div>299(W) x 199.5(H) x 14.89(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Berat</div>
                                <div>Mulai dari 1.14 kg</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Adapter</div>
                                <div>40W AC Adapter</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Baterai</div>
                                <div>Baterai Li-ion, 27.8Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Daya Tahan Baterai</div>
                                <div>Hingga 8 Jam</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Material</div>
                                <div>Aluminum</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Warna</div>
                                <div>Blossom Pink / Angel Blue / Himalayan Blue / Fragrant Lilac / Peacock Green</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Aksesoris</div>
                                <div>AC Adaptor dan kabel daya, posrt USB Type-C (Gratis tambahan USB-C to USB + HDMI adaptor)</div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="spec-1" role="tabpanel">
                    <div class="container">
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Sistem Operasi</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CPU</div>
                                <div>from 7th Gen Intel® Celeron® N3350 , up to Intel® Core® i5 Processor</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Tampilan</div>
                                <div>13.3" FHD (1920x1080)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>4GB/8GB DDR3 1600MHz</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Grafis</div>
                                <div>Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Penyimpanan</div>
                                <div>128GB SSD / 256GB SSD / 512GB SSD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Camera Terintegrasi</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Audio</div>
                                <div>1W x 2 Stereo Speaker, Internal Dual Array Digital Mic</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Keyboard</div>
                                <div>Island-type Keyboard (dengan lampu latar - pilihan)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Nirkabel</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                                <div>Bluetooth v4.0</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                <div>USB 3.0 x 2, USB 3.0 Type-C (Display out &amp; Charging) x 1, MicroSD card slot x 1, 3.5mm Headphone/Mic-in Combo Jack x 1, Mini HDMI x 1</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Dimesi</div>
                                <div>315(W) x 212(H) x15(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Berat</div>
                                <div>Starting from 1.37 kg</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Adapter</div>
                                <div>40W AC Adapter</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Baterai</div>
                                <div>Baterai Li-ion, 36Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Daya Tahan Baterai</div>
                                <div>Hingga 10 Jam</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Material</div>
                                <div>Aluminum</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Warna</div>
                                <div>Black / Silver/ Space Grey / Warna Lainnya</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Aksesoris</div>
                                <div>AC Adaptor, Mini HDMI to HDMI Adaptor</div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane" id="spec-2" role="tabpanel">
                    <div class="container">
                        <ul class="list-unstyled spec-list">
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Sistem Operasi</div>
                                <div>Windows 10 Home</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">CPU</div>
                                <div>from 7th Gen Intel® Celeron® N3350 , up to Intel® Core® i7 Processor</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Tampilan</div>
                                <div>14" FHD (1920x1080)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Memory</div>
                                <div>4GB/8GB DDR3 1600MHz</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Graphics</div>
                                <div>Intel® HD Graphics</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Storage</div>
                                <div>128GB SSD / 256GB SSD / 512GB SSD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Integrated Camera</div>
                                <div>720p HD</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Audio</div>
                                <div>1W x 2 Stereo Speaker, Internal Dual Array Digital Mic</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Keyboard</div>
                                <div>Island-type Keyboard (dengan lampu latar - pilihan)</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Wireless</div>
                                <div>IEEE 802.11 b/g/n/ac</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Bluetooth</div>
                                <div>Bluetooth v4.0</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">I/O Ports</div>
                                <div>USB 3.0 x 2, USB 3.0 Type-C (Display out &amp; Charging) x 1, MicroSD card slot x 1, 3.5mm Headphone/Mic-in Combo Jack x 1, Mini HDMI x 1</div>
                            </li>

                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Dimension</div>
                                <div>333(W) x 222(H) x 16(D) mm</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Weight</div>
                                <div>Starting from 1.49 kg</div>

                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Adapter</div>
                                <div>40W AC Adapter</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery</div>
                                <div>Li-ion Battery, 36Wh</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Battery Life</div>
                                <div>Up to 10 hours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Material</div>
                                <div>Aluminum</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Colour</div>
                                <div>Black / Silver / Space Grey / Other Colours</div>
                            </li>
                            <li class="spec-item d-flex">
                                <div class="offset-md-1 col-4 col-md-3">Accessories</div>
                                <div>AC Adapter, Mini HDMI to HDMI Adapter</div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </section>

        <section class="product-statement mt-4 mt-sm-0">
            <div class="container">
                <ul class="product-statement-list border-top py-2 py-sm-5 mx-auto ls-0 pl-4 py-0">
                    <li>Centrino Logo, Core Inside, Intel, Intel Logo, Intel Core, Intel Inside, Intel Inside Logo, Intel Viiv, Intel vPro, Itanium, Itanium Inside, Pentium, Pentium Inside, Viiv Inside, vPro Inside, Xeon, and Xeon Inside are trademarks of Intel Corporation in the U.S. and other countries.</li>
                    <li>Models or specifications may vary from country to country. Check with your local distributors or retailers for any updates on the current product.</li>
                    <li>Weights vary depending on configuration and manufacturing variability.</li>
                    <li>Colors of actual products may differ from product shots due to photography lighting or display setting of your viewing device.</li>
                    <li>We try our best to provide accurate and complete product information online yet we reserve the rights to keep, change or correct any information without further notice.</li>
                    <li>Windows is either registered trademark or trademark of Microsoft Corporation in the United States and/or other countries.</li>
                </ul>
            </div>
        </section>

        <div class="gotop-wrap">
            <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
        </div>

    </main>

@endsection
