update form backup



<div class="container">
        <form action="actions/a_create.php" method="post">
        <table cellspacing="0" cellpadding="0" class="table">
            
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" placeholder="Name" value="<?php echo $data['name'] ?>" /></td>
            </tr>
            <tr>
                <th>Date</th>
                <td><input type="text" name="event_date" placeholder="Date" value="<?php echo $data['event_date'] ?>" /></td>
            </tr>
            <tr>
                <th>description</th>
                <td><input type="text" name="description" placeholder="Description" value="<?php echo $data['description'] ?>" /></td>
            </tr>
            <tr>
                <th>Image</th>
                <td><input type="text" name="image" placeholder="Image Link" value="<?php echo $data['image'] ?>" /></td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td><input type="text" name="capacity" placeholder="Capacity" value="<?php echo $data['capacity'] ?>" /></td>
            </tr> 
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" placeholder="Email" value="<?php echo $data['email'] ?>" /></td>
            </tr> 
            <tr>
                <th>Phone</th>
                <td><input type="text" name="phone" placeholder="Phone" value="<?php echo $data['phonen'] ?>" /></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="street" placeholder="Street and number" value="<?php echo $data['street'] ?>" /></td>
                <td><input type="text" name="ZIP" placeholder="ZIP" value="<?php echo $data['ZIP'] ?>" /></td>
                <td><input type="text" name="city" placeholder="City" value="<?php echo $data['city'] ?>" /></td>
            </tr>
            <tr>
                <th>URL</th>
                <td><input type="text" name="url" placeholder="URL" value="<?php echo $data['URL'] ?>" /></td>
            </tr> 
            <tr>
                <th>Type</th>
                <td><input type="text" name="type" placeholder="type" value="<?php echo $data['type'] ?>" /></td>
            </tr> 
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit" class="btn">Save Changes</button></td>
                <td><a href="home.php"><button type="button" class="btn">Back</button></a></td>
            </tr>
        </table>
    </form>

    <table class="table">
        <caption>Types for reference</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>type</th>
            </tr>
        </thead>
        <tbody>
            <?php  if($result->num_rows > 0) { //für admin
                    while($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>".$row['type_id']."</td>
                            <td>".$row['type']."</td>
                        </tr>";
                    }
                }else {
                    echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
                }
                ?>
        </tbody>
    </table>
    </div>