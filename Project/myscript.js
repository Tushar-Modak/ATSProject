function validate_func()
{
	var txtfirstname = document.getElementById('firstname').value;
	var txtlastname = document.getElementById('lastname').value;
	var txtemail = document.getElementById('email').value;
	var txtusername = document.getElementById('username');
	var txtpassword = document.getElementById('password').value;
	var txtconpassword = document.getElementById('conpassword');
	alert.("hello");
	var valid = true;
	var errMsg = '';
	var cnt = 0;
	for(var i=1; i<txtemail.length();i++)
	{
		if(txtemail[i]=='@'&&cnt==0)
		{
			cnt++;
			i++;
		}
		else if(cnt==1&&txtemail[i]=='.'&&(i+1!=txtemail.length())
		{
			cnt++;
		}
	}
	if(cnt<2)
	{
		document.getElementById(erroremail).innerHTML("*Email Is Not Valid");
		return false;
	}

	if(txtName == '')
	{
		errMsg += 'Please input your name<br/>';
		valid = false;
		//alert('Please input your name');
		//return false;
	}
	if(txtEmail == '')
	{
		//document.getElementById('msg').innerHTML = 'Email cannot be empty';
		//return false;
		errMsg += 'Email cannot be empty<br/>';
		valid = false;
	}
	if(txtAge == '')
	{
		//document.getElementById('msg').innerHTML = 'Age cannot be empty';
		//return false;
		errMsg += 'Age cannot be empty<br/>';
		valid = false;
	}
	if(! agreeChkBox.checked)
	{
		//alert('please agree our terms and conditions');
		//return false;
		errMsg += 'Please agree to our terms and conditions<br/>';
		valid = false;
	}

	if(!valid)
	{
		//document.getElementById('msg').innerHTML = errMsg;
		return false;
	}
	
}