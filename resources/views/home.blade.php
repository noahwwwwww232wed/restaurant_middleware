@extends('layout')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-4"> 
            <div class="card m-2" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('matambre a la pizza.webp')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Matambre a la Pizza</h5>
                    <p class="card-text">Matambre a la Pizza is een smakelijk Argentijns gerecht gemaakt van een dunne snede van rundvlees, bekend als "matambre". Dit vlees wordt bedekt met tomatensaus, kaas, en diverse pizza-achtige toppings zoals ham, paprika, en olijven. Het gerecht combineert de rijke smaken van gegrild vlees met de heerlijke smaken van een traditionele pizza.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card m-2" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('empanadas.webp')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Empanadas</h5>
                    <p class="card-text">Empanadas zijn veelzijdige en smaakvolle deeghapjes die wereldwijd geliefd zijn, vooral in de Spaanse en Latijns-Amerikaanse keukens. Deze met de hand gemaakte lekkernijen bestaan uit een dunne laag deeg, gevuld met een scala aan ingrediënten, en worden vervolgens gebakken of gefrituurd tot ze perfect goudbruin zijn.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card m-2" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('milanesa.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Milanesa</h5>
                    <p class="card-text">De milanesa is een geliefd gerecht in veel Latijns-Amerikaanse landen, evenals in Italië en Spanje, waar het zijn oorsprong vindt. Het gerecht bestaat uit een dun gesneden stuk vlees, meestal rundvlees, kip of varkensvlees, dat wordt gepaneerd en vervolgens gebakken of gefrituurd. Milanesa is vergelijkbaar met de Oostenrijkse Wiener Schnitzel en de Italiaanse Cotoletta alla Milanese.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
