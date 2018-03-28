////////////////////////COULEURS////////////////////////

function surligne(champ, erreur){ //rouge
 if(erreur){
  champ.style.backgroundColor = "#f88";
}
else{
  champ.style.backgroundColor = "";
}
}

function surligne2(champ, erreur){ //jaune
 if(erreur){
  champ.style.backgroundColor = "#ff8";
}
else{
  champ.style.backgroundColor = "";
}
}

function surligne3(champ, erreur){ //vert
 if(erreur){
  champ.style.backgroundColor = "";
}
else{
  champ.style.backgroundColor = "#8f8";
}
}

////////////////////////CONNEXION////////////////////////

////////////////////////IDENTIFIANT////////////////////////
function name_on_key_up(champ){
 if(champ.value.length < 2 || champ.value.length > 20){
  surligne(champ, true);
  return false;
}
else{
  surligne(champ, false);
  return true;
}
}
////////////////////////MOT DE PASSE////////////////////////
function password_on_key_up(champ){
  if(champ.value != "walou"){
    surligne(champ, true);
    return false;
  }
  else{
    surligne(champ, false);
    return true;
  }
}
////////////////////////SUBMIT////////////////////////
function connexion(f){
 var pseudoOK = name_on_key_up(f.header_identifiant);
 var MDPOK = password_on_key_up(f.header_password);
 if(pseudoOK==true && MDPOK==true){
  alert(" ÇA MARCHE !!!");
  return true;
}
else{
  alert("Veuillez remplir correctement les champs obligatoires");
  return false;
}
}   
////////////////////////CREATION////////////////////////

////////////////////////PSEUDO////////////////////////
function verifPseudo(champ){
 if(champ.value.length < 2 || champ.value.length > 20){
  surligne(champ, true);
  champ = false;
}
else{
  surligne(champ, false);
  champ = true;
}
if (champ == true) {
  document.getElementById('check_ok_name').style.display = 'flex';
  document.getElementById('check_pas_ok_name').style.display = 'none';
} else {
  document.getElementById('check_pas_ok_name').style.display = 'flex';
  document.getElementById('check_ok_name').style.display = 'none';
}
return champ;
}
////////////////////////DATE DE NAISSANCE////////////////////////
function verification_date(champ) {
  if (champ.value != "") {
    var today = new Date();
    var birth = new Date(champ.value);
    var hundred_year = (today.getFullYear() - 120);
    var hundred_month = (today.getMonth());
    var hundred_day = (today.getDate());
    var hundred = new Date(hundred_year, hundred_month, hundred_day);
    if ((birth < today && birth > hundred)) {
      surligne(champ, false);
      document.getElementById('check_ok_date').style.display = 'flex';
      document.getElementById('check_pas_ok_date').style.display = 'none';
      return true;
    }
    else {
      surligne(champ, true);
      document.getElementById('check_pas_ok_date').style.display = 'flex';
      document.getElementById('check_ok_date').style.display = 'none';
      return false;
    }
  }
  else{
    surligne(champ, true);
    document.getElementById('check_pas_ok_date').style.display = 'flex';
    document.getElementById('check_ok_date').style.display = 'none';
    return false;
  }
}
////////////////////////ADRESSE MAIL////////////////////////
function verifMail(champ){
 var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
 if(!regex.test(champ.value)){
  surligne(champ, true);
  champ = false;
}
else{
  surligne(champ, false);
  champ = true;
}
if (champ == true) {
  document.getElementById('check_ok_mail').style.display = 'flex';
  document.getElementById('check_pas_ok_mail').style.display = 'none';
}
else{
  document.getElementById('check_pas_ok_mail').style.display = 'flex';
  document.getElementById('check_ok_mail').style.display = 'none';
}
return champ;
}
////////////////////////MOT DE PASSE////////////////////////
function verifMDP(champ){

     if(champ.value.length < 8 || champ.value.length > 25) //rouge
     {
      surligne(champ, true);
      champ = false;
    }
   else if (champ.value.length >= 8 && champ.value.length < 15) //jaune
   {
    surligne2(champ, true);
    champ = true;
  }
   else{    //vert
    surligne3(champ, false); 
    champ = true;
  }
  if (champ == true) {
    document.getElementById('check_ok_password').style.display = 'flex';
    document.getElementById('check_pas_ok_password').style.display = 'none';
  }
  else if(champ == false) {
    document.getElementById('check_pas_ok_password').style.display = 'flex';
    document.getElementById('check_ok_password').style.display = 'none';
  }
  return champ;
}
////////////////////////CONFIRMATION MOT DE PASSE////////////////////////
function verifConfiMDP(champ){
	var password = document.getElementById('password');  //retrouve l'ID du mot de passe
  var password_value = password.value;                  //prend la valeur du mot de passe grace à l'ID
  var password_confirm_value = champ.value;            //prend la veuleur du mot de passe à comparer (this)
  var password_confirm_test = 0; 
  if (password_confirm_value != password_value || password_confirm_value == ''){
    password_confirm_test = false;                //validation fausse
    surligne(champ, true);
    document.getElementById('password_confirm_test').innerHTML = false;
  } 
  else {
    password_confirm_test = true;
    surligne(champ, false);
    document.getElementById('password_confirm_test').innerHTML = true;
  }
  if (password_confirm_test == false) {
    document.getElementById('check_pas_ok_password_confirm').style.display = 'flex';
    document.getElementById('check_ok_password_confirm').style.display = 'none';
  } else {
    document.getElementById('check_pas_ok_password_confirm').style.display = 'none';
    document.getElementById('check_ok_password_confirm').style.display = 'flex';
  }
  return password_confirm_test;
}
////////////////////////SEXE////////////////////////
function verifSexe(champ){
	var x = document.getElementById("list_select").value;
	if( x == "homme" || x == "femme" || x == "autre"){
		champ = true;
	}
 else{
   champ = false;
 }
 if (champ == false) {
  document.getElementById('check_pas_ok_list_select').style.display = 'flex';
  document.getElementById('check_ok_list_select').style.display = 'none';
} 
else{
  document.getElementById('check_pas_ok_list_select').style.display = 'none';
  document.getElementById('check_ok_list_select').style.display = 'flex';
}
return champ;
}
////////////////////////CONDITIONS D'UTILISATIONS////////////////////////
function checkbox_on_click () {
  if (checkbox.checked) {
    checkbox_test = true;
    document.getElementById('checkbox_test').innerHTML = true;
  }
  else{
    checkbox_test = false;
    document.getElementById('checkbox_test').innerHTML = false;
    document.getElementById('check_pas_ok_checkbox').style.display = 'flex';
  }
  if (checkbox_test == true) {
    document.getElementById('check_ok_checkbox').style.display = 'flex';
    document.getElementById('check_pas_ok_checkbox').style.display = 'none';
  }
  else{
    document.getElementById('check_pas_ok_checkbox').style.display = 'flex';
    document.getElementById('check_ok_checkbox').style.display = 'none';
  }
  return checkbox_test;
}
////////////////////////SUBMIT////////////////////////
function soumettre(f){
 var pseudoOK = verifPseudo(f.name);
 var mailOK = verifMail(f.mail);
 var MDPOK = verifMDP(f.password);
 var confiOK = verifConfiMDP(f.password_confirm);
 var cguOK = checkbox_on_click(f.checkbox);
 var sexeOK = verifSexe(f.list_select);
 var dateOK = verification_date(f.date);
 if(pseudoOK==true && mailOK==true && MDPOK==true && confiOK==true && cguOK==true && sexeOK==true && dateOK==true){
  alert(" ÇA MARCHE !!!");
  return true;
}
else{
  alert("Veuillez remplir correctement les champs obligatoires");
  return false;
}
}

////////////////////////API MAPS////////////////////////
function maPosition(position){
var infopos = "Position déterminée :\n";
infopos+= "Latitude : "+position.coords.latitude +"\n";
infopos+= "Longitude : "+position.coords.longitude +"\n";
infopos+= "Altitude : "+position.coords.altitude +"\n";
document.getElementById("infoposition").innerHTML = infopos;
}

function initMap(){
  var map= new google.maps.Map(document.getElementById('map'),{
    center:{lat:44.9333, lng:4.9},
    zoom:12
  });
}

