@extends('layout.app')
@section('title')
Authentification
@endsection
@section('content')
<!-- content -->
<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					<img src="/frontend/images/user.jpg" alt="" />
				</div>
				<form action="#" method="post">
					<p class="legend">Connexion<span class="fa fa-hand-o-down"></span></p>
					<div class="input">
						<input type="email" placeholder="Email" name="email" required />
						<span class="fa fa-envelope"></span>
					</div>
					<div class="input">
						<input type="password" placeholder="Password" name="password" required />
						<span class="fa fa-unlock"></span>
					</div>
					<button type="submit" class="btn submit">
						<span class="fa fa-sign-in"></span>
					</button>
				</form>
				<a href="/registrer" class="bottom-text-w3ls">Pas encore de compte? Créer un compte?</a>
			</div>
		</div>
		<!-- //content -->
        @endsection