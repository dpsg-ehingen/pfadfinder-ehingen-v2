document.getElementById('openMenu')!.addEventListener('click', () => {
    document.getElementById('menu')!.style.transform = 'translateX(-100%)'
})

document.getElementById('closeMenu')!.addEventListener('click', () => {
    document.getElementById('menu')!.style.removeProperty('transform')
})