start();
async function start() {
    let promise = await fetch("http://wildlife/api/place");
    let array = await promise.json();
    console.log(array);
    let text = "";
    array.forEach(element => {
        console.log(element);
        text += `<a class="place1" href="<?= url('/place') ?>">
        <img src="${element.main_img}" alt="">
        <div class="c2t1">
            <h3>${element.title}</h3>
            <p>${element.description.split('.')[0]}</p>
        </div>
        </a>`;
    });
    $(".places").html(text);
    
}
