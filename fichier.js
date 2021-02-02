/*function form(){
	 var oui = document.forms["contact"]["message"].value;

	alert(oui)

}*/

function good(){
	var message = document.forms["contact"]["message"].value;

		if (message == "" || message == null){
			alert("Veuillez remplir le champ");
			return false;
		}		
}