function userConfirmationAlert(message)
{

	 var whatToReturn = true;
     if (!confirm(message)) 
	 {
	   whatToReturn = false;
	 }
	 return (whatToReturn);
}


function checkAll(field)
{
        for (i = 0; i < field.length; i++)
        field[i].checked = true ;
}

function uncheckAll(field)
{
        for (i = 0; i < field.length; i++)
        field[i].checked = false ;
}


function openNewModalWindow(form1) {    

var address = form1.url.value;   
var option = "toolbar=" + form1.toolbar.value +",location=" + form1.location.value +",directories=" + form1.directories.value +",status=" + form1.status.value +",menubar="+ form1.menubar.value +",scrollbars=" + form1.scrollbars.value  +",resizable=" + form1.resizable.value +",width="+ form1.width.value +",height=" + form1.height.value;
var win4 = window.open(address, form1.windowName.value,option);
}


function openNewModalWindowAndCloseParent(form1,window1) {    

var address = form1.url.value;   
var option = "toolbar=" + form1.toolbar.value +",location=" + form1.location.value +",directories=" + form1.directories.value +",status=" + form1.status.value +",menubar="+ form1.menubar.value +",scrollbars=" + form1.scrollbars.value  +",resizable=" + form1.resizable.value +",width="+ form1.width.value +",height=" + form1.height.value;
var win4 = window.open(address, form1.windowName.value,option);

if (window1.name!="mainWindow")
{
   window1.close();
}
}