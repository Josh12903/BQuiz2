<?php include_once "db.php";
// after news page
// 註解 或 再聽一遍
foreach($_POST['id'] as $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        $POST->del($id);
    }else{
        $post=$Post->find($id);
        $post['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
        $Post->save($post);
    }
}

to("../back.php?do=news");