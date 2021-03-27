/* 
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
/*
 * Copyright(c) 2010
 * pizaini.wordpress.com
 */
var xmlHttp = createXmlHttpRequestObject();

// Create XMLHttpRequest
function createXmlHttpRequestObject(){
    var xmlHttp;
    if(window.ActiveXObject){
        try{
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e)  {
            xmlHttp = false;
        }
    }
     // jika mozilla atau yang lain
     else {
        try{
            xmlHttp = new XMLHttpRequest();
        }catch (e){
            xmlHttp = false;
        }
    }
    if (!xmlHttp)
        alert("Error creating the XMLHttpRequest object.");
    else{
        return xmlHttp;
    }
  }

//Memanggil file *.php Secara Asingkron
function doLogin(username, password){
     if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0){
        xmlHttp.open("GET", "process/process.user.php?u="+username+"&p="+password+"&action=login", true);
        xmlHttp.onreadystatechange = handleServerResponse;
        xmlHttp.send(null);
    }
}
//di eksekusi otomati jika pesan diterima
function handleServerResponse() {
    ///jika rewuest complete
    if (xmlHttp.readyState == 4){
        if (xmlHttp.status == 200) {
            var ajax_data = xmlHttp.responseText;
            if(ajax_data == 'OK'){
                window.location = 'menu.php';
            }else{
                document.getElementById("error_messege").innerHTML = ajax_data;
            }
        }
        else {
          alert("ERROR: " + xmlHttp.statusText);
      }
   }
}

function doLogout(){
     if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0){
        xmlHttp.open("GET", "process/process.user.php?action=logout", true);
        xmlHttp.onreadystatechange = handleLogout;
        xmlHttp.send(null);
    }
}
//di eksekusi otomati jika pesan diterima
function handleLogout() {
    ///jika rewuest complete
    if (xmlHttp.readyState == 4){
        if (xmlHttp.status == 200) {
            var ajax_data = xmlHttp.responseText;
            if(ajax_data == 'OK'){
                window.location = 'index.php';
            }else{
                alert("Logout Failed.");
            }
        }
        else {
          alert("ERROR: " + xmlHttp.statusText);
      }
   }
}