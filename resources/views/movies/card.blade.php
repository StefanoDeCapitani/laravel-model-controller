<div class="card">
    <h3 class="title">Titolo: {{$movie['title']}}</h3>
    <p class="original-title">Titolo originale: {{$movie['original_title']}}</p>
    <p class="nationality">Nazionalità: {{ucfirst($movie['nationality'])}}</p>
    <p class="date">Data di uscita: {{$movie['date']}}</p>
    <p class="vote">Voto: {{$movie['vote']}}</p>
</div>