<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
		<input type="file" name="avatar"/>
		<input type="submit" name="uploadclick" value="Upload"/>
	</form>
    <?php // Xử Lý Upload

    // Nếu người dùng click Upload
    if (isset($_POST['uploadclick']))
    {
        // Nếu người dùng có chọn file để upload

    	if (isset($_FILES['avatar']))
    	{
    		// 
    		// var_dump($_FILES['avatar']);
    		// exit;
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
    		if ($_FILES['avatar']['error'] > 0)
    		{
    			echo 'File Upload Bị Lỗi';
    		}
    		else{
    			// - cho phep upload file < 1mb, 1t = 1024gb, 1gb = 1024mb, 1mb = 1024kb, 1kb = 1024byte
    		
    			if ($_FILES['avatar']['size'] > 1048576 ) {
    				echo 'FIle Upload Lớn hơn 1mb.';
                    return;
    			}
    			// - cho phep file upload len chi la hinh anh:
    			//   jpg, png, jpeg

                $mang_tam = explode('.', $_FILES['avatar']['name']); 
                echo "<pre>";
               // var_dump($mang_tam[1]);
                $kt = array('jpg','png','jpeg','JPG','PNG','JPEG');
                // $duoifile = array();
                // array_push($duoifile, $mang_tam[1]);
                $result;
                foreach ($mang_tam as $value) 
                {
                   if (in_array($value, $kt))
                   {
                         move_uploaded_file($_FILES['avatar']['tmp_name'], './upload/'.$_FILES['avatar']['name']);
                         $result = 'File Uploaded';
                         break;

                   }else
                   {
                         $result =  "File khong dung dinh dang";
                   }
                }

                echo $result;
    		}
    	}
    	else{
    		echo 'Bạn chưa chọn file upload';
    	}
    }
    ?>
</body>
</html>

