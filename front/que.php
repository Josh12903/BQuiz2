<fieldset>
    <legend>目前位置：首頁 > 問卷調查區</legend>

    <table style="width:90%;margin:auto">
        <tr class="ct">
            <td>編號</td>
            <td style='width:70%'>問卷總數</td>
            <td style=''>投票總數</td>
            <td style=''>結果</td>
            <td style=''>狀態</td>
        </tr>
        <?php
            $ques=$Que->all();
            foreach($ques as $idx => $que):
        ?>
        <tr>
            <td><?=$idx+1;?></td>
            <td><?=$que['text'];?></td>
            <td><?=$que['vote'];?></td>
            <td>
                <a href="">結果</a>
            </td>
            <td>
                <?php
                    if(isset($_SESSION['login'])){
                        echo "<a href='#'>參與投票</a>";
                    }else{
                        echo "請先登入";
                    }
            ?>
            </td>
        </tr>
    </table>
</fieldset>