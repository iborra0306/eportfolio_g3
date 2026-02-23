<p>Un usuario se ha registrado en <strong>ePortfolio.test</strong>
    Si no ha sido usted, por favor, háganoslo saber.</p>
@auth
    <ul>
    <li>Nombre: {{ Auth::user()->name }}</li>
    <li>Correo electrónico: {{ Auth::user()->email }}</li>
</ul>
@endauth
<p>Para visitarnos, por favor, haga clic en el siguiente enlace:
    <a href="{{ route('home') }}">ePortfolio</a></p>
</p>
