function menu() {
    const menu = document.querySelector('.nav');
    const bar = document.querySelector('.bar');
    const html = document.querySelector('html');

    menu.classList.toggle('mob--active');
    bar.classList.toggle('mob--active');
    html.classList.toggle('hidden');
}

function viewAfter(item) {
    let parent = item.parentNode.parentNode
    if(parent.classList.contains('item')) {
        parent.children[0].classList.toggle('viewater');
    }
}