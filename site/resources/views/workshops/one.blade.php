<div class="workshop">
    <figure>
        <img src="{{ asset('images/1.jpg') }}"></img>
    </figure>
    <div class="workshop-info">
        <h2>{{$workshop->name}}</h2>
        <p>{{$workshop->description}}</p>
        <br/>

        <p class="detail">details</p>
        <br/>
        <p>Du: {{$workshop->start_date}}</p>
        <p>Au: {{$workshop->end_date}}</p>
        <p>Nombre de places: {{$workshop->nb_places}}</p>
        <br/>

        <p class="custom-button">
            <input type="submit" value="S'inscrire" class="btn" id="myBtn">
            <span class="btn-line"></span>
        </p>
    </div>
    @if(Auth::user()->role=='admin')
        <form action="/ateliers/{{ $workshop->id }}" method="post" class="crud">
            @csrf
            @method('delete')
            <button type="submit" class="btn-delete" onclick="return confirm('Etes-vous sur de vouloir supprimer cet atelier?')">
                <i class="fas fa-trash-alt"></i>Supprimer
            </button>

            <a class="btn-edit" href="{{ route('ateliers.edit', $workshop->id) }}">
                <i class="fas fa-edit"></i>Modifier
            </a>
        </form>
    @endif
</div>



<!-- FORM INSCRIPTION-->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form>
        <h3>Formulaire d'inscription</h3>
        <label>Prénom:</label>
        <input type="text" name="first_name">
        <label>Nom:</label>
        <input type="text" name="last_name">
        <label>Adresse mail:</label>
        <input type="email" name="email">
        <label>Nombre de places désirées:</label>
        <input type="number" name="nb_places">

        <p>Un email de confirmation vous sera envoyé avec les informations de paiements à finaliser dans les 7 jours qui suivent la réception de ce-dernier pour finaliser votre inscription. Au dela de ce délais, votre inscription sera annulée et les places remises en vente.</p>
        <input type="submit" value="Confirmer l'inscription" class="btn-edit">
    </form>
  </div>
</div>


<script>
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>