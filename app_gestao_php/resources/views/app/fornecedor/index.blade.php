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

   $oi;
    
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
<br>
@if(!($fornecedores[0]['status'] == 'n'))
    Fornecedor está ativo.
@endif

@unless($fornecedores[0]['status'] == 'n')
    Fornecedor está ativo
@endunless

<br>
@isset($oi)
    variável $oi recebeu um valor {{--retorna a existencia de uma variável @isset--}}
@endisset

<br>
{{--
    @empty verifica se a variável está vazia 
    - ''
    - 0
    - 0.0
    - null
    - false
    - array()
    - $var
--}}
@empty($oi)
$oi foi declarado mas não recebeu nenhum valor 
@endempty

<br>
@isset($fornecedores)
    @for($i=0; isset($fornecedores[$i]); $i++)
        <br>
        Fornecedor: {{$fornecedores[$i]['nome']}}
        <br>
         Status: {{$fornecedores[$i]['status']}}
        <br>
        CNPJ: {{$fornecedores[$i]['cnpj'] ?? 'não existe'}}
        {{-- se a varável testada não estiver definida (retorno do isset) || variável testada possuir valor null --}}
        <br>
        @switch($fornecedores[$i]['ddd'])
            @case('11')
                São Paulo -SP
                @break
            @case('32')
                Juiz de Fora -MG
                @break
            @default
                Estado não registrado
        @endswitch
        <hr>
    @endfor
@endisset

<br>
@for($i=0; $i<=10; $i++)
    {{ $i }} <br>
@endfor

@isset($fornecedores)
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        <br>
        Fornecedor: {{$fornecedores[$i]['nome']}}
        <br>
        Status: {{$fornecedores[$i]['status']}}
        <br>
        CNPJ: {{$fornecedores[$i]['cnpj'] ?? 'não existe'}}
        <hr>
        @php  $i++ @endphp
    @endwhile
@endisset

@isset($fornecedores)
    {{-- forEach gera um novo array com base no inicial, modificações feitas na variálvel de copia não altera valor do original--}}
    @foreach($fornecedores as $indice => $fornecedor)
        <br>
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{$fornecedor['cnpj'] ?? 'não existe'}}
        <hr>
    @endforeach
@endisset

@php $teste= [] @endphp
@isset($teste)
    @forelse($teste as $indice => $fornecedor)
        <br>
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{$fornecedor['cnpj'] ?? 'não existe'}}
        <hr>
    @empty
        Não existem fornecededores cadastrados
    @endforelse
@endisset



