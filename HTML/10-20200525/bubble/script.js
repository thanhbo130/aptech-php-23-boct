var count=0;
function blindzz(id) {
    count = count +1; 
    console.log(count % 2);
    if ( count % 2 == 0) {
        document.getElementById(id).src='pic_bulbon.gif';
    } else {
        document.getElementById(id).src='pic_bulboff.gif';
}
}

