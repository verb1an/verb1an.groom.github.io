function menu() {
    const menu = document.querySelector('.nav');
    const bar = document.querySelector('.bar');
    const html = document.querySelector('html');

    menu.classList.toggle('mob--active');
    bar.classList.toggle('mob--active');
    html.classList.toggle('hidden');
}