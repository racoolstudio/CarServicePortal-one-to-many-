<a id="delete-link-{{ $car->id }}" onclick="disableLink(event, {{ $car->id }})">
    <i id="delete-icon-{{ $car->id }}" class="fa-solid fa-trash" style="color: #ec1313;"></i>
</a>

<form id="delete-{{ $car->id }}" action="{{ route('car.destroy', ['car' => $car->id]) }}" method="POST">
    @csrf
    @method('DELETE')
</form>

<script>
function disableLink(event, carId) {
    var link = event.currentTarget;
    link.classList.add('disabled');
    link.removeAttribute('onclick');
    document.getElementById('delete-' + carId).submit();
}
</script>