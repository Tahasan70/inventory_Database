<h1>Home</h1>
@if(session()->get('status'))
<h1>{{ session()->get('status') }}</h1>
@else
 <h1>{{ "no status" }}</h1>
@endif