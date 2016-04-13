<a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>"><h3>Home</h3></a>

<form action="admin" method="post">
    Title Article:<br>
    <input type="text" name="title" style="width: 350px;height: 25px" value="<?php  ?>"><br>
    Content Article:<br>
    <textarea name="content" rows="10" cols="60" ><?php ?></textarea><br><br>
    Status:<br>
    <input type="radio" name="status" value="0">0
    <input type="radio" name="status" value="1">1 <br><br>
    <button type="submit" name="save" style="height: 30px;width:50px">Save</button>
    <button type="submit" name="update" style="height: 30px;width: 50px">Update</button>
</form>
