document.addEventListener('DOMContentLoaded', function() {
    var popUpImage = document.getElementById('myImage');

    document.addEventListener('mousedown', function() {
        var mouseX = event.clientX;
        var mouseY = event.clientY;

        var imageLeft = mouseX - (popUpImage.width/ 2);
        var imageTop = mouseY - (popUpImage.height / 2);

        popUpImage.style.position = "fixed";
        popUpImage.style.left = imageLeft + 'px';
        popUpImage.style.top = imageTop + 'px';

        popUpImage.style.visibility = "visible";
    });

    document.addEventListener('mouseup', function() {
        popUpImage.style.visibility = "hidden";
    });
});
