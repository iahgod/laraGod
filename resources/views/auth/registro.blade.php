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
                        <form action="{!!route('registro.action')!!}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nome completo</label>
                                <input class="au-input au-input--full" type="text" name="username" placeholder="Nome completo">
                                @if ($errors->has('username'))
                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="au-input au-input--full" type="email" name="email" placeholder="E-mail">
                                @if ($errors->has('email'))
                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Senha">
                                @if ($errors->has('password'))
                                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Confirmação da senha</label>
                                <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Confirmação da senha">
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="aggree">Aceito os termos e política
                                </label>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Registrar</button>

                        </form>
                        <div class="register-link">
                            <p>
                                Já tem uma conta?
                                <a href="{!!route('login.index')!!}">Entre aqui</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('base.footer')
