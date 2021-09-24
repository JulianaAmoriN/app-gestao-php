{{ $slot }}
<form action={{route("site.contato")}} method="post">
    @csrf {{-- token para enviar o form (CROSS-SITE REQUEST FORGERY) --}}
    <input name="name" value="{{ old('name') }}" type="text" placeholder="Nome" class="{{$classe}}">
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{$classe}}">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{$classe}}">
    <br>
    <select name="motivo_de_contato" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivos_de_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato -> id}}" {{ old('motivo_de_contato') == $motivo_contato-> id ? 'selected' : ''}}>{{ $motivo_contato -> motivo_contatos}}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{$classe}}"> {{(old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem' }} </textarea>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>

<div style="position:relative; top:0px; left:0px; width:100%; background:red">
    <pre>
        {{ print_r($errors) }}
    </pre>
</div>