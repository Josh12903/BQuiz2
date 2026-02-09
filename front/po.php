<style>
    .po-item{
        display:block;
        margin:5px;
        /* top:;
        left:; */
    }
</style>
<div>
    目前位置：首頁 > 分類網誌 > <span id="nav">健康新知</span>
</div>
<fieldset style="width:20%;padding: 10px;vertical-align:top;display:inline-block">
    <legend>分類網誌</legend>
    <a href="#" class="po-item" data-type="1">健康新知</a>
    <a href="#" class="po-item" data-type="2">菸害防制</a>
    <a href="#" class="po-item" data-type="3">癌症防治</a>
    <a href="#" class="po-item" data-type="4">慢性病防治</a>
</fieldset>
<fieldset style="width:70%;padding: 10px;display:inline-block">
    <legend>文章列表</legend>
    <div class="list"></div>
    <div class="content"></div>
</fieldset>

<script>
    $(".po-item").on("click",function(){
        let item=$(this).text();
        $("#nav").text(item);
            let type=$(this).data('type')
            console.log(type)

        $.get("./api/get_list.php",{type},(list)=>{
            $(".list").html(list)
        })
    })
</script>