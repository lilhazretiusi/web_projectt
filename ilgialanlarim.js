document.getElementById('getFilmInfo').addEventListener('click', function() {
    var filmName = document.getElementById('filmName').value;
    if (filmName.trim() === '') {
        alert('Lütfen bir film ismi girin');
        return;
    }

    var data = null;

    var xhr = new XMLHttpRequest();
    xhr.withCredentials = false; // withCredentials özelliğini false olarak ayarlayın

    xhr.addEventListener("readystatechange", function () {
        if (this.readyState === XMLHttpRequest.DONE) {
            console.log('API yanıtı alındı:', this.responseText);
            var response;
            try {
                response = JSON.parse(this.responseText);
                console.log('Parse edilen yanıt:', response);
                displayFilmInfo(response);
            } catch (e) {
                console.error('Yanıt parse edilemedi:', e);
                document.getElementById('filmInfo').innerText = 'API yanıtı işlenemedi. Lütfen daha sonra tekrar deneyin.';
            }
        }
    });

    var url = "https://api.collectapi.com/imdb/imdbSearchByName?query=" + encodeURIComponent(filmName);
    console.log('İstek URL:', url);
    
    xhr.open("GET", url);
    xhr.setRequestHeader("content-type", "application/json");
    xhr.setRequestHeader("authorization", "apikey 1RnxxAuPzlTnOqBgDbtdWt:7HefpbSOGjOlEdmDyItkOe");

    xhr.send(data);
});

function displayFilmInfo(data) {
    var filmInfoDiv = document.getElementById('filmInfo');
    filmInfoDiv.innerHTML = '';

    console.log('API Yanıt Verisi:', data);

    if (data && data.result && data.result.length > 0) {
        var film = data.result[0]; // İlk sonucu al
        var filmDetails = `
            <h2>${film.Title}</h2>
            <p><strong>Yıl:</strong> ${film.Year}</p>
            <p><strong>Tür:</strong> ${film.Type}</p>
            <img src="${film.Poster !== 'N/A' ? film.Poster : 'placeholder.jpg'}" alt="${film.Title} Poster">
        `;
        filmInfoDiv.innerHTML = filmDetails;
    } else {
        filmInfoDiv.innerHTML = '<p>Film bulunamadı.</p>';
    }
}
