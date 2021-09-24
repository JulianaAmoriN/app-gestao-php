{{ $slot }}
<form action={{route("site.contato")}} method="post">
    @csrf {{-- token para enviar o form (CROSS-SITE REQUEST FORGERY) --}}
    <input name="name" value="{{ old('name') }}" type="text" placeholder="Nome" class="{{$classe}}">
    @if ($errors->has('name'))
        {{ $errors->first('name') }}        
    @endif
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{$classe}}">
        {{ $errors->has('telefone') ? $errors->first('telefone') : ''}}
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{$classe}}">
        {{ $errors->has('email') ? $errors->first('email') : ''}}
    <br>
    <select name="motivo_contatos_id" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivos_de_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato -> id}}" {{ old('motivo_contatos_id') == $motivo_contato-> id ? 'selected' : ''}}>{{ $motivo_contato -> motivo_contatos}}</option>
        @endforeach
    </select>
        {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}
    <br>
    <textarea name="mensagem" class="{{$classe}}"> {{(old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem' }} </textarea>
        {{ $errors->has('mensagem') ? $errors->first('mensagem') : ''}}
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>

{{-- 
@if ($errors->any())
    <div style="position:relative; top:0px; left:0px; width:100%; background:red">
        @foreach ($errors->all() as $erro)
            {{ $erro }}<br>
        @endforeach
    </div>    
@endif --}}