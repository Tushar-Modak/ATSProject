<!DOCTYPE html>
<html>
<head>

	<title>change</title>
	

	<script type="text/javascript">
	var flag=0;
	function changeImage1()

	{   
		var like=document.getElementById('0');

		if(flag == 0)
		{
			like.src = "Fav/liked.png";
			flag=1;
		}
		else
		{
        	like.src = "Fav/like.png";
        	flag=0;
		}

	}
	</script>
</head>
<body>
<img src="Fav/like.png"  id="0" onclick="changeImage1() ">






</body>
</html>