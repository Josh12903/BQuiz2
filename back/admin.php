<fieldset>
    <legend>帳號管理</legend>
    <form action="./api/admin.php" method="post">
        <table>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <?php
            $members=$Mem->all();
            foreach($members as $member):
            ?>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
        <?php
        endforeach;
        ?>
    </form>
</fieldset>
<script>
    
</script>