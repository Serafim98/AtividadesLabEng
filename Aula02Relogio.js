function relogio(){

    let date = new Date(); 
    let hh = date.getHours();
    let mm = date.getMinutes();
    let ss = date.getSeconds();
    let hour = hh + ":" + mm + ":" + ss;
    document.getElementById("relogio").value = hour; 
    let t = setTimeout(function(){ relogio() }, 1000);
}

relogio();
    

