        // Animation au scroll
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('active');
            
            // Animation des nombres
            const numberElements = entry.target.querySelectorAll('.stat-number');
            numberElements.forEach(el => {
                const target = parseInt(el.dataset.count);
                let count = 0;
                const increment = target / 50;
                
                const updateCount = () => {
                    if(count < target) {
                        count += increment;
                        el.textContent = Math.ceil(count);
                        requestAnimationFrame(updateCount);
                    } else {
                        el.textContent = target + (el.dataset.count.endsWith('00') ? '+' : '%');
                    }
                }
                
                el.classList.add('animated');
                updateCount();
            });
        }
    });
}, { threshold: 0.25 });

document.querySelectorAll('.scroll-reveal').forEach((el) => observer.observe(el));

// Animation logos partenaires
document.querySelectorAll('.support-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        card.style.setProperty('--x', `${x}px`);
        card.style.setProperty('--y', `${y}px`);
    });
});

document.querySelector('.btn-light').addEventListener('click', function() {
    document.getElementById('video-section').classList.remove('d-none');
    document.getElementById('video-section').scrollIntoView({ behavior: 'smooth' });
});

document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('[data-count]');
    
    counters.forEach(counter => {
        const target = +counter.dataset.count;
        const duration = 2000;
        const step = target / (duration / 10);

        let current = 0;
        const updateCount = () => {
            current += step;
            if(current < target) {
                counter.textContent = Math.ceil(current);
                requestAnimationFrame(updateCount);
            } else {
                counter.textContent = target;
            }
        }
        
        requestAnimationFrame(updateCount);
    });
});
