<form action="./api/post.php" method="post">
<table class="ct" style="width:80%;margin:auto">
    <tr>
        <td style="width:10%">編號</td>
        <td style="width:70%">標題</td>
        <td style="width:10%">顯示</td>
        <td>刪除</td>
    </tr>
    <?php
    $total=$Post->count();
    $div=3;
    $pages=ceil($total/3);
    $now=$_GET['p']??1;
    $start=($now-1)*$div;

    $posts=$Post->all(" limit $start,$div");
    foreach($posts as $idx => $post):
    ?>
    <tr>
        <td><?=$idx+1+$start;?></td>
        <td><?=$post['title'];?></td>
        <td>
            <input type="checkbox" name="sh[]" value="<?=$post['id'];?>" <?=($post['sh']==1)?'checked':'';?>>
        </td>
        <td>
            <input type="checkbox" name="del[]" value="<?=$post['id'];?>">
            <input type="hidden" name="id[]" value="<?=$post['id'];?>">
        </td>
    </tr>
<!-- 位置 -->
<?php
endforeach;
?>

</table>

<div class="ct">
    <!-- 多複習 -->
    <?php
        if($now-1>0){
            $prev=$now-1;
            echo "<a href='?do=new&p=$prev'> < </a>";
        }

        for($i=1;$i<=$pages;$i++){
            
            $font=($i==$now)?"24px":"16px;";
            echo "<a href='?do=new&p=$i' style='font-size:$font'> $i </a>";
            
        }

        if($now+1<=0){
            $next=$now+1;
            echo "<a href='?do=new&p=$next'> > </a>";
        }
    ?>
</div>
<div class="ct">
    <input type="submit" value="確定修改">
</div>
</form>