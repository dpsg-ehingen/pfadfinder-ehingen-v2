document.getElementById('openMenu')!.addEventListener('click', () => {
    document.getElementById('menu')!.style.clipPath = 'inset(0 0 0 0)'
})

document.getElementById('closeMenu')!.addEventListener('click', () => {
    document.getElementById('menu')!.style.removeProperty('clip-path')
})