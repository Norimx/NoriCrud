# NoriCrud
PHP/Mysqli Crud for rapid prototyping

### Usage
```
  <?php
  
  $query = $db->query("SELECT title FROM posts ORDER BY title DESC");
  $rowCount = $query->num_rows;  
  
  if($rowCount > 0):
          while($row = $query->fetch_assoc()): 
              echo $row[title];
          endwhile;
   endif;
   
   $db->query("UPDATE post SET title=Updated WHERE id = {ID}");

   echo $db->query("SELECT title FROM posts WHERE id = {ID}")->fetch_object()->title;

  ?>
```
