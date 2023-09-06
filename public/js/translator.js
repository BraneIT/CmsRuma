const pismo = document.querySelector(".pismo");

function ConvertToCirilic(element) {
    let elements = document.getElementsByClassName("convertible");
    let childNodes = element.childNodes;

    for (let i = 0; i < childNodes.length; i++) {
        let node = childNodes[i];

        if (node.nodeType === Node.TEXT_NODE) {
            let text = node.nodeValue;

            // Konverzija teksta sa latinice na ćirilicu
            // Primer: A -> А, B -> Б, C -> Ц, ...
            text = text
                .replace(/A/g, "А")
                .replace(/B/g, "Б")
                .replace(/C/g, "Ц")
                .replace(/Č/g, "Ч")
                .replace(/Ć/g, "Ћ")
                .replace(/D/g, "Д")
                .replace(/Đ/g, "Ђ")
                .replace(/E/g, "Е")
                .replace(/F/g, "Ф")
                .replace(/G/g, "Г")
                .replace(/H/g, "Х")
                .replace(/I/g, "И")
                .replace(/J/g, "Ј")
                .replace(/K/g, "К")
                .replace(/L/g, "Л")
                .replace(/Lj/g, "Љ")
                .replace(/M/g, "М")
                .replace(/N/g, "Н")
                .replace(/Nj/g, "Њ")
                .replace(/O/g, "О")
                .replace(/P/g, "П")
                .replace(/R/g, "Р")
                .replace(/S/g, "С")
                .replace(/Š/g, "Ш")
                .replace(/T/g, "Т")
                .replace(/U/g, "У")
                .replace(/V/g, "В")
                .replace(/Z/g, "З")
                .replace(/Ž/g, "Ж")
                .replace(/lj/g, "љ")
                .replace(/nj/g, "њ")
                .replace(/a/g, "а")
                .replace(/b/g, "б")
                .replace(/c/g, "ц")
                .replace(/č/g, "ч")
                .replace(/ć/g, "ћ")
                .replace(/d/g, "д")
                .replace(/đ/g, "ђ")
                .replace(/e/g, "е")
                .replace(/f/g, "ф")
                .replace(/g/g, "г")
                .replace(/h/g, "х")
                .replace(/i/g, "и")
                .replace(/j/g, "ј")
                .replace(/k/g, "к")
                .replace(/l/g, "л")
                .replace(/m/g, "м")
                .replace(/n/g, "н")
                .replace(/o/g, "о")
                .replace(/p/g, "п")
                .replace(/r/g, "р")
                .replace(/s/g, "с")
                .replace(/š/g, "ш")
                .replace(/t/g, "т")
                .replace(/u/g, "у")
                .replace(/v/g, "в")
                .replace(/z/g, "з")
                .replace(/ž/g, "ж");
            // Nastavite sa konverzijom za preostala slova
            node.nodeValue = text;
        } else if (node.nodeType === Node.ELEMENT_NODE) {
            ConvertToCirilic(node); // Rekurzivno pozivanje funkcije za child elemente
        }
    }
    pismo.textContent = "Latinica";
}

function ConvertToLatin(element) {
    let childNodes = element.childNodes;

    for (let i = 0; i < childNodes.length; i++) {
        let node = childNodes[i];

        if (node.nodeType === Node.TEXT_NODE) {
            let text = node.nodeValue;

            text = text
                .replace(/А/g, "A")
                .replace(/Б/g, "B")
                .replace(/Ц/g, "C")
                .replace(/Ч/g, "Č")
                .replace(/Ћ/g, "Ć")
                .replace(/Д/g, "D")
                .replace(/Ђ/g, "Đ")
                .replace(/Е/g, "E")
                .replace(/Ф/g, "F")
                .replace(/Г/g, "G")
                .replace(/Х/g, "H")
                .replace(/И/g, "I")
                .replace(/Ј/g, "J")
                .replace(/К/g, "K")
                .replace(/Л/g, "L")
                .replace(/Љ/g, "Lj")
                .replace(/М/g, "M")
                .replace(/Н/g, "N")
                .replace(/Њ/g, "Nj")
                .replace(/О/g, "O")
                .replace(/П/g, "P")
                .replace(/Р/g, "R")
                .replace(/С/g, "S")
                .replace(/Ш/g, "Š")
                .replace(/Т/g, "T")
                .replace(/У/g, "U")
                .replace(/В/g, "V")
                .replace(/З/g, "Z")
                .replace(/Ж/g, "Ž")
                .replace(/а/g, "a")
                .replace(/б/g, "b")
                .replace(/ц/g, "c")
                .replace(/ч/g, "č")
                .replace(/ћ/g, "ć")
                .replace(/д/g, "d")
                .replace(/ђ/g, "đ")
                .replace(/е/g, "e")
                .replace(/ф/g, "f")
                .replace(/г/g, "g")
                .replace(/х/g, "h")
                .replace(/и/g, "i")
                .replace(/ј/g, "j")
                .replace(/к/g, "k")
                .replace(/л/g, "l")
                .replace(/љ/g, "lj")
                .replace(/м/g, "m")
                .replace(/н/g, "n")
                .replace(/њ/g, "nj")
                .replace(/о/g, "o")
                .replace(/п/g, "p")
                .replace(/р/g, "r")
                .replace(/с/g, "s")
                .replace(/ш/g, "š")
                .replace(/т/g, "t")
                .replace(/у/g, "u")
                .replace(/в/g, "v")
                .replace(/з/g, "z")
                .replace(/ж/g, "ž");
            // Dodajte ostale zamene za slova ovdje

            node.nodeValue = text;
        } else if (node.nodeType === Node.ELEMENT_NODE) {
            ConvertToLatin(node); // Rekurzivno pozivanje funkcije za child elemente
        }
    }
    pismo.textContent = "Ћирилица";
}

document.addEventListener("DOMContentLoaded", function () {
    var bodyElement = document.body;
    logTextNodes(bodyElement);
});

function logTextNodes(element) {
    var childNodes = element.childNodes;
    for (var i = 0; i < childNodes.length; i++) {
        var node = childNodes[i];
        if (node.nodeType === Node.TEXT_NODE) {
            var text = node.nodeValue.trim();
            if (text !== "") {
                element.classList.add("convertible");
            }
        } else if (node.nodeType === Node.ELEMENT_NODE) {
            logTextNodes(node); // Rekurzivno pozivanje funkcije za obradu potomaka
        }
    }
}

logTextNodes(document.body);

let boolean = true;
pismo.addEventListener("click", () => {
    if (boolean) {
        ConvertToCirilic(document.body);
        boolean = !boolean;
    } else {
        ConvertToLatin(document.body);
        boolean = !boolean;
    }
});