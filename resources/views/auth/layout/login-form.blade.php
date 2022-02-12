<form action="{{ $route }}" method="POST">
    @csrf

    <div class="form-group">
      <label for="">Email</label>
      <input type="text" name="email" id="email" class="form-control" placeholder="Digite seu email" value="{{old('name')}}">
    </div>

    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Digite seu email" value="{{old('name')}}">
    </div>

    <div class="form-group">
      <a href="{{$register}}" class="btn btn-link float-left">Cadastre-se</a>
      <button type="submit" class="btn btn-primary float-right">
        Enviar
      </button>
    </div>

</form>