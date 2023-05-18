@if ($errors->any())
    <div style="color :red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row mb-4">

    <div class="col">
    <?php
    
    echo html_entity_decode(inputText('text', 'first_name', 'First Name', old('first_name', $owner->first_name ?? '' )));
    ?>

    </div>
</div>
    
    <div class="row mb-4">
        <div class="col">
        <?php
        echo html_entity_decode(inputText('text', 'last_name', 'Last Name', old('last_name', $owner ->last_name ?? '' )));
        ?>
    </div>
    </div>
    

