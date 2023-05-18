<a id="delete-link-{{ $owner->id }}" onclick="disableLink(event, {{ $owner->id }})">
    <i id="delete-icon-{{ $owner->id }}" class="fa-solid fa-trash" style="color: #ec1313;"></i>
</a>

<form id="delete-{{ $owner->id }}" action="{{ route('owner.destroy', ['owner' => $owner->id]) }}" method="POST">
    @csrf
    @method('DELETE')
</form>

<script>
function disableLink(event, ownerId) {
    var link = event.currentTarget;
    link.classList.add('disabled');
    link.removeAttribute('onclick');
    document.getElementById('delete-' + ownerId).submit();
}
</script>