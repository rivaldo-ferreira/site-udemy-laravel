<div class="slider">
    <ul class="slides">
        <li>
            <img src="{{ asset('images/slider-1.jpg') }}" class="responsive-img" alt="Imagem Work">
            <div class="caption left-align">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dicta earum consequatur
                    commodilaudantium quo enim illum voluptatem labore ab, iure, iste voluptatum facere, illo a
                    recusandae distinctio dolore cum.
                </h5>

                <a href="#modal-lead" class="btn btn-small blue modal-trigger">Quero me cadastrar!</a>
            </div>
        </li>
        <li>
            <img src="{{ asset('images/slider-2.jpg') }}" class="responsive-img" alt="Imagem Work">
            <div class="caption right-align">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi dicta earum consequatur
                    commodilaudantium quo enim illum voluptatem labore ab, iure, iste voluptatum facere, illo a
                    recusandae distinctio dolore cum.
                </h5>

                <a href="#modal-lead" class="btn btn-small blue modal-trigger">Quero me cadastrar!</a>
            </div>
        </li>
    </ul>
</div>

{{-- janela modal com formulário --}}
<div class="modal" id="modal-lead">
    <div class="modal-content">
        <h3 class="flow-text">Preencha o formulário</h3>

        <form action="{{ route('lead') }}" method="post">
            @csrf
            <div class="row">
                {{-- campo nome --}}
                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="name" id="name" required>
                    <label for="name">Digite seu nome:</label>
                </div>
                {{-- campo telefone --}}
                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">phone_iphone</i>
                    <input type="tel" name="tel" id="tel" required>
                    <label for="tel">Digite seu telefone:</label>
                </div>
                {{-- campo email --}}
                <div class="col s12 input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" required>
                    <label for="email">Digite seu e-mail:</label>
                </div>
                {{-- botoes --}}
                <div class="col s12 m6 input-field">
                    <input type="submit" value="Enviar" class="btn btn-small blue">
                    <input type="reset" value="Apagar" class="btn btn-small red">
                </div>
            </div>
        </form>
    </div>
</div>
