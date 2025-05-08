$(document).ready(function () {
    $("#nav_list a").click(function (evt) {
        evt.preventDefault(); // Sayfa yenilenmesini engelle

        // JSON dosyasının yolu: json_files/title.json
        const file = "json_files/" + $(this).attr("title") + ".json";

        // Ajax ile JSON verisini al
        $.getJSON(file, function (data) {
            const speaker = data.speakers[0];

            // Yeni içerik HTML formatında hazırlanıyor
            let html = `
                <h1>${speaker.title}</h1>
                <img src="${speaker.image}" alt="${speaker.speaker}">
                <h2>${speaker.month}<br>${speaker.speaker}</h2>
                <p>${speaker.text}</p>
            `;

            // main içeriği temizleniyor ve yeni veri ekleniyor
            $("main").html(html);
        });
    });
});
