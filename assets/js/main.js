import("https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js");
import("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js");

jQuery(function($) {
    $(".img-thumbnail").on("click", function() {
        $("#main-card").show();
        $("#canvas").hide();
        $("#main-card").attr('src', $(this).attr("src"))
    })
})


// addTextToImage( imagePath, text )

function addTextToImage() {

    // reset visabilty
    $("#main-card").show()
    $("#canvas").hide();
    
    // get values
    let imagePath = $("#main-card").attr("src"),
        textToAdd = $("#text").val(),
        circle_canvas = document.getElementById("canvas"),
        context = circle_canvas.getContext("2d"),
        color = $("#color").val(),
        fontName = $("#font-name").val(),
        fSize = $("#font-size").val();

    // Draw Image function
    var img = new Image();
    img.src = imagePath;
    img.onload = function () {
        context.drawImage(img, 0, 0);
        context.lineWidth = 1;
        context.fillStyle = color;
        context.lineStyle = "#ffff00";
        context.font = fSize + "px " + fontName;
        context.textAlign = 'center';
        // position on img
        context.fillText(textToAdd, 550, 980, 400);
    };

    // Show result
    $("#main-card").hide();
    $("#canvas").toggle();

}

function DownloadCanvasAsImage(){
    let downloadLink = document.createElement('a');
    downloadLink.setAttribute('download', 'CanvasAsImage.png');
    let canvas = document.getElementById('canvas');
    let dataURL = canvas.toDataURL();
    console.log(dataURL);
    let url = dataURL.replace(/^data:image\/png/,'data:application/octet-stream');
    downloadLink.setAttribute('href', url);
    downloadLink.click();
}

