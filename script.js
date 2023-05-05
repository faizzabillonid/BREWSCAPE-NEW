window.addEventListener('scroll', function() {
    var breads = document.getElementById('breads');
    var breadList = document.getElementById('Bread-list');
    var breadListRect = breadList.getBoundingClientRect();
    if (breads.getBoundingClientRect().top < breadListRect.bottom) {
        breadList.classList.add('bold');
    } else {
        breadList.classList.remove('bold');
    }
});
