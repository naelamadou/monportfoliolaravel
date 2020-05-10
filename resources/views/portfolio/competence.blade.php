@inject('hp','App\services\Helpers')
<section class="mh-skills" id="mh-skills">
    <div class="home-v-img">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title text-center col-sm-12">
                    <!--<h2>Skills</h2>-->
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-skills-inner">
                        <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <h3>Competences Techniques</h3>
                            <div class="each-skills">
                                @foreach($hp->listeCompetencesTech()->load('type_competence') as $cmpTech)
                                    @if($cmpTech->type_competence->id == 1)
                                <div class="candidatos">
                                    <div class="parcial">
                                        <div class="info">
                                            <div class="nome">{{$cmpTech->name}}</div>
                                            <div class="percentagem-num">{{$cmpTech->pourcentage}}%</div>
                                        </div>
                                        <div class="progressBar">
                                            <div class="percentagem" style="width: {{$cmpTech->pourcentage}}%;"></div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <h3>Competences Profesionnelles</h3>
                        <ul class="mh-professional-progress">
                            @foreach($hp->listeCompetencesTech()->load('type_competence') as $cmpTech)
                                @if($cmpTech->type_competence->id == 2)
                            <li>
                                <div class="mh-progress mh-progress-circle" data-progress="{{$cmpTech->pourcentage}}"></div>
                                <div class="pr-skill-name">{{$cmpTech->name}}</div>
                            </li>
                                @endif
                            @endforeach
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>