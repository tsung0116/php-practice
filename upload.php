<?php
// ensure that PHP is configured to allow file uploads 
// --> In the "php.ini" file, search for the "file_uploads" directive, and set it to 'On'

$upload_dir = "uploads/";

// basename() may prevent filesystem traversal attacks;
// further validation/sanitation of the filename may be appropriate
// maybe we should use LC_TYPE to check the locale of the server?!		
$file_name = iconv("utf-8", "big5", basename($_FILES["fileToUpload"]["name"]));

if(isset($_POST["submit"])) {
    if($_FILES['fileToUpload']['error'] > 0) {
        echo "檔案上傳失敗" . "<br>";
        echo "<a href='upload.html'>重新上傳</a>";		
	} else if(file_exists($upload_dir.$file_name)){
        echo "檔案已存在，請勿重複上傳相同檔案 <br>";
        echo "<a href='upload.html'>重新上傳</a>";		
    } else {
		echo "檔案上傳中 <br>";
        $tmp_name = $_FILES['fileToUpload']['tmp_name'];
	    // 
        
	    move_uploaded_file($tmp_name, $upload_dir.$file_name);
		echo "路徑位置：" . "<a href=" . $upload_dir . $_FILES["fileToUpload"]["name"] . ">". $upload_dir . $_FILES["fileToUpload"]["name"] . "</a>";
        echo "<br>";
		echo "副檔名：" . pathinfo($upload_dir . $_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION) . "<br>";
        echo "類型：" . $_FILES['fileToUpload']['type']. "<br>";
		echo "大小：" . $_FILES['fileToUpload']['size']. "bytes <br>";
	}	
}
