<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="id"  value="" />
            <input type="text" name="name" value="" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" value="" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <select name="sclass">
            <option value="" selected disabled>Select Class</option>
            <option value="1">BCA</option>
            <option value="2">BSC</option>
            <option value="3">B.TECH</option>
        </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" value="" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
</div>
</div>
</body>
</html>
