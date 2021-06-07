<?php

require_once('navdesign.php');
?>
<!-- ==================================== Transer to product dive ========================== -->

<center>
<div   class="transfer">

<div   class="Title">
<h6>Transer To Product</h6>
</div>
<br>
<div class="dtable" >
    <table border="1px">
        <tr>
            <td style=" padding-left: 5px;font-size:12px">Send To Account ID</td>
            <td style=" padding-left: 5px;" > <input type="text" id="fname"style="height:20px;" name="fname"></td>
        </tr>
        <tr>
            <td style=" padding-left: 5px;font-size:12px">Amount</td>
            <td style=" padding-left: 5px;"> <input type="text" id="fname" style="height:20px;" name="fname"></td>
        </tr>
        <tr>
            <td style=" padding-left: 5px;font-size:12px">Your Account Password</td>
            <td style=" padding-left: 5px;"> <input type="text" id="fname" style=" height:20px;" name="fname"></td>
        </tr>
        <tr>
            <td></td>
            <td style=" padding-left: 5px;font-size:12px;height:30px;"> <input type="submit" id="fname" name="submit" style="color:white; background:green; width:110px;height:25px;" value="Send Amount"></td>
        </tr>
    </table>
</div>
</div>
</center>
</body>




<style>

.blank{
    height: 90px;
	width: 500px;
}

.transfer{

    box-shadow: 2px 2px 5px grey;
    border-radius: 5px;
	height: 200px;
	width: 500px;
}
.Title {

background:red;
border-radius: 5px;
height: 30px;
width: 495px;
}
.Title h6{
    padding:2px;
    margin:2px;
color: white;
text-align: left;
}

.dtable{
    
border-radius: 1px;
height: auto;
width: auto;
}
.dtable table{
    
    border-radius: 1px;
    height: 120px;
    width: 470px;
    }
    .dtable table tr{
    
    border-radius: 1px;
    padding: 5px 5px 5px 5px;
    }
    
</style>