<form action="{{ $route }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Digite seu email" value="{{old('name')}}">
        @error('name')
            <span>{{$message}}</span>
        @enderror
      </div>

    <div class="form-group">
      <label for="">Email</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email" value="{{old('email')}}">
      @error('email')
            <span>{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Digite seu email">
        @error('password')
            <span>{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Confirme a senha</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Digite seu email">
        @error('password_confirmation')
            <span>{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">
        Enviar
      </button>
    </div>

</form>