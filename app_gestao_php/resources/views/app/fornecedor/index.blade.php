{{-- @dd($fornecedores); --}}
teste teste 

{{ 'vai de string'}}
<?= 'ambas as tags funcionam iguais' ?>

{{-- Comentário no código --}}
@php
    echo 'oi';
    // comentário de uma linha 
    /*
        comentário com mais de uma linha 
    */
@endphp

<br>
{{-- if(){

    }else if(){

    }else{
        
    } --}}
@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores</h3>
@else
    <h3>Não existem fornecedores</h3>
@endif

<br>
{{-- @unless executa se o retorno for false, similar ao If(!<condição>){} --}}
Fornecedor: {{$fornecedores[0]['nome']}}
Status: {{$fornecedores[0]['status']}}

@if(!($fornecedores[0]['status'] == 'n'))
    Fornecedor está ativo.
@endif

@unless($fornecedores[0]['status'] == 'n')
    Fornecedor está ativo
@endunless
