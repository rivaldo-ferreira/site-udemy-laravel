<x-mail::message>
    # Parabéns, você recebeu um novo lead!

    <p>
        Nome: {{ $data['name'] }}<br>
        Telefone: {{ $data['tel'] }}<br>
        E-mail: {{ $data['email'] }}<br>
    </p>

    <x-mail::button :url="'https://google.com'">
        Clique aqui para pesquisar!
    </x-mail::button>

    {{ date('d/m/Y') }}<br>
    {{ config('app.name') }}
</x-mail::message>
