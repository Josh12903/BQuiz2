<fieldset>
    <legend>會員登入</legend>
<form action="">
    <table>
        <tr>
            <td>登入帳號</td>
            <td>
                <input type="text" name="acc" id="acc">
            </td>
        </tr>
        <tr>
            <td>密碼</td>
            <td>
                <input type="password" name="pw" id="pw">
            </td>
        </tr>
        <tr>
            <td>
                <input type="button" value="登入" onclick='login()'>
                <input type="reset" value="清除">
            </td>
            <td>
                <a href="?do=forgot">忘記密碼</a>
                <a href="?do=reg">尚未註冊</a>
            </td>
        </tr>
    </table>
</form>
</fieldset>

<script>
    function login(){
        let user={acc:$("#acc").val(),pw:$("#pw").val()}
        // console.log("準備傳送的資料：", user);  檢查這裡！看 acc 是不是空的
        $.get("./api/chk_acc.php",user,(chkacc)=>{
            console.log("後端回傳的結果：", chkacc); // 檢查這裡！看回傳是 "0" 還是 "1"
        // ...其餘程式碼
            if(parseInt(chkacc)){
                $.get("./api/chk_pw.php",user,(chkpw)=>{
                    // console.log(chkpw)
                    if(parseInt(chkpw)){
                        if(user.acc=='admin'){
                            location.href='back.php';
                        }else{
                            location.href='index.php';
                        }
                    }else{
                        alert("密碼錯誤")
                    }
                })
            }else{
                alert("查無帳號")
            }
        })
    }
</script>