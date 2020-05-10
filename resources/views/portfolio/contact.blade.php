@inject('hp','App\services\Helpers')

<footer class="mh-footer mh-footer-3" id="mh-contact">
    <div class="container-fluid">
        <div class="row section-separator">
            <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h3>Contactez Moi</h3>
            </div>
            <div class="map-image image-bg col-sm-12">
                <div class="container mt-30">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mh-footer-address">
                            <div class="col-sm-12 xs-no-padding">
                                <div class="mh-address-footer-item dark-bg shadow-1 media wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                    <div class="each-icon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <div class="each-info media-body">
                                        <h4>Adresse</h4>
                                        <address>
                                            {{$hp->listeProfil()->nom_rue}} <br> 
                                             {{$hp->listeProfil()->ville}}
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 xs-no-padding">
                                <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                    <div class="each-icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="each-info media-body">
                                        <h4>Email</h4>
                                        <a href="mailto:{{$hp->listeProfil()->email1}}">{{$hp->listeProfil()->user->email}}</a><br>
                                        <a href="mailto:{{$hp->listeProfil()->email2}}">{{$hp->listeProfil()->email2}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 xs-no-padding">
                                <div class="mh-address-footer-item media dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                    <div class="each-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="each-info media-body">
                                        <h4>Telephones</h4>
                                        <a href="callto:(880)-8976-987">{{$hp->listeProfil()->phone1}}</a><br>
                                        <a href="callto:(880)-8976-987">{{$hp->listeProfil()->phone2}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            @include('message.error')
                            <!-- formulaire d'envoie de contact -->
                            <form  method="post" action="{{route('contact.store')}} ">
                                @csrf
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="row">
                                    <input type="hidden" name="user_id" value="1">
                                    <div class="col-sm-12">
                                        <input name="firstName" class="contact-name form-control" id="name" type="text" placeholder="Veuillez entrer votre prenom" required value="{{ $firstName ?? old('firstName') }}">
                                    </div>
        
                                    <div class="col-sm-12">
                                        <input name="lastName" class="contact-email form-control" id="L_name" type="text" placeholder="Veuillez entrer votre nom" required value="{{ $lastName ?? old('lastName') }}">
                                    </div>
        
                                    <div class="col-sm-12">
                                        <input name="email" class="contact-subject form-control" id="email" type="email" placeholder="Veuillez saisir votre adresse email" required value="{{ $email ?? old('email') }}">
                                    </div>
        
                                    <div class="col-sm-12">
                                        <textarea class="contact-message" id="message" rows="6" placeholder="Veuillez ecrire votre message" name="message" required value="{{ $message ?? old('message') }}"></textarea>
                                    </div>
                                    <!-- Subject Button -->
                                    <div class="btn-form col-sm-12">
                                        <input type="submit" class="btn btn-fill btn-block"  value="Envoyer Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-left text-xs-center">
                                        <p>All right reserved naelamadou @ {{now()->year}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="social-icon">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-github"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>