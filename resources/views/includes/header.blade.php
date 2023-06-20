<nav class="navbar navbar-expand-md  ms-3 navbar-light bg-light">
    <a href="{{route('home')}}" class="navbar-brand" >
        {{config('app.name')}}
    </a>
    <button type="button" class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="navbar-nav mr-auto mb-2 mb-md-0">
            <li class="nav-item active">
            <a href="{{route('home')}}" class="nav-link {{active_link('home')}}" >{{__('Главная')}}<span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a href="{{route('blog')}}" class="nav-link {{active_link('blog*')}}" >{{__('Блог')}}<span class="sr-only"></span></a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item active">
            <a href="{{route('register')}}" class="nav-link {{active_link('register')}}" >{{__('Регистрация')}}<span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a href="{{route('login')}}" class="nav-link {{active_link('login')}}">{{__('Вход')}}<span class="sr-only"></span></a>
            </li>
        </ul>
      </form>
    </div>
  </nav>