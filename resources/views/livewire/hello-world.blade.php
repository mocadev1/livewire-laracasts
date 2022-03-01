<div>

    @foreach ( $contacts as $contact )
    
        <div>
            <livewire:say-hi :contact="$contact" :key="$contact->id" >
        </div>

    @endforeach

    <hr>
    
    {{ now() }}
    
    <button wire:click="$emit('refreshChildren')">Refresh Children</button>

</div>
