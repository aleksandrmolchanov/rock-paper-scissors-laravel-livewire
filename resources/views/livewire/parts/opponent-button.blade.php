<button class="btn flex items-center justify-between
    @if($gameEnded && $buttonName === $opponentChoice) btn-choosen @endif" disabled>{{ $buttonName }} <img class="w-6 ml-1" src="/images/{{ $buttonName }}.png" alt="{{ $buttonName }}"></button>
