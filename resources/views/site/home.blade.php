@extends('site.layout')
@section('title', 'Home')
@section('content')

    <div class="row container">
        <div class="col s12 center-align">
            <p class="flow-text">Página Principal do Site</p>
        </div>
        <div class="col s12 divider"></div>
        <p>&nbsp;</p>
        {{-- card 1 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/cards/card-1.jpg') }}" alt="[imagem]" title="Curso Udemy"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Card 1</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais...</a>
                </div>
            </div>
        </div>
        {{-- card 2 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/cards/card-2.jpg') }}" alt="[imagem]" title="Curso Udemy"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Card 2</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais...</a>
                </div>
            </div>
        </div>
        {{-- card 3 --}}
        <div class="col s12 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/cards/card-3.jpg') }}" alt="[imagem]" title="Curso Udemy"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Card 3</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais...</a>
                </div>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12">
            <div class="divider"></div>
        </div>
    </div>

    <p>&nbsp;</p>
    <div class="row container">
        <section class="col s12">
            <h1 class="flow-text light">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
            <p class="flow-text light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam fuga quas provident id
                temporibus, dolores
                dicta quam minima impedit asperiores facilis iure, illo error doloremque.</p>

            <p class="flow-text light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, veritatis ipsum?
                Repudiandae hic
                aspernatur excepturi! Laborum ipsam enim eos culpa, necessitatibus delectus aperiam officia vitae quam. Ea
                exercitationem quaerat cupiditate?</p>
            <p>
                <a href="#!" class="waves-effect waves-light btn btn-small blue">saiba mais</a>
                <a href="#!" class="waves-effect waves-light btn btn-small purple">cadastra-se</a>
            </p>
        </section>
    </div>

    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('images.parallax-01.jpg') }}" alt="[imagem]" title="Imagem parallax" class="responsive-img">
        </div>
    </div>


@endsection
