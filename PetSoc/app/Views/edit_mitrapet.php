<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Mitrapet</title>
    <style>
    body{
        background-image: url('https://telegra.ph/file/00447a4f3112c485abaa8.jpg');
    }
	a:link, a:visited {
        margin : 20px auto;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

	label,h3{
		color: white;
        font-size: 20px;
	}
    .box{
		width: 400px;
  		padding: 10px;
  		border: 5px solid white;
  		margin-top: 100px;
		background: transparent;
	}
	input{
         background: white;
         text-align: center;
         border: 2px solid #3498db;
         padding: 16px 20px;
         outline: none;
         color: black;
         border-radius: 10px;
         margin: 30px;
        }
        a,button{
            background-color: #3498db;
  color: white;
  padding: 15px;
  text-align: center;
  text-decoration: none;
        }
    </style>
</head>

<center><body>
    <form action=<?= base_url("/mitrapet/update") ?> method="post">
    <div class="box">
        <h3>EDIT Mitrapet</h3>
        <div><label>id_mitrapet : </label><input type="text" name="id_mitrapet" class="form-control"></div>
        <div><label>Nama : </label><input type="text" name="Nama" class="form-control"></div>
        <div><label>Alamat : </label><input type="text" name="Alamat" class="form-control"></div>
        <div><label>NoTelp: </label><input type="text" name="NoTelp" class="form-control"></div>
        <div><label>Treatment: </label><input type="text" name="Treatment" class="form-control"></div>
        <input type="hidden" name="id" value="<?= $mitrapet->id_mitrapet; ?>">
        <button type="submit">Update</button>

        </div>
    </form>
</body><center>

</html>
