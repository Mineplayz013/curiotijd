@extends('layouts.app')

@section('content')
<div class="headerContent">
    <h1>Dashboard</h1> 
    <h4>Welkom {{$student->first_name}}</h4>
</div>
         

<div class="dashboardContent">
    <div class="badges">
        <h2>Behaalde badges:</h2>
        <img src="data:image/png;base64,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" alt="Curio">
        <p>Ik zit op curio</p>
    </div>
    <div class="challenges">
        <h2>Challenges:</h2>
        <img src="" alt="">
        <p>Geen challenges beschikbaar</p>
    </div>
    <div class="studentInformation">
        <h2>Gegevens</h2>
            
                <p>voornaam: {{$student->first_name}}</p>
                <p>Achternaam: {{$student->last_name}}</p>
                <p>Klas: {{$student->name}}</p> 
                 <p>Studentnummer: {{$student->student_number}}</p>

    </div>
</div>
<footer class="text-center">
        <a href="{{route('leaderboard.show', ['leaderboard => $leaderboard->id'])}}"class="btn btn-info">Ga naar leaderboard</a>
    </footer>
@endsection

