<header
    class="font-inter antialiased bg-cover bg-center bg-blend-overlay bg-fixed bg-black/50"style="background-image: url('/img/heros.jpg')">
    <livewire:navegation-menu />
    <div class="relative min-h-screen flex flex-col justify-center ">
        <div class="w-full max-w-6xl mx-auto px-4 md:px-4 py-24">

            <!-- Particles animation -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden" aria-hidden="true">
                <canvas data-particle-animation data-particle-quantity="50" data-particle-ease="40"></canvas>
            </div>
            <div class="relative text-center">
                <div class="animate-fade-down">
                    <h1
                        class="font-mulish-bold py-4 inline-flex font-extrabold text-xl md:text-5xl 2xl:text-7xl bg-clip-text text-transparent bg-[linear-gradient(to_right,theme(colors.sky.400),theme(colors.indigo.100),theme(colors.slate.300),theme(colors.sky.400),theme(colors.slate.300),theme(colors.indigo.100),theme(colors.sky.400))] bg-[length:200%_auto] animate-gradient ">
                        Sistemas Integrales En Consultoría, Comercialización y Servicios</h1>
                </div>
                <div class="max-w-3xl mx-auto mb-8">
                    <p class="text-base md:text-lg 2xl:text-2xl text-slate-400 animate-fade-down animate-duration-[2000ms]">Con más
                        de una década de experiencia, brindamos servicios integrales en consultoría, comercialización y
                        tecnología para impulsar tu éxito.</p>
                </div>
                <div class="inline-flex justify-center space-x-4">
                    <div>
                        <a class=" animate-fade-up animate-once animate-duration-[2000ms] inline-flex justify-center whitespace-nowrap rounded-lg bg-blue-600 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-blue-950/10 hover:bg-blue-800 focus-visible:outline-none focus-visible:ring focus-visible:ring-blue-300"
                            href="{{ route('servicios.index') }}">
                            Ver Servicios
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>


<script>
    // Código para animación de particulas
    class ParticleAnimation {
        constructor(el, {
            quantity = 30,
            staticity = 50,
            ease = 50
        } = {}) {
            this.canvas = el;
            if (!this.canvas) return;
            this.canvasContainer = this.canvas.parentElement;
            this.context = this.canvas.getContext('2d');
            this.dpr = window.devicePixelRatio || 1;
            this.settings = {
                quantity: quantity,
                staticity: staticity,
                ease: ease,
            };
            this.circles = [];
            this.mouse = {
                x: 0,
                y: 0,
            };
            this.canvasSize = {
                w: 0,
                h: 0,
            };
            this.onMouseMove = this.onMouseMove.bind(this);
            this.initCanvas = this.initCanvas.bind(this);
            this.resizeCanvas = this.resizeCanvas.bind(this);
            this.drawCircle = this.drawCircle.bind(this);
            this.drawParticles = this.drawParticles.bind(this);
            this.remapValue = this.remapValue.bind(this);
            this.animate = this.animate.bind(this);
            this.init();
        }

        init() {
            this.initCanvas();
            this.animate();
            window.addEventListener('resize', this.initCanvas);
            window.addEventListener('mousemove', this.onMouseMove);
        }

        initCanvas() {
            this.resizeCanvas();
            this.drawParticles();
        }

        onMouseMove(event) {
            const {
                clientX,
                clientY
            } = event;
            const rect = this.canvas.getBoundingClientRect();
            const {
                w,
                h
            } = this.canvasSize;
            const x = clientX - rect.left - (w / 2);
            const y = clientY - rect.top - (h / 2);
            const inside = x < (w / 2) && x > -(w / 2) && y < (h / 2) && y > -(h / 2);
            if (inside) {
                this.mouse.x = x;
                this.mouse.y = y;
            }
        }

        resizeCanvas() {
            this.circles.length = 0;
            this.canvasSize.w = this.canvasContainer.offsetWidth;
            this.canvasSize.h = this.canvasContainer.offsetHeight;
            this.canvas.width = this.canvasSize.w * this.dpr;
            this.canvas.height = this.canvasSize.h * this.dpr;
            this.canvas.style.width = this.canvasSize.w + 'px';
            this.canvas.style.height = this.canvasSize.h + 'px';
            this.context.scale(this.dpr, this.dpr);
        }

        circleParams() {
            const x = Math.floor(Math.random() * this.canvasSize.w);
            const y = Math.floor(Math.random() * this.canvasSize.h);
            const translateX = 0;
            const translateY = 0;
            const size = Math.floor(Math.random() * 2) + 1;
            const alpha = 0;
            const targetAlpha = parseFloat((Math.random() * 0.6 + 0.1).toFixed(1));
            const dx = (Math.random() - 0.5) * 0.2;
            const dy = (Math.random() - 0.5) * 0.2;
            const magnetism = 0.1 + Math.random() * 4;
            return {
                x,
                y,
                translateX,
                translateY,
                size,
                alpha,
                targetAlpha,
                dx,
                dy,
                magnetism
            };
        }

        drawCircle(circle, update = false) {
            const {
                x,
                y,
                translateX,
                translateY,
                size,
                alpha
            } = circle;
            this.context.translate(translateX, translateY);
            this.context.beginPath();
            this.context.arc(x, y, size, 0, 2 * Math.PI);
            this.context.fillStyle = `rgba(255, 255, 255, ${alpha})`;
            this.context.fill();
            this.context.setTransform(this.dpr, 0, 0, this.dpr, 0, 0);
            if (!update) {
                this.circles.push(circle);
            }
        }

        clearContext() {
            this.context.clearRect(0, 0, this.canvasSize.w, this.canvasSize.h);
        }

        drawParticles() {
            this.clearContext();
            const particleCount = this.settings.quantity;
            for (let i = 0; i < particleCount; i++) {
                const circle = this.circleParams();
                this.drawCircle(circle);
            }
        }

        // This function remaps a value from one range to another range
        remapValue(value, start1, end1, start2, end2) {
            const remapped = (value - start1) * (end2 - start2) / (end1 - start1) + start2;
            return remapped > 0 ? remapped : 0;
        }

        animate() {
            this.clearContext();
            this.circles.forEach((circle, i) => {
                // Handle the alpha value
                const edge = [
                    circle.x + circle.translateX - circle.size, // distance from left edge
                    this.canvasSize.w - circle.x - circle.translateX - circle
                    .size, // distance from right edge
                    circle.y + circle.translateY - circle.size, // distance from top edge
                    this.canvasSize.h - circle.y - circle.translateY - circle
                    .size, // distance from bottom edge
                ];
                const closestEdge = edge.reduce((a, b) => Math.min(a, b));
                const remapClosestEdge = this.remapValue(closestEdge, 0, 20, 0, 1).toFixed(2);
                if (remapClosestEdge > 1) {
                    circle.alpha += 0.02;
                    if (circle.alpha > circle.targetAlpha) circle.alpha = circle.targetAlpha;
                } else {
                    circle.alpha = circle.targetAlpha * remapClosestEdge;
                }
                circle.x += circle.dx;
                circle.y += circle.dy;
                circle.translateX += ((this.mouse.x / (this.settings.staticity / circle.magnetism)) - circle
                    .translateX) / this.settings.ease;
                circle.translateY += ((this.mouse.y / (this.settings.staticity / circle.magnetism)) - circle
                    .translateY) / this.settings.ease;
                // circle gets out of the canvas
                if (circle.x < -circle.size || circle.x > this.canvasSize.w + circle.size || circle.y < -
                    circle.size || circle.y > this.canvasSize.h + circle.size) {
                    // remove the circle from the array
                    this.circles.splice(i, 1);
                    // create a new circle
                    const circle = this.circleParams();
                    this.drawCircle(circle);
                    // update the circle position
                } else {
                    this.drawCircle({
                        ...circle,
                        x: circle.x,
                        y: circle.y,
                        translateX: circle.translateX,
                        translateY: circle.translateY,
                        alpha: circle.alpha
                    }, true);
                }
            });
            window.requestAnimationFrame(this.animate);
        }
    }

    // Init ParticleAnimation
    const canvasElements = document.querySelectorAll('[data-particle-animation]');
    canvasElements.forEach(canvas => {
        const options = {
            quantity: canvas.dataset.particleQuantity,
            staticity: canvas.dataset.particleStaticity,
            ease: canvas.dataset.particleEase,
        };
        new ParticleAnimation(canvas, options);
    });
</script>
