
function loaded() {
    
document.getElementById('FormPizza').addEventListener("submit", function(){
    var errorMsg = "";
    
    var regex = new RegExp( /^[a-zA-Z]*$/i);
	if (document.getElementById("name").value == null || document.getElementById("name").value == "" || (!regex.test(document.getElementById("name").value))) {
    errorMsg += "\nInvalid name";
    }
    var regex = new RegExp( /^[a-zA-Z]*$/i);
	if (document.getElementById("city").value == null || document.getElementById("name").value == "" || (!regex.test(document.getElementById("city").value))) {
    errorMsg += "\nInvalid city name";
    }

    var regex = new RegExp(/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i);
    if (!regex.test(document.getElementById("emailId").value))
	{
        errorMsg += "\nInvalid email Id"; 
    }  
    var regex = new RegExp(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/i);
    if (!regex.test(document.getElementById("mob").value))
	{
        errorMsg += "\nInvalid contact number";
	}
    var regex = new RegExp(/^[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ]( )?\d[ABCEGHJKLMNPRSTVWXYZ]\d$/i);
    if (!regex.test(document.getElementById("zip").value))
	{
        errorMsg += "\nInvalid postal code";
    }
    
     
    if(errorMsg == ""){
    updateBill();
        return true;
    }else{
        alert("Error: "+errorMsg);
        return false;
    }
});
    

    
function updateBill(){
    var finalBill = 0;
    var sizeCost = 0;
    var toppingsCost = 0;
    var crustCost = 0;
    var taxValue = 1;
    var tax = document.getElementById("province");
    switch(tax.options[tax.selectedIndex].value)
    {
        case "Ontario":
            taxValue = 13;
            break;
        case "Quebec":
            taxValue = 15;
            break;
        case "Saskatchewan":
            taxValue = 10;
            break;
        case "Alberta":
            taxValue = 5;
            break;
        default:
            taxValue = 1;
            break;
    }
    
    
    var size = document.getElementById("size");
    switch(size.options[size.selectedIndex].value)
    {
        case "Small":
            sizeCost = 5;
            break;
        case "Medium":
            sizeCost = 10;
            break;
        case "Large":
            sizeCost = 15;
            break;
        case "Extra Large":
            sizeCost = 20;
            break;
        default:
            sizeCost = 0;
            break;
    }
    
    var crust = document.getElementById("crust");
    switch(crust.options[crust.selectedIndex].value)
    {
        case "Stuffed":
            crustCost = 2;
            break;
        default:
            crustCost = 0;
            break;
    }
    
    if(document.querySelectorAll('input[type="checkbox"]:checked').length != 0) {
    var toppingsCost = document.querySelectorAll('input[type="checkbox"]:checked').length - 1;
    toppingsCost *= 0.5;
    }
    finalBill = sizeCost + toppingsCost + crustCost;
    finalBill = finalBill + (finalBill*taxValue/100);
    alert("Your Final Bill Amount "+finalBill);
    document.getElementById('bill').value= finalBill;
}
    
}



window.addEventListener("load", loaded, false);
