<h1 x-data="{
    startingAnimation: { opacity: 0, y: 50, rotation: '25deg' },
    endingAnimation: { opacity: 1, y: 0, rotation: '0deg', stagger: 0.02, duration: 0.7, ease: 'back' },
    addCNDScript: true,
    splitCharactersIntoSpans(element) {
        text = element.innerHTML;
        modifiedHTML = [];
        for (var i = 0; i < text.length; i++) {
            attributes = '';
            if (text[i].trim()) { attributes = 'class=\'inline-block\''; }
            modifiedHTML.push('<span ' + attributes + '>' + text[i] + '</span>');
        }
        element.innerHTML = modifiedHTML.join('');
    },

    addScriptToHead(url) {
        script = document.createElement('script');
        script.src = url;
        document.head.appendChild(script);
    },
    animateText() {
        $el.classList.remove('invisible');
        gsap.fromTo($el.children, this.startingAnimation, this.endingAnimation);
    }
}" x-init="splitCharactersIntoSpans($el);
if (addCNDScript) {
    addScriptToHead('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js');
}
gsapInterval2 = setInterval(function() {
    if (typeof gsap !== 'undefined') {
        animateText();
        clearInterval(gsapInterval2);
    }
}, 5);"
    class="invisible block pb-4 overflow-hidden text-4xl md:text-5xl lg:text-7xl mb-2 md:m-0 font-bold custom-font tracking-tight text-gray-800 font-mulish-bold">
    {{$texto}}
</h1>
