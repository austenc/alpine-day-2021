<div x-data="{ open: false }" @keydown.window.escape="open = false">
    <button @click="open = true" type="button">Open Dialog</button>
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="overlay"
    >
        <div @click.away="open = false" class="card">
            This is some modal content
        </div>
    </div>
</div>
