function blindzz(id) {
    var elem = document.getElementById(id);
    if (elem.src == 'http://127.0.0.1:5500/10-20200525/bubble/pic_bulbon.gif') {
        elem.src = 'pic_bulboff.gif';
        console.log(1);
    } else {
        elem.src = 'pic_bulbon.gif';
        console.log(2);
    }
}