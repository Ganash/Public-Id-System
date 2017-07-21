function formvalidation1()
{


	var fna=document.personals.fname;
	var lna=document.personals.lname;
	var ema=document.personals.email;
	var phoenum=document.personals.phnnum;
	var agew=document.personals.age;
	var geender=document.personals.gender;
	var bloodgrp=document.personals.bldgrp;
	var countery=document.personals.cntry;
	var staate=document.personals.stat;
	var citti=document.personals.citi;
	var piinncod=document.personals.pncod;
	var faathernam=document.personals.fathrnam;
	var moothernam=document.personals.mothrnam;
	var addrreess=document.personals.addres;
	var edducation=document.personals.education;

	if(fna_validation(fna,3,10))
	{
		if(lna_validation(lna,1,10))
		{
			if(ema_validation(ema))
			{
				if(phoenum_validation(phoenum))
				{
					if(agew_validation(agew,1,100))
					{
						if(geender_validation(geender))
						{
						if(bloodgrp_validation(bloodgrp))
						{
							if(countery_validation(countery))
							{
								if(staate_validation(staate))
								{
									if(citti_validation(citi))
									{
										if(piinncod_validation(piinncod))
										{
											if(faathernam_validation(faathernam))
											{
												if(moothernam_validation(moothernam))
												{
													if(addrreess_validation(addrreess))
													{
														if(edducation_validation(edducation))
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}

}
	return false;
}


function fna_validation(fna,mx,my)
{

fna_length=fna.value.length;
var letters = /^[A-Za-z]+$/;  
if(fna.value.match(letters))  
{  
	if(fna_length!=0 || fna_length<my || fna_length>mx)
	{

		return true;
	}  
}  
else  
{  
alert('Username must have alphabet characters only');  
fna.focus();  
return false;  
}  

function lna_validation(lna,mx,my)
{

lna_length=lna.value.length;
var letters = /^[A-Za-z]+$/;  
if(lna.value.match(letters))  
{  
	if(lna_length!=0 || lna_length<my || lna_length>mx)
	{

		return true;
	}  
}  
else  
{  
alert('Username must have alphabet characters only');  
lna.focus();  
return false;  
}  



function addrreess_validation(addrreess)
{   
var letters = /^[0-9a-zA-Z]+$/;  
if(addrreess.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('User address must have alphanumeric characters only');  
addrreess.focus();  
return false;  
}  
} 

function bloodgrp_validation(bloodgrp)
{

	if(bloodgrp.value == "default2")  
{  
alert('Select your bloodgrp from the list');  
bloodgrp.focus();  
return false;  
}  
else  
{  
return true;  
}  
}

function phoenum_validation(phoenum)
{
var numbers = /^[0-9]+${10}/;
if(phoenum.value.match(numbers))
{
	return true;
}
else{
	alert("Phone Numbers Should be Numbers");
	phoenum.focus();
	return false;
}

}


function countery_validation(countery)
{

if(countery.value == "default3")  
{  
alert('Select your Country from the list');  
countery.focus();  
return false;  
}  
else  
{  
return true;  
}  

}

function geender_validation(geender)
{


if(geender.value == "default1")  
{  
alert('Select your Gender from the list');  
geender.focus();  
return false;  
}  
else  
{  
return true;  
}  

}

function agew_validation(agew,mx,my)
{

	if(agew_length!=0 || agew_length<my || agew_length>mx)
	{

		return true;
	
	}
	else

	{

alert('Age Should be Numbers only');  
agew.focus();  
return false;

	}

}

function piinncod_validation(piinncod)
{


var numbers = /^[0-9]+${6}/;
if(piinncod.value.match(numbers))
{
	return true;
}
else{
	alert("Pincode Should be Numbers");
	piinncod.focus();
	return false;
}


}