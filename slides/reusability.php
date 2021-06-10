<div x-data="modal()">
    <div x-spread="overlay">...</div>
</div>

<script>
    function modal() {
        return {
            open: false,
            overlay: {
                ['x-show']() { return this.open },
                ['x-bind:x-ref']() { return 'overlay' },
            }
        }
    }
</script>
