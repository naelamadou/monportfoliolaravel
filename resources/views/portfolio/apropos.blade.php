@inject('hp','App\services\Helpers')

<section class="mh-about" id="mh-about">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-12 col-md-6">
                <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <img src="assets/images/code.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mh-about-inner">
                    <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">Me Connaitre</h2>
                    <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{!!html_entity_decode($hp->listeProfil()->describe)!!} </p>
                    <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <ul>
                        @foreach($hp->listeCompetencesTech()->load('type_competence') as $cmpTech)
                            @if($cmpTech->type_competence->id == 1)
                            <li><span>{{$cmpTech->name}}</span></li>
                            @endif
                        @endforeach
                    </ul>
                    </div>
                    @foreach(json_decode($hp->listeProfil()->cv) as $file)
                    <a href="{{asset('storage/'.$file->download_link ?? '')}}" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" target="_blank">Telecharger CV <i class="fa fa-download"></i></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>