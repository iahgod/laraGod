@include('base.header')

<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="{!! env('BASE')!!}/images/icon/logo.png" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        @if ($errors->any())
            <div class="alert alert-success">
                @foreach ($errors->all() as $error)
                <p>{!! $error !!}</p>
                @endforeach
            </div>
            @endif
                        <form action="{!!route('login.action')!!}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="au-input au-input--full" type="text" name="username" placeholder="Username ou E-mail">
                                @if ($errors->has('username'))
                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Senha">
                                @if ($errors->has('password'))
                                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="remember" value="1">Lembrar senha
                                </label>
                                <label>
                                    <a href="#">Esqueceu a senha?</a>
                                </label>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Entrar</button>
                        </form>
                        <div class="register-link">
                            <p>
                                Não tem uma conta?
                                <a href="{!!route('registro.index')!!}">Cadastre-se aqui</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('base.footer')
