var count=0;
function hideContent(){

    if (count==0) {
        document.getElementById('hide').style.display='flex';
        count=1;
    } else {
        document.getElementById('hide').style.display='none';
    
        count=0;
    }
    console.log(count);
 
}