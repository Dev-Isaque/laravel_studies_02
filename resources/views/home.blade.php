@extends('layouts/main_layout')

@section('content')

    {{-- comentário de blade --}}

    {{-- -------- Instrução IF simples -------- --}}
    {{--  
    @if ($value == 100)
        <h1>Primeira parte do código</h1>
    @endif 
    --}}

    {{-- -------- Instrução IF ELSE -------- --}}
    {{--   
    @if ($value == 100)
        <h1>Parte do IF</h1>
    @else
        <h1>Parte do ELSE</h1>
    @endif 
    --}}

    {{-- -------- Instrução IF ELSEIF ELSE ENDIF -------- --}}
    {{--   
    @if ($value < 10)
        <p>Saida do If</p>
    @elseif($value < 20)
        <p>Saida do Primeiro Else If</p>
    @elseif($value > 50)
        <p>Saida do Segundo Else If</p>
    @elseif($value == 100)
        <p>Saida do Terceiro Else If</p>
    @else
        <p>Saida do Else</p>
    @endif 
    --}}

    {{-- -------- Switch -------- --}}
    {{--  
    @switch($value)
        @case(100)
            <h1>Valor 100</h1>
        @break

        @case(200)
            <h1>Valor 200</h1>
        @break

        @case(300)
            <h1>Valor 300</h1>
        @break

        @default
            <h1>Outros</h1>
    @endswitch
    --}}

    {{-- -------- Empty -------- --}}
    {{-- 
    @empty($value)
        <p>NÃO EXISTE</p>
    @else
        <p>EXISTE</p>
    @endempty 
    --}}

    {{-- -------- Isset -------- --}}
    {{-- 
    @isset($value)
        <p>EXISTE A VARIAVEL</p>
    @else
        <p>NÃO EXISTE A VARIAVEL</p>
    @endisset 
    --}}

    {{-- -------- unless -------- --}}
    {{-- 
    @unless ($value != 100)
        <p>OK!!!!!!!</p>
    @endunless 
    --}}

    {{-- -------- for -------- --}}
    {{--  
   @for ($index = 0; $index < 5; $index++)
        <h1>{{ $index }}</h1>
    @endfor 
    --}}

    {{-- -------- foreach -------- --}}
    {{-- 
    @foreach ($cities as $city)
        <h1> {{ $city }}</h1>
    @endforeach 
    --}}

    {{-- -------- forelse -------- --}}
    {{--  
   @forelse ($names as $name)
        <p>{{ $name }}</p>
    @empty
        <p>Names está vazio</p>
    @endforelse 
    --}}

    {{-- -------- while -------- --}}
    {{-- 
    @while ($indice <= 10)
        <p> indice: {{ $indice }} </p>

        @php
            $indice++;
        @endphp
    @endwhile
    --}}

    {{-- -------- usando o continue e break -------- --}}
    {{--  
    @for ($index = 0; $index < 10; $index++)
        {{-- -- continue -- --}} {{-- -- 
        @if ($index == 5)
            @continue
        @endif

        <p>Index: {{ $index }}</p>

       {{-- -- break -- --}}{{-- -- 
        @if ($index == 7)
            @break
        @endif
    @endfor 
    --}}

    {{-- -------- lopp variable -------- --}}
    {{--  
    @foreach ($cities as $city)
        <h1>{{ $city }}</h1>
        <h3>{{ $loop->index }}</h3>

        @if ($loop->first)
            <h3>Primeira cidade</h3>
        @endif

        @if ($loop->last)
            <h3>Ultima cidade</h3>
        @endif
    @endforeach 
    --}}

    {{-- -------- @csrf -------- --}}


@endsection
