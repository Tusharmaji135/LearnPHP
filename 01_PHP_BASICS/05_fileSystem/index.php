<?php 
// $file = ('./read.txt');
// if (file_exists($file)) {
//   echo readfile("./read.txt");
//   // copy($file,'./newfile.txt');
//   // rename("newfile.txt","renamed.txt");
//   // unlink("renamed.txt");


// }else{
//   echo "File not found";
// }
// mkdir("text")
// rmdir('text')
// echo filesize($file)
// echo filetype($file)
// $path =  realpath($file);
// echo "<pre>";
// print_r (pathinfo($path,PATHINFO_EXTENSION));
// echo "</pre>";
// echo basename($path,".txt");
// echo dirname($path)

// $content = "Hello World!";
// file_put_contents($file, $content);
// echo file_get_contents($file);

$file = fopen('./read.txt','r');
// echo fread($file, filesize("read.txt"));
// echo fgets($file);
// echo ftell($file);
// echo rewind($file);


// is function

if (is_writable("read.txt")) {
  // is_dir("read.txt")
  //
  echo "Yes";
} else {
 echo "No";
}





?>