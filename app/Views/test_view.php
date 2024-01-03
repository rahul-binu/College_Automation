


<form action="" method="post">
    <!-- Your table here -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Select</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your database records -->
            <?php foreach ($std as $row) : ?>

            
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["name"] ?></td>
                        <td><?= $row["age"] ?></td>
                        <td><input type="checkbox" name="selectedRecords[]" value="<?= $row["id"] ?>"></td>
                    </tr>
            <?php
            endforeach
            ?>
            <!-- Repeat for other records -->
        </tbody>
    </table>

    <input type="submit" value="submit">
    
    <!-- Include hidden input to pass values to checkbox2.php -->
    <?php
   foreach ($std as $row) :
            echo '<input type="hidden" name="name_' . $row["id"] . '" value="' . $row["name"] . '">';
            echo '<input type="hidden" name="age_' . $row["id"] . '" value="' . $row["age"] . '">';
   endforeach
    ?>
</form>
