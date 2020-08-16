var delbtns = document.getElementsByClassName('del');
var id;
for(var k=0;k<delbtns.length;k++){
    delbtns[k].addEventListener('click', function(event){
        
        id = event.target.parentElement.parentElement.parentElement.childNodes[0].innerHTML;
        delet(id);
        location.reload();
    
    })
}


function delet(memid){
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","del.member.php?q="+memid, true);
    xmlhttp.send();
}