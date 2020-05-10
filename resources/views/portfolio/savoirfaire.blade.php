@inject('hp','App\services\Helpers')

<section class="mh-service">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h2>Savoir Faire</h2>
            </div>
            @foreach($hp->listeSavoirFaire() as $savoir)
            <div class="col-sm-4">
                <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <i class="{{$savoir->icone}}"></i>
                    <h3>{{$savoir->title}}</h3>
                    <p>
                        {!!html_entity_decode($savoir->describe)!!}.
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>