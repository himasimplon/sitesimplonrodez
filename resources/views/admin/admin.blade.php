@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Accueil administrateur</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    You are logged in!
                </div>
                <div class="top-right links">
                    @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
                    @endif
                <div class="card">
                    <div class="row">
                        <div class="col-md-12">
                           <div class="col-md-4">
                                <h1 class="card-title">Tableau de bord</h1>
                                <ul>
                                    <a href="{{ }}">Projets</a>
                                    <a href="{{ }}">Catégories</a>
                                    <a href="{{ }}">Gestion des comptes utilisateurs</a>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>    

            </div>
        </div>
    </div>
</div>
@endsection