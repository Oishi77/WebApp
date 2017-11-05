@extends('html.commonfields')
@section('title','Circularlist')
@section('content')
		<section class="fix maincontent">
            @extends('html.logout')
			<center><a href='/circular/ViewCircular/Programming&Testing'><input type="button" value="Department of Programming & testing"/></a><br/></center>
			<center><a href='/circular/ViewCircular/Graphics&Design'><input type="button" value="Department of Graphics & Desigining"/></a><br/><c/enter>
			<center><a href='/circular/ViewCircular/Planning&analysis'><input type="button" value="Department of Planning & Analysis"/></a><br/></center>
			<center><a href='/circular/ViewCircular/Finance&Accounts'><input type="button" value="Department of Finance & Accounts"/></a><br/></center>
			<center><a href='/circular/ViewCircular/Management&HR'><input type="button" value="Department of Management & HR"/></a><br/></center>
			<center><a href='/circular/ViewCircular/Finance&Accounts'><input type="button" value="Department of Marketing"/></a><br/></center>
		</section>
@endsection