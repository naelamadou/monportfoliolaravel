@inject('hp','App\services\Helpers')
<section class="mh-home mh-black-header image-bg relative" id="mh-home">
    <div class="img-foverlay img-color-overlay">
        <!--
        Video section
        -->
        <div class="section-video">
            <video autoplay="" class="bgvid" loop="" muted="">
                <source src="{{asset('assets/video/sgbs.mp4')}}" type="video/mp4">
                <source src="{{asset('assets/video/sgbs.mp4')}}" type="video/mp4">
                <!-- <source src="video/video.ogv" type="video/ogv"> -->
            </video>
        </div>
        <div class="container">
            <div class="row section-separator xs-column-reverse vertical-middle-content home-padding">
                <div class="col-sm-6">
                    <div class="mh-header-info">
                        <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                            <span>Bonjour Je suis</span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{$hp->listeProfil()->user->name ?? ''}}
                        </h2>
                        <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">{{$hp->listeProfil()->libelle}}</h4>
                        
                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:">{{$hp->listeProfil()->user->email}}</a></li>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:">{{$hp->listeProfil()->phone1}}</a></li>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i><address>{{$hp->listeProfil()->nom_rue ?? ''}}, {{$hp->listeProfil()->ville}}</address></li>
                        </ul>
                        
                        <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-github"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                        <div class="img-border">
                            <img src="{{asset('storage/'.$hp->listeProfil()->user->avatar ?? '')}}" alt=""  class="img-fluid" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</section>