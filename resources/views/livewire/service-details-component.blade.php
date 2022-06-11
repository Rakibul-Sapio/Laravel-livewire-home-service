<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>{{$service->name}}</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>{{$service->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="semiboxshadow text-center">
            <img src="#" class="img-responsive" alt="#" width="60">
        </div>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 single-blog">
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-header">
                                            <div class="post-format-icon post-format-standard"
                                                 style="margin-top: -10px;">
                                                <i class="fa fa-image"></i>
                                            </div>
                                            <div class="post-info-wrap">
                                                <h2 class="post-title"><a href="#" title="Post Format: Standard"
                                                                          rel="bookmark">{{$service->name}}</a></h2>
                                                <div class="post-meta" style="height: 10px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="single-carousel">
                                            <div class="img-hover">
                                                <img src="{{asset('images/services')}}/{{$service->image}}" alt=""
                                                     class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="post-content">
                                            <h3>{{$service->name}}</h3>
                                            <p>{{$service->description}}</p>
                                            <h4>Inclusion</h4>
                                            <ul class="list-styles">
                                                <li><i class="fa fa-plus"></i>Etiam pulvinar eros eu felis varius,
                                                    nec eleifend risus faucibus.</li>
                                                <li><i class="fa fa-plus"></i>Donec gravida sem vel nibh feugiat
                                                    tincidunt.</li>
                                                <li><i class="fa fa-plus"></i>Ut at dui id turpis gravida ultricies
                                                    id interdum enim.</li>
                                                <li><i class="fa fa-plus"></i>Donec posuere velit non sem viverra
                                                    rutrum.</li>
                                                <li><i class="fa fa-plus"></i>In sodales risus ac felis aliquam
                                                    finibus.</li>
                                                <li><i class="fa fa-plus"></i>Fusce sed lorem non massa tristique
                                                    commodo.</li>
                                                <li><i class="fa fa-plus"></i>Cras efficitur dolor commodo urna
                                                    pulvinar aliquam.</li>
                                            </ul>
                                            <h4>Exclusion</h4>
                                            <ul class="list-styles">
                                                <li><i class="fa fa-minus"></i>Suspendisse mattis erat non erat
                                                    blandit luctus id vitae ligula.</li>
                                                <li><i class="fa fa-minus"></i>Quisque vestibulum arcu non odio
                                                    aliquet, sed laoreet turpis fringilla.</li>
                                                <li><i class="fa fa-minus"></i>Vestibulum ac velit vel lectus
                                                    blandit pulvinar sed convallis odio.</li>
                                                <li><i class="fa fa-minus"></i>Aenean non ante feugiat nisi tempus
                                                    facilisis.</li>
                                                <li><i class="fa fa-minus"></i>Sed ac eros non nulla pharetra
                                                    consequat.</li>
                                                <li><i class="fa fa-minus"></i>Nulla maximus nibh in facilisis
                                                    placerat.</li>
                                                <li><i class="fa fa-minus"></i>Morbi id velit id libero blandit
                                                    luctus.</li>
                                                <li><i class="fa fa-minus"></i>Sed hendrerit ex non lacus ultricies
                                                    porttitor.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <aside class="widget" style="margin-top: 18px;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Booking Details</div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td style="border-top: none;">Price</td>
                                                <td style="border-top: none;"><span>&#2547;</span> {{$service->price}}</td>
                                            </tr>
                                            <tr>
                                                <td>Quntity</td>
                                                <td>NULL</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td>{{$service->discount}}</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td><span>&#2547;</span> {{$service->price}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="panel-footer">
                                        <form>
                                            <input type="submit" class="btn btn-primary" name="submit"
                                                   value=" Book Now">
                                        </form>
                                    </div>
                                </div>
                            </aside>
                            <aside>
                                <h3>Related Service</h3>
                                <div class="col-md-12 col-sm-6 col-xs-12 bg-dark color-white padding-top-mini"
                                     style="max-width: 360px">
                                    <a href="#">
                                        <div class="img-hover">
                                            <img src="{{asset('images/services/thumbnails/thumbnail.jpg')}}" alt=""
                                                 class="img-responsive">
                                        </div>
                                        <div class="info-gallery">
                                            <h3>
                                                AC Wet Servicing
                                            </h3>
                                            <hr class="separator">
                                            <p>AC Wet Servicing</p>
                                            <div class="content-btn"><a href="#"
                                                                        class="btn btn-warning">View Details</a></div>
                                            <div class="price"><span>&#2547;</span><b>From</b>200</div>
                                        </div>
                                    </a>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
