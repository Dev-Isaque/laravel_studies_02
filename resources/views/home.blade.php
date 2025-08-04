@extends('layouts/main_layout')

@section('content')
    {{-- Blade: Estruturas de controle úteis no dia a dia --}}

    {{-- -------- IF simples -------- --}}
    {{-- 
        Verifica uma condição. Se verdadeira, executa o bloco.
        Ideal para exibir mensagens, seções ou estilos com base em uma variável.
    --}}
    {{--  
    @if ($value == 100)
        <h1>Primeira parte do código</h1>
    @endif 
    --}}

    {{-- -------- IF ELSE -------- --}}
    {{-- 
        IF com alternativa ELSE. Use para lidar com 2 possibilidades.
        Ex: usuário logado vs visitante.
    --}}
    {{--   
    @if ($value == 100)
        <h1>Parte do IF</h1>
    @else
        <h1>Parte do ELSE</h1>
    @endif 
    --}}

    {{-- -------- IF ELSEIF ELSE ENDIF -------- --}}
    {{-- 
        Estrutura para múltiplas possibilidades.
        Dica: use apenas o necessário. Evite blocos muito longos.
    --}}
    {{--   
    @if ($value < 10)
        <p>Saída do IF</p>
    @elseif($value < 20)
        <p>Saída do Primeiro ElseIf</p>
    @elseif($value > 50)
        <p>Saída do Segundo ElseIf</p>
    @elseif($value == 100)
        <p>Saída do Terceiro ElseIf</p>
    @else
        <p>Saída do ELSE</p>
    @endif 
    --}}

    {{-- -------- Switch -------- --}}
    {{-- 
        Alternativa elegante ao IF ELSE encadeado quando a variável é a mesma.
        Ideal para valores fixos, como status, tipos, categorias.
    --}}
    {{--  
    @switch($value)
        @case(100)
            <h1>Valor 100</h1>
        @break
        @case(200)
            <h1>Valor 200</h1>
        @break
        @default
            <h1>Outros</h1>
    @endswitch
    --}}

    {{-- -------- Empty -------- --}}
    {{-- 
        Verifica se está vazio: null, array vazio, string vazia ou zero itens.
        Útil para validar listas ou strings.
    --}}
    {{-- 
    @empty($value)
        <p>NÃO EXISTE</p>
    @else
        <p>EXISTE</p>
    @endempty 
    --}}

    {{-- -------- Isset -------- --}}
    {{-- 
        Verifica se a variável está definida e não é null.
        Diferente do empty (que considera também valores vazios).
    --}}
    {{-- 
    @isset($value)
        <p>VARIÁVEL EXISTE</p>
    @else
        <p>NÃO EXISTE</p>
    @endisset 
    --}}

    {{-- -------- Unless -------- --}}
    {{-- 
        Inverso do IF.
        Executa o bloco se a condição for FALSA.
        Ex: @unless ($user->isAdmin())
    --}}
    {{-- 
    @unless ($value != 100)
        <p>OK!!!!!!!</p>
    @endunless 
    --}}

    {{-- -------- FOR -------- --}}
    {{-- 
        Estrutura de repetição com índice.
        Útil quando você precisa de controle numérico.
    --}}
    {{--  
   @for ($index = 0; $index < 5; $index++)
        <h1>{{ $index }}</h1>
    @endfor 
    --}}

    {{-- -------- FOREACH -------- --}}
    {{-- 
        Para percorrer arrays ou collections.
        Útil em listagens, menus, tabelas, etc.
    --}}
    {{-- 
    @foreach ($cities as $city)
        <h1>{{ $city }}</h1>
    @endforeach 
    --}}

    {{-- -------- FORELSE -------- --}}
    {{-- 
        Similar ao foreach, mas com @empty se a lista estiver vazia.
        Evita fazer if antes do foreach.
    --}}
    {{--  
   @forelse ($names as $name)
        <p>{{ $name }}</p>
    @empty
        <p>Lista de nomes está vazia</p>
    @endforelse 
    --}}

    {{-- -------- WHILE -------- --}}
    {{-- 
        Executa enquanto a condição for verdadeira.
        Requer controle interno do índice.
    --}}
    {{-- 
    @while ($indice <= 10)
        <p>Índice: {{ $indice }} </p>
        @php $indice++; @endphp
    @endwhile
    --}}

    {{-- -------- Continue e Break -------- --}}
    {{-- 
        @continue: pula a iteração atual
        @break: sai do loop
        Use com cuidado para não dificultar a leitura.
    --}}
    {{--  
    @for ($index = 0; $index < 10; $index++)
        @if ($index == 5)
            @continue
        @endif
        <p>Index: {{ $index }}</p>
        @if ($index == 7)
            @break
        @endif
    @endfor 
    --}}

    {{-- -------- Loop Variables -------- --}}
    {{-- 
        $loop é uma variável especial do Blade em loops:
        - $loop->index => começa do 0
        - $loop->iteration => começa do 1
        - $loop->first / $loop->last => bool
        - $loop->count => total de itens
    --}}
    {{--  
    @foreach ($cities as $city)
        <h1>{{ $city }}</h1>
        <h3>Index: {{ $loop->index }}</h3>
        @if ($loop->first)
            <h3>Primeira cidade</h3>
        @endif
        @if ($loop->last)
            <h3>Última cidade</h3>
        @endif
    @endforeach 
    --}}

    {{-- -------- CSRF -------- --}}
    {{-- 
        Protege formulários contra ataques CSRF.
        SEMPRE incluir @csrf em formulários POST.
    --}}
    {{-- 
    <form action="{{ Route('submit') }}" method="post">
        @csrf
        <input type="text" name="username">
        <input type="password" name="password">
        <button>Login</button>
    </form>
    --}}

    {{-- -------- PHP dentro da View -------- --}}
    {{-- 
        @php: executar lógica diretamente na view (evite lógica complexa aqui).
        {{ }}: escapa HTML
        {!! !!}: não escapa (cuidado com XSS!)
    --}}
    {{-- 
    @php
        $valor = 100;
        $nome = 'Isaque Soares';
        $valor1 = '<span class="text-warning">Mostrando HTML: ' . $valor . '</span>';
    @endphp

    <h3>{{ $valor }}</h3> 
    <h3>{!! $valor1 !!}</h3> 
    <h3>{{ $valor * 1000 }}</h3>
    <h3>{{ $nome }} tem {{ strlen($nome) }} caracteres</h3>
    --}}
@endsection
