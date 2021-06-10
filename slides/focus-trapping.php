toggleSiblingsInert(toState) {
    // Walk up the DOM, toggle inert attribute the siblings at each level
    let el = this.$refs.dialog
    while (el = el.parentElement) {
        if (el === document.body || el.parentElement === null) continue

        [...el.parentElement.children].filter(sibling => sibling !== el).forEach(sibling => {
            sibling.inert = toState
        })
    }
},
