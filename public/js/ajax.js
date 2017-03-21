document.onload = function() {
  
}

function ajaxRequest() {
    var ajaxrequest = document.getElementById("ajaxrequest");
    var idvalue = ajaxrequest.value;
    nanoajax.ajax({
        url:'../../public/contact/getdata',
        method:'POST',
        body: 'id='+idvalue
    },
    function(code, responseText, request){
        alert(responseText);
    });
}


