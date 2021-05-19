<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="fname">Enter your first name: </label>
        <input type="text" id="name" size="30">
        <br><br>
        <label for="lname">Enter your last name: </label>
        <input type="text" id="lname" size="30">
        <input type="submit" value="Save" onclick="save();">
        <input type="submit" value="insert" onclick="insert();">
        <input type="submit" value="Delete" onclick="_delete();">
    </form>
    <br><br><br>
    <table id="data_table">

        <tr><th>First name</th><th>Last name</th></tr>
        <tr><td>John</td><td>Smith</td></tr>
        <tr><td>Jjhgv</td><td>Sjkhggh</td></tr>
        <tr><td>jbvn</td><td>Skjhg</td></tr>
    </table>
    <script>
        var table = document.getElementById('data_table'),rIndex;
        var fname = document.getElementById('fname');
        var lname = document.getElementById('lname');
        function selectedRow(){
            for(var i=0;i<table.rows.length;i++){
                table.rows[i].onclick=function(){
                    rIndex= this.rowIndex;
                    // console.log(rIndex);
                    fname.value = this.cells[0].innerHTML;
                    lname.value = this.cells[1].innerHTML;
                }
            }
        }
        selectedRow();
        function save(){
            table.rows[rIndex].cells[0].innerHTML=fname.value;
            table.rows[rIndex].cells[1].innerHTML=lname.value;
        }
        function insert(){
            var newData = table.insertRow(1);
            var cell0 = newData.insertCell(0);
            var cell1 = newData.insertCell(1);

            cell0.innerHTML = fname.value ; 
            cell1.innerHTML = lname.value ; 
        }
        insert();
        function _delete(){
            table.deleteRow(rIndex);
            fname.value = "";
            lname.value = "";
        }
        _delete();
    </script>
</body>
</html>