<button class="btn flex items-center justify-between
    @if ($userChoice && $userChoice === $buttonName) btn-{{ $userResult }} @endif"
    @if ($userChoice) disabled @endif
    wire:click="choose('{{ $buttonName }}')" >{{ $buttonName }} <img class="w-6 ml-1" src="/images/{{ $buttonName }}.png" alt="{{ $buttonName }}"></button>
