const tl = gsap.timeline({
  defaults: {
    ease: 'power3.out',
  },
});

tl.from('.hero-title', {
  y: 40,
  opacity: 0,
  duration: 0.9,
})
  .from(
    '.hero-subtitle',
    {
      y: 20,
      opacity: 0,
      duration: 0.6,
    },
    '-=.4',
  )
  .from(
    '.hero-cta',
    {
      y: 20,
      opacity: 0,
      duration: 0.5,
    },
    '-=.3',
  );
