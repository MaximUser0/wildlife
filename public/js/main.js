let state = false;
const domenName = window.location.protocol + "//" + window.location.hostname;

function showBlock() {
    if (state) {
        state = false;
        $(".hidden").fadeOut(1000);
    } else {
        state = true;
        $(".hidden").fadeIn(1000);
    }
}

$("#gmailHover").hover(
    function () {
        $(this).text("BibaAndBoba@gmail.com").css("width", "20vw");
    },
    function () {
        $(this).text("Почта").css("width", "15vw");
    }
);
$("#numberHover").hover(
    function () {
        $(this).text("+7 (512) 123-45-67");
    },
    function () {
        $(this).text("Номер");
    }
);
$("#adresHover").hover(
    function () {
        $(this).text("г.Бибовск, ул.Бобы д.12").css("width", "20vw");
    },
    function () {
        $(this).text("Адрес").css("width", "15vw");
    }
);

$("#CountPeopleInput").change(async function () {
    const num = Number(await $(this).val());
    let html = "";
    let response = await fetch("http://wildlife/api/tour");
    const tours = await response.json();
    await tours.forEach(function (tour) {
        if (tour["people_count"] == num || num == '') {
            html += `<div class="c1tours">
            <a class="c1tour" href=" ${domenName + "/tour/" + tour["id"]} ">
                <img src="${tour["main_img"]}" alt="">
                <div class="c1img"></div>
                <div class="c1tourtext">
                    <h4>Тур на ${tour["title"]}</h4>
                    <div class="c1tourp">
                        <p>${tour["complexity"]} сложность</p>
                        <p>${tour["date"]} дней</p>
                        <p>${tour["priсe"]} рублей</p>
                    </div>
                </div>
            </a>
        </div>`;
        }
    });
    $('#toursBlock').html(html);
});
$("#CountDayInput").change(async function () {
    const num = Number(await $(this).val());
    let html = "";
    let response = await fetch("http://wildlife/api/tour");
    const tours = await response.json();
    await tours.forEach(function (tour) {
        if (tour["date"] == num || num == '') {
            html += `<div class="c1tours">
            <a class="c1tour" href=" ${domenName + "/tour/" + tour["id"]} ">
                <img src="${tour["main_img"]}" alt="">
                <div class="c1img"></div>
                <div class="c1tourtext">
                    <h4>Тур на ${tour["title"]}</h4>
                    <div class="c1tourp">
                        <p>${tour["complexity"]} сложность</p>
                        <p>${tour["date"]} дней</p>
                        <p>${tour["priсe"]} рублей</p>
                    </div>
                </div>
            </a>
        </div>`;
        }
    });
    $('#toursBlock').html(html);
});
$("#HardInput").change(async function () {
    const num = await $(this).val();
    let html = "";
    let response = await fetch("http://wildlife/api/tour");
    const tours = await response.json();
    await tours.forEach(function (tour) {
        if (tour["complexity"] == num || num == 0) {
            html += `<div class="c1tours">
            <a class="c1tour" href=" ${domenName + "/tour/" + tour["id"]} ">
                <img src="${tour["main_img"]}" alt="">
                <div class="c1img"></div>
                <div class="c1tourtext">
                    <h4>Тур на ${tour["title"]}</h4>
                    <div class="c1tourp">
                        <p>${tour["complexity"]} сложность</p>
                        <p>${tour["date"]} дней</p>
                        <p>${tour["priсe"]} рублей</p>
                    </div>
                </div>
            </a>
        </div>`;
        }
    });
    $('#toursBlock').html(html);
});
$("#PriceInput").change(async function () {
    const num = await Number($(this).val());
    let html = "";
    let response = await fetch("http://wildlife/api/tour");
    const tours = await response.json();
    await tours.forEach(function (tour) {
        if (tour["priсe"] == num || num == "") {
            html += `<div class="c1tours">
            <a class="c1tour" href=" ${domenName + "/tour/" + tour["id"]} ">
                <img src="${tour["main_img"]}" alt="">
                <div class="c1img"></div>
                <div class="c1tourtext">
                    <h4>Тур на ${tour["title"]}</h4>
                    <div class="c1tourp">
                        <p>${tour["complexity"]} сложность</p>
                        <p>${tour["date"]} дней</p>
                        <p>${tour["priсe"]} рублей</p>
                    </div>
                </div>
            </a>
        </div>`;
        }
    });
    $('#toursBlock').html(html);
});
