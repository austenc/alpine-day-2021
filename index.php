<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpine Day</title>
    <link href="https://unpkg.com/@tailwindcss/forms/dist/forms.min.css" rel="stylesheet">
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/a11y-dark.min.css" integrity="sha512-1rzCaYWsg3l6uKvGbUT6rAZFOcVn0zeXAFlZudsnj8k2xcrU5asL8jfJUEijV9GPYMh0GnPToeCTJj6RXQnA8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/@highlightjs/cdn-assets@11.0.1/highlight.min.js"></script>
    <style type="postcss">
        [x-cloak] { display: none !important; }
        .font-rad { font-family: 'Shadows Into Light', sans-serif; }
        .font-fancy { font-family: 'Satisfy', cursive; }
        .shadow-hard { text-shadow: 5px 5px 0px rgba(0,0,0,0.2); }
        .hljs { @apply leading-10 px-12 py-8 rounded-lg; }
        .slide { @apply w-full min-h-screen p-12 text-blue-50; }
        .code-inline { @apply inline-block p-2 text-2xl rounded bg-gray-800 text-yellow-600 font-mono; }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/wicg-inert@3.1.1/dist/inert.min.js" defer></script>
</head>

<body class="w-full min-h-screen bg-gradient-to-br from-green-900 to-gray-900 bg-fixed">
    <div x-data="slideshow()" x-spread="hotkeys">
        <div class="relative">
            <div x-spread="slide(1)">
                <div class="w-full min-h-screen text-center">
                    <div class="font-fancy pt-48 text-8xl filter drop-shadow-lg text-white shadow-hard">Building a Better Dialog</div>
                    <div class="mt-40 text-7xl font-rad text-white text-opacity-75">Austen Cameron</div>
                    <div class="opacity-75 w-3/4 mx-auto mt-20">
                        <a href="https://twitter.com/austencam" class="mt-12 justify-center flex space-x-3 items-center text-6xl tracking-wider font-rad text-indigo-100 text-opacity-75 hover:text-white transform hover:scale-110 transition duration-300">
                            <span class="block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-100 shadow-hard filter drop-shadow-lg inline-block w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                            </span>
                            <span class="block">austencam</span>
                        </a>
                        <a href="https://github.com/austenc" class="mt-4 justify-center flex space-x-3 items-center text-6xl tracking-wider font-rad text-indigo-100 text-opacity-75 hover:text-white transform hover:scale-110 transition duration-300">
                            <span class="block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-100 shadow-hard filter drop-shadow-lg inline-block w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                            </span>
                            <span class="block">austenc</span>
                        </a>
                    </div>
                </div>
            </div>

            <div x-spread="slide(2)">
                <div class="slide">
                    <div class="text-center font-fancy pt-48 text-8xl filter drop-shadow-lg text-white shadow-hard">Modal or Non-Modal?</div>
                    <div class="mt-32 flex justify-center space-x-32">
                        <!-- Modal dialog -->
                        <div class="text-center" x-data="{ open: false }" x-cloak>
                            <button @click="open = true" type="button" class="transition text-3xl text-purple-50 bg-purple-600 hover:bg-purple-100 hover:text-purple-900 px-8 py-4 rounded-full shadow-xl">I'm a <strong>Modal</strong> Dialog</button>
                            <div
                                x-show="open"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                class="fixed inset-0 pt-12 bg-black bg-opacity-50 text-center"
                            >
                                <div @click.away="open = false" class="mt-24 inline-block bg-white shadow-xl rounded-lg p-10 text-gray-700 text-2xl">
                                    This is a modal dialog, filled with some happy little content.
                                </div>
                            </div>
                        </div>

                        <!-- Non-modal dialog -->
                        <div class="text-center" x-data="{ open: false }" x-cloak>
                            <button @click="open = true" type="button" class="transition text-3xl text-red-50 bg-red-600 hover:bg-red-100 hover:text-red-900 px-8 py-4 rounded-full shadow-xl">I'm <strong>Non-Modal</strong> Dialog</button>
                            <div
                                x-show="open"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                class="fixed bottom-0 right-0 mr-12 mb-12 text-center"
                            >
                                <div class="mt-24 inline-block bg-white shadow-xl rounded-lg p-10 text-gray-700 text-2xl">
                                    I'm a non-modal dialog, sometimes called a popup. <br> Everybody <strong>loves</strong> me! <em>... don't they?</em> 🤔
                                    <br>
                                    <div class="mt-4 text-right"><button type="button" @click="open = false" class="p-3 rounded text-white bg-red-500">Okay</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-spread="slide(3)">
                <div class="slide">
                    <div class="text-center font-fancy pt-24 text-8xl filter drop-shadow-lg text-white shadow-hard">Guidelines</div>
                    <div class="mt-20">
                        <div class="flex space-x-12 justify-center">
                            <div class="text-left text-4xl">
                                <div class="text-4xl opacity-75 font-bold border-b-4 border-white border-opacity-10 pb-6">DO</div>
                                <ul class="mt-10 pl-2 space-y-12">
                                    <li><span class="mr-3 inline-block">✅</span> Consider native alternatives like <span class="code-inline">confirm()</span></li>
                                    <li><span class="mr-3 inline-block">✅</span> Use to confirm a dangerous or destructive action</li>
                                    <li><span class="mr-3 inline-block">✅</span> Use when you need immediate user input</li>
                                    <li><span class="mr-3 inline-block">✅</span> Support accessibility and keyboard navigation</li>
                                </ul>
                            </div>
                            <div class="text-left text-4xl">
                                <div class="text-4xl opacity-75 font-bold border-b-4 border-white border-opacity-10 pb-6">DON'T</div>
                                <ul class="mt-10 pl-2 space-y-12">
                                    <li><span class="mr-3 inline-block">❌</span> Use non-modal dialogs. <span class="text-2xl inline-block pl-4"><em>Popups</em> 🤮</span></li>
                                    <li><span class="mr-3 inline-block">❌</span> Use for complex multi-step forms</li>
                                    <li><span class="mr-3 inline-block">❌</span> Have long content that requires scrolling</li>
                                    <li><span class="mr-3 inline-block">❌</span> Nest them. Yes, it's possible, but why would you?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-spread="slide(4)">
                <div class="slide">
                    <div class="text-center font-fancy pt-48 text-8xl filter drop-shadow-lg text-white shadow-hard">Time for a Real Demo!</div>
                    <div class="mt-40 text-center">
                        <a href="demo/index.html" target="_blank" class="transition text-3xl font-medium text-yellow-50 bg-yellow-600 hover:bg-yellow-100 hover:text-yellow-900 px-8 py-4 rounded-full shadow-xl">Let's Go!</a>
                    </div>
                </div>
            </div>

            <div x-spread="slide(5)">
                <div class="slide">
                    <div class="text-center font-fancy pt-24 text-8xl filter drop-shadow-lg text-white shadow-hard">Disable Background Scrolling</div>
                    <div class="mt-12 w-3/4 mx-auto text-2xl leading-10">
                        <pre>
                            <code class="language-js"><?php echo toCode('slides/disable-background-scrolling.php'); ?></code>
                        </pre>
                    </div>
                </div>
            </div>

            <div x-spread="slide(6)">
                <div class="slide pb-0">
                    <div class="text-center font-fancy pt-4 text-7xl filter drop-shadow-lg text-white shadow-hard">Cleaning Up</div>
                    <div class="text-center pt-12 text-4xl filter drop-shadow-lg text-white">We can use a separate script section and <span class="code-inline">x-spread</span> to consolidate logic</div>
                    <div class="w-3/4 mx-auto text-2xl">
                        <pre>
                            <code class="language-html"><?php echo toCode('slides/reusability.php'); ?></code>
                        </pre>
                    </div>
                </div>
            </div>

            <div x-spread="slide(7)">
                <div class="slide">
                    <div class="text-center font-fancy pt-6 text-8xl filter drop-shadow-lg text-white shadow-hard">Accessibility Part One</div>
                    <div class="mt-4 w-3/4 mx-auto text-2xl">
                        <pre>
                            <code class="language-javascript"><?php echo toCode('slides/focus-refocus.php'); ?></code>
                        </pre>
                    </div>
                    <div class="text-center text-4xl filter drop-shadow-lg text-white italic">Buttons must be <span class="code-inline">button</span> elements to work properly with assistive technologies</div>
                </div>
            </div>

            <div x-spread="slide(8)">
                <div class="slide">
                    <div class="text-center font-fancy mt-12 text-8xl filter drop-shadow-lg text-white shadow-hard">Accessibility Part Two</div>
                    <div class="mt-20 w-3/4 mx-auto text-2xl">
                        <ul class="text-left pl-6 text-4xl space-y-8">
                            <li><span class="mr-3 inline-block opacity-50">☑️</span> Mark the element as a dialog with the <span class="code-inline">role="dialog"</span> attribute</li>
                            <li><span class="mr-3 inline-block opacity-50">☑️</span> Label the dialog with <span class="code-inline">aria-labelledby="thing"</span> and a corresponding <span class="code-inline">id="thing"</span></li>
                        </ul>
                        <pre>
                            <code class="language-html"><?php echo toCode('slides/accessible-labeling.php'); ?></code>
                        </pre>
                    </div>
                </div>
            </div>

            <div x-spread="slide(9)">
                <div class="slide text-center">
                    <div class="font-fancy mt-16 text-8xl filter drop-shadow-lg text-white shadow-hard">Accessibility Part Three</div>
                    <div class="mt-24">
                        <div class="text-left w-3/4 mx-auto text-4xl space-y-10">
                            <div>1.&nbsp;&nbsp;We need to <span class="italic font-medium">trap the focus state</span> inside the dialog.</div>
                            <div>2.&nbsp;&nbsp;Content behind the overlay should be hidden from assistive technologies.</div>
                        </div>

                        <div class="mt-32 text-6xl font-rad text-blue-100">How do we handle this? 🤔</div>
                        <div class="mt-24 text-4xl">
                            Listening for <span class="code-inline">Tab</span> key presses could work, but it's a bit clunky...
                        </div>
                    </div>
                </div>
            </div>

            <div x-spread="slide(10)">
                <div class="slide">
                    <div class="text-center font-fancy pt-8 text-8xl filter drop-shadow-lg text-white shadow-hard">Focus Trapping</div>
                    <div class="mt-20 text-center">
                        <div class="mt-8 text-4xl">
                            There's a better solution, the <span class="code-inline">inert</span> property <span class="text-3xl italic">(just add polyfill)</span>.
                        </div>

                        <div class="w-3/4 mx-auto text-2xl text-left">
                            <pre>
                                <code class="language-html">&lt;script src="https://cdn.jsdelivr.net/npm/wicg-inert@3.1.1/dist/inert.min.js"&gt;&lt;/script&gt;</code>
                            </pre>
                            <pre class="-mt-12">
                                <code class="language-html"><?php echo toCode('slides/inert.php') ?></code>
                            </pre>
                            <div class="bg-gray-50 rounded p-8 text-gray-600">
                                <?php require('slides/inert.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-spread="slide(11)">
                <div class="slide">
                    <div class="text-center font-fancy pt-8 text-8xl filter drop-shadow-lg text-white shadow-hard">Applying the Inert Attribute</div>
                    <div class="mt-4 text-2xl w-3/4 mx-auto">
                        <pre>
                            <code class="language-javascript"><?php echo toCode('slides/focus-trapping.php'); ?></code>
                        </pre>
                    </div>
                    <div class="text-center text-4xl filter drop-shadow-lg text-white italic">Toggle elements outside the dialog to inert within the <span class="code-inline">show</span> / <span class="code-inline">hide</span> functions</div>
                </div>
            </div>

            <div x-spread="slide(12)">
                <div class="slide">
                    <div class="w-full min-h-screen text-center">
                        <div class="font-fancy pt-48 text-8xl filter drop-shadow-lg text-white shadow-hard">Thanks for Watching!</div>
                        <div class="mt-40 text-6xl font-rad text-white text-opacity-75">Questions? 👇</div>
                        <div class="opacity-75 w-3/4 mx-auto mt-20">
                            <a href="https://twitter.com/austencam" class="mt-12 justify-center flex space-x-3 items-center text-6xl tracking-wider font-rad text-indigo-100 text-opacity-75 hover:text-white transform hover:scale-110 transition duration-300">
                                <span class="block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-100 shadow-hard filter drop-shadow-lg inline-block w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                                </span>
                                <span class="block">austencam</span>
                            </a>
                            <a href="https://github.com/austenc" class="mt-4 justify-center flex space-x-3 items-center text-6xl tracking-wider font-rad text-indigo-100 text-opacity-75 hover:text-white transform hover:scale-110 transition duration-300">
                                <span class="block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-100 shadow-hard filter drop-shadow-lg inline-block w-12 h-12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                                </span>
                                <span class="block">austenc</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>hljs.highlightAll();</script>
    <script>
        function slideshow() {
            return {
                current: 1,
                previous: this.current,
                total: document.querySelectorAll('[x-spread^="slide"]').length,
                hotkeys: {
                    ['@keydown.window.arrow-left']() {
                        this.previous = this.current
                        this.current = Math.max(1, this.current - 1)
                        document.body.classList.add('overflow-hidden')
                        setTimeout(() => { document.body.classList.remove('overflow-hidden') }, 750)
                    },
                    ['@keydown.window.arrow-right']() {
                        this.previous = this.current
                        this.current = Math.min(this.total, this.current + 1)
                        document.body.classList.add('overflow-hidden')
                        setTimeout(() => { document.body.classList.remove('overflow-hidden') }, 750)
                    }
                },
                slide: (index) => ({
                    ['x-show']() { return this.current == index },
                    ['x-bind:class']() { return 'absolute inset min-h-screen w-full' },
                    ['x-transition:enter']() { return 'transition ease-out duration-300 transform' },
                    ['x-transition:enter-start']() { return this.current < this.previous ? '-translate-x-full opacity-0' : 'translate-x-full opacity-0' },
                    ['x-transition:enter-end']() { return 'translate-x-0 opacity-100' },
                    ['x-transition:leave']() { return 'transition ease-in duration-300 transform' },
                    ['x-transition:leave-start']() { return 'translate-x-0 opacity-100' },
                    ['x-transition:leave-end']() { return this.current < this.previous ? 'translate-x-full opacity-0' : '-translate-x-full opacity-0' },
                })
            }
        }
    </script>
</body>
</html>

<?php

// Replace HTML entities but convert "<mark>" tags back so we can highlight code
function toCode($filename)
{
    return htmlspecialchars(file_get_contents($filename, true));
}
