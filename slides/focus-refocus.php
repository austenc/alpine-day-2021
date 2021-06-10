focusables() {
    return [...this.$refs.dialog.querySelectorAll('a, button, input, textarea, select, details,[tabindex]:not([tabindex="-1"])')]
        .filter(el => !el.hasAttribute('disabled'))
}

show() {
    this.$nextTick(() => { this.focusables()[0].focus() }) // First focusable element
}

hide() {
    this.$nextTick(() => { this.$refs.trigger.focus() })
}
