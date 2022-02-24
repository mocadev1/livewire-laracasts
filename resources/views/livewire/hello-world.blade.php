<div>

    @foreach ( $contacts as $contact )
    
        <div>
            <livewire:say-hi :contact="$contact" :key="$contact->id" >
            <button wire:click="removeContact('{{ $contact->id }}')">Remove contact</button>
        </div>

    @endforeach

    <hr>
    
    <button wire:click="$refresh">refresh</button>

    {{ now() }}
    
</div>
