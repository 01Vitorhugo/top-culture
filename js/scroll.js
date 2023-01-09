const sr = ScrollReveal ({
    distance : '45px',
    duration : 2000,
    reset : false,
  })

sr.reveal('.news',{ delay:100})
sr.reveal('.slider',{ delay:250, origin:'left' })
sr.reveal('.services',{ delay:350, origin:'right'})
sr.reveal('.content',{ delay:400, origin:'left' })
sr.reveal('.producer',{ delay:350, origin:'right' })
sr.reveal('.convite',{ delay:300, origin:'left' })