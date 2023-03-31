<div>
    <h1 class="text-xl font-semibold">Welcome to the game</h1>
    <div class="mt-4">
        <div class="max-w-xs">
            @livewire('user-name')
        </div>
    </div>
    <div class="mt-4 flex gap-x-4">
        <div>
            <h2 class="text-lg font-semibold">Your choise</h2>
            <div class="mt-8 flex flex-col gap-y-2">
                <div>
                    @include('livewire.parts.user-button', ['buttonName' => 'Rock'])
                </div>
                <div>
                    @include('livewire.parts.user-button', ['buttonName' => 'Paper'])
                </div>
                <div>
                    @include('livewire.parts.user-button', ['buttonName' => 'Scissors'])
                </div>
            </div>
        </div>
        <div>
            <h2 class="text-lg font-semibold">Opponent's choise</h2>
            <span class="text-xs">(is hidden until you make your choice)</span>
            <div class="mt-2 flex flex-col gap-y-2">
                <div>
                    @include('livewire.parts.opponent-button', ['buttonName' => 'Rock'])
                </div>
                <div>
                    @include('livewire.parts.opponent-button', ['buttonName' => 'Paper'])
                </div>
                <div>
                    @include('livewire.parts.opponent-button', ['buttonName' => 'Scissors'])
                </div>
            </div>
        </div>
    </div>
    <div class="mt-2">
        <h2 class="text-lg font-semibold">{{ $userResult }}</h2>
    </div>
</div>
