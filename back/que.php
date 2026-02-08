<fieldset>
    <legend>新增問卷</legend>
    <form action="./api/que.php" method="post">
        <div>
            <label for="">問卷名稱</label>
            <input type="text" name="subject">
        </div>
        <div id="options">
        <div>
            <label for="">選項</label>
            <input type="text" neme="opt[]">
            <input type="button" value="更多" onclick="more()">
        </div>
        </div>
        <input type="submit" value="新增">
        <input type="reset" value="清空">
    </form>
</fieldset>

<!-- name 記得改 -->
<script>
    function more(){
        let opt=`<div>
                <label for="">選項</label>
                <input type="text" name="opt[]">
            </div>`
        $("#options").prepend(opt);
    }
</script>