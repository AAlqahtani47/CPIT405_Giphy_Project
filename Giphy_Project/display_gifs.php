<?php
function TfetchGiphyAPI($keyword){
echo "<script type=\"text/javascript\"> fetchGiphyAPI(\"$keyword\")</script>";
}
?>

<script>
// For fitching other pictures (i.e. Cats, Puppies, Otters, etc...)
function fetchGiphyAPI(SearchWord, list) {
    if (!SearchWord) {
        return;
    }

    var xhttpreq = new XMLHttpRequest();
    xhttpreq.addEventListener("readystatechange", function () {
        if (this.readyState === 4 && this.status === 200) {
            processResponse(this.responseText);
        }
    });
    xhttpreq.open("GET", "https://api.giphy.com/v1/gifs/search?api_key=RCuqnrztp7uct8Qv9d2eTS8Wy5yKIHoY&limit=10&q=" 
    + encodeURIComponent(SearchWord), true);
    xhttpreq.send();
}
function processResponse(responseText) {
    var response = JSON.parse(responseText);
    for (item of response.data) {
        let imgElement = document.createElement("img");
        imgElement.src = item.images.downsized_medium.url;
        imgElement.width = '300';
        imgElement.height = '300';
        imgElement.alt = item.title;
        searchResults.appendChild(imgElement);
    }
}
</script>