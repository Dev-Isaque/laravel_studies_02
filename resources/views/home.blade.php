@extends('layouts/main_layout')

@section('content')
    <p class="display-1 text-center">Hello world</p>

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
@endsection
