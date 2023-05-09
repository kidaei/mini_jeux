function buildGrid(largeur, hauteur) {
    var table = document.getElementById("tableau")
    var text = ""
    for (var i = 0; i < hauteur; i++) {
        text = text + "<tr>"

        for (var j = 0; j < largeur; j++) {
            text = text + "<td class='xx' id='" + j + "" + i + "'></td>"
        }
        text = text + "</tr>"
    }
    table.innerHTML = text;
}

function posstring(pos) {
    return "" + pos.x + pos.y;

}

function ajoutcell(pos, obj) {
    switch (obj) {
        case "mario": imgpath = "mario.png "; break
        case "monnaie": imgpath = "monnaie.png"; break
        case "monster": imgpath = "monster.png"; break
        case "luigi": imgpath = "luigi.png"; break

    }
    console.log(posstring(pos))
    document.getElementById(posstring(pos)).innerHTML = "<img src='" + imgpath + "'>"
}
function clearcell(pos) {
    document.getElementById(posstring(pos)).innerHTML = ""


}

function main() {

    posmario = { x: 0, y: 0 }
    var posmonnaie = [{ x: 1, y: 1 }, { x: 2, y: 0 }]
    var posmonster = [{ x: 1, y: 0 }, { x: 0, y: 1 }]
    var posluigi = { x: 4, y: 4 }
    console.log(posmonnaie, posmonnaie.length)
    total = 0


    buildGrid(5, 5)
    ajoutcell(posmario, "mario");
    for (let i = 0; i < posmonnaie.length; i++) {
        ajoutcell(posmonnaie[i], 'monnaie')
        console.log("pif")

    }
    for (let i = 0; i < posmonster.length; i++) {
        ajoutcell(posmonster[i], 'monster')

    }



    ajoutcell(posluigi, "luigi");


}
main()


document.addEventListener("keydown", (Event) => {
    console.log(Event)
    switch (Event.key) {
        case "ArrowLeft":
            clearcell(posmario)
            posmario.x--;
            var futurepos = document.getElementById(posstring(posmario))
            if (futurepos.innerHTML.includes("monnaie") == true) {
                total += 1;
                document.getElementById("monnaie").innerHTML = "monnaie = " + total

            }
            ajoutcell(posmario, "mario");
            break
        case "ArrowRight":
            clearcell(posmario)
            posmario.x++;
            var futurepos = document.getElementById(posstring(posmario))
            if (futurepos.innerHTML.includes("monnaie") == true) {
                total += 1;
                document.getElementById("monnaie").innerHTML = "monnaie = " + total

            }
            ajoutcell(posmario, "mario");
            break
        case "ArrowUp":
            clearcell(posmario)
            posmario.y--;
            var futurepos = document.getElementById(posstring(posmario))
            if (futurepos.innerHTML.includes("monnaie") == true) {
                total += 1;
                document.getElementById("monnaie").innerHTML = "monnaie = " + total

            }
            ajoutcell(posmario, "mario");
            break
        case "ArrowDown":
            clearcell(posmario)
            posmario.y++;
            var futurepos = document.getElementById(posstring(posmario))
            if (futurepos.innerHTML.includes("monnaie") == true) {
                total += 1;
                document.getElementById("monnaie").innerHTML = "monnaie = " + total

            }
            ajoutcell(posmario, "mario");
            break
    }
}, false)