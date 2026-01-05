<!-- ya ak supper golbal variabke is ko hm ksi b jaga use kr skty h ya pre difine class h -->
 <!-- is k sth files upload kr skty h or edit wegra b kr skty h or b different different  chzain kr skty h   -->

 <?php 
 print_r($_FILES['fileUpload']);
 if($_FILES){
    $path = $_FILES['fileUpload']['name'];
    echo $path;

 }
 
 ?>