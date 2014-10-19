var container = document.querySelector('#masonry-loop');
var msnry;

imagesLoaded(container, function() {
    msnry = new Masonry(container);
});
