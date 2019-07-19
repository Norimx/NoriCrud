# NoriCrud
PHP/Mysqli Crud for rapid prototyping

### Usage
```php
  <?php
  //Include the config
  include_once('config.php');
  
  //Example single item
  echo $db->query("SELECT title FROM posts WHERE id = {ID}")->fetch_object()->title;
  
  //Example List
  $query = $db->query("SELECT title FROM posts ORDER BY title DESC");
  $rowCount = $query->num_rows;  
  
  if($rowCount > 0):
          while($row = $query->fetch_assoc()): 
              echo $row[title];
          endwhile;
   endif;
   
   
   //Example Table
  $query = $db->query("SELECT * FROM posts ORDER BY id ASC");
  $rowCount = $query->num_rows;  
  $fields = $query->fetch_fields();

  foreach ($fields as $field) { 
      $head .= "<th>{$field->name}</th>";
  }
  if($rowCount > 0):
          while($row = $query->fetch_assoc()): 
            $cols='';    
            foreach ($row as $col) { 
                $cols .= "<td>{$col}</td>";
            }
            $rows .= "<tr>$cols</tr>";
          endwhile;
   endif;
   echo "<table><tr>$head</tr>$rows</table>";
   
   
   
   //Example Update
   $db->query("UPDATE post SET title=Updated WHERE id = {ID}");
   
   //Example Insert
   $db->query("INSERT INTO post SET title={$title},content={$content}");

  ?>
```
