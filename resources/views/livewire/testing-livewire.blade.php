<div>
    <h1>Aforo máximo (450 personas)</h1>

    <h3>
        Actualmente: {{ $count }} 
        persona{{ $count !== 1 ? 's' : '' }}
    </h3>

    <div>
        <button wire:click="increment">+</button>
        <button wire:click="decrement">-</button>
    </div>
</div>
